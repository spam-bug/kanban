<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    class="antialiased font-sans text-slate-700"
    x-data="{
        sidebar: {
            show: window.innerWidth > 996,
            toggle() {
                this.show = ! this.show
            }
        }
    }"
    x-on:resize.window="sidebar.show = window.innerWidth > 996"
>
    <header class="border-b">
        <div class="w-72 p-2 flex items-center justify-between border-r">
            <x-application-logo class="h-10" />

            <x-button variant="ghost" x-on:click="sidebar.toggle()">
                <x-icon.menu />
            </x-button>
        </div>
    </header>

    <nav
        class="w-72 h-[calc(100vh-56px)] mt-[56px] border-r overflow-y-auto fixed inset-0 z-10"
        x-show="sidebar.show"
        x-cloak
        x-transition:enter="transition ease duration-300"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
    >
        <div
            class="border-b"
            x-data="{ expanded: false }"
        >
            <button
                x-on:click="expanded = ! expanded"
                class="w-full flex items-center justify-between p-2"
            >
                <div class="flex items-center gap-2">
                    <img
                        src="{{ auth()->user()->photo() }}"
                        alt="profile photo"
                        class="w-86 h-6 rounded"
                    >

                    <p class="font-medium">{{ auth()->user()->name() }}</p>
                </div>

                <x-icon.chevron-down
                    class="transition-all duration-300"
                    x-bind:class="{'rotate-180': expanded}"
                />
            </button>

            <div
                class="border-t"
                x-show="expanded"
                x-collapse.duration.300ms
            >
                <div class="flex gap-2 p-2 border-b">
                    <x-button variant="outline" class="w-full">
                        <x-icon.settings />
                        Settings
                    </x-button>

                    <x-button variant="outline" class="w-full">
                        <x-icon.group-add />
                        Invite members
                    </x-button>
                </div>


                <div>
                    <p class="text-xs text-gray-500 ml-2 mt-1">Switch workspace</p>

                    <div class="space-y-1 py-1">
                        @foreach (auth()->user()->workspaces as $workspace)
                            <button class="w-full rounded flex items-center justify-between px-4 py-1 text-sm hover:bg-gray-100 focus:bg-gray-100">
                                {{ $workspace->name }}

                                @if ($workspace->default)
                                    <x-icon.check />
                                @endif
                            </button>
                        @endforeach
                    </div>

                    <div class="border-t py-1 space-y-1">
                        <button class="w-full rounded flex items-center px-4 py-1 text-sm hover:bg-gray-100 focus:bg-gray-100">
                            <x-icon.add />
                            Create workspace
                        </button>

                        <button class="w-full rounded flex items-center px-4 py-1 text-sm hover:bg-gray-100 focus:bg-gray-100">
                            <x-icon.logout />
                            Log Out
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="flex items-center justify-between px-2 py-1">
                <p class="text-xs font-medium text-gray-500">{{ auth()->user()->defaultWorkspace()->name }}</p>
            </div>

            <livewire:board-list />
        </div>
    </nav>

    <main
        class="transtion-all duration-300 ease lg:ml-72"
        x-bind:class="{'lg:ml-72': sidebar.show}"
    >
        {{ $slot }}
    </main>

    <livewire:dialog />
</body>
</html>

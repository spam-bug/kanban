@props(['size' => 'md'])

@php
    $baseClass = 'w-full absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded ';

    $sizeClass = match ($size) {
        'sm' => 'max-w-sm',
        'md' => 'max-w-md',
        'lg' => 'max-w-lg',
        'xl' => 'max-w-xl',
        '2xl' => 'max-w-2xl',
        default => 'max-w-md',
    };

    $dialogClass = $baseClass . $sizeClass;
@endphp

<div
    class="w-full h-screen fixed inset-0 z-50"
    x-data="{
        state: @entangle('state').live,

        open({component, arguments}) {
            this.state.show = true;
            this.state.component = component;
            this.state.arguments = arguments;
        },

        init() {
            Livewire.on('dialog:open', ({component, arguments = {}}) => {
                this.state.show = true;
                this.state.component = component;
                this.state.arguments = arguments;
            });

            Livewire.on('dialog:close', () => {
                this.state.show = false;
            });
        }
    }"
    x-show="state.show"
    x-cloak
    x-transition
>
    <div class="bg-black/25 h-full"></div>

    <div
        class="{{ $dialogClass }}"
    >
        {{ $slot }}
    </div>
</div>

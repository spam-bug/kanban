<div>
    <p class="text-xs text-gray-500 ml-2 mt-1">Switch workspace</p>

    <div class="space-y-1 py-1">
        @foreach ($workspaces as $workspace)
            <button wire:click="switch('{{ $workspace->id }}')" class="w-full rounded flex items-center justify-between px-4 py-1 text-sm hover:bg-gray-100 focus:bg-gray-100">
                {{ $workspace->name }}

                @if ($workspace->default)
                    <x-icon.check />
                @endif
            </button>
        @endforeach
    </div>
</div>

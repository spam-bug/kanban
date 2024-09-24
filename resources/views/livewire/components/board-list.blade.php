<div>
    <div class="flex items-center justify-between px-2 py-1">
        <p class="text-xs font-medium text-gray-500">{{ auth()->user()->defaultWorkspace()->name }}</p>
    </div>

    @if ($boards->isNotEmpty())
        <div class="p-2 space-y-1">
            @foreach ($boards as $board)
                <a
                    href="{{ route('board', ['workspace' => auth()->user()->defaultWorkspace(), 'board' => $board]) }}"
                    class="block w-full px-2 py-1 rounded text-sm hover:bg-gray-100 focus:bg-gray-100"
                >
                    {{ $board->name }}
                </a>
            @endforeach
        </div>
    @endif

    <div class="p-2 border-t">
        <x-button
            variant="outline"
            class="w-full"
            wire:click="$dispatch('dialog:open', {component: 'add-board'})"
        >
            Add board
        </x-button>
    </div>
</div>

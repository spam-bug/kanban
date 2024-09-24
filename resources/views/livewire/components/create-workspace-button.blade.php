<div>
    <button
        class="w-full rounded flex items-center px-4 py-1 text-sm hover:bg-gray-100 focus:bg-gray-100"
        wire:click="$dispatch('dialog:open', {component: 'create-workspace'})"
    >
        <x-icon.add />
        Create workspace
    </button>
</div>

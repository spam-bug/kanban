<div>
    <form wire:submit="save">
        <div class="px-4 py-2 border-b">
            <h6 class="text-lg font-medium">Create new board</h6>
        </div>

        <div class="p-4 border-b">
            <x-form.label for="name">Board Name</x-form.label>
            <x-form.input type="text" wire:model="name" />
            <x-form.error for="name" />
        </div>

        <div class="px-4 py-2 flex justify-end gap-2">
            <x-button
                variant="outline"
                type="button"
                wire:click.prevent="$dispatch('dialog:close')"
            >
                Cancel
            </x-button>
            <x-button variant="primary">
                Save

                <x-spinner wire:loading wire:target="save" />
            </x-button>
        </div>
    </form>
</div>

<x-dialog>
    @if(!empty($state->component))
        <livewire:dynamic-component :is="$state->component" wire:key="{{ Str::random(12) }}" />
    @endif
</x-dialog>

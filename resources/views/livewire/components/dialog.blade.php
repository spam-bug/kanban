<x-dialog>
    @if(!empty($state->component))
        <livewire:dynamic-component :is="$state->component" lazy="true" />
    @endif
</x-dialog>

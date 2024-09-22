<label
    x-data="{
        checkbox: {
            id: @js($attributes->get('id')) ?? $id('checkbox'),
        }
    }"
    x-bind:for="checkbox.id"
    class="text-sm flex items-center gap-1"
>
    <input
        type="checkbox"
        x-bind:id="checkbox.id"
        class="accent-yellow-400 w-4 h-4"
    />
    Remember me?
</label>

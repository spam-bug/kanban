<div
    x-data="{
        password: {
            show: false,
            toggle () {
                this.show = !this.show
            }
        }
    }"
    class="relative"
>
    <x-form.input
        x-bind:type="password.show ? 'text' : 'password'"
        {{ $attributes }}
    />

    <button
        x-on:click="password.toggle()"
        type="button"
        tabindex="-1"
        class="flex items-center absolute right-4 top-1/2 -translate-y-1/2 focus:outline-none"
    >
        <x-icon.visibility x-show="!password.show" x-cloak />
        <x-icon.visibility-off x-show="password.show" x-cloak />
    </button>
</div>

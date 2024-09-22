<x-authentication-card wire:submit="attempt">
    <div>
        <x-form.label for="email">
            Email Address
        </x-form.label>

        <x-form.input
            type="email"
            id="email"
            wire:model="form.email"
        />

        <x-form.error for="form.email" />
    </div>

    <div class="mt-4">
        <x-form.label for="password">
            Password
        </x-form.label>

        <x-form.password
            id="password"
            wire:model="form.password"
        />

        <x-form.error for="form.password" />
    </div>

    <div class="mt-2 flex items-center justify-between">
        <x-form.checkbox
            label="Remember me?"
            wire:model="form.remember"
        />

        <x-link>Forgot password?</x-link>
    </div>

    <x-button variant="primary" class="w-full mt-4">Log In</x-button>

    <p class="text-sm text-center">Don't have an account?<x-link>Register</x-link></p>
</x-authentication-card>

<x-authentication-card wire:submit="attempt">
    <div>
        <x-form.label for="firstname">
            First Name
        </x-form.label>

        <x-form.input
            type="text"
            id="firstname"
            wire:model="form.first_name"
        />

        <x-form.error for="form.first_name" />
    </div>

    <div>
        <x-form.label for="lastname">
            Last Name
        </x-form.label>

        <x-form.input
            type="text"
            id="lastname"
            wire:model="form.last_name"
        />

        <x-form.error for="form.last_name" />
    </div>

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

    <x-button variant="primary" class="w-full mt-4">
        Register

        <x-spinner wire:loading wire:target="attempt" />
    </x-button>

    <p class="text-sm text-center">Alreay have an account?<x-link href="{{ route('login') }}" wire:navigate>Log in</x-link></p>
</x-authentication-card>

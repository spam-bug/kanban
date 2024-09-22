<form
    {{ $attributes->class(['w-full max-w-sm bg-white rounded-lg p-4 sm:p-6']) }}
>

    <x-application-logo class="mx-auto h-20" />

    <div class="space-y-4">
        {{ $slot }}
    </div>
</form>

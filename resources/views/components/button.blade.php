@props(['variant'])


@php
    $baseClass = 'px-4 py-2 flex items-center justify-center font-medium rounded-lg ';

    $variantClass = match ($variant) {
        'primary' => 'text-black bg-yellow-400 ',
        default => '',
    };

    $class = $baseClass . $variantClass;
@endphp


@if ($attributes->has('href'))
    <a
        {{ $attributes->class([$class]) }}
    >
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->class([$class]) }}
    >
        {{ $slot }}
    </button>
@endif

@props(['variant'])


@php
    $baseClass = 'flex items-center justify-center border gap-2 rounded text-sm font-medium whitespace-nowrap ';

    $isIconOnly = trim($slot) === '<span class="material-symbols-outlined"></span>';

    $iconPadding = $isIconOnly ? 'p-2' : 'px-4 py-2';

    $variantClass = match ($variant) {
        'primary' => 'text-black bg-yellow-400 border-yellow-400 ',
        'ghost' => 'border-transparent hover:bg-gray-100 focus:bg-gray-100 ',
        'outline' => 'hover:bg-gray-100 focus:bg-gray-100 ',
        default => '',
    };

    $class = $baseClass . $variantClass . $iconPadding;
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

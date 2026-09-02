@props([
    'variant' => 'primary',
    'href' => null,
    'type' => 'button',
    'icon' => null,
    'iconPosition' => 'start',
])

@php
    $classes = 'btn btn--' . $variant;
    if ($icon) $classes .= ' btn--icon';
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon && $iconPosition === 'start')
            <img src="{{ asset('assets/icons/' . $icon) }}" alt="" width="14" height="14" loading="lazy">
        @endif
        {{ $slot }}
        @if($icon && $iconPosition === 'end')
            <img src="{{ asset('assets/icons/' . $icon) }}" alt="" width="14" height="14" loading="lazy">
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon && $iconPosition === 'start')
            <img src="{{ asset('assets/icons/' . $icon) }}" alt="" width="14" height="14" loading="lazy">
        @endif
        {{ $slot }}
        @if($icon && $iconPosition === 'end')
            <img src="{{ asset('assets/icons/' . $icon) }}" alt="" width="14" height="14" loading="lazy">
        @endif
    </button>
@endif

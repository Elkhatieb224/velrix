@props(['heading', 'highlight' => null, 'subtitle' => null])

<div {{ $attributes->merge(['class' => 'section-title', 'data-aos' => 'fade-up']) }}>
    <h2 class="section-title__heading">
        {{ $heading }}
        @if($highlight)
            <span class="section-title__highlight">{{ $highlight }}</span>
        @endif
    </h2>
    @if($subtitle)
        <p class="section-title__subtitle">{{ $subtitle }}</p>
    @endif
</div>

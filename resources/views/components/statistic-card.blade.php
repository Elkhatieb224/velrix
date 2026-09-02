@props(['figma', 'value', 'label', 'page' => 'about'])

<div class="stat-card" data-aos="fade-up">
    <div class="stat-card__icon">
        <img src="{{ figma_asset($figma, $page) }}" alt="" width="20" height="20" loading="lazy">
    </div>
    <p class="stat-card__value">{{ $value }}</p>
    <p class="stat-card__label">{{ $label }}</p>
</div>

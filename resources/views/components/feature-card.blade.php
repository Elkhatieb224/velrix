@props(['figma', 'title', 'text', 'page' => 'home'])

<div class="feature-card" data-aos="fade-up">
    <div class="feature-card__icon">
        <img src="{{ figma_asset($figma, $page) }}" alt="" width="22" height="22" loading="lazy">
    </div>
    <h3 class="feature-card__title">{{ $title }}</h3>
    <p class="feature-card__text">{{ $text }}</p>
</div>

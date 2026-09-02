@props([
    'badge',
    'icon' => null,
    'image' => null,
    'figmaImage' => null,
    'figmaIcon' => null,
    'figmaPage' => 'services',
    'title',
    'subtitle',
    'desc',
    'features' => [],
    'imageFit' => 'cover',
    'imageTop' => null,
    'imageHeight' => null,
])

<article class="service-card" data-aos="fade-up">
    <div class="service-card__image">
        <div class="service-card__image-wrap">
            <img
                class="service-card__image service-card__image--{{ $imageFit }}"
                src="{{ $figmaImage ? figma_asset($figmaImage, $figmaPage) : asset('assets/images/' . $image) }}"
                alt="{{ $title }}"
                loading="lazy"
                @if($imageFit === 'positioned')
                    style="top: {{ $imageTop ?? '0' }}; height: {{ $imageHeight ?? '100%' }};"
                @endif
            >
        </div>
    </div>
    <div class="service-card__body">
        <div class="service-card__header">
            <div class="service-card__icon">
                <img src="{{ $figmaIcon ? figma_asset($figmaIcon, $figmaPage) : asset('assets/icons/' . $icon) }}" alt="" width="28" height="28" loading="lazy">
            </div>
            <span class="service-card__badge">{{ $badge }}</span>
        </div>
        <div class="service-card__heading">
            <h3 class="service-card__title">{{ $title }}</h3>
            <p class="service-card__subtitle">{{ $subtitle }}</p>
        </div>
        <p class="service-card__desc">{{ $desc }}</p>
        @if(count($features))
            <ul class="service-card__features">
                @foreach($features as $feature)
                    <li class="service-card__feature">
                        <span class="service-card__check">
                            <img src="{{ figma_asset('imgIcon', $figmaPage) }}" alt="" width="8" height="8" loading="lazy">
                        </span>
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        @endif
        <div class="service-card__action">
            <a href="{{ route('contact') }}" class="btn btn--outline btn--icon">
                <img src="{{ figma_asset('imgIcon1', $figmaPage) }}" alt="" width="14" height="14" loading="lazy">
                <span>طلب الخدمة</span>
            </a>
        </div>
    </div>
</article>

<section class="services-slider section-padding" id="services">
    <div class="container">
        <x-section-title
            heading="حلولنا الذكية لبزنس "
            highlight="أسرع وأذكى!"
            subtitle="نقدم منتجات رقمية متكاملة تساعد عملك على النمو، التوسع، ومضاعفة الأرباح."
        />

        <div class="services-slider__track" data-aos="fade-up">
            @foreach($servicesSlider as $item)
                <article class="services-slider__item">
                    <div class="services-slider__figure">
                        <div class="services-slider__image-wrap">
                            <img
                                class="services-slider__image services-slider__image--{{ $item['imageFit'] ?? 'cover' }}"
                                src="{{ figma_asset($item['figma'], 'home') }}"
                                alt="{{ $item['title'] }}"
                                loading="lazy"
                                @if(($item['imageFit'] ?? 'cover') === 'positioned')
                                    style="left: {{ $item['imageLeft'] }}; width: {{ $item['imageWidth'] }}; top: {{ $item['imageTop'] ?? '0' }};"
                                @endif
                            >
                        </div>
                    </div>
                    <div class="services-slider__gradient" aria-hidden="true"></div>
                    <h3 class="services-slider__label">{{ $item['title'] }}</h3>
                </article>
            @endforeach
        </div>
    </div>
</section>

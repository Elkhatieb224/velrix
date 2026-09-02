<section class="hero" id="hero">
    <div class="hero__bg" aria-hidden="true">
        <img src="{{ figma_asset('imgHomeBnrImgJpg', 'home') }}" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="hero__overlay" aria-hidden="true"></div>

    <div class="hero__card" data-aos="fade-left">
        <h1 class="hero__title">
            نحول الأفكار إلى حلول<br>رقمية ذكية
        </h1>
        <div class="hero__divider" aria-hidden="true"></div>
        <p class="hero__desc">
            نبتكر تطبيقات ومواقع وتجارب مستخدم قائمة على الذكاء<br>
            الاصطناعي لنمو عملك وتطوير حصتك السوقية.
        </p>
        <div class="hero__stats">
            <span class="hero__stat">+50 مشروع ناجح</span>
            <span class="hero__stat">99% رضا العملاء</span>
            <span class="hero__stat">4 مجالات رئيسية</span>
        </div>
        <div class="hero__actions">
            <x-button variant="primary" href="{{ route('home') }}#services" class="btn--lg" icon="home-arrow-icon.svg">استكشف أعمالنا</x-button>
            <x-button variant="secondary" href="{{ route('contact') }}" class="btn--lg" icon="home-phone-icon.svg" icon-position="end">احجز جلسة استشارية</x-button>
        </div>
    </div>
</section>

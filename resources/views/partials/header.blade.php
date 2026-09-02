<header class="site-header">
    <div class="site-header__inner">
        <a href="{{ route('home') }}" class="site-header__logo" aria-label="Velrix — الرئيسية">
            <img src="{{ figma_asset('imgGeminiGeneratedImageAllte7Allte7Allt1') }}" alt="Velrix" width="85" height="64" loading="eager">
        </a>

        @include('partials.navbar')

        <div class="site-header__cta">
            <a href="{{ route('contact') }}" class="btn btn--gradient">تواصل معنا</a>
        </div>
    </div>
</header>

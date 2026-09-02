<nav class="site-nav" aria-label="التنقل الرئيسي">
    <ul class="site-nav__list">
        @foreach(config('velrix.nav') as $item)
            <li>
                <a href="{{ route($item['route']) }}"
                   class="site-nav__link {{ request()->routeIs($item['route']) ? 'site-nav__link--active' : '' }}">
                    {{ $item['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>

<button class="mobile-menu-toggle" type="button" aria-label="فتح القائمة" aria-expanded="false">
    <span></span>
    <span></span>
    <span></span>
</button>

<div class="mobile-menu" aria-hidden="true">
    <ul class="mobile-menu__list">
        @foreach(config('velrix.nav') as $item)
            <li>
                <a href="{{ route($item['route']) }}"
                   class="mobile-menu__link {{ request()->routeIs($item['route']) ? 'mobile-menu__link--active' : '' }}">
                    {{ $item['label'] }}
                </a>
            </li>
        @endforeach
        <li>
            <a href="{{ route('contact') }}" class="btn btn--gradient" style="margin-top: 16px; display: inline-flex;">تواصل معنا</a>
        </li>
    </ul>
</div>

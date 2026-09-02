<div class="mobile-menu-backdrop" aria-hidden="true"></div>

<nav class="mobile-menu" id="mobile-menu" aria-label="قائمة الجوال" aria-hidden="true">
    <ul class="mobile-menu__list">
        @foreach(config('velrix.nav') as $item)
            <li>
                <a href="{{ route($item['route']) }}"
                   class="mobile-menu__link {{ request()->routeIs($item['route']) ? 'mobile-menu__link--active' : '' }}">
                    {{ $item['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('contact') }}" class="btn btn--gradient mobile-menu__cta">تواصل معنا</a>
</nav>

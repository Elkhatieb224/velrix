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

<footer class="site-footer">
    <div class="site-footer__main">
        <div class="site-footer__grid">
            <div class="site-footer__brand">
                <div class="site-footer__logo">
                    <img src="{{ figma_asset('imgContainer', 'footer') }}" alt="Velrix" width="75" height="75" loading="lazy">
                </div>
                <p>{{ config('velrix.footer_tagline') }}</p>
                <div class="site-footer__social">
                    @foreach(config('velrix.social') as $social)
                        <a href="{{ $social['url'] }}" class="site-footer__social-link" target="_blank" rel="noopener noreferrer" aria-label="{{ $social['label'] }}">
                            <img src="{{ figma_asset($social['figma'], 'footer') }}" alt="" width="16" height="16" loading="lazy">
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="site-footer__column">
                <h4 class="site-footer__title">روابط سريعة</h4>
                <ul class="site-footer__links">
                    @foreach(config('velrix.footer_quick_links') as $link)
                        <li>
                            <a href="{{ isset($link['hash']) ? route($link['route']) . $link['hash'] : route($link['route']) }}" class="site-footer__link">
                                <img src="{{ figma_asset($link['figmaArrow'] ?? 'imgIcon5', 'footer') }}" alt="" width="10" height="10" loading="lazy">
                                <span>{{ $link['label'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="site-footer__column">
                <h4 class="site-footer__title">خدماتنا</h4>
                <ul class="site-footer__links">
                    @foreach(config('velrix.footer_services') as $service)
                        <li>
                            <a href="{{ route('services') }}" class="site-footer__link">
                                <img src="{{ figma_asset('imgIcon5', 'footer') }}" alt="" width="10" height="10" loading="lazy">
                                <span>{{ $service }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="site-footer__contact">
                <h4 class="site-footer__title">تواصل معنا</h4>
                <div class="site-footer__contact-item">
                    <div class="site-footer__contact-icon">
                        <img src="{{ figma_asset('imgIcon7', 'footer') }}" alt="" width="15" height="15" loading="lazy">
                    </div>
                    <span class="site-footer__contact-value site-footer__contact-value--ltr" dir="ltr">{{ config('velrix.email') }}</span>
                </div>
                <div class="site-footer__contact-item">
                    <div class="site-footer__contact-icon">
                        <img src="{{ figma_asset('imgIcon8', 'footer') }}" alt="" width="15" height="15" loading="lazy">
                    </div>
                    <span class="site-footer__contact-value site-footer__contact-value--ltr" dir="ltr">{{ config('velrix.phone') }}</span>
                </div>
                <div class="site-footer__contact-item">
                    <div class="site-footer__contact-icon">
                        <img src="{{ figma_asset('imgIcon9', 'footer') }}" alt="" width="15" height="15" loading="lazy">
                    </div>
                    <span class="site-footer__contact-value">{{ config('velrix.address_ar') }}</span>
                </div>

                <div class="site-footer__newsletter">
                    <h5>اشترك في نشرتنا البريدية</h5>
                    <form class="site-footer__newsletter-form" action="#" method="post">
                        @csrf
                        <input type="email" name="email" placeholder="بريدك الإلكتروني" aria-label="البريد الإلكتروني" required>
                        <button type="submit">اشتراك</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="site-footer__bottom">
        <div class="site-footer__bottom-inner">
            <p class="site-footer__copyright">&copy; {{ date('Y') }} Velrix. جميع الحقوق محفوظة.</p>
            <div class="site-footer__legal">
                <a href="#">سياسة الخصوصية</a>
                <a href="#">الشروط والأحكام</a>
            </div>
        </div>
    </div>
</footer>

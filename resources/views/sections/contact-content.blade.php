<section class="contact-page">
    <div class="contact-page__hero">
        <div class="page-hero__glow" aria-hidden="true"></div>
        <h1 class="contact-page__hero-title" data-aos="fade-up">
            تواصل <span class="text-gradient">معنا</span>
        </h1>
        <p class="contact-page__hero-sub" data-aos="fade-up" data-aos-delay="100">
            يسعدنا الاستماع إليك ومساعدتك في تحويل أفكارك الرقمية إلى واقع. تواصل معنا اليوم لبدء مشروعك الجديد.
        </p>
    </div>

    <div class="contact-page__grid">
        <div class="contact-page__form-card" data-aos="fade-left">
            <div class="contact-page__card-header">
                <div class="contact-page__card-icon contact-page__card-icon--form">
                    <img src="{{ figma_asset('imgIcon', 'contact') }}" alt="" width="20" height="20" loading="lazy">
                </div>
                <div class="contact-page__card-heading">
                    <h2 class="contact-page__card-title contact-page__card-title--form">أرسل لنا رسالة</h2>
                    <p class="contact-page__card-sub">سنرد عليك خلال 24 ساعة كحد أقصى</p>
                </div>
            </div>

            <form class="contact-form" action="#" method="post" novalidate>
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-group__label" for="name">الاسم بالكامل <span class="required">*</span></label>
                        <input class="form-group__input" type="text" id="name" name="name" placeholder="أدخل اسمك الكامل" required>
                    </div>
                    <div class="form-group">
                        <label class="form-group__label" for="email">البريد الإلكتروني <span class="required">*</span></label>
                        <input class="form-group__input form-group__input--ltr" type="email" id="email" name="email" placeholder="example@email.com" dir="ltr" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-group__label" for="phone">رقم الهاتف</label>
                        <input class="form-group__input form-group__input--ltr" type="tel" id="phone" name="phone" placeholder="{{ config('velrix.phone') }}" dir="ltr">
                    </div>
                    <div class="form-group">
                        <label class="form-group__label" for="service">نوع الخدمة المطلوبة <span class="required">*</span></label>
                        <div class="form-group__select-wrap">
                            <select class="form-group__select" id="service" name="service" required>
                                <option value="">اختر الخدمة المناسبة</option>
                                @foreach($serviceOptions as $option)
                                    <option value="{{ $option }}">{{ $option }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-group__label" for="message">تفاصيل الرسالة <span class="required">*</span></label>
                    <textarea class="form-group__textarea" id="message" name="message" placeholder="أخبرنا بتفاصيل مشروعك أو استفسارك..." maxlength="500" required></textarea>
                    <div class="form-group__counter">0 / 500</div>
                </div>

                <div class="form-submit">
                    <button type="submit" class="contact-form__submit">
                        <img src="{{ figma_asset('imgIcon1', 'contact') }}" alt="" width="18" height="18" loading="lazy">
                        <span>إرسال الرسالة</span>
                    </button>
                </div>
            </form>
        </div>

        <aside class="contact-page__info-card" data-aos="fade-right">
            <div class="contact-page__card-header">
                <div class="contact-page__card-icon contact-page__card-icon--info">
                    <img src="{{ figma_asset('imgIcon2', 'contact') }}" alt="" width="18" height="18" loading="lazy">
                </div>
                <div class="contact-page__card-heading">
                    <h2 class="contact-page__card-title">معلومات التواصل</h2>
                </div>
            </div>

            <div class="contact-page__info-list">
                @foreach($contactInfo as $info)
                    <div class="contact-page__info-item">
                        <div class="contact-page__info-icon">
                            <img src="{{ figma_asset($info['figmaIcon'], 'contact') }}" alt="" width="20" height="20" loading="lazy">
                        </div>
                        <div class="contact-page__info-content">
                            <p class="contact-page__info-label">{{ $info['label'] }}</p>
                            <p class="contact-page__info-value{{ ($info['ltr'] ?? false) ? ' contact-page__info-value--ltr' : '' }}" @if($info['ltr'] ?? false) dir="ltr" @endif>{{ $info['value'] }}</p>
                            @if($info['note'])
                                <p class="contact-page__info-note{{ ($info['ltr'] ?? false) ? ' contact-page__info-note--ltr' : '' }}" @if($info['ltr'] ?? false) dir="ltr" @endif>{{ $info['note'] }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="contact-page__social">
                <p class="contact-page__social-label">تابعنا على</p>
                <div class="contact-page__social-list">
                    @foreach($contactSocial as $social)
                        <a href="{{ $social['url'] }}" class="contact-page__social-link" target="_blank" rel="noopener noreferrer" aria-label="{{ $social['label'] }}">
                            <img src="{{ figma_asset($social['figma'], 'contact') }}" alt="" width="16" height="16" loading="lazy">
                        </a>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>
</section>

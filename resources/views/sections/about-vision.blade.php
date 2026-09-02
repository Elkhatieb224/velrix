<section class="about-vision section-padding">
    <div class="about-vision__inner" data-aos="fade-up">
        <h2 class="about-vision__title">رؤيتنا</h2>
        <div class="about-vision__card">
            <h3 class="about-vision__card-title">الشريك التقني الأول في المنطقة</h3>
            <p class="about-vision__card-text">أن نكون الوجهة الأولى للشركات والرواد في المنطقة — شريكاً تقنياً استراتيجياً يُسهم في بناء اقتصاد رقمي مزدهر عبر حلول برمجية ذكية وفائقة الجودة.</p>
            <ul class="about-vision__list">
                @foreach($visionItems as $item)
                    <li class="about-vision__list-item">
                        <span class="about-vision__list-icon" aria-hidden="true">
                            <img src="{{ figma_asset('imgIcon1', 'about') }}" alt="" width="10" height="10" loading="lazy">
                        </span>
                        <span class="about-vision__list-text">{{ $item }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

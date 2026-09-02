<section class="testimonials section-padding">
    <div class="testimonials__container">
        <x-section-title
            class="testimonials__heading"
            heading="آراء ورسائل "
            highlight="شركائنا"
            subtitle="لقطات حقيقية من انطباعات عملائنا أثناء وبعد تنفيذ المشاريع."
        />

        <div class="testimonials__grid" data-aos="fade-up">
            {{-- Column 1: Twitter, Video, Rating --}}
            <div class="testimonials__col">
                <article class="testimonials__card testimonials__card--twitter">
                    <header class="testimonials__card-header">
                        <div class="testimonials__avatar testimonials__avatar--light">👨‍🎨</div>
                        <div class="testimonials__card-meta">
                            <p class="testimonials__name">Faris Al-Dosari</p>
                            <p class="testimonials__meta">@FarisAlDosari · منذ 3 أيام</p>
                        </div>
                        <img class="testimonials__platform-icon" src="{{ asset('assets/icons/home-testimonial-x.svg') }}" alt="" width="17" height="17">
                    </header>
                    <p class="testimonials__text">
                        شغل <strong>@Velrix</strong> لحد الآن أفضل تجربة برمجية مررت فيها. التصميم، الكود، والتواصل — كل شيء على مستوى 🧵
                    </p>
                    <div class="testimonials__quote-box">
                        <span class="testimonials__quote-line" aria-hidden="true"></span>
                        <p>أهم شيء أعجبني: ما حسيت إن في تأخير أو تهاون. فريق يشتغل بجدية ويحترم وقتك 🔥</p>
                    </div>
                    <footer class="testimonials__actions">
                        <span><img src="{{ asset('assets/icons/home-testimonial-heart.svg') }}" alt="" width="13" height="13"> 423</span>
                        <span><img src="{{ asset('assets/icons/home-testimonial-retweet.svg') }}" alt="" width="13" height="13"> 1.2K</span>
                        <span><img src="{{ asset('assets/icons/home-testimonial-comment.svg') }}" alt="" width="13" height="13"> 89</span>
                    </footer>
                </article>

                <article class="testimonials__card testimonials__card--video">
                    <span class="testimonials__badge">Case Study</span>
                    <div class="testimonials__video-body">
                        <div class="testimonials__play-btn">
                            <img src="{{ asset('assets/icons/home-testimonial-video-play.svg') }}" alt="" width="19" height="19">
                        </div>
                        <div>
                            <p class="testimonials__video-title">قصة نجاح NovaPay</p>
                            <p class="testimonials__video-subtitle">شاهد كيف بنينا بوابة المدفوعات</p>
                        </div>
                    </div>
                    <span class="testimonials__duration">4:27</span>
                </article>

                <article class="testimonials__card testimonials__card--rating">
                    <div class="testimonials__rating-summary">
                        <p class="testimonials__rating-score">4.9</p>
                        <div class="testimonials__stars" aria-hidden="true">★★★★★</div>
                        <p class="testimonials__meta">من 127 تقييم</p>
                    </div>
                    <div class="testimonials__bars">
                        @foreach([['5', 88], ['4', 9], ['3', 2], ['2', 1]] as [$star, $pct])
                            <div class="testimonials__bar-row">
                                <span>{{ $star }}</span>
                                <div class="testimonials__bar">
                                    <span class="{{ $star === '5' ? '' : 'testimonials__bar-fill--muted' }}" style="width: {{ $pct }}%;"></span>
                                </div>
                                <span>{{ $pct }}%</span>
                            </div>
                        @endforeach
                    </div>
                </article>
            </div>

            {{-- Column 2: Voice, Stats --}}
            <div class="testimonials__col">
                <article class="testimonials__card testimonials__card--voice">
                    <header class="testimonials__card-header">
                        <div class="testimonials__avatar testimonials__avatar--gradient">🎙️</div>
                        <div class="testimonials__card-meta">
                            <p class="testimonials__name testimonials__name--light">م. خالد - مدير المنتج</p>
                            <p class="testimonials__meta testimonials__meta--light">Horizon Digital · رسالة صوتية</p>
                        </div>
                        <span class="testimonials__voice-badge">VOICE</span>
                    </header>
                    <div class="testimonials__player">
                        <button type="button" class="testimonials__play-btn testimonials__play-btn--small" aria-label="تشغيل">
                            <img src="{{ asset('assets/icons/home-testimonial-play.svg') }}" alt="" width="12" height="12">
                        </button>
                        <div class="testimonials__waveform" aria-hidden="true">
                            @foreach([18.6, 29, 14.5, 37.2, 22.7, 41.4, 16.6, 33.1, 24.8, 45.5, 20.7, 39.3, 14.5, 31, 26.9, 43.5, 18.6, 35.2, 22.7, 41.4, 16.6, 29, 37.2, 20.7, 45.5, 24.8, 33.1, 18.6, 39.3, 14.5, 31, 26.9] as $height)
                                <span style="height: {{ $height }}px;"></span>
                            @endforeach
                        </div>
                        <span class="testimonials__duration testimonials__duration--light">0:38</span>
                    </div>
                    <p class="testimonials__voice-quote">"ما توقعت إن المشروع يخلص بهالجودة وبهالسرعة، شغلهم تجاوز توقعاتي بكثير..."</p>
                </article>

                <article class="testimonials__card testimonials__card--stat">
                    <p class="testimonials__stat-value">+150%</p>
                    <p class="testimonials__stat-label">زيادة في المبيعات خلال 3 أشهر</p>
                    <img class="testimonials__chart" src="{{ asset('assets/icons/home-testimonial-chart.svg') }}" alt="" width="374" height="50">
                    <blockquote class="testimonials__stat-quote">"التطبيق غير مجرى شغلنا تماماً، من أول أسبوع لاحظنا فرق ضخم في الطلبات."</blockquote>
                    <footer class="testimonials__stat-footer">
                        <div class="testimonials__avatar testimonials__avatar--stat">👤</div>
                        <div class="testimonials__card-meta">
                            <p class="testimonials__name">ن. العتيبي</p>
                            <p class="testimonials__meta">مؤسس تطبيق Sooq</p>
                        </div>
                        <div class="testimonials__stars testimonials__stars--small" aria-hidden="true">★★★★★</div>
                    </footer>
                </article>
            </div>

            {{-- Column 3: WhatsApp, LinkedIn --}}
            <div class="testimonials__col">
                <article class="testimonials__card testimonials__card--whatsapp">
                    <header class="testimonials__card-header testimonials__card-header--border">
                        <div class="testimonials__avatar testimonials__avatar--gradient">👨‍💼</div>
                        <div class="testimonials__card-meta">
                            <p class="testimonials__name">م. أحمد الرشيدي</p>
                            <p class="testimonials__meta testimonials__meta--online">
                                <span class="testimonials__online-dot"></span>
                                متصل الآن
                            </p>
                        </div>
                        <img class="testimonials__platform-icon" src="{{ asset('assets/icons/home-testimonial-whatsapp.svg') }}" alt="" width="17" height="17">
                    </header>

                    <div class="testimonials__message testimonials__message--incoming">
                        <div class="testimonials__avatar testimonials__avatar--tiny">👨‍💼</div>
                        <div>
                            <div class="testimonials__bubble testimonials__bubble--incoming">
                                <p>فريق Velrix سلمنا الميكرو-سيرفس قبل الميعاد بأسبوع! بجد شغل عالمي 🚀</p>
                            </div>
                            <div class="testimonials__message-meta">
                                <span>10:42 ص</span>
                                <img src="{{ asset('assets/icons/home-testimonial-check-read.svg') }}" alt="" width="14" height="14">
                            </div>
                        </div>
                    </div>

                    <div class="testimonials__message testimonials__message--outgoing">
                        <div>
                            <div class="testimonials__bubble testimonials__bubble--outgoing">
                                <p>شكراً جزيلاً! يسعدنا خدمتك دائماً 🙏</p>
                            </div>
                            <div class="testimonials__message-meta testimonials__message-meta--outgoing">
                                <img src="{{ asset('assets/icons/home-testimonial-check-sent.svg') }}" alt="" width="14" height="14">
                                <span>10:43 ص</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonials__message testimonials__message--incoming">
                        <div class="testimonials__avatar testimonials__avatar--tiny">👨‍💼</div>
                        <div>
                            <div class="testimonials__bubble testimonials__bubble--incoming">
                                <p>راح نتعامل معاكم بكل مشاريعنا القادمة! 💪</p>
                            </div>
                            <div class="testimonials__message-meta">
                                <span>10:45 ص</span>
                                <img src="{{ asset('assets/icons/home-testimonial-check-double.svg') }}" alt="" width="14" height="14">
                            </div>
                        </div>
                    </div>
                </article>

                <article class="testimonials__card testimonials__card--linkedin">
                    <header class="testimonials__card-header">
                        <div class="testimonials__avatar testimonials__avatar--dark">👩‍💻</div>
                        <div class="testimonials__card-meta">
                            <p class="testimonials__name">سارة المطيري</p>
                            <p class="testimonials__meta">مديرة تقنية · شركة تك سكيل</p>
                        </div>
                        <span class="testimonials__linkedin-badge">LinkedIn</span>
                    </header>
                    <p class="testimonials__text">
                        <strong>@Velrix</strong> أنجزتم ما وعدتم به بالضبط. الكود نظيف، الأداء رهيب، والتواصل احترافي من البداية للنهاية. 🔥
                    </p>
                    <footer class="testimonials__reactions">
                        <span>👍 284</span>
                        <span>❤️ 91</span>
                        <span>💬 37</span>
                    </footer>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="faq section-padding">
    <div class="faq__inner">
        <div class="faq__intro" data-aos="fade-up">
            <h2 class="faq__title">
                لديك استفسار؟<br>
                <span>تجد إجابته هنا</span>
            </h2>
            <p class="faq__subtitle">إجابات شفافة ومباشرة حول آلية عملنا، مدة التنفيذ، والدعم التقني.</p>
        </div>

        <div class="faq__list" data-aos="fade-up" data-aos-delay="100">
            @foreach($faqs as $index => $faq)
                @php
                    $isOpen = $faq['open'] ?? false;
                    $number = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                @endphp
                <div class="faq__item {{ $isOpen ? 'faq__item--open' : '' }}">
                    <button
                        type="button"
                        class="faq__header"
                        aria-expanded="{{ $isOpen ? 'true' : 'false' }}"
                    >
                        <span class="faq__number">{{ $number }}</span>
                        <span class="faq__question">{{ $faq['q'] }}</span>
                        <span class="faq__toggle" aria-hidden="true">
                            <img
                                class="faq__icon faq__icon--minus"
                                src="{{ asset('assets/icons/home-faq-minus.svg') }}"
                                alt=""
                                width="13"
                                height="13"
                            >
                            <img
                                class="faq__icon faq__icon--plus"
                                src="{{ asset('assets/icons/home-faq-plus.svg') }}"
                                alt=""
                                width="13"
                                height="13"
                            >
                        </span>
                    </button>

                    @if(!empty($faq['a']))
                        <div class="faq__body">
                            <div class="faq__divider"></div>
                            <div class="faq__answer">
                                <p>{{ $faq['a'] }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>

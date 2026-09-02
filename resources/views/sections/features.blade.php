<section class="why-us">
    <div class="why-us__inner">
        <h2 class="why-us__title" data-aos="fade-up">
            لماذا تختار الشركات <span>Velrix</span> للتحول الرقمي؟
        </h2>
        <p class="why-us__subtitle" data-aos="fade-up">في Velrix، لا نبني مجرد تطبيقات، بل نهندس حلولاً برمجية ذكية تُسرّع نمو عملك وتضمن لك التفوق التنافسي.</p>

        <div class="why-us__grid">
            @foreach($features as $feature)
                <x-feature-card :figma="$feature['figma']" :title="$feature['title']" :text="$feature['text']" />
            @endforeach
        </div>
    </div>
</section>

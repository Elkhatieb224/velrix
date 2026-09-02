<section class="about-stats">
    <div class="about-stats__grid">
        @foreach($stats as $stat)
            <x-statistic-card :figma="$stat['figma']" :value="$stat['value']" :label="$stat['label']" />
        @endforeach
    </div>
</section>

<section class="section-padding" style="background: #faf9f5; padding-top: 24px;">
    <div class="services-grid">
        <div class="services-grid__row">
            @foreach(array_slice($services, 0, 3) as $service)
                <x-service-card
                    :badge="$service['badge']"
                    :figma-icon="$service['figmaIcon'] ?? null"
                    :figma-image="$service['figmaImage'] ?? null"
                    :icon="$service['icon'] ?? null"
                    :image="$service['image'] ?? null"
                    :title="$service['title']"
                    :subtitle="$service['subtitle']"
                    :desc="$service['desc']"
                    :features="$service['features']"
                    :image-fit="$service['imageFit'] ?? 'cover'"
                    :image-top="$service['imageTop'] ?? null"
                    :image-height="$service['imageHeight'] ?? null"
                />
            @endforeach
        </div>
        <div class="services-grid__row services-grid__row--bottom">
            @foreach(array_slice($services, 3) as $service)
                <x-service-card
                    :badge="$service['badge']"
                    :figma-icon="$service['figmaIcon'] ?? null"
                    :figma-image="$service['figmaImage'] ?? null"
                    :icon="$service['icon'] ?? null"
                    :image="$service['image'] ?? null"
                    :title="$service['title']"
                    :subtitle="$service['subtitle']"
                    :desc="$service['desc']"
                    :features="$service['features']"
                    :image-fit="$service['imageFit'] ?? 'cover'"
                    :image-top="$service['imageTop'] ?? null"
                    :image-height="$service['imageHeight'] ?? null"
                />
            @endforeach
        </div>
    </div>
</section>

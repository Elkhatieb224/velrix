FROM php:8.3-cli-bookworm

RUN apt-get update && apt-get install -y \
    git unzip libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

COPY package.json package-lock.json ./
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs \
    && npm ci \
    && rm -rf /var/lib/apt/lists/*

COPY . .

RUN npm run build \
    && composer dump-autoload --optimize

RUN mkdir -p database storage/framework/{cache,sessions,views} storage/logs bootstrap/cache \
    && touch database/database.sqlite \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 10000

CMD set -e \
    && php artisan key:generate --force --no-interaction \
    && php artisan migrate --force --no-interaction \
    && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}

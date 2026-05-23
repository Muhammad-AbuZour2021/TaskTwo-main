FROM php:8.2-apache

# الحزم الأساسية
RUN apt-get update && apt-get install -y \
    git curl zip unzip \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libpq-dev libzip-dev

# Node.js (لـ Vite / npm)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

# PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql pdo_mysql gd zip

# تفعيل Apache rewrite
RUN a2enmod rewrite

WORKDIR /var/www/html

# نسخ المشروع
COPY . .

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تثبيت Laravel dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# بناء الواجهة (إن وجد package.json)
RUN if [ -f package.json ]; then npm install && npm run build; fi

# صلاحيات
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# إعداد Apache لـ Laravel
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# تشغيل التطبيق
CMD sh -c "\
php artisan migrate --force && \
php artisan db:seed --class=AdminSeeder --force && \
php artisan optimize:clear && \
php artisan config:cache && \
php artisan route:cache && \
apache2-foreground"

FROM php:7.4-fpm


WORKDIR /var/www/html


RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo_pgsql


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . .

RUN composer install --no-interaction --no-scripts --no-suggest --prefer-dist

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache


RUN php artisan key:generate

CMD php artisan serve --host=0.0.0.0 --port=8000

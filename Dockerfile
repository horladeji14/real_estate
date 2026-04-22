FROM php:8.3-fpm

RUN apt-get update && apt-get install -y     git curl unzip zip libzip-dev libicu-dev libpng-dev libonig-dev libxml2-dev     default-mysql-client supervisor nginx     && docker-php-ext-install pdo pdo_mysql bcmath intl zip     && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY . /var/www/html

RUN if [ -f composer.json ]; then composer install --no-dev --optimize-autoloader --no-interaction; fi
RUN chown -R www-data:www-data /var/www/html

COPY docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

EXPOSE 80
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

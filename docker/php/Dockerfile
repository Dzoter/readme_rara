FROM php:8.1-fpm

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

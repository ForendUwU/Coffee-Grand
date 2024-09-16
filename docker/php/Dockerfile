FROM php:8.2-fpm
RUN apt install zip unzip php-zip
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

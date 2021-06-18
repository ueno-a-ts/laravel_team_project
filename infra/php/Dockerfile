FROM php:7.4-fpm-buster
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_HOME=/composer

RUN apt update && \
  apt -y install git unzip libzip-dev libicu-dev libonig-dev npm nodejs && \
  apt clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install intl pdo_mysql zip bcmath

COPY --from=composer:1.10 /usr/bin/composer /usr/bin/composer

RUN php /usr/bin/composer config -g repos.packagist composer https://packagist.jp 

COPY ./php.ini /usr/local/etc/php/php.ini

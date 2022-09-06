FROM php:7.4-fpm

#COPY conf/php.ini /usr/local/etc/php/php.ini

RUN apt-get update && \
    apt-get install -y --no-install-recommends libssl-dev zlib1g-dev g++ curl git zip unzip netcat libxml2-dev libpq-dev libzip-dev libicu-dev && \
    pecl install apcu && \
    apt-get update && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev freetype2-demos freetype* && \
    docker-php-ext-configure zip && \
    docker-php-ext-configure gd && \
    docker-php-ext-install -j$(nproc) zip opcache intl pdo pdo_mysql pdo_pgsql pgsql gd && \
    docker-php-ext-enable apcu pdo_pgsql sodium && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

WORKDIR /var/www/project

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl -sS https://get.symfony.com/cli/installer | bash

# RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony



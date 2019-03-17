FROM php:7-fpm-alpine

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer

RUN apk add --no-cache git zip unzip

COPY ./dist /usr/share/nginx/html
WORKDIR /usr/share/nginx/html
RUN composer install

FROM php:7-fpm-alpine

RUN apk --no-cache --update add postgresql-libs postgresql-dev \
    && docker-php-ext-install pdo_pgsql pgsql \
    && apk del postgresql-dev

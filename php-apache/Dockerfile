FROM php:7.4-apache
COPY ./php.ini /usr/local/etc/php/
RUN apt-get update
RUN apt-get install -y zip unzip vim libpng-dev libpq-dev
RUN docker-php-ext-install pdo_mysql
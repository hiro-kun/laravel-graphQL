FROM php:8.0-fpm

RUN apt-get update \
  && apt-get install -y mariadb-client \
  && docker-php-ext-install pdo_mysql 

#Composer install
COPY --from=composer /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1

ENV COMPOSER_HOME /composer

ENV PATH $PATH:/composer/vendor/bin

COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www
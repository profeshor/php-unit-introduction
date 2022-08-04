FROM php:7.3.16-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli && a2enmod rewrite
RUN apt-get update && apt-get upgrade -y 
RUN apt-get install git -y
RUN composer require phpunit/phpunit --dev
RUN docker-php-ext-enable xdebug
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
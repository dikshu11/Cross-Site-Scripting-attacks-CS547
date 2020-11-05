FROM php:7.3-apache 
WORKDIR /var/www
RUN docker-php-ext-install mysqli
ADD . /var/www
RUN chown -R www-data:www-data /var/www/*

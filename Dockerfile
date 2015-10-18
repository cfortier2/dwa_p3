FROM php:5.6.14-apache
MAINTAINER Chris Fortier <cfortier2@gmail.com>

# install composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# move application to correct location
ONBUILD COPY . /app/

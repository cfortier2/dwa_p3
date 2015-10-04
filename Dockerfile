FROM php:5.6.14-apache
MAINTAINER Chris Fortier <cfortier2@gmail.com>

# move application to correct location
ONBUILD COPY . /app/

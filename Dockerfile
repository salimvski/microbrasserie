FROM php:7.3-apache


RUN apt-get update && apt-get install -y git vim 
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite

COPY apache.conf /etc/apache2/sites-enabled/000-default.conf

COPY . /var/www/html/microbrasserie

WORKDIR /var/www/html/microbrasserie


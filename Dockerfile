FROM php:8.0.5-apache
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite
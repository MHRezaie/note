FROM php:8.1-fpm-alpine

WORKDIR /var/www/html

#RUN chown -R www-data:www-data /var/www/html/public
RUN docker-php-ext-install pdo pdo_mysql

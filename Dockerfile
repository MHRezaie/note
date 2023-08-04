FROM php:fpm

WORKDIR /var/www/html

#RUN chown -R www-data:www-data /var/www/html/public

RUN docker-php-ext-install pdo pdo_mysql
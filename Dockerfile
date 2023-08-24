FROM php:8-fpm-alpine

ENV PHPGROUP=mhubuntu
ENV PHPUSER=mhubuntu

RUN  adduser -g ${PHPGROUP} -s /bin/sh -D ${PHPUSER}

RUN sed -i "s/user = www-data/user = ${PHPUSER}/g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -i "s/group = www-data/group = ${PHPGROUP}/g" /usr/local/etc/php-fpm.d/www.conf

RUN mkdir -p /var/www/html/public

RUN echo -e "http://nl.alpinelinux.org/alpine/v3.18/main\nhttp://nl.alpinelinux.org/alpine/v3.18/community" > /etc/apk/repositories 
RUN docker-php-ext-install pdo pdo_mysql

CMD [ "php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R" ]
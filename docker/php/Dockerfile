FROM php:7.4.0-fpm-buster

MAINTAINER Yurij Karpov <acrossoffwest@gmail.com>

RUN apt-get update
#RUN apt-get install zip
#RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install opcache
RUN docker-php-ext-install pcntl
RUN printf "\n" | pecl install -o -f redis
RUN echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini

RUN apt-get install -y zlib1g-dev libicu-dev g++ build-essential libssl-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev

RUN docker-php-ext-configure gd --with-jpeg --with-freetype
RUN docker-php-ext-install gd
RUN docker-php-ext-install exif

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm composer-setup.php

RUN apt-get -y install cron nano

# Copy cron schedule
COPY ./crontab_schedule /tmp/crontab_schedule
RUN crontab /tmp/crontab_schedule && rm /tmp/crontab_schedule

# supervisor installation &&
# create directory for child images to store configuration in
RUN apt-get -y install supervisor && \
  mkdir -p /var/log/supervisor && \
  mkdir -p /etc/supervisor

RUN apt-get install -y libmagickwand-dev --no-install-recommends
RUN pecl install imagick && docker-php-ext-enable imagick

COPY ./ /var/wwww/html

CMD ["service", "cron", "start"]
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]

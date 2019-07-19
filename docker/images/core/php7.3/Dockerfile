FROM alpine:latest
MAINTAINER Mike Bertram <contact@mibexx.de>


RUN apk update \
 && apk add \
    nginx \
    curl \
    git \
    wget \
    php7 \
    php7-fpm \
    php7-opcache \
    php7-gd \
    php7-json \
    php7-pdo_pgsql \
    php7-zlib \
    php7-curl \
    php7-bcmath \
    php7-gmp \
    php7-intl \
    php7-pgsql \
    php7-redis \
    php7-simplexml \
    php7-fileinfo \
    php7-sockets \
    php7-zip \
    php7-bz2 \
    php7-tokenizer \
    php7-dom \
    php7-xml \
    php7-xmlwriter \
    php7-xmlreader \
    php7-posix \
    postgresql-client \
    composer \
    supervisor \
    nodejs \
    npm \
 && mkdir -p /var/log/supervisor \
 && mkdir -p /run/nginx \
 && mkdir -p /var/run/php-fpm \
 && sed -i 's/user nginx;/user root;/g' /etc/nginx/nginx.conf

RUN composer global require hirak/prestissimo


COPY entrypoint.sh /entrypoint.sh
COPY conf/supervisor/supervisord.conf /etc/supervisord.conf
COPY conf/supervisor/conf.d /etc/supervisor/conf.d
COPY conf/php /etc/php7/conf.d

RUN chmod +x /entrypoint.sh

WORKDIR "/var/www/html"

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]

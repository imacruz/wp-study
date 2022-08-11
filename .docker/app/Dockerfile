FROM wordpress:6-php8.0-fpm

## Instalando composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt update && apt install nano \
    wget \
    git \
    libpq-dev \
    libzip-dev \
    unzip \
    zip \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    gnupg \
    webp \
    imagemagick \
    libmagickwand-dev \
    libwebp-dev \
    nano \
    supervisor \
    nginx \
    $PHPIZE_DEPS \
    -y


RUN docker-php-ext-install exif zip bcmath intl

ENV DOCKERIZE_VERSION v0.6.1
RUN wget https://github.com/jwilder/dockerize/releases/download/$DOCKERIZE_VERSION/dockerize-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && rm dockerize-linux-amd64-$DOCKERIZE_VERSION.tar.gz && \
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp


COPY default.conf /etc/nginx/sites-available/default
# COPY docker-entrypoint.sh /usr/local/bin/.


WORKDIR /var/www

RUN rm -rf /var/www/html && \
    usermod -u 1000 www-data && \
    chown www-data:www-data -R /var/www && \
    chmod -R 777 /var/lib/nginx && \
    chmod -R 777 /var/log/nginx && \
    touch /run/nginx.pid && \
    chmod -R 777 /run/nginx.pid && \
    find . -type f -exec chmod 664 {} \; && \
    find . -type d -exec chmod 775 {} \;
    
USER www-data


RUN composer config -g cache-dir "/var/www/.composer/cache" && \
    composer config -g data-dir "/var/www/.composer"


EXPOSE 9000 80
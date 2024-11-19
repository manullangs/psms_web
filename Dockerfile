# Menggunakan gambar resmi PHP
FROM php:8.1.0-apache

# Menetapkan direktori kerja
WORKDIR /var/www/html

RUN a2enmod rewrite

RUN apt-get update && apt-get install -y \
    libicu-dev \
    libmaradb-dev \
    unzip zip \
    zliblg-dev \
    libpng-dev \
    libjepg-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev
    
COPY --from=composer:latest usr/bin/composer usr/bin/composer 

RUN docker-php-ext-install gettext intl pdo_mysql gd

RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

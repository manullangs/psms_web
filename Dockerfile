# Menggunakan gambar resmi PHP
FROM php:8.1-cli

# Menetapkan direktori kerja
WORKDIR /client

# Menyalin file composer.json dan menginstal dependensi
COPY composer.json /client
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install

# Menyalin semua file ke dalam direktori kerja
COPY . /client

# Menjalankan server PHP built-in
CMD ["php", "-S", "0.0.0.0:8080"]

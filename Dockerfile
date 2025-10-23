# Gunakan image PHP dengan Apache
FROM php:8.2-apache

# Instal ekstensi yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    git zip unzip libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Salin semua file project ke dalam container
COPY . /var/www/html

# Atur direktori kerja
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Install dependencies Laravel
RUN composer install --no-dev --optimize-autoloader

# Set permission agar Laravel bisa menulis cache & storage
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80 agar bisa diakses
EXPOSE 80

# Jalankan Apache
CMD ["apache2-foreground"]

FROM php:8.1.0-apache

# Set working directory
WORKDIR /var/www/html

# Enable mod_rewrite
RUN a2enmod rewrite

# Install required libraries and tools
RUN apt-get update -y && apt-get install -y \
    libicu-dev \
    libmariadb-dev \
    unzip zip \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpq-dev  # PostgreSQL development package

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP extensions including pdo_pgsql
RUN docker-php-ext-install gettext intl pdo_mysql gd pdo_pgsql

# Configure and enable GD extension with JPEG and PNG support
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Set permissions for the web directory
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

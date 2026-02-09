# Use the official PHP 8.4 CLI image as the base
FROM php:8.4-cli

# Install system dependencies required for Laravel, Composer, and PostgreSQL
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev \
    libzip-dev

# Clear the apt cache to reduce the image size
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions:
# pdo_pgsql: for PostgreSQL database connection
# mbstring, exif, pcntl, bcmath, gd, zip: standard Laravel requirements
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd zip

# Get the latest Composer (PHP package manager)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Node.js (version 20) to compile frontend assets
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Set the working directory inside the container
WORKDIR /var/www

# Copy all project files into the container
COPY . /var/www

# Install PHP dependencies (optimize for production, no dev tools)
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Set permissions for storage and cache directories so Laravel can write to them
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Install JavaScript dependencies and build assets (Vite)
RUN npm install && npm run build

# Expose port 10000 (Render's default port)
EXPOSE 10000

# Start command:
# 1. Run database migrations
# 2. Start the built-in Laravel server on port 10000
CMD ["sh", "-c", "php artisan package:discover --ansi && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000"]

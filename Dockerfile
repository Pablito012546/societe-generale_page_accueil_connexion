FROM php:8.2-apache

# Activer mod_rewrite
RUN a2enmod rewrite

# Installer dépendances système + extensions PHP souvent utilisées
RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libzip-dev zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mbstring zip pdo pdo_mysql

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Définir le dossier de travail
WORKDIR /var/www/html

RUN mkdir -p /var/log/apache2 && touch /var/log/apache2/error.log && chmod 666 /var/log/apache2/error.log


# Copier les fichiers du projet
COPY . .

# Installer les dépendances PHP (si composer.json présent)
RUN if [ -f composer.json ]; then composer install --no-dev --optimize-autoloader || true; fi

# Donner les permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exposer le port 80
EXPOSE 80

CMD ["apache2-foreground"]

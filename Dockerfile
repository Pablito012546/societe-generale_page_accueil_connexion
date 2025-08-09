# Utiliser l'image officielle PHP avec Apache
FROM php:8.2-apache

# Activer mod_rewrite
RUN a2enmod rewrite

# Copier les fichiers dans le dossier web du conteneur
COPY . /var/www/html/

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Installer les dépendances PHP
WORKDIR /var/www/html
RUN composer install --no-dev --optimize-autoloader

# Donner les permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exposer le port 80
EXPOSE 80

# Lancer Apache
CMD ["apache2-foreground"]

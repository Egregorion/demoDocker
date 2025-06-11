#image d'origine
FROM php:8.4.8-apache

# Installer l'extension PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copier les fichiers de ton application dans le conteneur
COPY . /var/www/html

# Exposer le port 80 pour Apache
EXPOSE 80
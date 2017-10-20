# Use the latest PHP FPM (fast process manager - for NginX) official Alpine image
# The Alpine image is based off a tiny version of Linux (Alpine Linux), and unless you are
# doing anything quite advanced with your setup you probably won't need a full Debian-based image
FROM php:fpm-alpine

# Install PHP's PDO and PDO_MySQL extensions
RUN docker-php-ext-install pdo pdo_mysql

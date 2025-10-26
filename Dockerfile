FROM php:8.1-apache
WORKDIR /var/www/html

COPY . /var/www/html/
# ensure our public folder is Apache document root
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf \
    && a2enmod rewrite

# If you need other PHP extensions, install them here:
# RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80
CMD ["apache2-foreground"]

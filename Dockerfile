FROM php:8.1-apache
WORKDIR /var/www/html

COPY . /var/www/html/

RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf \
    && a2enmod rewrite



EXPOSE 80
CMD ["apache2-foreground"]

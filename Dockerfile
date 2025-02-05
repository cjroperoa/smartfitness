FROM php:5.3-apache

ENV DEBIAN_FRONTEND=noninteractive

# Repositories Debian Jessie (obsolete, necesary PHP 5.3)
RUN echo 'deb http://archive.debian.org/debian jessie main' > /etc/apt/sources.list && \
    echo 'deb http://archive.debian.org/debian-security jessie/updates main' >> /etc/apt/sources.list && \
    echo 'Acquire::Check-Valid-Until "false";' > /etc/apt/apt.conf.d/99no-check-valid-until && \
    apt-get update && \
    apt-get install -y --allow-unauthenticated \
    php5-mysql php5-gd php5-curl php5-cli unzip wget && \
    apt-get clean

# Apache config 
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html\n\
    ServerName localhost\n\
    <Directory /var/www/html>\n\
        Options Indexes FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

# Site
COPY src/ /var/www/html/
RUN chown -R www-data:www-data /var/www/html/

EXPOSE 80

CMD ["apache2ctl", "-D", "FOREGROUND"]

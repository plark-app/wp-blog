FROM wordpress:5.2.3-php7.2-apache
WORKDIR /var/www/html

RUN gulp build
COPY wp-content ./wp-content/
FROM wordpress:5.2.3-php7.2-apache as WP

FROM php:7.2-apache

COPY ./squaretype /usr/src/wordpress/wp-content/themes/

RUN mkdir -p /var/www/html/blog/wp-content && \
    chown -R www-data:www-data /var/www/html/blog

WORKDIR /var/www/html

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]

FROM node:latest as NODE_MODULES
WORKDIR /usr/src/plark-blog
COPY package.json gulpfile.js ./
COPY app app/
RUN npm install && \
    npm run build

FROM wordpress:5.2.3-php7.2-apache as WP

FROM php:7.2-apache

COPY --from=WP / /
COPY --from=NODE_MODULES /usr/src/plark-blog/dist /usr/src/wordpress/wp-content/themes/

RUN mkdir -p /var/www/html/blog/wp-content && \
    chown -R www-data:www-data /var/www/html/blog

WORKDIR /var/www/html

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]

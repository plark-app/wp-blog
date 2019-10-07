FROM node:latest as NODE_MODULES
WORKDIR /usr/src/plark-blog
COPY package.json gulpfile.js ./
COPY app app/
RUN npm install && \
    npm run build

FROM wordpress:5.2.3-php7.2-apache
WORKDIR /var/www/html
COPY --from=NODE_MODULES /usr/src/plark-blog/dist /var/www/html


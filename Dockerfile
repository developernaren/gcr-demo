FROM devilbox/php-fpm-7.4:latest

ENV COMPOSER_VERSION 1.8.6

COPY ./ /app
WORKDIR /app

EXPOSE 8080

CMD ["php", "public/index.php"]

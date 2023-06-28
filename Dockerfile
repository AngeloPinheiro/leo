FROM php:8.2-cli
WORKDIR /usr/src/leo
COPY . /usr/src/leo
RUN apt-get update && \
    apt-get install --no-install-recommends --no-install-suggests -y \
    git libzip-dev libpq-dev
RUN PHP="/usr/local/lib/php"
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
RUN docker-php-ext-install zip
RUN docker-php-ext-install pcntl
RUN docker-php-ext-install pgsql pdo_pgsql
RUN composer install --no-interaction
EXPOSE 8080
CMD php -c php-workerman.ini server.php start

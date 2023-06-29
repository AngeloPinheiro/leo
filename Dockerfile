FROM php:8.2-cli
WORKDIR /usr/src/leo
COPY . .
RUN apt-get update && \
    apt-get install --no-install-recommends --no-install-suggests -y \
    git libzip-dev libpq-dev
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
RUN docker-php-ext-install zip
RUN docker-php-ext-install pcntl
RUN docker-php-ext-install pgsql pdo_pgsql
RUN composer install --no-interaction
EXPOSE 8080
RUN PHP="/usr/local/lib/php"
RUN --mount=type=bind,source=.,target=/usr/src/leo
CMD php -c php-workerman.ini server.php start

# sudo docker build -t leo:latest .
# sudo docker run --rm --name leo -it -p 9090:8080 leo:latest
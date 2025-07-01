FROM php:8.1.10-fpm-buster

RUN apt-get update

# Install Postgre PDO
RUN apt-get install -y libpq-dev zip unzip \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

COPY ./docker/php-fpm/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf

COPY ./src /app

WORKDIR /app

RUN php -d allow_url_fopen=1 -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -d allow_url_fopen=1 -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php -d allow_url_fopen=1 composer-setup.php \
    && php -d allow_url_fopen=1 -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer

RUN composer install
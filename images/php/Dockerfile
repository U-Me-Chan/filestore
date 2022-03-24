FROM library/php:8.0-fpm
RUN apt update -yyq && apt install -yyq zip libzip-dev libmagickwand-dev
RUN docker-php-ext-install zip
RUN pecl install imagick
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin/ --filename composer

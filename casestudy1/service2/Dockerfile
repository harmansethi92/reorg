FROM php:7.2-fpm

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php composer-setup.php \
  && php -r "unlink('composer-setup.php');" \
  && chmod +x composer.phar \
  && mv composer.phar /usr/local/bin/composer


RUN apt-get update && apt-get install -y \
    git build-essential libmcrypt-dev libreadline-dev zip unzip


RUN docker-php-ext-install pdo_mysql
COPY . /var/www/html
RUN composer install

RUN cat .env.example > .env

RUN php artisan key:generate

RUN chmod -R 777 /var/www/html/storage

RUN cat credentials.txt >> .env

RUN cp /var/www/html/index.php /var/www/html/public/
 
ENV MYSQL_USER=devuser
ENV MYSQL_PASSWORD=devpass
CMD ["/usr/local/sbin/php-fpm"]

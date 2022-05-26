FROM php:7.4-apache
#RUN apt-get clean && apt-get update; 
# https://gist.github.com/hoandang/88bfb1e30805df6d1539640fc1719d12
RUN docker-php-ext-install -j$(nproc) mysqli
RUN docker-php-ext-install -j$(nproc) pdo
RUN docker-php-ext-install -j$(nproc) pdo_mysql
#RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
#ENTRYPOINT ["docker-php-entrypoint"]
RUN a2enmod rewrite

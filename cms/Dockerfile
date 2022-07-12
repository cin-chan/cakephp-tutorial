FROM php:8.1-cli

RUN apt-get update \
    && apt-get install -y unzip libicu-dev apache2 \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo_mysql \
    && a2enmod rewrite \
    && apt-get clean \
    && rm -fr /var/lib/apt/lists/*

# apt-get update && apt-get upgrade && \
# apt-get install iputils-ping -y


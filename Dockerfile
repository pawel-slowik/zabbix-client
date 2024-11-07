FROM php:7.4-cli

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/

RUN apt-get update

# for Composer
RUN apt-get install -y unzip

WORKDIR /app

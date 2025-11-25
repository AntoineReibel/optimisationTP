FROM php:8.2-apache

RUN apt-get update \
    && docker-php-ext-install -j$(nproc) mysqli pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

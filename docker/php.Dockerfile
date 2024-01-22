FROM php:8.3-fpm

# Update
RUN apt-get update

# Install packages
RUN apt-get install -y git curl zip
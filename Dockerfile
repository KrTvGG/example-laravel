FROM alpine:3.19.1

RUN apk add --no-cache \
    php-openssl \
    php-common \
    php-json \
    php-bcmath \
    php-gd \
    php-redis \
    php-xmlwriter \
    php-session \
    php-xml \
    php-ctype \
    php-curl \
    php-dom \
    php-fileinfo \
    php-mbstring \
    php-openssl \
    php-pdo \
    php-pdo_pgsql \
    php-pdo_mysql \
    php-simplexml \
    php-tokenizer \
    php-pgsql \
    imagemagick \
    imagemagick-libs \
    imagemagick-dev \
    php-pcntl \
    php-zip \
    composer \
    nodejs \
    npm

RUN mkdir -p /app

WORKDIR /app

COPY ./entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh

CMD ["/entrypoint.sh"]
FROM phpdockerio/php:8.1-fpm
WORKDIR "/feegow"

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        php8.1-mysql zip; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl https://gist.githubusercontent.com/phtfao/806892e239b6ec5df5284b4c6bfbb535/raw/de4cfd5b6fa140276b321e91167208e466f146c7/auth.json -o /tmp/auth.json

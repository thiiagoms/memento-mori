FROM php:7.4-cli

WORKDIR /src

COPY . /src

RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

CMD ["php", "memento-mori"]
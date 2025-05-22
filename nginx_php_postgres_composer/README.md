# Nginx + PHP + PostgreSQL + Composer
    docker compose up

## Composer
    docker run --rm --name composer -it -v .\src/:/app/ composer:2.8.9 composer require guzzlehttp/guzzle
/app/ - composer image's default working directory, that it scaffolds project
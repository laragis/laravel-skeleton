# Laravel Skeleton

## Installation

```shell
cd ../../ && \
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www \
    -w /var/www/apps/backend \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs && \
cd apps/backend
```

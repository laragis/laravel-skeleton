# Laravel Sekeleton

## Installation
Run command at backend folder location
```shell
cd ../../ && \
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd)/apps/backend/:/var/www/apps/backend \
    -w /var/www/apps/backend \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs && \    
cd apps/backend
```
# Memepedia

## Instalación
```bash
cp .env.example .env && \
composer install && \
php artisan storage:link && \
php artisan migrate:fresh --seed
```

### Run DB and Adminer:
```bash
service apache2 start; service mysql start
```
Adminer interface: http://localhost:80/adminer

### Laravel docs:
https://laravel.com/docs/8.x/
# Docker Deployment Guide

## Services included
- PHP 8.3 FPM + Nginx
- MySQL 8
- Redis

## Quick start
```bash
cp .env.example .env
# update database and app settings

docker compose up -d --build
```

## After containers start
```bash
docker compose exec app composer install
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate --seed
docker compose exec app php artisan storage:link
```

## Production notes
- terminate SSL at a reverse proxy or load balancer
- move uploads to object storage if traffic grows
- set queue worker and scheduler as separate services for production
- back up MySQL and uploaded files automatically

# merqueo-backend

## Getting Start

Laravel 5.6 Doc - https://laravel.com/docs/5.6

## Configuration

1. You must have [Composer](https://getcomposer.org/)

2. Then. Install Laravel with command

```
composer global require "laravel/installer"
```

3. Navigate until merqueo folder. You have to install composer dependencies with:

For this step by sure you have git in path variable

```
composer install
composer update
```

It will be create a vendor folder for autoload

4. Be sure you have .env file in project with correct settings, specially in DB and MAIL. By default **This file is not comming within folder project** You have to clone from .env.example and setting with these values

```
cp .env.example .env
```

```
APP_NAME=merqueo.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=merqueo
DB_USERNAME=theuserofdb
DB_PASSWORD=thepasswordfordb
```

5. Generate the key with

```
php artisan key:generate
```

6. When you set up the database you have to run. Be sure you have created a schema named merqueo

```
php artisan migrate
```

Be sure you have successful conection with the database.

If you want to restart database. You have to run

```
php artisan migrate:fresh
```

This Project is using [Eloquent](https://laravel.com/docs/5.6/eloquent) 


Sometimes it is necessary clear cache

```
php artisan config:cache
```

## Running app

Just use XAMPP or MAMP and you php.ini has enabled pdo. Be sure Apache is pointing to **public** folder from project

## Useful Links

### Laravel Doc

[Laravel](https://laravel.com/docs/5.6) 

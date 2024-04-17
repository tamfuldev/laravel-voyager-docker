<p align="center">
    <a href="https://the-control-group.github.io/voyager/" target="_blank">
        <img width="400" src="https://www.troispointzero.fr/content/uploads/2018/04/thumb2.png">
    </a>
</p>

<a href="https://packagist.org/packages/tcg/voyager"><img src="https://poser.pugx.org/tcg/voyager/downloads.svg?format=flat" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/tcg/voyager"><img src="https://poser.pugx.org/tcg/voyager/v/stable.svg?format=flat" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/tcg/voyager"><img src="https://poser.pugx.org/tcg/voyager/license.svg?format=flat" alt="License"></a>
<a href="https://github.com/larapack/awesome-voyager"><img src="https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg" alt="Awesome Voyager"></a>
</p>

# **V**oyager - The Missing Laravel Admin

Made with ❤️ by [The Control Group](https://www.thecontrolgroup.com)

![Voyager Screenshot](https://s3.amazonaws.com/thecontrolgroup/voyager-screenshot.png)

Website & Documentation: https://voyager.devdojo.com/

<hr>

Laravel Admin & BREAD System (Browse, Read, Edit, Add, & Delete), supporting Laravel 10.x and newer!

> Want to use Laravel 10.x? Use [Voyager 1.7](https://github.com/the-control-group/voyager/tree/1.7)

## Introduction

Build a simple laravel development environment with docker-compose. Compatible with Windows(WSL2), macOS(M1) and Linux.

## Installation Steps

### 1. Laravel install

1. Click [Use this template](https://github.com/ucan-lab/docker-laravel/generate)
2. Git clone & change directory
3. Execute the following command

```bash
$ mkdir -p src
$ docker compose build
$ docker compose up -d
$ docker compose exec app composer create-project --prefer-dist laravel/laravel .
$ docker compose exec app php artisan key:generate
$ docker compose exec app php artisan storage:link
$ docker compose exec app chmod -R 777 storage bootstrap/cache
$ docker compose exec app php artisan migrate
```

http://localhost

### 2. Laravel setup
https://blog.desdelinux.net/vi/Makefile-l%C3%A0-g%C3%AC-v%C3%A0-n%C3%B3-ho%E1%BA%A1t-%C4%91%E1%BB%99ng-nh%C6%B0-th%E1%BA%BF-n%C3%A0o-trong-linux/
1. Git clone & change directory
2. Execute the following command

```bash
$ sudo apt install make
$ make install
```


### 3. Require the Package

After creating your new Laravel application you can include the Voyager package with the following command:

```bash
composer require tcg/voyager
```

### 4. Add the .env

Next make sure to create a new database and add your database credentials to your .env file:

```
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost
APP_BUILD_TARGET=development

LOG_CHANNEL=stderr

LOG_STDERR_FORMATTER=Monolog\Formatter\JsonFormatter

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=phper
DB_PASSWORD=secret

WEB_PUBLISHED_PORT=80
DB_PUBLISHED_PORT=3306
MAILHOG_PUBLISHED_PORT=8025
```

You will also want to update your website URL inside of the `APP_URL` variable inside the .env file:

```
APP_URL=http://localhost:8000
```

### 5. Run The Installer

Lastly, we can install voyager. You can do this either with or without dummy data.
The dummy data will include 1 admin account (if no users already exists), 1 demo page, 4 demo posts, 2 categories and 7 settings.

To install Voyager without dummy simply run

```bash
php artisan voyager:install
```

If you prefer installing it with dummy run

```bash
php artisan voyager:install --with-dummy
```

And we're all good to go!

Start up a local development server with `php artisan serve` And, visit [http://localhost:8000/admin](http://localhost:8000/admin).

## 6. Creating an Admin User

If you did go ahead with the dummy data, a user should have been created for you with the following login credentials:

> **email:** `admin@admin.com`  
> **password:** `password`

NOTE: Please note that a dummy user is **only** created if there are no current users in your database.

If you did not go with the dummy user, you may wish to assign admin privileges to an existing user.
This can easily be done by running this command:

```bash
php artisan voyager:admin your@email.com
```

If you did not install the dummy data and you wish to create a new admin user you can pass the `--create` flag, like so:

```bash
php artisan voyager:admin your@email.com --create
```

And you will be prompted for the user's name and password.

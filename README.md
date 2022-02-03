# Laravel Todo-List

To-do list application developed with Laravel 8.

## Table of Contents

- [Installation](#installation)
- [Setting Up](#setting-up)

### Installation

Minimum Requirement

- "php": "^7.3|^8.0"


Git clone the repo

```sh
git clone https://github.com/ibrahimozden/todo.git
```

Install Project dependencies

```sh
composer install
```

### Setting up

Set up .env file

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DATABASE_NAME
DB_USERNAME=YOUR_DATABASE_USERNAME
DB_PASSWORD=YOUR_DATABASE_PASSWORD
```

**Note!**: Please make sure you have create a database before running migration.

Run migration

```sh
php artisan migrate
```

Serve your project using artisan command

```sh
php artisan serve
```

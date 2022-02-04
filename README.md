# Laravel Todo-List

To-do list application developed with Laravel 8.
With this application, you can register and log in, add, edit, delete your to-do tasks. You can search by the word you want. You can also switch to paging on data above 10.
# Register
![Opera Anlık Görüntü_2022-02-04_022605_127 0 0 1](https://user-images.githubusercontent.com/43759769/152446407-c55c5a0b-43d5-4079-a7e8-a0f7fbc05561.png)
# Login
![Opera Anlık Görüntü_2022-02-04_022619_127 0 0 1](https://user-images.githubusercontent.com/43759769/152446427-2b31a997-eb5f-4307-a403-7d836bd58325.png)
# Todo List
![Opera Anlık Görüntü_2022-02-04_022533_127 0 0 1](https://user-images.githubusercontent.com/43759769/152446453-9cc648cb-7c0c-43d3-8ba1-fe19b6116007.png)
# Add
![Opera Anlık Görüntü_2022-02-04_022650_127 0 0 1](https://user-images.githubusercontent.com/43759769/152446484-005bdf9f-1266-42e8-8611-85e7d5f7917d.png)
# Update
![Opera Anlık Görüntü_2022-02-04_022718_127 0 0 1](https://user-images.githubusercontent.com/43759769/152446497-d0409a7b-a162-45f7-8439-b760b294a9f4.png)
# Search
![Opera Anlık Görüntü_2022-02-04_022748_127 0 0 1](https://user-images.githubusercontent.com/43759769/152446564-0ddaa498-0409-4830-94c4-f8ff6c68d137.png)
# Pagination
![Opera Anlık Görüntü_2022-02-04_022826_127 0 0 1](https://user-images.githubusercontent.com/43759769/152446566-e3071ab9-758d-4af0-a980-f3c0483a188f.png)

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
Then cd into the folder with this command-

```sh
cd laravel-crud
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

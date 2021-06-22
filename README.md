# Laravel To Do List
Laravel ToDoList is an activity event ToDoList for your Laravel application. It comes out the box with ready to use with dashboard to view your activity. Laravel ToDoList can be added as a middleware or called through a trait. Easily have an Activity Log. This package is easily configurable and customizable. Supports Laravel 5.3, 5.4, 5.5, 5.6, 5.7, 5.8, 6, and 7+

<a href="https://styleci.io/repos/109630720">
    <img src="https://styleci.io/repos/109630720/shield?branch=master" alt="StyleCI" style="border-radius: 3px;">
</a>
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jeremykenedy/laravel-logger/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/jeremykenedy/laravel-logger/?branch=master)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

### Features
| Laravel Activity Logger Features  |
| :------------ |
|Daily to do list|

### Requirements
* [Laravel 5.1, 5.2, 5.3, 5.4, 5.5, 5.6, 5.7, 5.8, 6, and 7+](https://laravel.com/docs/installation)

### Laravel Installation Instructions
1. From your projects root folder in terminal run:

```bash
    composer require swapnilkharecodiant/todolist
```

2. Register the package

* Laravel 5.5 and up
Uses package auto discovery feature, no need to edit the `config/app.php` file.

* Laravel 5.4 and below
Register the package with laravel in `config/app.php` under `providers` with the following:

```php
    'providers' => [
        Codiant\Todolist\Providers\TodolistServiceProvider::class,
    ];
```

3. Run the migration to add the table to record the activities to:

```php
    php artisan migrate
```

* Note: If you want to specify a different table or connection make sure you update your `.env` file with the needed configuration variables.

4. Optionally Update your `.env` file and associated settings (see [Environment File](#environment-file) section)

5. Optionally publish the packages views, config file, assets, and language files by running the following from your projects root folder:

```bash
    php artisan vendor:publish --tag=codiant\todolist\TodolistServiceProvider 
```


### Routes
##### ToDoList Routes

* ```/task/create```
* ```/task-store```
* ```/task/{id}/edit```
* ```/task-update```
* ```/task-destroy```

### File Tree

```bash
├── .gitignore
├── README.md
├── composer.json
└── src
    ├── Database
    │   └── Migrations
    │       └── 2021_06_21_053144_create_task_table.php
    ├── Http
    │   └── Controllers
    │   |   └── TodolistController.php
    │   └── routes.php
    ├── Models
    │   └── Task.php
    ├── Providers
    │   └── TodolistServiceProvider.php
    ├── Resources
    │   └── views
    │       ├── app.blade.php
    │       └── list.blade.php

### License
To Do List is licensed under the TEST license. Enjoy!
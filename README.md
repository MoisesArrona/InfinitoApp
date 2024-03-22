# InfinitoApp 👾
This web application controls the tasks assigned in a work group, incorporates a help desk where customers report problems and are followed up.

>__v0.0.2__   
__Author:__ [@moisesarrona](https://github.com/mosesarrona)  
__Description:__ Update dependecies.

## Features

### Technologies 💻
- Laravel 8*
    - Migrations (Create DB)
    - Seeders (Insert to DB)
    - Auth (Laravel/ui)
- Bootstrap 4*
- JavaScript
    - JQuery

### Dependencies 🏗️
- Carbon (DateTime)

### Requirements 📋
- PHP ^7.3 - ^8.0
- MySQL 5.7.39
- Apache2 
- Composer 
- Git

## Install enviroment 
- install brew
    - install php - brew install php
    - install composer - brew install composer

## Setup 🚀

- Step 1
Download the project

- Step 2
Update dependeces with
```
composer update
```

- Step 3
Copy development file
````
p .env.example .env
````

- Step 4
Generate key to hashing
```
php artisan key:generate
```

- Step 5
Modify file .env with your credentials mysql

- Step 6
Run migration and seeders with
````
~ ❯ php artisan migrate --seed
````

- Step 7
````
~ ❯ php artisan serve
````

- Step 8
Log in  with this credentials

**option 1 (Admin)**
````
email: admin@infinito.com
password: Admin123
````

**option 2 (Employee)**
````
email: employee@infinito.com
password: Employee123
````

**option 3 (Client)**
````
email: client@infinito.com
password: Client123
````

#### About me 👨‍💻
Hi, my name is **Moises Arrona** I'm creator this library, follow me in [Github](https://github.com/mosesarrona) for more projects or [Instagram](https://www.instagram.com/moisesarrona/) for anything
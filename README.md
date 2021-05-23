# InfinitoApp 👾
### Web aplication for Infinito Computación

This application controls the tasks assigned in a work group, incorporates a help desk where customers report problems and are followed up.

### Technologies 💻
- HTML5
- CSS3
- JavaScript
    - JQuery
- Bootstrap 4*
- PHP
    -Laravel 6*

### Requirements 📋
- Apache2
- MySQL
- Composer
- Git

## Setup 🚀

### Step 1
Download the project

### Step 2
Open the project path in the terminal

### Step 3
Update dependeces with
````
composer update
`````

### Step 4
Copy development file
````
cp .env.example .env
````

### Step 5
Generate key to hashing
````
php artisan key:generate
`````

### Step 6
Modify file .env with your credentials mysql

### Step 7
Run migration and seeders with
````
php artisan migrate --seed
````

### Step 8
````
php artisan serve
````

### Step 9
Log in  with this credentials

#### option 1 (Admin)
````
email: admin@infinito.com
password: Admin123
````

#### option 2 (Employee)
````
email: employee@infinito.com
password: Employee123
````

#### option 3 (Client)
````
email: client@infinito.com
password: Client123
````



#### Follow me 👨‍💻
* [GitHub/moisesarrona](https://github.com/MoisesArrona/) - GitHub - Software Enginer

* [Instagram/moisesarrona](https://www.instagram.com/moisesarrona/) - Instgram - Software Enginer

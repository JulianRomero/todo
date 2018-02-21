# todo
Simple Larvel TODOs App Goals

Show Framework Abilities
- Routing
- Model Data Binding
- Schema Setup Files
- Schema foreign key setup
- Controller 
- Blade Template
- Blade Views
- Eloquent Models
- Factories
- Seeding the Database; adding records to your tables for testing



Setup Instructions
1) run: git clone https://github.com/JulianRomero/todo.git
2) cd todo
3) run: composer install
4) Copy .env.example and save it as .env
5) php artisan key:generate
6) Create a MySQL Database on your environment
7) Change mysql .env variavles
    DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=Your_Database_Name
	DB_USERNAME=Your_Database_User
	DB_PASSWORD=Your_Database_Password

8) Add Some Records in the DB
	php artisan db:seed
9) Test the app with PHP built in server or your prefer method
	php -S localhost:8181 public/index.php
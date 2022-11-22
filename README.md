# Student Management

## tech stack
- php 8.1 (laravel-9)
- mysql
- passport

## how to run

1. clone project
```bash
git clone git@github.com:NaofalMufid/api-student-mng.git
```
2. Go to the project drectory by 
```bash
cd api-student-mng
```
3. Create .env file & Copy .env.example file to .env file
4. Create a database called - student-management.
5. Install composer packages - composer install.
6. Now migrate and seed database to complete whole project setup by running this
```bash
php artisan migrate
php artisan db:seed
```
7. Run this artisan
```bash
php artisan passport:install
```
8. Run the server

## download postman collection
- download this postman [collection](https://www.getpostman.com/collections/b8577787b6c87f209f81)
- run api on postman

## License

This is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Make following steps to install application:

1) Check your database settings in .env and config/database.php , make sure you have a database name slot.

2) php artisan migrate

3) php artisan db:seed

4) just run php artisan serve --port=8080

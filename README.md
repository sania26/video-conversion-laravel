# video-conversion-laravel
steps for installig the project
git clone https://github.com/sania26/video-conversion-laravel


# update database details in the .env file 

DB_DATABASE=laravel_stream

DB_USERNAME=username

DB_PASSWORD=password

QUEUE_CONNECTION=database

# then run all the migrations
to create tables for user info and the videos uploading informations
$ php artisan migrate

# run composer to install the necessary dependencies 
$ composer install
$ php artisan preset bootstrap
$ npm install && npm run dev

# run the Laravel queue worker
$ php artisan queue:work --tries=3 --timeout=8600
You need to run the queues separately

# Finally 
before running the serve command link the storage directory

$php artisan storage:link
$php artisan serve





# Choravelle
A website engine based on Laravel, thinked for vocal ensembles.


## Setup
After downloading this repo you will need to complete the installation with the following steps:

- run composer update
- edit the config/app.php and .env file with your settings (language, name of the website, url, database connection informations...)
- chmod -R 777 on "storage" and "bootstrap/cache" directories
- run the php artisan key:generate command

Choravelle uses Quarx for its CMS features. To install it:

- php artisan quarx:setup


You should now be able to login with the default credentials:
* User: admin@example.com
* Password: admin




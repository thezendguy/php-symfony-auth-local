# php-symfony-auth-local
A basic and lean recipe for implementing username/password authentication in Symfony3.

This application will connect to the local mysql server, create a new database
called <strong><code>symfony</code></strong> and a new table inside this called
<strong><code>user</code></strong>.


Dependencies
-
git  
php v5.5.9+  
composer  
MySQL


To install
-
```
$ mkdir -vp php-symfony-auth-local  
$ cd php-symfony-auth-local  
$ git clone https://github.com/benjaminvickers/php-symfony-auth-local.git .  
$ composer install
```
Enter the database connection details when prompted by composer. Otherwise you
can edit the details in the <strong><code>app/config/parameters.yml</code></strong> 
file. Remember the database name should be set to <strong><code>symfony</code></strong>.


To setup
-
```
$ sudo service mysql start  
$ php bin/console doctrine:database:create  
$ php bin/console doctrine:schema:update --force
```


To run in dev mode
-
```
$ php bin/console server:run
```


To test in a browser
-
Visit: http://localhost:8000/  
Register a new user:  http://localhost:8000/register  
Access the dashboard: http://localhost:8000/dashboard  
Logout: http://localhost:8000/logout  
Login: http://localhost:8000/login  

The dashboard should only be accessible when the user is logged in. The 
<strong><code>/login</code></strong> and <strong><code>/register</code></strong>
pages should only be accessible when the user is not logged in.


Resources
-
http://symfony.com/doc/current/bundles/FOSUserBundle/index.html  
http://symfony.com/doc/current/book/security.html

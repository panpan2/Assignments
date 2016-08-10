# Task4 - Extended "Register User" Application

This is a simple web-application that registers a new user in a database
as long as he provides valid name, email and phone number.

## Valid input
  - All fields should be non-empty and in utf-8 encoding
  - Email must be unique
  - Email should have a valid form "mail@email.com"
  - Name must not include numbers
  - Phone number should only include numbers

## Dependencies:
  - Docker Engine  
    [Install Docker Engine](https://docs.docker.com/engine/installation/)
  - Docker Compose  
    [Install Docker Compose](https://docs.docker.com/compose/install/)
  - Laravel  
    [Install Laravel](https://laravel.com/docs/5.2/installation)
  - Composer  
    [Install Composer](https://getcomposer.org/doc/00-intro.md)

## How to setup and run
#### Introduction
Before every run, change to the *task4/* directory and execute (*www/* has to be in your working directory)
```
$ chmod -R 777 www
```
Also check any other docker containers that are running (in case of conflicts), by running
```
$ docker ps
```
It might be useful to use a root shell for setting up the project by executing
```
$ sudo -s
```
#### Packages
To start setting up the project packages go to the *www/* directory and execute
```
$ composer update
```
#### Run and Stop project
Now you can run the project by changing to the *task4/* directory and executing
```
$ chmod -R 777 www
$ docker-compose up -d
```
**Warning!** The application is not ready yet. First check that the project is running at [http://localhost](http://localhost) and execute
```
$ docker-compose run artisan migrate:refresh
```
If it outputs a *[PDOException] Connection refused* insist on executing
```
$ docker-compose run artisan migrate:refresh
```
to setup the database migration table
To stop the containers from running, go to the *task4/* directory and execute
```
$ docker-compose stop
```
#### Database errors
While setting up the database, if you get a port error associated with mysql, stop your local mysql server and then try again
```
$ sudo /etc/init.d/mysql stop
```
In case of database errors stop the container and follow the instructions below.
To setup the database go to the *task4/* directory and execute
```
$ chmod -R 777 www
$ docker-compose run artisan migrate
```
If the response is "Nothing to migrate" execute
```
$ docker-compose run artisan migrate:refresh
```
If the response is "Refused to connect" insist on executing
```
$ docker-compose run artisan migrate
```
If the response is that the table exists
```
$ docker-compose run artisan migrate:rollback
```
That will output an error along with the name of a file <filename> in the form  
```
2016_XX_XX_XXXXXX_create_users_table
```
Execute
```
$ cd www/database/migrations
$ mv 2016_07_31_094704_create_users_table.php <filename>.php
```
where <filename> is the file mentioned above(from migrate:rollback).  
Then try to reset the database, by going back to the *task4/* directory and executing
```
$ docker-compose run artisan migrate:refresh
```
#### Unit tests
To run Unit tests with Behat, we execute Behat in the nginx container.  
After running the project, execute
```
$ docker ps
```
One should see 3 containers:
  - *dydx/alpine-nginx-phpfpm*
  - *spiralout/alpine-redis*
  - *spiralout/alpine-mariadb*   

Copy the Container id of *dydx/alpine-nginx-phpfpm* and execute
```
$ docker exec -it <nginx_id> apk add --update bash
$ docker exec -it <nginx_id> /bin/bash
```
In nginx then execute
```
$ cd var/www
$ vendor/bin/behat
```
And the Unit tests will run.
To exit nginx just type
```
$ exit
```

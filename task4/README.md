# Task3 - Register User Application

This is a simple web-application that registers a new user in a database
as long as he provides valid name/email.

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
Before every run, change to the *task3/* directory and execute (*www/* has to be in your working directory)
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
$ mkdir database
$ composer update
```
#### Database
While setting up the database, if you get a port error associated with mysql, stop your local mysql server and then try again
```
$ sudo /etc/init.d/mysql stop
```
To setup the database go to the *task3/* directory and execute
```
$ mv database www/
$ chmod -R 777 www
$ docker-compose run artisan make:migration create_users_table
```
That should output the name of the created file <name_of_file> in the form
```
Created Migration: ****_**_**_****_create_users_table
```
Then execute
```
$ mv www/database/migrations/2014_10_12_000000_create_users_table.php www/database/migrations/<name_of_file>
$ docker-compose run artisan migrate
```
#### Run and Stop project
Now you can run the project by changing to the *task3/* directory and executing
```
$ chmod -R 777 www
$ docker-compose up -d
```
The project can be found at [http://localhost](http://localhost)

To stop the containers from running, go to the *task3/* directory and execute
```
$ docker-compose stop
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

# Task5 - SPA "Register User" Application

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
Before every run, change to the *task5/* directory and execute (*www/* has to be in your working directory)
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
Now you can run the project by changing to the *task5/* directory and executing
```
$ chmod -R 777 www
$ docker-compose up -d
```
**Warning!** The application is not ready yet. First check that the project is running at [http://localhost](http://localhost) and execute
```
$ docker-compose run artisan migrate:refresh
```
If it outputs a *[PDOException] Connection refused* re-execute
```
$ docker-compose run artisan migrate:refresh
```
to setup the database migration table
To stop the containers from running, go to the *task5/* directory and execute
```
$ docker-compose stop
```
#### Database errors
While setting up the database, if you get a port error associated with mysql, stop your local mysql server and then try again
```
$ sudo /etc/init.d/mysql stop
```
In case of database errors stop the container and follow the instructions below.
To setup the database go to the *task5/* directory and execute
```
$ chmod -R 777 www
$ docker-compose run artisan migrate
```
If the response is "Nothing to migrate" execute
```
$ docker-compose run artisan migrate:refresh
```
In case of some error message saying that the table exists execute
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
Then try to reset the database, by going back to the *task5/* directory and executing
```
$ docker-compose run artisan migrate:refresh
```
#### Protractor tests
Change to the *www/protractor/* directory.  
To execute the following make sure you have a working application at [http://localhost](http://localhost).  
Run the Selenium Webdriver Docker container with
```
$ docker run --rm --net="host" -e VNC_PASSWORD=pancakes elgalu/selenium:2.53.0g
```
Then on a *separate* terminal run the Protractor Docker container  
```
$ docker run -it --rm --net="host" -v `pwd`:/src felippenardi/yo
```
Then run the specs inside the container with
```
$ protractor conf.js
```
To exit the container just type
```
$ exit
```

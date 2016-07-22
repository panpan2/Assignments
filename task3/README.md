# Task3 - Register User Application

This is a simple web-application that registers a new user in a database
as long as he provides valid name/email.

## Valid input
  - All fields should be non-empty and in utf-8 encoding
  - Name and Email together must be unique
  - Email should have a valid form "mail@email.com"
  - Name must not inlude numbers

## Dependencies:
  - Docker Engine  
    [Install Docker Engine](https://docs.docker.com/engine/installation/)
  - Docker Compose  
    [Install Docker Compose](https://docs.docker.com/compose/install/)

## How to run
Before every run change to the *task3/* directory and execute (*www/* has to be in your working directory)
```
$ chmod -R 777 www
```
To begin the project go to the task3/ directory execute
```
$ docker-compose up -d
```
If you get a port error associated with mysql, stop your local mysql server and then try again
```
$ sudo /etc/init.d/mysql stop
```
If you have problems with packages, go to the *www/* directory and execute
```
$ composer update
```
To stop the containers, go to the *task3/* directory and execute
```
$ docker-compose stop
```

## Unit tests
To run Unit tests with Behat, we execute Behat in the nginx container.  
Execute
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

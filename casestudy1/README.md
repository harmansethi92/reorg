## Maintainer
Harman

## Description
This Case Study consists 3 PHP Services and a MYSQL database all running on Docker Containers.
  
## Tech/Framework used
* PHP Laravel/Lumen
* MYSQL
* docker
* docker-compose

## All Environment Variables
HOSTNAME
MYSQL_ROOT_PASSWORD
MYSQL_DATABASE
MYSQL_USER
MYSQL_PASSWORD

## Tasks Executed
Three services were cloned from the provided repositories:
git clone git@github.com:laravel/laravel.git service1
git clone git@github.com:laravel/laravel.git service2
git clone git@github.com:laravel/laravel.git service3

A Dockerfile was setup on each repository to run the php service in a docker container.
A custom index.php file was written for each service which shows the connection to MYSQL container
Each service has an nginx which serves the php application
A docker-compose file was written which runs all these services.

## Setup
Make sure docker and docker-compose is installed on your local machine.

## Execution
You need to run the docker-compose file in the casestudy1 directory.

Use the command
$ docker-compose up

## Result

The php service1 is served via http://localhost:8080
The php service2 is served via http://localhost:8081
The php service3 is served via http://localhost:8082

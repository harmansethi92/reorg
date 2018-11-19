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
1. HOSTNAME
2. MYSQL_ROOT_PASSWORD
3. MYSQL_DATABASE
4. MYSQL_USER
5. MYSQL_PASSWORD

## Tasks Executed
1. Three services were cloned from the provided repositories:

	 git clone git@github.com:laravel/laravel.git service1

 	git clone git@github.com:laravel/laravel.git service2

 	git clone git@github.com:laravel/laravel.git service3

2. A Dockerfile was setup on each repository to run the php service in a docker container.

3. A custom index.php file was written for each service which shows the connection to MYSQL container

4. Each service has an nginx which serves the php application

5. A docker-compose file was written which runs all these services.

## Setup
Make sure docker and docker-compose is installed on your local machine.

Based on your OS you might have to upgrade pyopenssl and change docker-compose to version 2

## Execution
You need to run the docker-compose file in the casestudy1 directory.

Use the command

$ docker-compose up

## Result

1. The php service1 is served via http://localhost:8080

2. The php service2 is served via http://localhost:8081

3. The php service3 is served via http://localhost:8082

# Long Story Short:

This is a repository `api-platform-mysql` done by me: Andy Ng (mail@webcoder.io),
My Profile: http://linkedin.com/in/webcoder.io for whoever want to use MySQL with API Platform.


## WHAT WILL YOU HAVE?

[API Platform](https://github.com/api-platform/api-platform "API Platform") has:
- All services will be running in [Docker](https://www.docker.com "Docker") with docker-compose.
- latest best enterprise PHP Framework [Symfony](https://github.com/symfony/symfony "Symfony")
- [React-Admin](https://github.com/marmelab/react-admin "React-Admin") Dashboard
- [GraphQL](https://graphql.org/ "GraphQL")
- etc.

------------

> #### However, API Platform is by default built with PostgreSQL. To make API Platform project work for MySQL 8.  I am here to share this API-Platform-MySQL Project and hope all can fork and contribute this open source project to save you time of scratching head.

------------

## WHAT WILL YOU SEE?

#### Client Page

![screenshot](https://github.com/pcinvent/api-platform-mysql/blob/master/github/img/client-page.png)

#### API Page

![screenshot](https://github.com/pcinvent/api-platform-mysql/blob/master/github/img/api-page-1.png)

![screenshot](https://github.com/pcinvent/api-platform-mysql/blob/master/github/img/api-page-2.png)

#### Admin Page

![screenshot](https://github.com/pcinvent/api-platform-mysql/blob/master/github/img/admin-page-1.png)

![screenshot](https://github.com/pcinvent/api-platform-mysql/blob/master/github/img/admin-page-2.png)

![screenshot](https://github.com/pcinvent/api-platform-mysql/blob/master/github/img/admin-page-3.png)

#### Features

- Made doctrine to work with MySQL 8
- Changed Docker-Compose images to MySQL:8
- Fixed the failure of php docker-entrypoint.sh to allow auto migration
- Changed .gitignore for common IDE/Editor and Mysql Docker
- Created Makefile script to run this docker-compose heathly (Please check the following explanation)

------------

## HOW TO RUN?

#### makefile

If you are using `Linux`, you need to run `sudo make`.

If you are using `Mac`, you run just `make`

If you are using `Windows`, there is no gurantee makefile will work. Best you can install Linux or run the following command manually.

---

You can run this `make` which is just a wrapper of some commands that will resolve your docker-compose up issues.
If you encounter any docker issue, run `make rebuild`, then `make`.
If you do not want to install make binary, you can just run whatever the following commands listed below:

`make rebuild`

![screenshot](https://github.com/pcinvent/api-platform-mysql/blob/master/github/img/make-rebuild.png)

![screenshot](https://github.com/pcinvent/api-platform-mysql/blob/master/github/img/make-rebuild-2.png)

pruning all of your docker images and instances if you encounter mysql image with different tag issues. For example, you were using Mysql 5, then now using the Mysql 8 docker, you should see a lot problem in term of upgrading, so here you go:
```shell
	docker ps -a -q | xargs -n 1 -P 8 -I {} docker stop {}
	docker builder prune --all --force
	docker-compose build
```

`make`

![screenshot](https://github.com/pcinvent/api-platform-mysql/blob/master/github/img/make-dev.png)

Preventing timeout when you are first running this dokcer-compose, and fixed the problem of `php-fpm` have to restart due to the API-Platform with MySQL issue.
```shell
	# prevent timeout
	export DOCKER_CLIENT_TIMEOUT=120
	export COMPOSE_HTTP_TIMEOUT=12
	docker-compose up --remove-orphans
	# fixed known api platform php-fpm issue
	docker-compose exec php php-fpm -D
```


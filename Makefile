# pls sort alphabetically

default: dev

dev: dockers
	@echo "\033[34mCopying Dev configuration files\033[0m"

rebuild:
	docker ps -a -q | xargs -n 1 -P 8 -I {} docker stop {}
	docker builder prune --all --force
	docker-compose build

dockers:
	# prevent timeout
	export DOCKER_CLIENT_TIMEOUT=120
	export COMPOSE_HTTP_TIMEOUT=12
	docker-compose up --remove-orphans
	# fixed known api platform php-fpm issue
	docker-compose exec php php-fpm -D


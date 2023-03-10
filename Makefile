.PHONY: bash
bash:
	docker-compose exec $(CONTAINER) bash


.PHONY: sh
sh:
	docker-compose exec php-fpm bash


.PHONY: up
up:
	docker-compose up


.PHONY: down
down:
	docker-compose down --remove-orphans


.PHONY: db-update
db-update:
	docker-compose exec php-fpm php artisan migrate


.PHONY: db-regenerate
db-regenerate:
	docker-compose exec php-fpm php artisan migrate:fresh --seed

.PHONY: build
build:
	docker-compose build

.PHONY: tests
tests:
	@echo '--- Running Unit Tests --- ' && \
 	docker-compose exec php-fpm ./vendor/bin/phpunit --testsuite=Unit && \
 	echo '--- Running Integration Tests --- ' && \
 	docker-compose exec php-fpm ./vendor/bin/phpunit --testsuite=Integration

.PHONY: remove-old-containers
remove-old-containers:
	docker rm postgres && \
	docker rm postgres-test && \
	docker rm nginx

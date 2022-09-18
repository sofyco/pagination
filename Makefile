phpstan:
	docker-compose run --rm -T php /usr/local/bin/php /app/vendor/bin/phpstan analyse --no-progress

phpunit:
	docker-compose run --rm -T php /usr/local/bin/php /app/vendor/bin/phpunit --testdox

composer-update:
	docker-compose run --rm -T php /usr/local/bin/php /usr/local/bin/composer update

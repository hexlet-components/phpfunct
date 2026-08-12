install:
	composer install

test:
	composer exec phpunit

lint:
	composer validate

.PHONY: install test lint

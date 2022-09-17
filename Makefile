install:
	composer install

brain-games:
	./bin/brain-games
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

lint-fix:
	vendor/bin/phpcbf -- src bin

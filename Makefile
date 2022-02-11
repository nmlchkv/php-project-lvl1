install:
	composer install
brain-games:
	./bin/brain-games
brain-even:
	./bin/brain-even
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
	composer exec --verbose phpstan -- --level=8 analyse src bin

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 src bin bin
test:
	composer exec --verbose phpunit bin

test-coverage:
	composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml

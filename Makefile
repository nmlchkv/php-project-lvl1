install:
	composer install
brain-games:
	./bin/brain-games
brain-even:
	./bin/brain-even
brain-calc:
	./bin/brain-calc
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
	composer exec --verbose phpstan -- --level=8 analyse src bin
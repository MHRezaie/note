build:
	docker-compose build --no-cache --force-rm
down:
	docker-compose down
up:
	docker-compose up -d
bandu:
	docker-compose up --build -d
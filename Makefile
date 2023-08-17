build:
	docker compose build --no-cache --force-rm
down:
	docker compose down
up:
	docker compose up -d
bandu:
	docker-compose up --build -d
ssl-init:
	docker compose run --rm  certbot certonly --webroot --webroot-path /var/www/certbot/ -d mhrezaie.info
ssl-renew:
	docker compose run --rm certbot renew
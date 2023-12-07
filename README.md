# laravel

## 起動手順

docker を立ち上げる
`docker compose up -d`
php インストールされてるサーバーの bash
`docker compose exec app bash`
MySQL の bash
`docker compose exec db bash`
MySQL にログイン
`mysql -u $MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE`
↓
http://localhost:8080

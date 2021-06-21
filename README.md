# laravel team project

## 環境構築手順

1. gitclone   
  `git clone https://github.com/ueno-a-ts/laravel_team_project.git`

2. dockerの立ち上げ   
`docker-compose up --build -d`

3. appコンテナで必要ライブラリのインストール
```
# docker
docker-compose exec app bash

# login fucntion add
php /usr/bin/composer require laravel/ui:^2.4
php artisan ui bootstrap --auth
npm install && npm run dev
```

4. seedファイルのインストール
```
# sheeds file run
php /usr/bin/composer dump-autoload
php artisan db:seed
```

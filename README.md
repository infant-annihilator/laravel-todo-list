# laravel-todo-list

**Laravel** + **Vue** + **TailwindCSS**

Простой todo-лист для тестового задания

## Комплектация
В качестве шаблона для докера использовался пакет aschmelyun <br />
Сам проект лежит в папке `src`

## Старт через Docker
*Для запуска с использованием Docker, нужен [установленный и запущенный Docker](https://docs.docker.com/docker-for-windows/install/) на компьютере.* <br />

После клонирования репозитория: <br />
`docker-compose build` сборка <br />
`docker-compose up -d` запуск <br />
`docker-compose run --rm artisan migrate` миграция БД <br />
`npm run watch` пересборка npm <br />

Список для копирования команд в терминал
```
docker-compose build
docker-compose up -d
docker-compose run --rm artisan migrate
npm run watch
```

Далее проект становится доступен по адресу [localhost:80](http://localhost:80) <br />

Всеми командами при разработке можно пользоваться из докера. Например:
- `docker-compose run --rm composer update`
- `docker-compose run --rm npm run dev`
- `docker-compose run --rm artisan migrate` 

## Старт вручную
*Понадобится установленный локально на ПК [php последней версии](https://www.php.net/downloads.php) [1], добавленный в PATH; локальный сервер для MySQL и [node.js](https://nodejs.org/)!* <br />

Перед клонированием репозитория следует создать БД с названием **todo** <br />

После клонированияя репозитория: <br />
`php artisan cache:clear` чистка всего кэша проекта <br />
`php artisan serve` запуск сервера <br />
`php artisan migrate` миграция БД <br />
`npm run hot` пересборка npm <br />

Список для копирования команд в терминал
```
php artisan serve
php artisan migrate
npm run hot
```

Проект будет доступен по адресу [127.0.0.1:8000](http://127.0.0.1:8000)

*[1] - Убедитесь, что в php.ini раскомментированны следующиен строчки: *
```
extension=fileinfo
extension=mbstring
extension=mysqli
extension=pdo_mysql
```

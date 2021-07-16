# laravel-todo-list

**Laravel** + **Vue** + **TailwindCSS**

Простой todo-лист для тестового задания

## Комплектация
В качестве шаблона для докера использовался пакет aschmelyun <br />
Сам проект лежит в папке `src`

## Старт через Docker
Для запуска с использованием Docker, нужен [установленный Docker](https://docs.docker.com/docker-for-windows/install/) на компьютере. <br />

После клонирования репозитория <br />
`docker-compose build` сборка <br />
`docker-compose up -d` запуск <br />
`docker-compose run --rm artisan migrate` миграция БД <br />

Далее проект будет доступен по адресу [localhost:80](http://localhost:80) <br />

Всеми командами при разработке можно пользоваться из докера. Например:
- `docker-compose run --rm composer update`
- `docker-compose run --rm npm run dev`
- `docker-compose run --rm artisan migrate` 

## Старт вручную
*Понадобится установленный локально на ПК php, добавленный в PATH; локальный сервер для MySQL и node.js!* <br /><br />

Перед клонированием репозитория необходимо создать БД с названием *todo*
В файле .env нужно изменить следующие строки:
```
APP_URL=http://127.0.0.1:8000
...
DB_HOST=localhost
```

После клонированияя репозитория: <br />
`php artisan cache:clear` чистка всего кэша проекта <br />
`php artisan serve` запуск сервера <br />
`php artisan migrate` миграция БД <br />
`npm run watch` пересборка npm <br />

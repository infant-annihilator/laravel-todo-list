# laravel-todo-list-docker

**Laravel** + **Vue** + **TailwindCSS** + **Docker**

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

Далее проект становится доступен по адресу [localhost:80](http://localhost:80) <br />

Всеми командами при разработке можно пользоваться из докера. Например:
- `docker-compose run --rm composer update`
- `docker-compose run --rm npm run dev`
- `docker-compose run --rm artisan migrate` 

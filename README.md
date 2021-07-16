# laravel-todo-list

**Laravel** + **Vue** + **TailwindCSS**

Простой todo-лист для тестового задания

## Комплектация
В качестве шаблона для докера использовался пакет aschmelyun <br />
Сам проект лежит в папке `src`

## Старт через Docker
Для запуска с использованием Docker, нужен [установленный Docker](https://docs.docker.com/docker-for-windows/install/) на компьютере. <br />

После клонирования репозитория <br />
`docker-compose build` для сборки билда <br />
`docker-compose up -d` для запуска контейнера <br />
`docker-compose run --rm artisan migrate` для миграции баз данных <br />

Далее проект будет доступен по адресу [localhost:80](http://localhost:80) <br />

Всеми командами при разработке можно пользоваться из докера. Например:
- `docker-compose run --rm composer update`
- `docker-compose run --rm npm run dev`
- `docker-compose run --rm artisan migrate` 

## Старт вручную
После клонированияя репозитория <br />
`php artisan serve` для запуска сервера <br />
Далее нужно мигрировать БД <br />

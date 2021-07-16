# laravel-todo-list

**Laravel** + **Vue** + **TailwindCSS**

Простой todo-лист для тестового задания

## Комплектация
В качестве шаблона для докера использовался пакет aschmelyun
Сам проект лежит в папке `src`

## Старт через Docker
Для запуска с использованием Docker, нужен [установленный Docker](https://docs.docker.com/docker-for-windows/install/) на компьютере.

После кланирования репозитория запустите
`docker-compose build` для сборки билда
`docker-compose up -d` для запуска контейнера
`docker-compose run --rm artisan migrate` для миграции баз данных

Далее проект будет доступен по адресу [localhost:80](http://localhost:80)

Всеми командами при разработке можно пользоватеься из докера, причём предустановленные на ПК для этого модули не понадобятся. Например:
- `docker-compose run --rm composer update`
- `docker-compose run --rm npm run dev`
- `docker-compose run --rm artisan migrate` 

## Старт вручную
После клонированияя репозитория
`php artisan serve` для запуска сервера
Далее нужно мигрировать БД
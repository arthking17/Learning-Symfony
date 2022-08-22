# Learning Symfony 6

## Prerequisites

- [ ] Install PHP, MySql, NodeJS, Symfony on Windows

```bash
choco install php --version=7.4.13
choco install mysql
choco install nodejs-lts
choco install symfony-cli --version=5.4.7
```

## Get Started

> Symfony commands: ("php bin/console" or "symfony console")

- [ ] Install composer and download the vendor folder

[Download Composer](https://getcomposer.org/download/)

```bash
composer install
```

- [ ] Install npm, download node_modules folder and build js and css files

[Download NodeJs](https://nodejs.org/en/download/)

```bash
npm install
npm run dev
```

- [ ] Create DB and populate it

```bash
symfony console doctrine:databases:create
symfony console doctrine:migrations:migrate
```

- [ ] Start symfony server

```bash
symfony server
symfony server:stop
```

- [ ] mysql commands:

```sql
SET PASSWORD FOR 'root'@'localhost' = "william";
```

> ***Camelcase*** & ***Underscore*** (exple: releaseYear vs relase_year)
> For relation ***ManyToMany***, Symfony creates a pivot table to store relations between tables

```bash
composer require --dev doctrine/doctrine-fixtures-bundle
symfony console doctrine:fixtures:load
```

> attribute '***Reference***' of class Fixture allows us to send data between Fixtures classes.

- [ ] functions '***findBy***' and '***findOneBy***'

Exple: $movies = $movieRepository->findBy(['releaseYear' => 2021], ['id' => 'DESC']);

- [ ] function '***count***'

Exple: $repository->count(['id' => 7]);

- [ ] ***@webpack-encore-bundle***

```bash
composer require symfony/webpack-encore-bundle
npm install
npm run dev
npm run watch #(watch for change in our assets folder)
```

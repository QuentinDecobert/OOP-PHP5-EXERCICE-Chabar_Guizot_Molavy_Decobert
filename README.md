# Install

## Create parameters.yml

Create `config/parameters.yml` from `config/parameters.yml.dist`

## Install composer

```shell
composer install
```

## Create database

Faire à la main

## Update database

```shell
./bin/doctrine orm:schema:update --dump-sql --force
```

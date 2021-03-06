---
title: Работа с Docker
0: 'published:true'
---

**Проблема:** Где найти пример более-менее стандартного docker-compose.yml?

**Решение**

```
version: '3'
 
 services:
   db:
     image: library/mysql:5.6
     container_name: ingile_bask_db
     restart: always
     command: "--default-authentication-plugin=mysql_native_password"
     environment:
       MYSQL_ROOT_PASSWORD: db
       MYSQL_USER: db
       MYSQL_DATABASE: db
       MYSQL_PASSWORD: db
     ports:
       - "3306:3306"
   php-fpm:
     image: webdevops/php-dev:7.3
     hostname: php-fpm
     volumes:
       - "./:/app"
     working_dir: "/app"
     depends_on:
       - db
   nginx:
     image: webdevops/nginx
     hostname: nginx
     environment:
       WEB_DOCUMENT_ROOT: /app/public
       WEB_DOCUMENT_INDEX: index.php
       WEB_PHP_SOCKET: php-fpm:9000
     ports:
       - "80:80"
     volumes:
       - "./:/app"
     depends_on:
       - php-fpm
```
 
**Проблема** Как запустить portainer на локальной машине 
**Решение** 
>docker run -d -p 8090:9000 -v /var/run/docker.sock:/var/run/docker.sock -v /opt/portainer:/data portainer/portainer

**Проблема** Как заставить один контейнер дождать другой в docker-compose 3
**Решение** 
в версии  2 была возможность написать так:
```
depends_on:
      rabbit:
        condition: service_healthy
```
 В версии 3 такой возможности нет. Но можно перезапускать контейнер. Например так:
 > restart: on-failure:10

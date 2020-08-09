---
title: ОШибки при установке infyOm
0: 'published:true'
---

**Проблема** Что делать, если вы получили ошибку 
>Symfony\Component\Debug\Exception\FatalThrowableError : Call to undefined function OpenApi\scan()

**Решение** добавьте строку 
> SWAGGER_VERSION=2.0 

в файл .env.

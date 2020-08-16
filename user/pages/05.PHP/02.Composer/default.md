---
title: Проблемы при работе с композером
0: 'published:true'
---

**Проблема** Fatal error: Allowed memory size of

**Решение** Композеру не хватает памяти, которая выделена в настройках пыхи

```
COMPOSER_MEMORY_LIMIT=-1 composer require fruitcake/laravel-cors
```

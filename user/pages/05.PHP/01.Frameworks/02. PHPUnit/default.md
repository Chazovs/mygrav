---
title:PHUnit
0: 'published:true'
---

**Проблема** как запустить не все тест, а только в отдельной папке 

**Решение** Нужно указать путь к этой папке
 >php bin/phpunit -c app/phpunit.xml.dist src/path/to/Tests/

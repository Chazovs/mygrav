---
title:
0: 'published:true'
---

**Проблема** Как создать свою команду для терминала Linux

**Решение** Работает на Mint.
1. Открываем ~/.bashrc 
>nano ~/.bashrc
2. Прописывает алиас в конце файла
> alias названиеКоманды='command 1; cpmmand 2'
3. перезапускаем терминал
 
**Проблема** Как запустить юнит-тесты в Симфе

**Решение** 
> php bin/phpunit

Можно указать дополнительный ключ с конфигурацией. Например:
>-c app/phpunit.xml.dist

**Проблема** При запуске тестов возникает проблема с нехваткой памяти
>Fatal error: Allowed memory size of 134217728 bytes exhausted (tried to allocate 73728 bytes) 

**Решение** 
> php -d memory_limit=-1 bin/phpunit

**Проблема** как запустить тест для отдельного метода?

**Решение** добавить ключ --filter Например:
> --filter testSaveAndDrop EscalationGroupTest escalation/EscalationGroupTest.php

Схема:
>--filter methodName ClassName path/to/file.php

**Проблема** как искать по содержимому файлов в папке?
 
**Решение** в этом примере мы экранируем квадратные скобки
 > find ./ -iname "*.log" -exec grep -iH \\[anyText {} \;

**Проблема** как грепать по нескольким условиям?
 
**Решение** через .*
```
 find ./ -iname "*.log" -exec grep -iH \\[31377\\].*1421912 {} \
 find ./ -iname "*.log" -exec grep -iH --regexp='\[2026-08-01 09.*\[316437\].*ERROR' {} \;
```

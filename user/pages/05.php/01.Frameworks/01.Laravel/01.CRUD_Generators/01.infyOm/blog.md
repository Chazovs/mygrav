---
published: true
---

---
title: Ошибка с недоступной константой STDN
---

! Проблема до сих пор не решена

Есть предположение, что проблема может быть связана с версией PHP

Менять версии можно так (это не помогает):
`sudo update-alternatives --set php /usr/bin/php7.3`

Можно попробовать определять переменную в public/index.php или в ./artisan вот так:
`define('STDIN',fopen("php://stdin","r"));`

Если проблема возникает при заполнении таблиц, то можно добавить -- к force:
`Artisan::call('db:seed', [
   '--force' => true
])`

В документации (https://www.php.net/manual/ru/features.commandline.io-streams.php) говориться, что константы могут быть не доступны, если считывается PHP-скрипт из stdin.

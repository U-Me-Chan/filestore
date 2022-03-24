filestore
=====

Установка
---------
0. Требуется установленный в системе docker и docker-compose. Воспользуйтесь документацией к вашему дистрибутиву и пакетному менеджеру для установки данных зависимостей.
1. `git clone git@github.com:ridouchire/lnmp-sandbox.git`
2. `cd filestore`
3. `docker-compose up -d --build`
4. `docker exec filestore-php composer install`
5. `docker exec filestore-php php ./install.php`

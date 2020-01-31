# Решение тестового задания

- Тестовое задание - https://github.com/adminko/testphp
- Применял PHP 7.3, Nginx 1.14.0, MySQL 14.14, PDO, Composer 
- Результат залил на хост - ([Ссылка](http://liapkin.6te.net/))

# MySQl
Для подключения нужно отредактировать файл 'app/Core/Model', заполнить константы в классе
```
    const DB_HOST = "";
    const DB_NAME = '';
    const CHARSET = '';
    const DB_USER = '';
    const DB_PASSWORD = '';
```
# Composer
Приложение написано с помощью nimespace-ов и нужно собрать пространство имен с помощью Composer, запустить 'php composer.phar dump-autoload'


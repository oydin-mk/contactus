# Форма "Связаться с нами". Инструкция по установке

- Установить папку contactus в директорию локального хоста
- Запустить Apache
- В файле 'index.php' и 'create_table.php' через редактор кода необходимо заполнить следующие строки

```php
<?php
$servername = "";     //Название локального хоста
$username = "";       //Ваш Username, которое определяется при установке MySQLI
$db_password = "";    //пароль
$db = "";             //Название выбранной базы данных

- Запустить в файл 'create_table.php' для создания таблицы в базе данных. В браузере набрать ссылку 'http://localhost/contactus/create_table.php'
- После создания таблицы перейти на страницу 'http://localhost/contactus/index.html', где находится форма "Связаться с нами"
- Поля 'Имя', 'Email', 'Ваш пол', 'Выберите тему', 'Задайте вопрос' и файл являются обязательными, сохраняются в таблице бд
- Весь список пользователей и информацию можно посмотреть нажав кнопку Таблица ('http://localhost/contactus/index.php?mode=table')

<?php
$host = '127.0.0.1'; // адрес сервера 
$database = 'userdata'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'root'; // пароль
$link = new Mysqli($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
?>
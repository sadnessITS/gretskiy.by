<?php
session_start();
$dbhost = "localhost"; // Имя хоста БД
$dbusername = "root"; // Пользователь БД
$dbpass = ""; // Пароль к базе
$dbname = "web"; // Имя базы
$charset = "utf8";
$dbconnect = mysqli_connect ($dbhost, $dbusername, $dbpass, $dbname);
if (!$dbconnect) { echo ("Не могу подключиться к серверу базы данных!"); }
if(!mysqli_set_charset($dbconnect, $charset)){
	print("Ошибка кодировки");
}
?>
<?php
$dbhost = "localhost"; // Имя хоста БД
$dbusername = "root"; // Пользователь БД
$dbpass = ""; // Пароль к базе
$dbname = "web"; // Имя базы

$dbconnect = mysql_connect ($dbhost, $dbusername, $dbpass);
if (!$dbconnect) { echo ("Не могу подключиться к серверу базы данных!"); }

mysql_select_db($dbname);


?>
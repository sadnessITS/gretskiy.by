<?php
$dbhost = "localhost"; // Имя хоста БД
$dbusername = "root"; // Пользователь БД
$dbpass = ""; // Пароль к базе
$dbname = "web"; // Имя базы
$charset = "utf8";
$dbconnect = mysql_connect ($dbhost, $dbusername, $dbpass);
if (!$dbconnect) { echo ("Не могу подключиться к серверу базы данных!"); }
if(!mysql_set_charset($charset)){
	prit("Ошибка кодировки");
}

mysql_select_db($dbname);

?>
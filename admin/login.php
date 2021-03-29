<?php 
$title="Форма авторизации"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД

// Создаем переменную для сбора данных от пользователя по методу POST
$data = $_POST;

// Пользователь нажимает на кнопку "Авторизоваться" и код начинает выполняться
if(isset($data['do_login'])) { 

 // Создаем массив для сбора ошибок
 $errors = array();

 // Проводим поиск пользователей в таблице users
 $user = R::findOne('users', 'login = ?', array($data['login']));

 if($user) {

 	// Если логин существует, тогда проверяем пароль
 	if(password_verify($data['password'], $user->password)) {

 		// Все верно, пускаем пользователя
 		$_SESSION['logged_user'] = $user;
 		
 		// Редирект на главную страницу
                header('Location: index.php');

 	} else {
    
    $errors[] = 'Пароль неверно введен!';

 	}

 } else {
 	$errors[] = 'Пользователь с таким логином не найден!';
 }

if(!empty($errors)) {

		echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';

	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preload" href="../gretskiy/static/fonts/ElegantIcons.woff" as="font" type="font/woff" crossorigin>
      <link rel="preload" href="../gretskiy/static/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
      <link rel="preload" href="../gretskiy/static/fonts/Cera%20Pro%20Regular.woff" as="font" type="font/woff" crossorigin>
      <link rel="preload" href="../gretskiy/static/fonts/Cera%20Pro%20Medium.woff" as="font" type="font/woff" crossorigin>
      <link rel="preload" href="../gretskiy/static/fonts/Cera%20Pro%20Bold.woff" as="font" type="font/woff" crossorigin>
      <link rel="preload" href="../gretskiy/static/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container mt-4">
		<div class="row">
			<div class="col">
			<!-- Форма авторизации -->
				<div><br>
					<h2>Форма авторизации</h2>
					<form action="login.php" method="post">
						<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" required><br>
						<input type="password" class="form-control" name="password" id="pass" placeholder="Введите пароль" required><br>
						<button class="btn btn-success" name="do_login" type="submit">Авторизоваться</button>
					</form><br>
				</div>
			</div>
		</div>
	</div>

	<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->

</body>
</html>


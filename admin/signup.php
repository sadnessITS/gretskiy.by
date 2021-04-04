<?php 
$title="Форма регистрации"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД

// Создаем переменную для сбора данных от пользователя по методу POST
$data = $_POST;

// Пользователь нажимает на кнопку "Зарегистрировать" и код начинает выполняться
if(isset($data['do_signup'])) {

        // Регистрируем
        // Создаем массив для сбора ошибок
	$errors = array();

	// Проводим проверки
        // trim — удаляет пробелы (или другие символы) из начала и конца строки
	if(trim($data['login']) == '') {

		$errors[] = "Введите логин!";
	}

	if(trim($data['email']) == '') {

		$errors[] = "Введите Email";
	}


	if(trim($data['name']) == '') {

		$errors[] = "Введите Имя";
	}

	if(trim($data['family']) == '') {

		$errors[] = "Введите фамилию";
	}

	if($data['password'] == '') {

		$errors[] = "Введите пароль";
	}

	if($data['password_2'] != $data['password']) {

		$errors[] = "Повторный пароль введен не верно!";
	}
         // функция mb_strlen - получает длину строки
        // Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
	if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

	    $errors[] = "Недопустимая длина логина";

    }

    if (mb_strlen($data['name']) < 3 || mb_strlen($data['name']) > 50){
	    
	    $errors[] = "Недопустимая длина имени";

    }

    if (mb_strlen($data['family']) < 5 || mb_strlen($data['family']) > 50){
	    
	    $errors[] = "Недопустимая длина фамилии";

    }

    if (mb_strlen($data['password']) < 2 || mb_strlen($data['password']) > 8){
	
	    $errors[] = "Недопустимая длина пароля (от 2 до 8 символов)";

    }

    // проверка на правильность написания Email
    if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['email'])) {

	    $errors[] = 'Неверно введен е-mail';
    
    }

	// Проверка на уникальность логина
	if(R::count('users', "login = ?", array($data['login'])) > 0) {

		$errors[] = "Пользователь с таким логином существует!";
	}

	// Проверка на уникальность email

	if(R::count('users', "email = ?", array($data['email'])) > 0) {

		$errors[] = "Пользователь с таким Email существует!";
	}


	if(empty($errors)) {

		// Все проверено, регистрируем
		// Создаем таблицу users
		$user = R::dispense('users');

                // добавляем в таблицу записи
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->name = $data['name'];
		$user->family = $data['family'];

		// Хешируем пароль
		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);

		// Сохраняем таблицу
		R::store($user);
        echo '<div style="color: green; ">Вы успешно зарегистрированы! Можно <a href="login.php">авторизоваться</a>.</div><hr>';

	} else {
                // array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент. 
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
	<link rel="stylesheet" href="../gretskiy/static/css/packedmin_all_css.css">
	<title>Document</title>
</head>
<body>
<header>  

	<h1 align="center">Добро пожаловать в панель администратора!</h1>
            <div class="header-block d-flex align-items-center">
               <div class="container">
                  <div class="row"><p align = "center">Фермерское хозяйство “Грицкевичей”<br>
   <?php if(isset($_SESSION['logged_user'])) : ?>
      Привет, <?php echo $_SESSION['logged_user']->name; ?><br>

   <!-- Пользователь может нажать выйти для выхода из системы -->
   <a href="logout.php">Выйти</a></p>
   <?php endif; ?>
                  </div>
               </div>
            </div>
			<nav class="navigation d-flex align-items-center">
               <div class="container">
                  <div class="row" style="justify-content:center">
                     <div class="col-8">
                        <div class="navgition-menu d-flex align-items-center justify-content-center">
                           <ul class="mb-0">
                              <li class="toggleable">
                                 <a class="menu-item" href="adding_product.php">Редактирование списка продуктов</a>
                              </li>
                              <li class="toggleable">
                                 <a class="menu-item" href="index.php">Главная</a>
                              </li>
                              
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </nav>
</header>

   

<div class="container mt-4" style="justify-content: center !important; max-width: 540px;">
	   <!-- Форма регистрации -->
		<h2 align="center" >Форма добавления нового администратора</h2><br>
		<form action="signup.php" method="post">
			<div style="justify-content: center;">
			<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
			<input type="email" class="form-control" name="email" id="email" placeholder="Введите Email"><br>
			<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя" required><br>
			<input type="text" class="form-control" name="family" id="family" placeholder="Введите фамилию" required><br>
			<input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
			<input type="password" class="form-control" name="password_2" id="password_2" placeholder="Повторите пароль"><br>
			<div style="margin-left: 35%;">
			<button class="no-round-btn btn-success" name="do_signup" type="submit">Добавить</button>
   </div>
			</div>
		</form>
		<br>
	</div>
<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->
</body>
</html>
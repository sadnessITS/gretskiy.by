<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <div class="container mt-4">
   <div class="row">
   <div class="col">
   <center>
   <h1>Добро пожаловать на наш сайт!</h1>
   </center>
   </div>
   </div>
   </div>

   <!-- Если авторизован выведет приветствие -->
   <?php if(isset($_SESSION['logged_user'])) : ?>
      Привет, <?php echo $_SESSION['logged_user']->name; ?></br>

   <!-- Пользователь может нажать выйти для выхода из системы -->
   <a href="logout.php">Выйти</a> <!-- файл logout.php создадим ниже -->
   <?php else : ?>

   <!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
   <a href="login.php">Авторизоваться</a><br>
   <a href="signup.php">Регистрация</a>
   <?php endif; ?>

   <table border='1'>
      <tr>
         <td>Идентификатор</td>
         <td>Цифровое обозначение вида</td>
         <td>Вид ореха</td>
         <td>Краткое описание</td>
         <td>Полное описание</td>
         <td>Цена</td>
         <td>Размер упаковки</td>
         <td>Вес упаковки</td>
         <td>Срок годности</td>
         <td>Файл-картинка</td>
         <td>Обжарен ли орех</td>
         <td>Дата добавления</td>
      </tr>
      
      <?php
		$query = R::getAll( 'SELECT * FROM product' );
        foreach($query as $item):
			echo 'ID: ' . $item['id'] . '<br>';
			echo 'ID: ' . $item['name'] . '<br>';
			echo 'ID: ' . $item['type_n'] . '<br>';
			echo 'ID: ' . $item['type'] . '<br>';
			echo 'ID: ' . $item['description'] . '<br>';
			echo 'ID: ' . $item['full_description'] . '<br>';
			echo 'ID: ' . $item['price'] . '<br>';
			echo 'ID: ' . $item['size'] . '<br>';
			echo 'ID: ' . $item['weight'] . '<br>';
			echo 'ID: ' . $item['shelf_life'] . '<br>';
			echo 'ID: ' . $item['picture'] . '<br>';
			echo 'ID: ' . $item['if_fried'] . '<br>';
			echo 'ID: ' . $item['date_if_introduction'] . '<br>';
		endforeach;
    	?>

<tr>
				<td><?=$item['id']?></td>
				<td><?=$item['name']?></td>
				<td><?=$item['type_n']?></td>
				<td><?=$item['type']?></td>
				<td><?=$item['description']?></td>
				<td><?=$item['full_description']?></td>
				<td><?=$item['price']?></td>
				<td><?=$item['size']?></td>
				<td><?=$item['weight']?></td>
				<td><?=$item['shelf_life']?></td>
				<td><?=$item['picture']?></td>
				<td><?=$item['if_fried']?></td>
				<td><?=$item['date_if_introduction']?></td>
			</tr>

</table>

   <?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->
</body>
</html>
<?php
$title="Table"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД

if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
    //удаляем строку из таблицы

	$id = $_GET['del_id'];
    $delproduct = R::load('product', $id);
    R::trash($delproduct);
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
	<link rel="stylesheet" type="text/css" href="css/style-product2.css">
    <link rel="stylesheet" href="../gretskiy/static/css/packedmin_all_css.css">
</head>
<body>
    <?php if(isset($_SESSION['logged_user'])) : ?>
<header>  

<h1 align="center">Добро пожаловать в панель администратора!</h1>
		<div class="header-block d-flex align-items-center">
		   <div class="container">
			  <div class="row"><p align = "center">Фермерское хозяйство “Грицкевичей”<br>

  Привет, <?php echo $_SESSION['logged_user']->name; ?><br>

<!-- Пользователь может нажать выйти для выхода из системы -->
<a href="logout.php">Выйти</a></p>
			  </div>
		   </div>
		</div>
		<nav class="navigation d-flex align-items-center"> 
		   <div class="container" > 
			  <div class="row" style="justify-content:center">
				 <div class="col-8" >
					<div class="navgition-menu d-flex align-items-center justify-content-center" >
					   <ul class="mb-0">
						  <li class="toggleable">
							 <a class="menu-item" href="signup.php">Добавление нового пользователя</a>
						  </li>
						  <li class="toggleable">
							 <a class="menu-item" href="index.php">Главная</a>
						  </li>
						  <li class="toggleable">
							 <a class="menu-item" href="adding_product.php">Добавление продуктов</a>
						  </li>
					   </ul>
					</div>
				 </div>
			  </div>
		   </div>
		</nav>
</header>
<?php
		$query = R::getAll( 'SELECT * FROM product' );
		
        foreach($query as $item):
		?>
<div id="main">
		
		
		<table>
			<tr>
				<th>Идентификатор (ID)</th>
				<th>Название товара</th>
				<th>ID вида</th>
				<th>Вид ореха</th>
				<th>Краткое описание</th>
				<th>Полное описание</th>
				<th>Цена</th>
				<th>Размер упаковки</th>
				<th>Вес упаковки</th>
				<th>Срок годности</th>
				<th>Файл-картинка</th>
				<th>Обжарен ли орех</th>
				<th>Дата добавления</th>
				<th>Удалить запись</th>
			</tr>
			<tr>
				<td><?=$item['id']?></td>
				<td><?=$item['name']?></td>
				<td><?=$item['type_n']?></td>
				<td><?=$item['type']?></td>
				<td><?=$item['description']?></td>
				<td class="special"><?=$item['full_description']?></td>
				<td><?=$item['price']?></td>
				<td><?=$item['size']?></td>
				<td><?=$item['weight']?></td>
				<td><?=$item['shelf_life']?></td>
				<td><?=$item['picture']?></td>
				<td><?=$item['if_fried']?></td>
				<td><?=$item['date_if_introduction']?></td>
				<td><a href='?del_id=<?=$item['id']?>'>Удалить</a></td>
			</tr>
			
		</table>
        </div>
		<?php endforeach; ?>
        <?php endif; ?>
</body>
</html>
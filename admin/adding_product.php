<?php 
$title="Добавление продуктов"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД

if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
    //удаляем строку из таблицы

	$id = $_GET['del_id'];
    $delproduct = R::load('product', $id);
    R::trash($delproduct);
  }

// Создаем переменную для сбора данных от пользователя по методу POST
$data = $_POST;

// Пользователь нажимает на кнопку "Зарегистрировать" и код начинает выполняться
if(isset($data['add_product'])) {

        // Регистрируем
        // Создаем массив для сбора ошибок
	$errors = array();

	// Проводим проверки
        // trim — удаляет пробелы (или другие символы) из начала и конца строки
	if(trim($data['name']) == '') {

		$errors[] = "Введите название товара!";
	}

	if(trim($data['type']) == '') {

		$errors[] = "Введите вид ореха";
	}

	if ($data['type'] != 'Грецкий орех' && $data['type'] != 'Фундук' && $data['type'] != 'Миндаль' && $data['type'] != 'Фисташки')	{
		
		$errors[] = "Такой орех не производится!";
	}

	if ($data['type'] == 'Грецкий орех' || $data['type'] == 'грецкий орех')	{

		$data['type'] = 'Грецкий орех';
		$data['type_n'] = '1';
	}

	if ($data['type'] == 'Фундук' || $data['type'] == 'фундук')	{

		$data['type'] = 'Фундук';
		$data['type_n'] = '2';
	}

	if ($data['type'] == 'Миндаль' || $data['type'] == 'миндаль')	{

		$data['type'] = 'Миндаль';
		$data['type_n'] = '3';
	}

	if ($data['type'] == 'Фисташки' || $data['type'] == 'фисташки')	{

		$data['type'] = 'Фисташки';
		$data['type_n'] = '4';
	}

	if(trim($data['description']) == '') {

		$errors[] = "Введите краткое описание для товара";
	}

	if(trim($data['full_description']) == '') {

		$errors[] = "Введите фамилию";
	}

	if($data['price'] == '') {

		$errors[] = "Введите цену";
	}

	if($data['size'] == '') {

		$errors[] = "Введите размер упаковки";
	}

	if($data['weight'] == '') {

		$errors[] = "Введите вес упаковки";
	}

	if($data['shelf_life'] == '') {

		$errors[] = "Введите срок годности";
	}

	if($data['picture'] == '') {

		$errors[] = "Введите название файла-картинки";
	}

	if($data['picture'] != '') {
		$temp = $data['picture'];
		$data['picture'] = "../gretskiy/uploads/uploads/image/product/";
		$data['picture'] .= $temp;
	}

	if($data['if_fried'] != '1' && $data['if_fried'] != '0') {

		$errors[] = "Орех обжарен? (1/0)";
	}

	$data['date_if_introduction'] = date("Y-m-d");

         // функция mb_strlen - получает длину строки
        // Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
	if(mb_strlen($data['name']) < 5 || mb_strlen($data['name']) > 101) {

	    $errors[] = "Недопустимая длина имени";

    }

    if (mb_strlen($data['type']) < 3 || mb_strlen($data['type']) > 101){
	    
	    $errors[] = "Недопустимая длина вида ореха";

    }

    if (mb_strlen($data['description']) < 5 || mb_strlen($data['description']) > 1001){
	    
	    $errors[] = "Недопустимая длина краткого описания";

    }

    if (mb_strlen($data['full_description']) < 5 || mb_strlen($data['full_description']) > 2001){
	    
	    $errors[] = "Недопустимая длина описания";

    }

	// Проверка на уникальность товара
	if(R::count('product', "name = ?", array($data['name'])) > 0) {

		$errors[] = "Такой товар существует!";
	}

	if(empty($errors)) {

		// Все проверено, добавляем
		// Создаем таблицу product
		$product = R::dispense('product');

                // добавляем в таблицу записи
		$product->name = $data['name'];
		$product->type_n = $data['type_n'];
		$product->type = $data['type'];
		$product->description = $data['description'];
		$product->full_description = $data['full_description'];
		$product->price = $data['price'];
		$product->size = $data['size'];
		$product->weight = $data['weight'];
		$product->shelf_life = $data['shelf_life'];
		$product->picture = $data['picture'];
		$product->if_fried = $data['if_fried'];
		$product->date_if_introduction = $data['date_if_introduction'];

		// Сохраняем таблицу
		R::store($product);
        echo '<div style="color: green; ">Вы успешно добавили товар!</div><hr>';

	} else {
                // array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент. 
		echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style-product.css">
	<title>Document</title>
</head>
<body>

<?php if(isset($_SESSION['logged_user'])) : ?>
      Привет, <?php echo $_SESSION['logged_user']->name; ?></br>

   <!-- Пользователь может нажать выйти для выхода из системы -->
   <a href="logout.php">Выйти</a>
   <?php else : header('Location: login.php')?>
   <?php endif; ?>

<div class="container mt-4">
		<div class="row">
			<div class="col">
	   <!-- Форма регистрации -->
		<h2>Форма добавления нового товара</h2>
		<form action="adding_product.php" method="post">
			<input type="text" class="form-control" name="name" id="name" placeholder="Введите название товара"><br>
			<input type="text" class="form-control" name="type" id="type" placeholder="Введите вид ореха"><br>
			<input type="text" class="form-control" name="description" id="description" placeholder="Введите краткое описание"><br>
			<input type="text" class="form-control" name="full_description" id="full_description" placeholder="Введите полное описание"><br>
			<input type="text" class="form-control" name="price" id="price" placeholder="Введите цену"><br>
			<input type="text" class="form-control" name="size" id="size" placeholder="Введите размер упаковки"><br>
			<input type="text" class="form-control" name="weight" id="weight" placeholder="Введите вес упаковки"><br>
			<input type="text" class="form-control" name="shelf_life" id="shelf_life" placeholder="Введите срок годности"><br>
			<input type="text" class="form-control" name="picture" id="picture" placeholder="Название файла-картинки"><br>
			<input type="text" class="form-control" name="if_fried" id="if_fried" placeholder="Орех обжарен? (1/0)"><br>
			<button class="btn btn-success" name="add_product" type="submit">Добавить</button>
		</form>
		<br>
		
		<?php
		$query = R::getAll( 'SELECT * FROM product' );
        foreach($query as $item):
		?>

		<table border='1px'>
			<tr>
				<td>Идентификатор (ID)</td>
				<td>Название товара</td>
				<td>ID вида</td>
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
				<td>Удалить запись</td>
			</tr>
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
				<td><a href='?del_id=<?=$item['id']?>'>Удалить</a></td>
			</tr>
			
		</table>

		<?php endforeach; ?>
		

		<p>Вернуться на <a href="index.php">главную</a>.</p>
			</div>
		</div>
	</div>
<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->
</body>
</html>
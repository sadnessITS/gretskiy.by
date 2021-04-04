<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД
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
   <link rel="stylesheet" href="../gretskiy/static/css/packedmin_all_css.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                 <a class="menu-item" href="signup.php">Добавление нового пользователя</a>
                              </li>
                              
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </nav>
         </header>

   

   <?php else : header('Location: login.php')?>
   <?php endif; ?>
   <?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->
</body>
</html>
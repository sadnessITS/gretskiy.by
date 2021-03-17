﻿<?php
require ("../shopping/connection.php");
if (isset($_GET['page'])){
$pages=array("products", "cart");
      if (in_array($_GET['page'],$pages)){
$_page=$_GET['page'];
      }
      else{
$_page="products";
    }
} 
else{
  $_page="products";
}

    ?>
<!DOCTYPE html>
<html lang="ru">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Продукция - ФХ “Грицкевичей”, Gretsky</title>
    <meta name="description" content="Фермерское хозяйство “Грицкевичей” в широком ассортименте предлагает купить орехи оптом с доставкой. Мы осуществляем продажу овощей оптом от производителя">
    <meta name="keywords" content="">
    <link rel="preload" href="../gretskiy/static/fonts/ElegantIcons.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="../gretskiy/static/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../gretskiy/static/fonts/Cera%20Pro%20Regular.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="../gretskiy/static/fonts/Cera%20Pro%20Medium.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="../gretskiy/static/fonts/Cera%20Pro%20Bold.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="../gretskiy/static/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="../gretskiy/static/css/packedmin_all_css.css">
    <link rel="shortcut icon" href="../gretskiy/static/images/fav.png">
    <meta property="og:site_name" content="ФХ “Грицкевичей” - Фермерское хозяйство “Грицкевичей”, Gretskiy, Vitae">    
    <meta property="og:locale" content="ru_RU">    
    <meta property="og:title" content="Фермерское хозяйство “Грицкевичей” в широком ассортименте предлагает купить орехи оптом с доставкой. Мы осуществляем продажу овощей оптом от производителя">    
    <meta property="og:type" content="website">    
    <meta property="og:image" content="../gretskiy/static/images/logo.svg">            
    <meta property="og:url" content="../index.html">    
    <meta property="og:description" content="ФХ “Грицкевичей” - Фермерское хозяйство “Грицкевичей”, Gretskiy, Vitae. В широком ассортименте предлагает купить орехи оптом с доставкой. Мы осуществляем продажу овощей оптом от производителя">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NQ6247F');</script>
    <!-- End Google Tag Manager -->
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQ6247F"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="preload"><div class="preload-box"><div class="line"></div><div class="line"></div><div class="line"></div></div></div>
    <div id="main">
      <header> 
        <div class="header-block d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-8">
                <div class="header-left d-flex flex-column flex-md-row align-items-center">
                  <p class="d-flex align-items-center"><a href="mail:" class="contact-line-field"><i class="fas fa-envelope"></i>export@gretskiy.by</a></p>
                  <p class="d-flex align-items-center"><a href="tel:" class="contact-line-field url-phone"><i class="fas fa-phone"></i>+375 33 323 03 01</a></p>
                    <div class="phone-link d-flex">
                    <a href="https://telegram.me/"><i class="fab fa-telegram"> </i></a>
                    <a href="https://wa.me/300"><i class="fab fa-whatsapp"></i></a>
                    <a href="viber://chat?number=%2B30300"><i class="fab fa-viber"> </i></a>
                    <a href="https://www.instagr65/" target="_blank"><i class="fab fa-instagram"> </i></a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="header-right d-flex flex-column flex-md-row justify-content-md-end justify-content-center align-items-center">
                  <div class="social-link d-flex">
                    <p>Фермерское хозяйство “Грицкевичей”</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <nav class="navigation d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-2">
                <a class="logo" href="../index.html"><img src="../gretskiy/static/images/logov2.png" width="150px" alt=""></a>
              </div> 
              <div class="col-8">
                <div class="navgition-menu d-flex align-items-center justify-content-center">
                  <ul class="mb-0">
                    <li class="toggleable">
                    <a class="menu-item" href="../index.html">Главная</a>
                    </li>
                    <li class="toggleable">
                      <a class="menu-item" href="all.php">Продукция</a>
                    </li>
                    <li class="toggleable">
                      <a class="menu-item" href="../about_company.html">О компании</a>
                    </li>
                    <li class="toggleable">
                      <a class="menu-item" href="../blog.html">Новости</a>
                    </li>
                    <li class="toggleable">
                      <a class="menu-item" href="../contact.html">Контакты</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-2">
                <div class="product-function d-flex align-items-center justify-content-end">
                  <div id="cart"><a class="function-icon icon_bag_alt" href="../shopping/index.php"><span>ЗАКАЗАТЬ</span></a></div>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <div id="mobile-menu">
          <div class="container">
            <div class="row">
              <div class="col-3">
                <div class="mobile-menu_block d-flex align-items-center"><a class="mobile-menu--control" href="#"><i class="fas fa-bars"></i></a>
                  <div id="ogami-mobile-menu">
                    <button class="no-round-btn" id="mobile-menu--closebtn">МЕНЮ</button>
                    <div class="mobile-menu_items">
                      <ul class="mb-0 d-flex flex-column">
                        <li class="toggleable">
                          <a class="menu-item" href="../index.html">Главная</a>
                        </li>
                        <li class="toggleable">
                          <a class="menu-item" href="all.php">Продукция</a>
                        </li>
                        <li class="toggleable">
                          <a class="menu-item" href="../about_company.html">О компании</a>
                        </li>
                        <li class="toggleable">
                          <a class="menu-item" href="../blog.html">Новости</a>
                        </li>
                        <li class="toggleable">
                          <a class="menu-item" href="../contact.html">Контакты</a>
                        </li>

                        <!--<li class="toggleable"> </li>
                        <li class="toggleable"><a class="menu-item" href="#">Пример вложенности</a><span class="sub-menu--expander"><i class="icon_plus"></i></span>
                          <ul class="sub-menu" style="display: none;">
                            <li><a href="404.html">404</a></li>
                            <li><a href="blog_detail.html">страница новости</a></li>
                            <li><a href="shop.html">страница каталога</a></li>
                            <li><a href="produkt.html">страница товара</a></li>
                          </ul>
                        </li>-->
                      </ul>
                    </div>
                   
                    <div class="mobile-login">
                      <a href="tel:" class="url-phone"><i class="fas fa-phone"></i> +375 33 323 03 01</a>
                      <a href="mail:"><i class="fas fa-envelope"></i> export@gretsky.by</a>
                    </div>
                    <div class="mobile-social justify-content-center">
                      <a href="https://wa.me/" target="_blank"><i class="fab fa-whatsapp"></i></a>
                      <a href="viber://chat?number=" target="_blank"><i class="fab fa-viber"></i></a>
                      <a href="https://telegram.me/" target="_blank"><i class="fab fa-telegram"></i></a>
                      <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                  <div class="ogamin-mobile-menu_bg"></div>
                </div>
              </div>
              <div class="col-6">
                <div class="mobile-menu_logo text-center d-flex justify-content-center align-items-center"><a href="../index.html"><img src="../gretskiy/static/images/logo.png" alt=""></a></div>
              </div>
              <div class="col-3">
                <div class="mobile-product_function d-flex align-items-center justify-content-end">
                <a class="function-icon icon_bag_alt" href="../shopping/index.php"></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="navigation-filter"> 
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-4 col-lg-4 col-xl-3 order-2 order-md-1">
                <div class="department-menu_block">
                  <div class="department-menu d-flex justify-content-between align-items-center"><i class="fas fa-bars"></i>Продукция<span><i class="arrow_carrot-down"></i></span></div>
                  <div class="department-dropdown-menu" style="display: none;">
                    <ul>
                    <li style="text-align: center;font-size: 2ex;border-bottom: 1px solid black;border-top: 1px solid black;"><b>СВЕЖИЕ ОРЕХИ</b></li>
                      <li><a href="fistashki.php" class=""> - <img class="ico-menu" src="../gretskiy/static/images/ico/fistashki.svg" alt="">Фисташки</a></li>
                      <li><a href="funduk.php"> - <img class="ico-menu" src="../gretskiy/static/images/ico/Funduk.svg" alt="">Фундук</a></li>
                      <li><a href="gretskiy_oreh.html"> - <img class="ico-menu" src="../gretskiy/static/images/ico/Gretskiy_orekh.svg" alt="">Грецкий Орех</a></li>
                      <li><a href="mindal.html"> - <img class="ico-menu" src="../gretskiy/static/images/ico/Mindal.svg" alt="">Миндаль</a></li>
                      <li style="text-align: center;font-size: 2ex;border-bottom: 1px solid black;border-top: 1px solid black;"><b>ОБЖАРЕННЫЕ ОРЕХИ</b></li>
                      <li><a href="obzh_lesnoy.html" class=""> - <img class="ico-menu" src="../gretskiy/static/images/ico/Lesnoy_orekh.svg" alt="">Фундук</a></li>
                      <li><a href="obzh_fistashki.html"> - <img class="ico-menu" src="../gretskiy/static/images/ico/Fistashki.svg" alt="">Фисташки</a></li>
                    </ul>
                  </div>
               </div>
              </div>
              <div class="col-12 col-md-8 col-lg-8 col-xl-9 order-1 order-md-2">
                <div class="website-search">
                  <div class="row no-gutters">
                    <form style="display: flex; width:100%;" action="http://gretskiy.by/search" method="post">
                      <div class="col-8 col-md-8 col-lg-9 col-xl-10" style="padding-left: 0; padding-right:0;">
                        <div class="search-input">
                          <input class="no-round-input no-border" name="search" type="text" placeholder="Что хотите искать?">
                        </div>
                      </div>
                      <div class="col-4 col-md-4 col-lg-3 col-xl-2" style="padding-left: 0; padding-right:0;">
                        <input type="hidden" name="csrfmiddlewaretoken" value="1KLlSptFbKvvGVPbrv1zJLa4QkMri0VNgn3f3qC29IxWMciUk4XCjtV2SftrGW5v">
                        <button class="no-round-btn">Поиск</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!--  -->
      
      <!-- End header-->
      <div class="ogami-breadcrumb">
        <div class="container">
          <ul>
            <li> <a class="breadcrumb-link" href="../index.html"> <i class="fas fa-home"></i>Главная</a></li>
            <li> <a class="breadcrumb-link" href="all.php">Продукция</a></li>
            <li> <a class="breadcrumb-link active">Фисташки</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="shop-layout">
        <div class="container">
          <div class="row">
            <div class="col-xl-3">
              <div class="shop-sidebar">
                

<div class="shop-sidebar_department">
  <div class="department_top mini-tab-title underline">
    <h2 class="title">Свежие орехи</h2>
  </div>
  <div class="department_bottom">
    <ul>
      <li> <a class="department-link" href="fistashki.php">Фисташки</a></li>
      <li> <a class="department-link" href="funduk.php">Фундук</a></li>
      <li> <a class="department-link" href="gretskiy_oreh.html">Грецкий орех</a></li>
      <li> <a class="department-link" href="mindal.html">Миндаль</a></li>
    </ul>
  </div>
</div>
<div class="shop-sidebar_department">
  <div class="department_top mini-tab-title underline">
    <h2 class="title">Обжаренные орехи</h2>
  </div>
  <div class="department_bottom">
    <ul>
      <li><a class="department-link" href="obzh_lesnoy.html">Фундук</a></li>
      <li><a class="department-link" href="obzh_fistashki.html">Фисташки</a></li>
    </ul>
  </div>
</div>
              </div>
              <div class="filter-sidebar--background" style="display: none"></div>
            </div>
            <div class="col-xl-9">
              <div class="shop-grid-list">
                <div class="shop-products">
                  <div class="shop-products_top mini-tab-title underline">
                    <div class="row align-items-center">
                      <div class="col-6 col-xl-4">
                        <h2 class="title">Каталог</h2>
                      </div>
                      <div class="col-6 text-right">
                        
                      </div>
                      <div class="col-12 col-xl-8">
                        <div class="product-option">
                          <div class="product-filter">
                          </div>
                          <div class="view-method">
                            <p class="active" id="grid-view"><i class="fas fa-th-large"></i></p>
                            <p id="list-view"><i class="fas fa-list"></i></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Using column-->
                  </div>
                  <div class="shop-products_bottom">
                    <div class="row no-gutters-sm">
                      
                    <?php>
                      $sql="SELECT * FROM `product` WHERE `type_n` = 4 ORDER BY name ASC"; 
                      $query=mysql_query($sql); 
                    ?>
                  <?php
                  while($row=mysql_fetch_array($query))
                  {
                  ?>
                  <div class="col-6 col-md-4">
                    <div class="product">
                      <div class="product-img_block">
                        <a class="product-img" href="../product/fistashki1.php?<?php echo $row['id'] ?>">
                        <?php echo '<img src='.$row[picture].'>'?>
                          </a>
                      </div>
                      <div class="product-info_block">
                          <h5 class="product-type" align="center"><?php echo $row['type'] ?></h5>
                          <a class="product-name" href="../product/fistashki1.php?<?php echo $row['id'] ?>">
                            <?php echo $row['name'] ?>
                          </a>
                            <p class="product-describe"><?php echo $row['description'] ?></p>
                            <h5 class="product-avaiable">Вес продукта: <span><?php echo $row['weight'] ?></span></h5>
                      </div>
                      <div class="product-select">
                      <button class="round-icon-btn" ><a class="round-icon-btn" href="../shopping/index.php">Заказать</a></button>
                      </div>
                      <div class="product-select_list">
                          <p class="delivery-status"><?php echo $row['type'] ?></p>
                          <button class="normal-btn"><a class="normal-btn" href="../shopping/index.php">Заказать</a></button>
                      </div>
                    </div>
                  </div>
                    <?php 
                            } 
                    ?>
                        
                      </div>
                    </div>
                  <div class="shop-pagination">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- -->
      <div class="partner">
        <div class="container">
          <div class="partner_block d-flex justify-content-between" data-slick="{&quot;slidesToShow&quot;: 10}">
            <div class="partner--logo"> <a href="#"><img src="../gretskiy/static/images/partner/diksi.png" alt="partner logo"></a></div>
            <div class="partner--logo"> <a href="#"><img src="../gretskiy/static/images/partner/karusel.png" alt="partner logo"></a></div>
            <div class="partner--logo"> <a href="#"><img src="../gretskiy/static/images/partner/lenta.png" alt="partner logo"></a></div>
            <div class="partner--logo"> <a href="#"><img src="../gretskiy/static/images/partner/logo-billa.png" alt="partner logo"></a></div>
            <div class="partner--logo"> <a href="#"><img src="../gretskiy/static/images/partner/Magnit.png" alt="partner logo"></a></div>
            <div class="partner--logo"> <a href="#"><img src="../gretskiy/static/images/partner/market_da.png" alt="partner logo"></a></div>
            <div class="partner--logo"> <a href="#"><img src="../gretskiy/static/images/partner/okey.png" alt="partner logo"></a></div>
            <div class="partner--logo"> <a href="#"><img src="../gretskiy/static/images/partner/Perekryostok.png" alt="partner logo"></a></div>
            <div class="partner--logo"> <a href="#"><img src="../gretskiy/static/images/partner/pyaterochka.png" alt="partner logo"></a></div>
            <div class="partner--logo"> <a href="#"><img src="../gretskiy/static/images/partner/verniy.png" alt="partner logo"></a></div>
          </div>
        </div>
      </div>
      <!-- -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 text-sm-center text-md-left">
              <div class="footer-logo"><img src="../gretskiy/static/images/logo.png" alt=""></div>
              <div class="footer-contact">
                <p>228322, пгт.Орешковичи, ул. Независимости, 4А область, Республика Крым.</p>
                <p><a href="tel:+37530301" class="contact-line-field url-phone">+375 33 323 03 01</a></p>
                <p><a href="mail:exporiy.by" class="contact-line-field">export@gretskiy.by</a></p>
             </div>
             <div class="footer-social">
                <a class="round-icon-btn" href="https://wa.30301">
                <i class="fab fa-whatsapp"> </i>
                </a>
                <a class="round-icon-btn" href="https://viber://ch33230301">
                <i class="fab fa-viber"> </i>
                </a>
                <a class="round-icon-btn" href="https://telema">
                <i class="fab fa-telegram"></i>
                </a>
                <a class="round-icon-btn" href="https://www.instagrama" target="_blank">
                <i class="fab fa-instagram"></i>
                </a><br/>
                <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://vk." target="_blank">
                <i class="fab fa-vk"></i>
                </a>
                <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://wwk.com/infi_d1ma" target="_blank">
                <i class="fab fa-facebook"></i>
                </a>
                <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://twiinfi_d1ma" target="_blank">
                <i class="fab fa-twitter"></i>
                </a>
                <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://wwwi_d1ma" target="_blank">
                <i class="fab fa-youtube"></i>
                </a>
             </div>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-12 col-sm-4 text-sm-center text-md-left">
                  <div class="footer-quicklink">
                     <h5>Карта сайта</h5>
                     <a href="../index.html">Главная</a>
                     <a href="all.php">Продукция</a>
                     <a href="../about_company.html">О компании</a>
                     <a href="../blog.html">Новости</a>
                     <a href="../contact.html">Контакты</a>
                  </div>
               </div>
               <div class="col-12 col-sm-4 text-sm-center text-md-left">
                       <div class="footer-quicklink">
                          <h5>Свежие орехи</h5>
                          <a href="fistashki.php">Фисташки</a>
                          <a href="funduk.php">Фундук</a>
                          <a href="gretskiy_oreh.html">Грецкий орех</a>
                          <a href="mindal.html">Миндаль</a>
                       </div>
                    </div>
                    <div class="col-12 col-sm-4 text-sm-center text-md-left">
                       <div class="footer-quicklink">
                          <h5>Обжаренные орехи</h5>
                          <a href="obzh_lesnoy.html">Фундук</a>
                          <a href="obzh_fistashki.html">Фисташки</a>
                       </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
        <div class="newletter">
          <div class="container">
            <div class="row justify-content-between align-items-center">
              <div class="col-12 col-md-7">
                <div class="newletter_text text-center text-md-left">
                  <h5>Остались вопросы?</h5>
                  <p>Оставьте свой номер, мы перезвоним и ответим на все ваши вопросы!</p>
                </div>
              </div>
              <div class="col-12 col-md-5">
                <div class="newletter_input">
                  <form id="recoll_me" action="#" method="post">
                    <input class="round-input" type="phone" name="phone" required placeholder="Ваш номер">
                    <input type="hidden" name="csrfmiddlewaretoken" value="1KLlSptFbKvvGVPbrv1zJLa4QkMri0VNgn3f3qC29IxWMciUk4XCjtV2SftrGW5v">
                    <button>Перезвоните</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-credit">
          <div class="container">
            <div class="footer-creadit_block d-flex flex-column flex-md-row justify-content-start justify-content-md-between align-items-baseline align-items-md-center">
              <p class="author">© 2020 Gretskiy | Фермерское хозяйство "Грицкевичей" | Все права защищены</p>
            </div>
          </div>
        </div>
        <div class="form-feedback" id="feedback-form">
          <form id="f_contact" name="contact" action="#" method="post">
            <h2>Оставить заявку</h2>
            <input class="no-round-input mt-20" name="name" type="text" placeholder="Имя"><br>
             <input class="no-round-input mt-20" name="phone" type="phone" required placeholder="Телефон"><br>
             <input class="no-round-input mt-20" name="email" type="email" required placeholder="Email"><br>
             <textarea class="textarea-form mt-20" name="msg" cols="30" rows="10" placeholder="Ваше сообщение"></textarea><br>
            <input type="hidden" name="csrfmiddlewaretoken" value="1KLlSptFbKvvGVPbrv1zJLa4QkMri0VNgn3f3qC29IxWMciUk4XCjtV2SftrGW5v">
             <button id="f_send" class="normal-btn mt-20">Отправить сообщение</button>
          </form>
        </div>
      </footer>
      <!-- -->
    </div>
    <script src="../gretskiy/static/js/packedmin.js"></script>
    <script>

      let inputs = document.getElementsByClassName('parallax-img');

      for (let input of inputs) {
        let paralaximg = new Parallax(input, {
      	  hoverOnly: true,
        });
      }
      
    </script>
    <script type = "application/ld+json" >
        {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "ФХ “Грицкевичей” - Фермерское хозяйство “Грицкевичей”, Gretskiy, Vitae",
        "legalName" : "ФХ “Грицкевичей",
        "url": "https://gretskiy.by/",
        "logo": "https://gretskiy.by/gretskiy/static/images/logo.svg",
        "foundingDate": "2001",
        "address": {
         "@type": "PostalAddress",
        "streetAddress": "ул. Независимости",
        "addressLocality": "4А область, г.Лунинец",
        "addressRegion": "BY",
        "postalCode": "221234",
        "addressCountry": "Belarus"
        },
        "contactPoint": {
         "@type": "ContactPoint",
        "contactType": "sales",
        "telephone": "[+375 (33) 323 03 00]",
        "email": "export@gretskiy.by"
        },
        "sameAs": [
         "https://vk.com/gretskiy365",
         "https://www.facebook.com/gretskiy365carrot",
         "https://twitter.com/gretskiy365",
    	 "https://www.instagram.com/gretskiy365",
    	 "https://twitter.com/Gretskiy365",
         "https://www.youtube.com/watch?v=dQw4w9WgXcQ"
        ]}
    </script >
  
  </body>
</html>
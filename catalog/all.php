<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
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
<html lang="ru"><meta http-equiv="content-type" content="text/html;" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Продукция - ФХ “Грицкевичей”, Gretskiy</title>
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
    <meta property="og:image" content="../gretskiy/static/images/logoV2.png width='150px'">            
    <meta property="og:url" content="../index.php">    
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
                  <p class="d-flex align-items-center"><a href="mail:export@gretskiy.by" class="contact-line-field"><i class="fas fa-envelope"></i>export@gretskiy.by</a></p>
                  <p class="d-flex align-items-center"><a href="tel:+375333230401" class="contact-line-field url-phone"><i class="fas fa-phone"></i>+375 33 323 03 01</a></p>
                  <div class="phone-link d-flex">
                  <a href="https://telegram.me/?"><i class="fab fa-telegram"> </i></a>
                              <a href="https://wa.me/375292682290"><i class="fab fa-whatsapp"></i></a>
                              <a href="https://viber://chat?number=%2B375292682290"><i class="fab fa-viber"> </i></a>
                              <a href="https://www.instagram.com/andreigritskevich/" target="_blank"><i class="fab fa-instagram"> </i></a>
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
                <a class="logo" href="../index.php"><img src="../gretskiy/static/images/logoV2.png" width='150px' alt=""></a>
              </div>
              <div class="col-8">
                <div class="navgition-menu d-flex align-items-center justify-content-center">
                  <ul class="mb-0">
                    <li class="toggleable">
                    <a class="menu-item" href="../index.php">Главная</a>
                    </li>
                    <li class="toggleable">
                      <a class="menu-item" href="all.php">Продукция</a>
                    </li>
                    <li class="toggleable">
                      <a class="menu-item" href="../about_company.php">О компании</a>
                    </li>
                    <li class="toggleable">
                      <a class="menu-item" href="../blog.php">Новости</a>
                    </li>
                    <li class="toggleable">
                      <a class="menu-item" href="../contact.php">Контакты</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-2">
                <div class="product-function d-flex align-items-center justify-content-end">
                  <div id="cart"><?php if ( $_SESSION['totalq'] > 0){ echo '<i style="font-weight: bolder; color : red;">&bull;</i> ';}?><a class="function-icon icon_bag_alt" href="../shopping/index.php"><span>КОРЗИНА</span></a></div>
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
                          <a class="menu-item" href="../index.php">Главная</a>
                        </li>
                        <li class="toggleable">
                          <a class="menu-item" href="all.php">Продукция</a>
                        </li>
                        <li class="toggleable">
                          <a class="menu-item" href="../about_company.php">О компании</a>
                        </li>
                        <li class="toggleable">
                          <a class="menu-item" href="../blog.php">Новости</a>
                        </li>
                        <li class="toggleable">
                          <a class="menu-item" href="../contact.php">Контакты</a>
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
                    <a href="https://telegram.me/?"><i class="fab fa-telegram"> </i></a>
                              <a href="https://wa.me/375292682290"><i class="fab fa-whatsapp"></i></a>
                              <a href="https://viber://chat?number=%2B375292682290"><i class="fab fa-viber"> </i></a>
                              <a href="https://www.instagram.com/andreigritskevich/" target="_blank"><i class="fab fa-instagram"> </i></a>
                    </div>
                  </div>
                  <div class="ogamin-mobile-menu_bg"></div>
                </div>
              </div>
              <div class="col-6">
                <div class="mobile-menu_logo text-center d-flex justify-content-center align-items-center"><a href="../index.php"><img src="../gretskiy/static/images/logo.png" alt=""></a></div>
              </div>
              <div class="col-3">
                <div class="mobile-product_function d-flex align-items-center justify-content-end">
                <?php if ( $_SESSION['totalq'] > 0){ echo '<i style="font-weight: bolder; color : red;">&bull;</i> ';}?>
                <a class="function-icon icon_bag_alt" href="../shopping/index.php"></a>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="navigation-filter"> 
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-4 col-lg-4 col-xl-3 order-2 order-md-1">
                <div class="department-menu_block">
                  <div class="department-menu d-flex justify-content-between align-items-center"><i class="fas fa-bars"></i>Каталог<span><i class="arrow_carrot-down"></i></span></div>
                  <div class="department-dropdown-menu" style="display: none;">
                    <ul>
                      <li style="text-align: center;font-size: 2ex;border-bottom: 1px solid black;border-top: 1px solid black;"><b>СВЕЖИЕ ОРЕХИ</b></li>
                      <li><a href="fistashki.php" class=""> - <img class="ico-menu" src="../gretskiy/static/images/ico/Fistashki.svg" alt="">Фисташки</a></li>
                      <li><a href="funduk.php"> - <img class="ico-menu" src="../gretskiy/static/images/ico/Funduk.svg" alt="">Фундук</a></li>
                      <li><a href="gretskiy_oreh.php"> - <img class="ico-menu" src="../gretskiy/static/images/ico/Gretskiy_orekh.svg" alt="">Грецкий Орех</a></li>
                      <li><a href="mindal.php"> - <img class="ico-menu" src="../gretskiy/static/images/ico/Mindal.svg" alt="">Миндаль</a></li>
                      <li style="text-align: center;font-size: 2ex;border-bottom: 1px solid black;border-top: 1px solid black;"><b>ОБЖАРЕННЫЕ ОРЕХИ</b></li>
                      <li><a href="obzh_lesnoy.php" class=""> - <img class="ico-menu" src="../gretskiy/static/images/ico/Lesnoy_orekh.svg" alt="">Фундук</a></li>
                      <li><a href="obzh_fistashki.php"> - <img class="ico-menu" src="../gretskiy/static/images/ico/Fistashki.svg" alt="">Фисташки</a></li>
                   </ul>
                  </div>
               </div>
              </div>
              <div class="col-12 col-md-8 col-lg-8 col-xl-9 order-1 order-md-2">
                <div class="website-search">
                  <div class="row no-gutters">
                  <form style="display: flex; width:100%;" name="search" action="../search/search.php" method="post">
                                 <div class="col-8 col-md-8 col-lg-9 col-xl-10" style="padding-left: 0; padding-right:0;">
                                    <div class="search-input">
                                       <input class="no-round-input no-border" name="query" type="search" placeholder="Что хотите искать?">
                                    </div>
                                 </div>
                                 <div class="col-4 col-md-4 col-lg-3 col-xl-2" style="padding-left: 0; padding-right:0;">
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
            <li> <a class="breadcrumb-link" href="../index.php"> <i class="fas fa-home"></i>Главная</a></li>
            <li> <a class="breadcrumb-link active">Продукция</a></li>
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
      <li> <a class="department-link" href="gretskiy_oreh.php">Грецкий орех</a></li>
      <li> <a class="department-link" href="mindal.php">Миндаль</a></li>
    </ul>
  </div>
</div>
<div class="shop-sidebar_department">
  <div class="department_top mini-tab-title underline">
    <h2 class="title">Обжаренные орехи</h2>
  </div>
  <div class="department_bottom">
    <ul>
      <li><a class="department-link" href="obzh_lesnoy.php">Фундук</a></li>
      <li><a class="department-link" href="obzh_fistashki.php">Фисташки</a></li>
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
                      
                      
                        <?php
                            $sql="SELECT * FROM `product` ORDER BY name ASC"; 
                            $query=mysqli_query($dbconnect,$sql); 
                          ?>
                          <?php

                            while($row=mysqli_fetch_array($query))
                            {
                             
                          ?>
                          <div class="col-6 col-md-4">
                        <div style="justify-content: left;">
                        <div class="product">
                          <div class="product-img_block">
                          <a class="product-img" href="../product/product_page.php?<?php echo $row['id'] ?>">
                            <?php echo '<img src='.$row['picture'].'>'?>
                            </a>
                          </div>
                          
                          <div class="product-info_block">
                            <h5 class="product-type" align="center"><?php echo $row['type'] ?></h5><a class="product-name" href="../product/product_page.php?<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
                            <p class="product-describe"><?php echo $row['description'] ?></p>
                            <h5 class="product-avaiable">Вес продукта: <span><?php echo $row['weight'] ?></span></h5>
                          </div>
                          <div class="product-select">
                          <?php 
  
  if(isset($_GET['action']) && $_GET['action']=="add"){ 
        
      $id=intval($_GET['id']); 
        
      if(isset($_SESSION['cart'][$id])){ 
            
          $_SESSION['cart'][$id]['quantity']++; 
            
      }else{ 
            
          $sql_s="SELECT * FROM `product` where id={$id}"; 
          $query_s=mysqli_query($dbconnect, $sql_s); 
                   if(mysqli_num_rows($query_s)!=0)
          { 
              $row_s=mysqli_fetch_array($query_s); 
                
              $_SESSION['cart'][$row_s['id']]=array("quantity" => 1,"price" => $row_s['price']); 
                
                
          }else{ 
                
              $message="Неверный id продукта!"; 
                
          } 
            
      } 
        
  } 

?> 
        <form class="cart_a" action="../shopping/index.php?page=all&action=add&id=<?php echo $row['id'] ?>" method="POST"><button class="round-icon-btn" >Заказать</button></form>
                          </div>
                          <div class="product-select_list">
                            <p class="delivery-status"><?php echo $row['type'] ?></p>
                            
                            <form class="cart_a" action="../shopping/index.php?page=all&action=add&id=<?php echo $row['id'] ?>" method="POST"><button class="round-icon-btn" >Заказать</button></form>
                          </div>
                        </div>
                      </div>
                      </div>
                        <?php
                          }
                        ?>
                        
                    </div>
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
                <a class="round-icon-btn" href="https://wa.me/375292682290">
                  <i class="fab fa-whatsapp"> </i>
                </a>
                <a class="round-icon-btn" href="https://viber://chat?number=%2B375292682290">
                  <i class="fab fa-viber"> </i>
                </a>
                <a class="round-icon-btn" href="https://telegram.me/?">
                  <i class="fab fa-telegram"></i>
                </a>
                <a class="round-icon-btn" href="https://www.instagram.com/andreigritskevich/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a><br/>
                <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://vk.com/id90535597" target="_blank">
                  <i class="fab fa-vk"></i>
                </a>
                <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://www.facebook.com/?" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
                <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://twitter.com/?" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
                <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://www.youtube.com/channel/?" target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
                </div>
              </div>
              <div class="col-md-8">
                 <div class="row">
                    <div class="col-12 col-sm-4 text-sm-center text-md-left">
                       <div class="footer-quicklink">
                          <h5>Карта сайта</h5>
                          <a href="../index.php">Главная</a>
                          <a href="all.php">Продукция</a>
                          <a href="../about_company.php">О компании</a>
                          <a href="../blog.php">Новости</a>
                          <a href="../contact.php">Контакты</a>
                       </div>
                    </div>
                    <div class="col-12 col-sm-4 text-sm-center text-md-left">
                       <div class="footer-quicklink">
                          <h5>Свежие орехи</h5>
                          <a href="fistashki.php">Фисташки</a>
                          <a href="funduk.php">Фундук</a>
                          <a href="gretskiy_oreh.php">Грецкий орех</a>
                          <a href="mindal.php">Миндаль</a>
                       </div>
                    </div>
                    <div class="col-12 col-sm-4 text-sm-center text-md-left">
                       <div class="footer-quicklink">
                          <h5>Обжаренные орехи</h5>
                          <a href="obzh_lesnoy.php">Фундук</a>
                          <a href="obzh_fistashki.php">Фисташки</a>
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
                          <input type="hidden" name="csrfmiddlewaretoken" value="9S8Mcg2E5Nk04ejx2Hj5T15tVDFUzOeBovqGnhb13LmravMgVgf8tJQrXymUXKoj">
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
                 <p class="author">© 2021 Gretskiy | Фермерское хозяйство "Грицкевичей" | Все права защищены</p>
              </div>
           </div>
        </div>
        <div class="form-feedback" id="feedback-form">
           <form id="f_contact" name="contact" action="#" method="post">
              <h2>Оставить заявку</h2>
              <input class="no-round-input mt-20" name="name" type="text" placeholder="Имя"><br>
              <input class="no-round-input mt-20" name="phone" type="phone" required placeholder="Телефон"><br>
              <input class="no-round-input mt-20" name="email" type="email" required placeholder="Email"><br>
              <textarea class="textarea-form mt-20" name="msg" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
              <br>
              <input type="hidden" name="csrfmiddlewaretoken" value="9S8Mcg2E5Nk04ejx2Hj5T15tVDFUzOeBovqGnhb13LmravMgVgf8tJQrXymUXKoj">
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
        "logo": "https://gretskiy.by/gretskiy/static/images/logoV2.png width='150px'",
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
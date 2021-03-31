<?php
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
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
     $url = "https://";   
else  
     $url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    
$zxc = parse_url($url, PHP_URL_QUERY);
$id_=(int)$zxc;
    $sql="SELECT * FROM `product` WHERE id = $id_"; 
    $query=mysqli_query($dbconnect,$sql); 
    $row=mysqli_fetch_array($query);
                                          
    ?>
<!DOCTYPE html>
<html lang="ru">
 <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title><?php echo $row['type'] ?> - ФХ “Грицкевичей”, Gretskiy</title>
    <meta name="description" content="None">
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
                  <p class="d-flex align-items-center"><a href="mail:expy" class="contact-line-field"><i class="fas fa-envelope"></i>export@gretskiy.by</a></p>
                  <p class="d-flex align-items-center"><a href="tel:+370407" class="contact-line-field url-phone"><i class="fas fa-phone"></i>+375 33 323 03 01</a></p>
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
                      <a class="menu-item" href="../catalog/all.php">Продукция</a>
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
                  <div id="cart"><?php if ( $_SESSION['totalq'] > 0){ echo '<i style="font-weight: bolder; color : red;">&bull;</i> ';}?><a class="function-icon icon_bag_alt " href="../shopping/index.php"><span>КОРЗИНА</span></a></div>
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
                          <a class="menu-item" href="../catalog/all.php">Продукция</a>
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
                      <a href="tel:+37" class="url-phone"><i class="fas fa-phone"></i> +375 33 323 03 01</a>
                      <a href="mail:expo"><i class="fas fa-envelope"></i> export@gretskiy.by</a>
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
                  <div class="department-menu d-flex justify-content-between align-items-center"><i class="fas fa-bars"></i>Каталог<span><i class="arrow_carrot-down"></i></span></div>
                  <div class="department-dropdown-menu" style="display: none;">
                    <ul>
                    <li style="text-align: center;font-size: 2ex;border-bottom: 1px solid black;border-top: 1px solid black;"><b>СВЕЖИЕ ОРЕХИ</b></li>
                      <li><a href="../catalog/fistashki.php" class=""> - <img class="ico-menu" src="../gretskiy/static/images/ico/Fistashki.svg" alt="">Фисташки</a></li>
                      <li><a href="../catalog/funduk.php"> - <img class="ico-menu" src="../gretskiy/static/images/ico/Funduk.svg" alt="">Фундук</a></li>
                      <li><a href="../catalog/gretskiy_oreh.php"> - <img class="ico-menu" src="../gretskiy/static/images/ico/Gretskiy_orekh.svg" alt="">Грецкий Орех</a></li>
                      <li><a href="../catalog/mindal.php"> - <img class="ico-menu" src="../gretskiy/static/images/ico/Mindal.svg" alt="">Миндаль</a></li>
                      <li style="text-align: center;font-size: 2ex;border-bottom: 1px solid black;border-top: 1px solid black;"><b>ОБЖАРЕННЫЕ ОРЕХИ</b></li>
                      <li><a href="../catalog/obzh_lesnoy.php" class=""> - <img class="ico-menu" src="../gretskiy/static/images/ico/Lesnoy_orekh.svg" alt="">Фундук</a></li>
                      <li><a href="../catalog/obzh_fistashki.php"> - <img class="ico-menu" src="../gretskiy/static/images/ico/Fistashki.svg" alt="">Фисташки</a></li>
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
                        <input type="hidden" name="csrfmiddlewaretoken" value="qQcmO50IrpnKDEZPLjU0w0TgVdftEt9aFtugZ695pnpbJVsyESQ36IEeX8Wt2pjS">
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
            <li> <a class="breadcrumb-link" href="../catalog/all.php">Продукция</a></li>
            <li> <a class="breadcrumb-link" href="../catalog/fistashki.php"><?php echo $row['type']?></a></li>
            <li> <a class="breadcrumb-link active"><?php echo $row['name']?></a></li>
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
              <div class="shop-detail">
                <div class="row">
                  <div class="col-12"> 
                    
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="shop-detail_img">
                      <button class="round-icon-btn" id="zoom-btn" onclick="$('.slick-active.big-img_block a').click();">
                          <i class="icon_zoom-in_alt"></i>
                      </button>
                      <div class="big-img">
                        
                        <div class="big-img_block">
                          <a href="../gretskiy/uploads/uploads/image/product/fistashki1_vnut1.png" style="width:inherit;">
                          <?php echo '<img src="'.$row['picture'].'" alt="product image">'?>
                      </a></div>
                        
                      </div>
                      <div class="slide-img">
                        
                        <div class="slide-img_block"><?php echo '<img src="'.$row['picture'].'" alt="product image">'?></div>
                        
                      </div>
                    </div>
                    <div class="img_control"></div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="shop-detail_info">
                      <h5 class="product-type color-type"><?php echo $row['type']  ?></h5>
                      <h2 class="product-name"><?php echo $row['name']  ?></h2>
                        
                      
                      <div class="product-describe">
                      <?php echo $row['weight']  ?><br>
                      </div>
                      
                      <div class="product-select">
                      <form class="cart_a" action="../shopping/index.php?page=../product/product_page&action=add&id=<?php echo $row['id'] ?>" method="POST"><button class=" normal-btn outline" >Заказать</button></form>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="shop-detail_more-info">
                      <div id="tab-so3">
                        <ul class="mb-0">
                          <li class="active"><a href="#tab-1">Описание</a></li>
                          <li><a href="#tab-2">Свойство</a></li>
                        </ul>
                        <div id="tab-1">
                          <div class="description-block">
                            <div class="description-item_block">
                              <div class="row align-items-center">
                                <div class="col-12 col-md-12">
                                  <div class="description-item_text">
                                    <h2><?php echo $row['type']  ?></h2>
                                          <p><?php echo $row['full_description']  ?></p>                                      
                                  
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="tab-2">
                          <div class="specifications_block">
                            <table class="shop_attributes table-bordered">
                              <tbody>
                                
                                <tr>
                                  <th>Размер</th>
                                  <td class="product_weight"><?php echo $row['size']  ?></td>
                                </tr>
                                
                                <tr>
                                  <th>
Вес</th>
                                  <td class="product_weight"><?php echo $row['weight']  ?></td>
                                </tr>
                                
                                <tr>
                                  <th>
Срок хранения</th>
                                  <td class="product_weight"><?php echo $row['shelf_life']  ?></td>
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
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
             <<div class="footer-social">
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
                       <a href="../catalog/all.php">Продукция</a>
                       <a href="../about_company.php">О компании</a>
                       <a href="../blog.php">Новости</a>
                       <a href="../contact.php">Контакты</a>
                    </div>
                 </div>
                 <div class="col-12 col-sm-4 text-sm-center text-md-left">
                    <div class="footer-quicklink">
                       <h5>Свежие орехи</h5>
                       <a href="../catalog/fistashki.php">Фисташки</a>
                       <a href="../catalog/funduk.php">Фундук</a>
                       <a href="../catalog/gretskiy_oreh.php">Грецкий орех</a>
                       <a href="../catalog/lesnoy.html">Лесной орех</a>
                       <a href="../catalog/mindal.php">Миндаль</a>
                    </div>
                 </div>
                 <div class="col-12 col-sm-4 text-sm-center text-md-left">
                    <div class="footer-quicklink">
                       <h5>Обжаренные орехи</h5>
                       <a href="../catalog/obzh_lesnoy.php">Лесной орех</a>
                       <a href="../catalog/obzh_fistashki.php">Фисташки</a>
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
                    <input type="hidden" name="csrfmiddlewaretoken" value="qQcmO50IrpnKDEZPLjU0w0TgVdftEt9aFtugZ695pnpbJVsyESQ36IEeX8Wt2pjS">
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
            <input type="hidden" name="csrfmiddlewaretoken" value="qQcmO50IrpnKDEZPLjU0w0TgVdftEt9aFtugZ695pnpbJVsyESQ36IEeX8Wt2pjS">
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

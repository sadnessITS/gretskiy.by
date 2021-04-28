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
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
  $url = "https://";   
else  
  $url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    
$zxc = parse_url($url, PHP_URL_QUERY);

?> 

      
<?php
if(isset($_POST['submit'])){ 
  
foreach($_POST['quantity'] as $key => $val) { 
    if($val == 0) { 
        unset($_SESSION['cart'][$key]); 
    }else{ 
        $_SESSION['cart'][$key]['quantity']=$val; 
    } 
} 

}
if(isset($_POST['deleteall'])){ 
  
    foreach($_POST['quantity'] as $key => $val) { 
        if($val == 0) { 
            unset($_SESSION['cart'][$key]); 
        }else{ 
            $_SESSION['cart'][$key]['quantity']=0; 
        } 
    } 
    
    }
    if(isset($_GET['action']) && $_GET['action']=="delete"){
    $id=intval($_GET['idToRemove']); 
        
    if(isset($_SESSION['cart'][$id])){ 
          
        $_SESSION['cart'][$id]['quantity'] = 0; 
    }
    }

function ftime(){
	$_SESSION['totalq'] = '';
    if(isset($_SESSION['cart'])){ 
       $sql="SELECT * FROM `product` ORDER BY name ASC";
             $query=mysqli_query($dbconnect, $sql);
        while ($row=mysqli_fetch_array($query))
        { 
         
           $temp_quantity = $_SESSION['cart'][$row['id']]['quantity'];  
           if ($temp_quantity!='') 
           {
            $_SESSION['totalq'] = $temp_quantity;
            }
        }
	}
	else{ 
		   
		 echo "<p>Ваша корзина пуста.</p>"; 
		   
	 } 
	return $text;
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Корзина <a class= "cart_a" href="../catalog/all.php">Перейти к продуктам</a></h1>
    <form method="post" action="index.php?page=cart"> 
        
        <table> 
            <div id="in-check">
            <tr > 
                <th>Картинка</th>
                <th>Название товара</th> 
                <th>Количество</th> 
                <th>Цена, $</th> 
                <th>Итог</th> 
                <th> </th>
            </tr> 
            
            <?php 
            
                $sql="SELECT * FROM `product` ORDER BY name ASC"; 
                        
                    $query=mysqli_query($dbconnect, $sql); 
                        $totalprice=0; 
                        while($rows=mysqli_fetch_array($query)){ 
                            if($_SESSION['cart'][$rows['id']]['quantity']*$rows['price'] != 0){
                            $subtotal=$_SESSION['cart'][$rows['id']]['quantity']*$rows['price']; 
                            $totalprice+=$subtotal; 	
                        ?>
                            <tr> 
                                <td><?php echo '<img src='.$rows['picture'].' width="50" height="50">'?></td>
                                <td><?php echo $rows['name'] ?></td> 
                                <td><input type="text" name="quantity[<?php echo $rows['id'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$rows['id']]['quantity'] ?>" /></td> 
                                <td>$<?php echo $rows['price'] ?></td> 
                                <td>$<?php echo $_SESSION['cart'][$rows['id']]['quantity']*$rows['price'] ?></td> 
                                <td><a class="cart_a" type="delete" name="delete" href="?idToRemove=<?php echo $rows['id']?>&action=delete">Удалить</a></td>
                            </tr> 
                        <?php 
                            
                        }
                    } 
            ?> 
                        
            
        </table> 

        <div class="ctrl_sum update">Сумма заказа: $<?php echo $totalprice ?></div> 
        <br /> 
        <button class="add-to-cart no-round-btn modalbox-test" href="#feedback-form" style="width: 20%;">Заказать</button>
        <button type="submit" name="submit" class="no-round-btn" style="width: 20%;">Обновить</button>
        <button type="deleteall" name="deleteall" class="no-round-btn" style="width: 20%;">Удалить всё</button>
    </form> 
    <div class="form-feedback" id="feedback-form">
        <form name="contact" action="send.php" method="post">
            <h2>Оставить заявку</h2>
            <input class="no-round-input mt-20" name="name" type="text" placeholder="Имя"><br>
            <input class="no-round-input mt-20" name="phone" type="phone" required placeholder="Телефон"><br>
            <input class="no-round-input mt-20" name="email" type="email" required placeholder="Email"><br>
            <textarea class="textarea-form mt-20" name="comment" cols="30" rows="10" placeholder="Ваше сообщение"></textarea><br>
            <textarea class="form-feedback textarea-form mt-20" name="msg" cols="30" rows="10" placeholder="Ваше сообщение"><?php $_SESSION['totalq'] = '';
    if(isset($_SESSION['cart'])){ 
       $sql="SELECT * FROM `product` ORDER BY name ASC";
             $query=mysqli_query($dbconnect, $sql);
        while ($row=mysqli_fetch_array($query))
        { 
         
           $temp_quantity = $_SESSION['cart'][$row['id']]['quantity'];  
           if ($temp_quantity!='') 
           {
            $text = ''.$row['name'].' x '.$temp_quantity.'; ';
            echo $text;
            $_SESSION['totalq'] = $temp_quantity;
            }
            
        }
        
            ?> 
    <?php 
          
    
   }
   else{ 
          
        echo "<p>Ваша корзина пуста.</p>"; 
          
    } 
    
  ?>
</textarea><br>
            <button type="submit" class="normal-btn mt-20">Отправить сообщение</button>
        </form>
    </div>

</body>
<html>

<?php
if(isset($_POST['submit'])){ 
  
foreach($_POST['quantity'] as $key => $val) { 
    if($val==0) { 
        unset($_SESSION['cart'][$key]); 
    }else{ 
        $_SESSION['cart'][$key]['quantity']=$val; 
    } 
} 
  
}
?>
<h1>Корзина <a class= "cart_a"href="index.php?page=products">Перейти к продуктам</a></h1>
<form method="post" action="index.php?page=cart"> 
      
    <table> 
          
        <tr> 
            <th>Название товара</th> 
            <th>Количество</th> 
            <th>Цена, $</th> 
            <th>Итог</th> 
        </tr> 
          
        <?php 
          
            $sql="SELECT * FROM `elements` ORDER BY name ASC"; 
                      
                  $query=mysql_query($sql); 
                    $totalprice=0; 
                    while($rows=mysql_fetch_array($query)){ 
                        $subtotal=$_SESSION['cart'][$rows['id']]['quantity']*$rows['price']; 
                        $totalprice+=$subtotal; 	
                    ?> 
                        <tr> 
                            <td><?php echo $rows['name'] ?></td> 
                            <td><input type="text" name="quantity[<?php echo $rows['id'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$rows['id']]['quantity'] ?>" /></td> 
                            <td>$<?php echo $rows['price'] ?></td> 
                            <td>$<?php echo $_SESSION['cart'][$rows['id']]['quantity']*$rows['price'] ?></td> 
                        </tr> 
                    <?php 
                          
                    } 
        ?> 
                    
          
    </table> 

    <div class="ctrl_sum update">Сумма заказа: $<?php echo $totalprice ?></div> 
    <br /> 
    <button type="submit" name="submit" class="no-round-btn" style="width: 20%;">Обновить</button>
</form> 
<br /> 
<p>Для удаления товара из корзины установите в графе "Количество" 0. </p>

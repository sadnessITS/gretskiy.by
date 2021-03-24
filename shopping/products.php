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
    <h1>Список продуктов</h1> 
    <?php 
        if(isset($message)){ 
            echo "<h2>$message</h2>"; 
        } 
    ?> 
    <table> 
        <tr> 
            <th>Фото</th>
            <th>Название товара</th> 
            <th>Описание</th> 
            <th>Цена, $</th> 
            <th></th> 
        </tr> 
          
        <?php 
          
            $sql="SELECT * FROM `product` ORDER BY name ASC"; 
            $query=mysqli_query($dbconnect, $sql); 
              
            while ($row=mysqli_fetch_array($query)) { 
                  
        ?> 
            <tr>
                <td><?php echo '<img src='.$row['picture'].' width="50" height="50">'?></td>
                <td><?php echo $row['name'] ?></td> 
                <td><?php echo $row['description'] ?></td>          
                <td>$<?php echo $row['price'] ?></td> 
                <td><a class="cart_a" href="index.php?page=products&action=add&id=<?php echo $row['id'] ?>">Добавить</a></td> 
            </tr> 
        <?php 
                  
            } 
          
        ?> 
          
    </table>
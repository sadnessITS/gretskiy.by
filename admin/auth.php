<?php
   session_start();
   require_once "functions.php";
   if (checkUser($_SESSION["email"], $_SESSION["password"])) {
       header("Location: /admin/index.php");
       exit;
   }
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="Content-type" content="text/html">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Вход в admin-панель</title>
</head>
<body>
    <div>
        <form name="auth.php" action="auth.php" method="post">
            <p>E-mail:<br />
                <input type="text" name="email" />
            </p>
            <p>Пароль:<br />
                <input type="password" name="password" />
            </p>
            <p>
                <input type="submit" name="button_auth" value="Войти" />
            </p>
        </form>
   </div>  
</body>
</html>
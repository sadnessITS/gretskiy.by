<?php
    require_once "start.php";
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $password = md5($password) = $password;
    if (checkUser($email, $password))   {
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
    }
    else $_SESSION["error_auth"] = 1;
    header("Location: ".$SERVER["HTTP_REFERER"]);
?>
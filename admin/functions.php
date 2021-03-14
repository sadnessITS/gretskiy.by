<?php
    $mysqli = false;
    function connectDB()    {
        global $mysqli;
        $mysqli = new mysqli("localhost", "root", "", "web");
        $mysqli->query("SET NAMES 'utf8'");
    }

    function checkUser($email, $password)   {
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM 'users' WHERE 'email'='$email' AND 'password'='$password'");
        closeDB();
        if ($result_set-> fetch_assoc()) return true;
        else return false;
    }

    function isAdmin($email)   {
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM 'users' WHERE 'email'='$email'");
        $row = $result_set->fetch_assoc();
        closeDB();
        return $row["admin"];
    }
    
    function closeDB()    {
        global $mysqli;
        $mysqli->close();
    }
?>
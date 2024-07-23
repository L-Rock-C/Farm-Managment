<?php

$login = $_POST['user'];
$password = $_POST['password'];
$userType = $_POST['user-type'];
$access = $_POST['access'];

$connect = mysqli_connect('localhost', 'root', '', 'farmbd');

if(isset($access)){
    $query = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' AND `userType` = '$userType'")  
             or die("Selection error");

    if(mysqli_num_rows($query) <= 0){
        echo("<script language='javascript' type='text/javascript'> alert('Login e/ou senha incorretos');window.location.href='index.php';</script>");
        die();
    } else{
        setcookie("login",$login);
        header("Location:dashboard.php");
    }
}


?>
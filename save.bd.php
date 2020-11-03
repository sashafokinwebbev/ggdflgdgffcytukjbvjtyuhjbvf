<?php
$login = $_GET['login'];
$pass = $_GET['password'];
$repass = $_GET['repassword'];
$temp = $_GET['temp'];
$per = $_GET['per'];
include('setings.php');
$result = $link->query("SELECT login FROM `registered users` WHERE login = '$login'");
$t = $result->fetch_array();
$loginb = $t['login'];
if ($repass != $pass){
    echo "пороли не совпадают! Нажмите для возврата: ";
    echo '<a href = "register.php">Вернутся</a>';
    return;
}
if ($pass == '' && $login == ''){
    echo "Введите логин или пароль! Нажмите для возврата: ";
    echo '<a href = "register.php">Вернутся</a>';
    return;
}
if($loginb == $login && $temp != '1'){
    echo 'Логин занят!';
    echo '<a href = "register.php">Вернутся</a>';
    return;
}

else {
$pass = base64_encode($pass);
mysqli_query($link, "INSERT INTO `registered users`(`login`, `pass`,`permisions`,`type_pass`) VALUES ('$login','$pass','$per','$temp')");
header('Location: /');
}
?>
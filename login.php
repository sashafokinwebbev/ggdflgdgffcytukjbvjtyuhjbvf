<?php
$login = $_POST['login'];
$pass = $_POST['password'];
include('setings.php');
$result = $link->query("SELECT pass,login,permisions,type_pass FROM `registered users` WHERE login = '$login'");
$t = $result->fetch_array();
$passb = $t['pass'];
$loginb = $t['login'];
$passb = base64_decode($passb);
$passtype = $t['type_pass'];
$per = $t['permisions'];
if($login == '' && $pass == ''){
    $auth = 0;
   header("Location:index.php?auth=$auth",0);
    return;
}
elseif($login == $loginb && $pass == $passb){
    $auth = 1;
    $cod = base64_encode($auth);
    $codd = base64_encode($login);
    $coddd = base64_encode($per);
    $codddd = base64_encode($passtype);
    header("Location:index.php?i=$cod&ii=$codd&iii=$coddd&iiii=$codddd",0);
    return;
}
?>
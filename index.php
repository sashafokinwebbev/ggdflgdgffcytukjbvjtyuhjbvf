<?php
session_start();
$exit = $_GET['exit'];
$login = $_GET['ii'];
$auth = $_GET['i'];
$per = $_GET['iii'];
$passtype = $_GET['iiii'];
$auth = base64_decode($auth);
if($auth == true ){ 
$_SESSION['auth'] = true;
$_SESSION['login'] = $login;
$_SESSION['per'] = $per;
$_SESSION['passtype'] = $passtype;
header('location: / ');
}
if ($_GET['exit'] == 1) {
    session_destroy();

    header('location: / ');
    return;
}
if (!empty($_SESSION['auth']) && $exit != 1 ) {
    $passtype = $_SESSION['passtype'];
    $login = $_SESSION['login'];
    $per = $_SESSION['per'];
    $passtype = base64_decode($passtype);
    $login = base64_decode($login);
    $per = base64_decode($per);
    echo '<a href = "?exit=1">exit</a></br>';
    if($passtype == 'temp'){
        echo"<h1>Ваш пороль временный пожалуйста поменяйте его:</h1>";
    echo('<form action ="repass.php" method="GET"><p>Ваш логин: <input type="text" name="login" /><input type="hidden" name="temp" value="1" /></p><p>Ваш пароль: <input type="text" name="password" /></p><p>Повторите пороль: <input type="text" name="repassword" /></p><p><input type="submit" /></p></form> ');
}
    if($per == 'gladmin'){
    include('server1/rcon.php');
    $cod = 'bW9kZXI=';
    echo"<a href ='server1/stop.php?i=$cod'>выключить сервер </a></br>";
    echo"<a href ='server1/start.php?i=$cod'> включить сервер</a></br>";
    echo"<a href ='server1/copy.php?i=$cod'>Резервная копия</a></br>";    
    echo '<a href ="register.php">Регистрация нового модератора/администратора</a></br>';
    echo "<a href ='delete.bd.index.php'>Удалить аккаунт.</a>";
include('reports.php');
return;    
}
if($per == 'dev' ){
        echo '<a href ="register.php">Регистрация нового модератора/администратора</a></br>';
        echo "<a href ='delete.bd.index.php'>Удалить аккаунт.</a>";
        include('reports.php');
        return;
    }
if($per == 'moder' ){
    include('change.php');    
    include('reports.php');
        return;
    }

}
else{
    echo('<form action ="login.php" method="post"><p>Ваш логин: <input type="text" name="login" /></p><p>Ваш пароль: <input type="text" name="password" /></p><p><input type="submit" /></p></form> ');
    return;
}



?>
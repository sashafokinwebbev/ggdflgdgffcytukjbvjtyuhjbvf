<?php
$login= $_POST['login'];
    include('setings.php');
    mysqli_query($link, "DELETE FROM `registered users` WHERE  `login`='$login'");
    header('Location: /delete.bd.index.php ');
?>
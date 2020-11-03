<?php
$login = $_GET['reportlogin'];
include('setings.php');
mysqli_query($link, "DELETE FROM `reports` WHERE  `login`='$login'");
header('Location: /')
?>
<?php
ob_start();
session_start();

$connection = mysqli_connect("mariadb103.websupport.sk", "snvhfl3z", "Xu9wTEHn:~", "snvhfl3z", 3313);
// Change character set to utf8
mysqli_set_charset($connection,"utf8");

?>
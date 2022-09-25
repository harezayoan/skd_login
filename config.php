<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "skd-login";

$conf = mysqli_connect($host, $user, $pass, $db);
if(!$conf){
    die("koneksi gagal : " .mysqli_connect_error());
}



?>
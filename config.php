<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "cv_database";

$baglanti = mysqli_connect($host, $user, $pass, $db);

if (!$baglanti) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

$baglanti->set_charset("utf8mb4");
?>
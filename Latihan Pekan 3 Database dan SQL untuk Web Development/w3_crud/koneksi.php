<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "demo_php";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    die("Gagal terkoneksi ke database: " . $mysqli->connect_error);
}
?>
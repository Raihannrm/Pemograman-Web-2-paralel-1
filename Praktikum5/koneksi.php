<?php
$servername = "localhost";
$database = "perpustakaan";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
  die("<script>alert('Gagal tersambung dengan database.')</script>");
}
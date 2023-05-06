<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "id20561687_deteksi_latihan";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);
if (!$koneksi){
      die("Connection Failed:.mysqlo_connect_error()");
}
?>
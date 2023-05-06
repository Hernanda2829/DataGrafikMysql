<?php
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');
$d = date("Y-m-d");
$t = date("H:i:s");

if (!empty($_POST['jarak'])) {
	$jarak = $_POST['jarak'];
	$sql = "INSERT INTO data_IoT (tgl,jam,jarak) VALUES ('".$d."','".$t."','".$jarak."')";
	if ($koneksi->query($sql) === TRUE) {
		echo "Data tersimpan.";
	} else {
		echo "Error: " . $sql . "<br>" . $koneksi->error;
	}
} else {
	echo "Data gagal disimpan.";
}
$koneksi->close();
?>
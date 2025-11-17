<?php
include 'Koneksi.php';

$Nama = $_POST['Nama'];
$Lokasi = $_POST['Lokasi'];
$Paket = $_POST['Paket'];
$Alamat = $_POST['Alamat'];
$Telepon = $_POST['Telepon'];
$Tanggal = $_POST['Tanggal'];

mysqli_query($koneksi, "UPDATE Pelanggan SET Lokasi='$Lokasi', Paket='$Paket', Alamat='$Alamat', Telepon='$Telepon', Tanggal='$Tanggal' WHERE Nama='$Nama'");

header("Location: Output.php");

?>
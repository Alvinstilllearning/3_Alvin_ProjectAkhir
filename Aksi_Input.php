<?php
include 'Koneksi.php';

$Nama = $_POST['Nama'];
$Lokasi = $_POST['Lokasi'];
$Paket = $_POST['Paket'];
$Alamat = $_POST['Alamat'];
$Telepon = $_POST['Telepon'];
$Tanggal = $_POST['Tanggal'];

mysqli_query($koneksi, "INSERT INTO Pelanggan (Nama, Lokasi, Paket, Alamat, Telepon, Tanggal) VALUES ('$Nama', '$Lokasi', '$Paket', '$Alamat','$Telepon', '$Tanggal')");

header("Location: Output.php");
?>
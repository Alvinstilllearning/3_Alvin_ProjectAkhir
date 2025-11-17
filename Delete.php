<?php
include 'Koneksi.php';

$Nama = $_GET['Nama'];

mysqli_query($koneksi, "DELETE FROM Pelanggan WHERE Nama='$Nama'");

header("Location: Output.php");

?>
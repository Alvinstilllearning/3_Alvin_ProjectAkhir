<!DOCTYPE html>
<html>
<head>
    <title>GoTravel</title>
    <link rel="icon" type="image/png" href="Favicon.webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand">
        <img src="Favicon.webp" alt="GoTravel" width="30" height="24">
    </a>
    <a class="navbar-brand" style="color: blue;">Gotravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="Input.php">Input Data</a>
            <a class="nav-link" href="Output.php">Show Data</a>
        </div>
    </div>
  </div>

    <div class="ms-auto" style="margin-right:20px;">
        <a href="Login.php" class="btn btn-primary">Logout</a>
    </div>
</nav>
    <?php
    include 'Koneksi.php';
    $Nama = $_GET['Nama'];
    $data = mysqli_query($koneksi, "SELECT * FROM Pelanggan WHERE Nama='$Nama'");
    while($d = mysqli_fetch_array($data)){
        ?>
    <div class="FormLogin">
        <h2>Edit Data Pelanggan</h2>
        <form method="post" action="Update_Aksi.php">
            <table>
                <tr>
                    <td>Lokasi</td>
                    <td>:</td>
                    <td><input type="text" name="Lokasi" value="<?php echo $d['Lokasi']; ?>"></td>
                    <input type="hidden" name="Nama" value="<?php echo $d['Nama'];?>"> 
                </tr>
                <tr>
                    <td>Paket</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="Paket" value="<?php echo $d['Paket']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="Telepon" value="<?php echo $d['Telepon']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="Tanggal" value="<?php echo $d['Tanggal']; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align:center">
                        <input type="submit" value="SIMPAN" class="Tombol"></td>
                        <input type="hidden" name="Nama" value="<?php echo $d['Nama'];?>">                       
                    </td>
                </tr>
            </table>
        </form>
    </div>
        <?php
    }
    ?>
<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 fixed-bottom">
  <p>&copy; 2025 GoTravel. Semua Hak Dilindungi.</p>
</footer>


</body>
</html>

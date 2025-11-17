<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <a class="nav-link active" aria-current="page" href="Output.php">Show Data</a>
        </div>
    </div>
  </div>

    <div class="ms-auto" style="margin-right:20px;">
        <a href="Login.php" class="btn btn-primary">Logout</a>
    </div>
</nav>

<br>
<br>
<br>

<div class="Data">
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Paket</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Tanggal</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'Koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"SELECT * FROM Pelanggan");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['Lokasi']; ?></td>
                <td><?php echo $d['Paket']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td><?php echo $d['Telepon']; ?></td>
                <td><?php echo $d['Tanggal']; ?></td>
                <td>
                    <a href="Update.php?Nama=<?php echo $d['Nama']; ?>">UPDATE</a>
                    <a href="Delete.php?Nama=<?php echo $d['Nama']; ?>">DELETE</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 fixed-bottom">
  <p>&copy; 2025 GoTravel. Semua Hak Dilindungi.</p>
</footer>

</body>
</html>
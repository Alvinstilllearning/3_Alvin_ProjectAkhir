<?php
include 'Koneksi.php';

if(isset($_POST['Register'])){  
    $Username = $_POST['Username'];   
    $Kelamin = $_POST['Kelamin'];
    $Umur = $_POST['Umur'];
    $Alamat = $_POST['Alamat'];
    $Tanggal_Lahir = $_POST['Tanggal_Lahir'];
    $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO Data_Admin (Username, Password, Umur, Alamat, Kelamin, Tanggal_Lahir) 
              VALUES ('$Username','$Password','$Umur','$Alamat','$Kelamin','$Tanggal_Lahir')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert('Registrasi berhasil! Silakan login.');
        window.location='Login.php';</script>";
    } else {
        echo "Gagal mendaftar! Error: " . mysqli_error($koneksi);
    }
}
?>

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
            <a class="nav-link" href="Home.php">Landing Page</a>
            <a class="nav-link" href="About_Us.php">About Us</a>
        </div>
    </div>
  </div>

    <div class="ms-auto" style="margin-right:20px;">
        <a href="Login.php" class="btn btn-primary">Login</a>
    </div>
</nav>
<div class="FormLogin">
    <h2 style="text-align:center;">Form Registrasi</h2>
    <form method="POST">
    <fieldset>
                <table>
                <tr>    
                    <td>
                        <label for="Username"> Masukkan Username </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="Username" placeholder="Username" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Umur">Masukkan Umur </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="number" name="Umur" placeholder="Umur">
                    </td>
                </tr>
                    <td>
                        <label for="Alamat">Masukkan Alamat </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="Alamat" placeholder="Alamat">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Kelamin"> Masukkan Kelamin </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="Kelamin" placeholder="Kelamin">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Tanggal_Lahir"> Masukkan Tanggal Lahir </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="date" name="Tanggal_Lahir">
                    </td>
                </tr>
                </table>
            </fieldset>
            <hr>
        <label for="Password">Masukkan Password</label>
        <input type="Password" name="Password" placeholder="Password" required><br>
        <button type="submit" name="Register" class="Tombol" style="display:block; margin:20px auto;">Daftar</button>
    </form>
    <p style="text-align:center;">Create Account |<a href="Login.php">Login di sini</a></p>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 fixed-bottom">
  <p>&copy; 2025 GoTravel. Semua Hak Dilindungi.</p>
</footer>

</body>
</html>

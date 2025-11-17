<?php


session_start();//
include 'Koneksi.php';//


if(isset($_POST['Login'])){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];


    $query = "SELECT * FROM Data_Admin WHERE Username='$Username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);


    if($user && password_verify($Password, $user['Password'])){
        $_SESSION['Username'] = $user['Username'];

        header("Location: Input.php");
    } else {
        echo "<script>alert('Username atau Password salah!');</script>";
    }
}
?>

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
    <h2 style="text-align:center;"> Login </h2>
    <form method="POST">
        <fieldset>
            <table>
            <tr>
                <td>
                    <label for="Username"> Masukkan Username </label>
                </td>
                <td>:</td>
                <td>
                    <input type="text" name="Username" placeholder="Username">
                </td>
            </tr>
             <tr>
                <td>
                    <label for="Password">Masukkan Password </label>
                </td>
                <td>:</td>
                <td>
                    <input type="Password" name="Password" placeholder="Pass">
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align:center">
                    <button type="submit" name="Login" class="Tombol">LOGIN</button><br>
                    <p>Belum punya akun?<a href="Register.php">Daftar disini aja!</a></p>
                </td>
            </tr>
            </table>
        </fieldset>
    </form>
</div>

<footer class="bg-dark text-white text-center py-3 fixed-bottom">
  <p>&copy; 2025 GoTravel. Semua Hak Dilindungi.</p>
</footer>

</body>
</html>
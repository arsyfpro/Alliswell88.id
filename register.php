<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <?php include 'scrsty.php'; ?>
    <title>Masker & Scrunchies</title>

    <style type="text/css">
      .btn-kustom {
        color: #fff;
        background-color: #5d8975;
        border-color: #5d8975;
      }

      .btn-kustom:hover {
        color: #fff;
        background-color: #48695a;
        border-color: #48695a;
      }
    </style>
</head>
<body>
<?php include "navbar.php";?>
 </div>
  <div style="color: #48695a; width: 600px;" class="container">
  <form method="post" class="login_design">
    <br> <br>

    <h2 align="center">Sign Up</h2><br>
    <p align="center">for your alliswell88.id account</p>
    <br><br>

    <?php
      if (isset($_POST['cekemail'])) {
        $emailregis = $_POST['regisemail'];

        $cekakun = $koneksi->query("SELECT email FROM akun WHERE email = '$emailregis'");
        $adadata = $cekakun->num_rows;

        if ($adadata > 0) {
          echo "<div class='alert alert-danger' role='alert'>Email telah digunakan, silakan gunakan email lain!</div>";
        }
        else{
          echo "<script> window.location.href = 'register_lanjut.php?email=".$emailregis."'; </script>";
        }
      }
    ?>

    <div class="form-group justify-content-center">
      <label for="inputEmail3">Input your email first!</label>
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="regisemail" required>
    </div>
    <br>
    <div align="center" class="form-group">
    <button type="submit" name="cekemail" class="btn btn-kustom">Lanjut</button>
    </div> 
  </form>
  </div>

<br>
<br>
<br>

 <?php include "footer.php";?>
</body>

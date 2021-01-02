<?php
session_start();
//koneksi ke database
include 'koneksi.php';

if (isset($_SESSION['customer']) || !empty($_SESSION['customer'])) {
  header("location:index.php");
}
else if(isset($_SESSION['admin'])){
  header("location:admin/index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <?php include 'scrsty.php'; ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<br><br>
<div style="width: 600px; color: #48695a;" class="container">
  <form method="post" class="login_design">
    <center><h2 style="color: #48695a;">Login</h2></center><br>

    <?php
      if (isset($_POST['tmbllogin'])) {
        $email = $_POST['email'];
        $password = $_POST['pwd'];

        $cekakun = $koneksi->query("SELECT * FROM akun WHERE email = '$email'");
        $hitungakun = $cekakun->num_rows;

        if ($hitungakun == 0) {
          echo "<div class='alert alert-danger' role='alert'>Email atau password salah!</div>";
        }
        else if ($hitungakun == 1) {
          $data = $cekakun->fetch_assoc();

          if ($data['password'] == $password) {

            if ($data['type_user'] == 1) {
              $_SESSION['admin'] = $data;

              echo "<script> alert('Login berhasil!') </script>";
              echo "<script>location='admin/';</script>";
            }

            else if ($data['type_user'] == 2){
              $_SESSION['customer'] = $data;

              echo  '<script type="text/javascript">
                        swal({title: "Login Berhasil!", 
                          text: "", 
                          icon: "success"
                        }).then(function() {
                          window.location = "index.php";
                        });
                     </script>';
            }

            else{
              echo "<div class='alert alert-danger' role='alert'>Email atau password salah!</div>";
            }

          }

          else{
            echo "<div class='alert alert-danger' role='alert'>Email atau password salah!</div>";
          }

        }

      }
    ?>


    <div class="form-group justify-content-center">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="" name="email" required>
    </div>
    <div class="form-group justify-content-center">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" placeholder="" name="pwd" required>
    </div>
      <!-- <p class="text-center"><a href="forgotpassword.php" class="text-info">Forgot your password?</a></p> -->
      <br>
    <div class="form-group justify-content-center">
        <center><button type="submit" name="tmbllogin" class="btn btn-kustom">Login</button></center>
    </div> <!-- form-group// -->          
      <p class="text-center"><a href="register.php" class="text-info">Create account</a></p>                                                 
</form>
</article>
</div> <!-- card.// -->
</div>
<br><br>
 <?php include "footer.php";?>

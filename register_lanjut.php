<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Masker & Scrunchies</title>
    <?php include 'scrsty.php'; ?>
    
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

  <div style="color: #48695a; width: 600px;" class="container">
    <br> <br>
    <h2 align="center">Sign Up</h2><br>
    <p align="center">Let's complete your profile</p>

    <form method="post" id="daftarakun">
    <div class="form-group justify-content-center">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group justify-content-center">
      <label for="nama">Name</label>
      <input type="text" name="nama" class="form-control" placeholder="Full name" required>
    </div>
    <div class="form-group justify-content-center">
      <label for="nope">No. HP</label>
      <input type="text" name="nope" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="Phone Number" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input id="passw" type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
      <label for="password2">Confirmation Password</label>
      <input type="password" class="form-control" name="password2" placeholder="Password (again)" required>
    </div>

    <br>

    <div align="center" class="form-group">
      <button class="btn btn-kustom">Register</button>
    </div> 
    </form>
  </div>



<br>
<br>
<br>

 <?php include "footer.php";?>

 <script type="text/javascript">
     $(document).ready(function(){
      $('#daftarakun').validate({
        rules:{
          email:{
            email : true
          },
          nama:{
            minlength : 5,
            maxlength : 100
          },
          nope:{
            digits : true,
            minlength : 3,
            maxlength : 20
          },
          password:{
            minlength: 6
          },
          password2:{
            equalTo: "#passw"
          }
        },
        messages:{
          email:{
            required: "<font color = 'red'>Email tidak boleh kosong!</font>",
            email: "<font color='red'>Format email salah!</font>"
          },
          nama:{
            required : "<font color = 'red'>Nama tidak boleh kosong!</font>",
            minlength : "Nama minimal 3 karakter.",
            maxlength : "Nama maksimal 100 karakter."
          },
          nope:{
            required : "<font color = 'red'>No. HP tidak boleh kosong!</font>",
            digits : "<font color = 'red'>Format tidak sesuai!</font>",
            minlength : "No. HP minimal 3 digit.",
            maxlength : "No. HP maksimal 20 digit."
          },
          password:{
            required : "<font color = 'red'>Password tidak boleh kosong!</font>",
            minlength : "Password minimal 6 karakter."
          },
          password2: {
            required : "<font color = 'red'>Konfirmasi Password harus diisi!</font>",
            equalTo : "<font color = 'red'>Password tidak sama!</font>"
          }
        }
      });
     });
  </script>

  <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>

</body>
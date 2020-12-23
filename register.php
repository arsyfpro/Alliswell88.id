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
</head>
<body>
<?php include "navbar.php";?>
 </div>
  <div class="container">
  <form action="#" class="login_design">
    <br> <br>
    <h2>Sign Up</h2><br>
    <div class="form-group justify-content-center">
      <label for="inputName">Name</label>
       <input type="text" class="form-control" id="inputName" placeholder="Full name">
     </div>
    <div class="form-group justify-content-center">
      <label for="inputEmail3">Email</label>
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
    </div>
    <div class="form-group">
    <label for="inputPassword3">Password</label>
    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="">
    </div>
    <div class="form-group">
    <label for="inputVerify3">Verify</label>
    <input type="password" class="form-control" id="inputVerify3" placeholder="Password (again)" required="">
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-success btn-lg float-right">Register</button>
    </div> 
</div>

</form>

<br>
<br>

 <?php include "footer.php";?>
</body>

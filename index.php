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
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" style="background: url(image/thumb.png); background-size: 100%;">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
       <img src="image/thumb.png" width="400px;">
        <p class="lead font-weight-normal" style="color: white;">Deskripsi</p>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    
        <hr class="featurette-divider">
         <h2 align="center">alliswell88.id</h2>
<div class="p-5 p-md-5 m-md-5">
      <div class="container marketing">
        <div class="row" align="center">
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/thumb.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Judul Deskripsi</h2>
            <p>Desc.</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/thumb.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Judul Desk</h2>
            <p>deskp</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/thumb.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Jdl desk</h2>
            <p>desk.</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
</div>
        <hr class="featurette-divider">
         <h1 align="center">Shop Now</h1>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3"><a href="buah.php">
      <div class="bg-light shadow-sm mx-auto" style="width: 50%; height: 500px; border-radius: 2px 2px 2px 2px; background: url(image/thumb.png); background-size: 117%">
        <div class="my-3 py-3" >
          <center><br><br><br><br><br><br><br><h1 class="display-5" style="color: white; size: 250%;">Buah</h1></center>
           
        </div></a>
      </div><a href="sayur.php">
      <div class="bg-dark shadow-sm mx-auto" style="width: 50%; height: 500px; border-radius: 2px 2px 2px 2px; background: url(image/thumb.png); background-size: 100%">
        <div class="my-3 p-3">
          <center><br><br><br><br><br><br><br><h1 class="display-5" style="color: white; size: 250%">Sayur</h1></center>
        </div></a>
      </div>
    </div>
    
   
     <?php include "footer.php";?>
</body>
</html>
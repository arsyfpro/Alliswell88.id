<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>DETAIL PER PRODUK</title>
	<meta charset="utf-8">
    <?php include 'scrsty.php'; ?>
</head>
<body>

	<?php include 'navbar.php'; ?>


	<div class="card-visible" style="width: 75%; margin: 50px 100px 0px 100px;">
  		<div class="row no-gutters ">
    		<div class="col-md-4">
  				<img src="image/christmas-scrunchie.png" class="card-img-top" style="border-radius: 30px; margin: 30px 0px 0px 30px" align="center">
  			</div>
  			<div class="col-md-8">
  				<div class="card-body" style="margin-left: 150px; width: 100%;">
    				<h5 class="card-text">nama</h5>
    				<h5 class="card-text">harga</h5>
    				<br><br>
    				<a href="keranjang.php" class="btn btn-sm btn-danger" style="width: 100%">Add To Chart</a>
    				<br><br>
    				<p style="text-align: justify;">Deskripsi Masker 3 Ply 3Ply isi 2 Box isi100 Pcs Earloop 3 lapis Face Mask. Sablon di dus tidak selalu sama ya. Masker Untuk umum Non Medis Filter 3 Ply. Terdapat aluminum sheet yang bisa diatur sesuai bentuk hidung Anda. Masker 3 ply standart internasional. Masker 3 ply (terdiri dari 3 lapisan, lapisan luar, dalam dan bagian tengah yang berfungsi sebagai filter, bactery filter efficiency 99.9%) dengan tali karet lentur yang dipasang di telinga. Menutup hidup dan mulut dengan sempurna, dan tahan percikan air. Cara pakai mudah dengan menggantungkan tali karet di kedua telinga dan menarik bagian bawah masker hingga menutup sampai dagu. Masker Untuk umum Non Medis Filter 3 Ply. Terdapat aluminum sheet yang bisa diatur sesuai bentuk hidung Anda. Masker 3 ply standart internasional. Masker 3 ply (terdiri dari 3 lapisan, lapisan luar, dalam dan bagian tengah yang berfungsi sebagai filter, bactery filter efficiency 99.9%) dengan tali karet lentur yang dipasang di telinga. Menutup hidup dan mulut dengan sempurna, dan tahan percikan air. Cara pakai mudah dengan menggantungkan tali karet di kedua telinga dan menarik bagian bawah masker hingga menutup sampai dagu.</p>
  				</div>
  			</div>			
  		</div>
	<br><br>
	</div>

	<?php include 'footer.php'; ?>

</body>
</html>
<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

    <?php include 'scrsty.php'; ?>
    <title>Masker & Scrunchie</title>
    <style>
    	.daftar-edisi{	
    		color: inherit;
    		text-decoration: none;
    	}
    	.daftar-edisi:hover{
    		color:#7a7777; 
    		text-decoration:none; 
    		cursor:pointer;  
    	}
    	.page-link{
    		color: inherit;
    		text-decoration: none;
    		outline: none;
    	}
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div align="center">
<img src="icon/Masker1.png" style="width: 20%;">
</div><br>

<?php
	$fetch = $koneksi->query("SELECT e.id_edisi, e.edisi, e.foto_masker 
								FROM produk p JOIN kategori_warna_produk w ON p.stok_produk > 0 AND p.id_warna = w.id_warna 
								JOIN kategori_produk_edisi e ON w.id_edisi = e.id_edisi GROUP BY e.id_edisi");
	while($data = $fetch->fetch_assoc()){
?>

<a class="daftar-edisi" href="produk.php?edisi=<?php echo $data['id_edisi'] ?>" style="width: auto;">
<div class="jumbotron jumbotron-fluid" style="background-image: url(image/<?php echo $data['foto_masker'] ?>); background-size: cover; background-position: center; padding: 30px; margin: 0px 55px 55px 55px; border-radius: 20px">
  <div class="container">
    <strong><h1 class="display-4" style="font-weight: 400;"><?php echo $data['edisi'] ?></h1></strong>
    <!-- <strong><p class="lead" style="font-weight: 500;">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p></strong> -->
  </div>
</div>
</a>

<?php
	}
?>

<!-- <a class="daftar-edisi" href="masker-produk.php" style="width: auto;">
<div class="jumbotron jumbotron-fluid" style="background-image: url(image/spunbond-mask-Creme.png); background-position: center; padding: 30px; margin: 0px 55px 55px 55px; border-radius: 20px">
  <div class="container">
    <strong><h1 class="display-4" style="font-weight: 400;">Nama Edisi</h1></strong>
    <strong><p class="lead" style="font-weight: 500;">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p></strong>
  </div>
</div>
</a> -->

<?php include 'footer.php' ?>

</body>
</html>
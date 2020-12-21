<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>PRODUK</title>
	<meta charset="utf-8">
    <?php include 'scrsty.php'; ?>
</head>
<body>

	<?php include 'navbar.php'; ?>

<div class="card" align="center">
  <div class="card-body">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #48695a">Edisi</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="3">List Edisi</a>
      </div>
  </div>
</div>

<div class="container mt-5">
    
<div class="row justify-content-center">
	<a href="detail.php" style="color: inherit; text-decoration: none;">
  <figure class="card card-product">
    <div class="img-wrap"><img src="image/christmas-scrunchie.png"></div>
    <figcaption class="info-wrap">
        <h4 class="title">Christmas Scrunchie</h4>
        <p class="desc">Desainnya indah, seindah hari natalmu!</p>
        <div class="rating-wrap">	
          <div class="label-rating">132 reviews</div>
          <div class="label-rating">154 orders </div>
        </div> <!-- rating-wrap.// -->
    </figcaption>
    <div class="bottom-wrap">
      <a href="keranjang.php" class="btn btn-sm btn-danger active float-right">Add To Chart</a> 
      <div class="price-wrap h5 float-left">
        <span class="price-new">Rp.12.000</span> <del class="price-old">Rp14.000</del>
      </div> <!-- price-wrap.// -->
    </div> <!-- bottom-wrap.// -->
  </figure></a>
</div>

</div> 
<!--container.//-->

<?php include 'footer.php'; ?>

</body>
</html>
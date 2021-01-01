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

<!--membuat Carousel -->

    <!-- Section: Block Content -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="carousel/Batik.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="carousel/Christmas.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Carousel/Satin.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!-- Carousel Wrapper -->

</section>
<!-- Section: Block Content -->

  <!--end of Carousel -->


  <!--index-->

 <div class="container mt-5">

  <style>
    .card-body {
      border-bottom-left-radius: inherit !important;
      border-bottom-right-radius: inherit !important;
    }
  </style>

  <!--Section: Content-->
  <section class="dark-grey-text text-center">

    <h5 class="grey-text w-responsive mx-auto mb-5">Alliswell88.id is a Local Brand for Cloth Masks and Scrunchie with High Quality Fabrics and Trendy Design to keep you protected and fashionable.</h5>
    <br><br>
    <!-- Section heading -->
    <h3 class="font-weight-bold mb-4 pb-2">Special for you</h3>
    <!-- Section description -->

    
 <div class="row">
<?php
  $queryambil = $koneksi->query("SELECT id_produk, id_warna, nama_produk, harga_produk, foto_produk, stok_produk FROM produk WHERE stok_produk > 0 ORDER BY rand() LIMIT 6");

  while ($data = $queryambil->fetch_assoc()) {
?>
<div class="col-md-4">
  <figure class="card card-product">
   <a href="detail.php?id=<?php echo $data['id_produk'] ?>" style="color: inherit; text-decoration: none;">
    <div class="img-wrap"><img src="image/<?= $data['foto_produk'] ?>"></div>
    <figcaption class="info-wrap">
        <h4 class="title"><?= $data['nama_produk'] ?></h4>
    </figcaption>
   </a>
    <div class="bottom-wrap">
      <a href="action_cart_in.php?id=<?php echo $data['id_produk'] ?>" class="btn btn-sm btn-danger active float-right">Add To Cart</a> 
      <div class="price-wrap h5">
        <span class="price-new">Rp <?= number_format($data['harga_produk']) ?>,-</span>
      </div> <!-- price-wrap.// -->
    </div> <!-- bottom-wrap.// -->
  </figure>
</div> <!-- col // -->
<?php } ?>

</div> <!-- row.// -->

<br><br>

<h4>Check all of them out <a href="allstuff.php">here!</a></h4>

</div> 
<!--container.//-->


</div>
 <?php include "footer.php";?>
</body>
</html>


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
    
    <!-- Section heading -->
    <h3 class="font-weight-bold mb-4 pb-2">Our bestsellers</h3>
    <!-- Section description -->
    <p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit fugit, error amet numquam iure provident voluptate esse quasi nostrum quisquam eum porro a pariatur veniam.</p>

    
 <div class="row">
<div class="col-md-4">
  <figure class="card card-product">
    <div class="img-wrap"><img src="image/natal/christmas-scrunchie.png"></div>
    <figcaption class="info-wrap">
        <h4 class="title">Christmas Scrunchie</h4>
        <p class="desc">Desainnya indah, seindah hari natalmu!</p>
        <div class="rating-wrap">
          <div class="label-rating">132 reviews</div>
          <div class="label-rating">154 orders </div>
        </div> <!-- rating-wrap.// -->
    </figcaption>
    <div class="bottom-wrap">
      <a href="" class="btn btn-sm btn-danger active float-right">Add To Chart</a> 
      <div class="price-wrap h5">
        <span class="price-new">Rp.12.000</span> <del class="price-old">Rp14.000</del>
      </div> <!-- price-wrap.// -->
    </div> <!-- bottom-wrap.// -->
  </figure>
</div> <!-- col // -->
<div class="col-md-4">
  <figure class="card card-product">
    <div class="img-wrap"><img src="image/Klamby/klamby-mask-lilac.png"> </div>
    <figcaption class="info-wrap">
        <h4 class="title">Purple Satin Klamby</h4>
        <p class="desc">Warnanya manis, semanis senyum kamu!</p>
        <div class="rating-wrap">
          <div class="label-rating">132 reviews</div>
          <div class="label-rating">154 orders </div>
        </div> <!-- rating-wrap.// -->
    </figcaption>
    <div class="bottom-wrap">
        <a href="" class="btn btn-sm btn-danger active float-right">Add To Chart</a> 
        <div class="price-wrap h5">
          <span class="price-new">Rp.12.0000</span>
        </div> <!-- price-wrap.// -->
    </div> <!-- bottom-wrap.// -->
  </figure>
</div> <!-- col // -->
<div class="col-md-4">
  <figure class="card card-product">
    <div class="img-wrap"><img src="image/satin/satin-scrunchie-greenmint.png"></div>
    <figcaption class="info-wrap">
        <h4 class="title">Green Mint Satin Srunchie</h4>
        <p class="desc">Lembut kan warnanya?</p>
        <div class="rating-wrap">
          <div class="label-rating">132 reviews</div>
          <div class="label-rating">154 orders </div>
        </div> <!-- rating-wrap.// -->
    </figcaption>
    <div class="bottom-wrap">
        <a href="" class="btn btn-sm btn-danger active float-right">Add To Cart</a> 
        <div class="price-wrap h5">
          <span class="price-new">Rp13.000</span>
        </div> <!-- price-wrap.// -->
    </div> <!-- bottom-wrap.// -->
  </figure>
</div> <!-- col // -->
</div> <!-- row.// -->



</div> 
<!--container.//-->


</div>
 <?php include "footer.php";?>
</body>
</html>


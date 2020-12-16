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

<!--membuat news -->

    <!-- Section: Block Content -->
<section>

  <!-- Carousel Wrapper -->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!-- Indicators -->
    <!-- Slides -->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <a href="#!">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce4.jpg" alt="First slide">
            <div class="mask rgba-white-slight text-center d-flex align-items-center justify-content-center">
              <div class="row">
                <div class="col-12">
                  <p class="h1-responsive red-text font-weight-bold mb-0">Sale off 30% on every saturday!</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <!-- Mask color -->
        <div class="view">
          <a>
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce2.jpg" alt="Second slide">
            <div class="mask rgba-white-slight text-center d-flex align-items-center justify-content-center">
              <div class="row">
                <div class="col-12">
                  <p class="h1-responsive indigo-text font-weight-bold mb-0">Promotion on each smartphone!</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <!-- Mask color -->
        <div class="view">
          <a>
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce3.jpg" alt="Third slide">
            <div class="mask rgba-white-slight text-center d-flex align-items-center justify-content-center">
              <div class="row">
                <div class="col-12">
                  <p class="h1-responsive orange-text font-weight-bold mb-0">Sale off 20% on every headphones!</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!-- Slides -->
    <!-- Controls -->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!-- Controls -->
  </div>
  <!-- Carousel Wrapper -->

</section>
<!-- Section: Block Content -->

  <!--end of newspaper -->
  

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

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4 col-md-12 mb-4">
        <!-- Card -->
        <div class="card card-cascade wider card-ecommerce">
          <!-- Card image -->
          <div class="view view-cascade overlay">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img (55).jpg" class="card-img-top"
              alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!-- Card image -->
          <!-- Card content -->
          <div class="card-body card-body-cascade text-center pb-0">
            <!-- Title -->
            <h5 class="card-title">
              <strong>
                <a href="">GoPro</a>
              </strong>
            </h5>
            <!-- Description -->
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
            <!-- Card footer -->
            <div class="card-footer mt-4">
              <p class="float-left font-weight-bold mb-1 pb-2">1439$</p>
              <a class="float-right material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fas fa-shopping-cart grey-text ml-3"></i>
              </a>
              
            </div>
          </div>
          <!-- Card content -->
        </div>
        <!-- Card -->
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">
        <!-- Card -->
        <div class="card card-cascade wider card-ecommerce">
          <!-- Card image -->
          <div class="view view-cascade overlay">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(49).jpg" class="card-img-top"
              alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!-- Card image -->
          <!-- Card content -->
          <div class="card-body card-body-cascade text-center pb-0">
            <!-- Title -->
            <h5 class="card-title">
              <strong>
                <a href="">Camera</a>
              </strong>
            </h5>
            <!-- Description -->
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
            <!-- Card footer -->
            <div class="card-footer mt-4">
              <p class="float-left font-weight-bold mb-1 pb-2">1160$</p>
              <a class="float-right material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fas fa-shopping-cart grey-text ml-3"></i>
              </a>
              </a>
            </div>
          </div>
          <!-- Card content -->
        </div>
        <!-- Card -->
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">
        <!-- Card -->
        <div class="card card-cascade wider card-ecommerce">
          <!-- Card image -->
          <div class="view view-cascade overlay">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img (56).jpg" class="card-img-top"
              alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!-- Card image -->
          <!-- Card content -->
          <div class="card-body card-body-cascade text-center pb-0">
            <!-- Title -->
            <h5 class="card-title">
              <strong>
                <a href="">iPhone 6S</a>
              </strong>
            </h5>
            <!-- Description -->
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
            <!-- Card footer -->
            <div class="card-footer mt-4">
              <p class="float-left font-weight-bold mb-1 pb-2">2079$</p>
              <a class="float-right material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fas fa-shopping-cart grey-text ml-3"></i>
              </a>
            </div>
          </div>
          <!-- Card content -->
        </div>
        <!-- Card -->
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>
 <?php include "footer.php";?>
</body>
</html>

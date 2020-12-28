

    <!--Main Navigation-->
    <header>

        <!--Navbar-->
        <nav class="navbar navbar-dark navbar-expand-lg scrolling-navbar">

            <div class="container">

                <!-- Navbar brand -->
              <ul class="navbar-nav">
             <li class="nav-item">
                   <a class="navbar-brand" href="index.php">
            <img src="icon/logoputih.png" height="30">
              </a>
            </li>
          </ul>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse justify-content-center" id="navbar">


              <!-- Right -->
              <ul class="navbar-nav">
             <li class="nav-item">
            <a href="#!" class="nav-link navbar-link-2 waves-effect">
            </a>
            </li>
            <li class="nav-item">
            <a href="edisi.php?item=1" class="nav-link waves-effect">
            Masker
            </a>
            </li>
            <li class="nav-item">
            <a href="edisi.php?item=2" class="nav-link waves-effect">
            Scrunchie
            </a>
            </li>
            <li class="nav-item">
            <a href="allstuff.php" class="nav-link waves-effect">
            Shop All
            </a>
            </li>
            </ul>
            </div>
                    <!-- Links -->

                    <!-- Shopping cart icon -->
    <ul class="nav justify-content-end" >
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="keranjang.php" class="nav-link navbar-link-2 waves-effect">
          <?php

            if (isset($_SESSION['customer']) && isset($_SESSION['cart'])){
              $isikeranjang = 0;

                foreach ($_SESSION['cart'] as $id => $jumlah) {
                  $isikeranjang += $jumlah;
                }
                
              echo "<span class='badge badge-pill badge-danger'>".$isikeranjang."</span>";
            }
          ?>
          <img src="icon/Cart2.png" height="30"> 
        </a>
      </li>

      <li class="nav-item">
        <a <?php if(isset($_SESSION['customer'])){echo "href='profil.php'";} else{echo "href='login.php'";} ?> class="nav-link navbar-link-2 waves-effect">
          <img src="icon/People2.png" height="30">
        </a>
      </li>
    </ul>
    </ul>
                </div>
                <!-- Collapsible content -->

            </div>

        </nav>
        <!--/.Navbar--> 




      



    

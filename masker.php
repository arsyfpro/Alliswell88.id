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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <?php include 'scrsty.php'; ?>
    <title>Masker</title>
    <style>
    	a {
    		color: inherit;
    		text-decoration: none;
    	}
    	a:hover {
    		color:#7a7777; 
    		text-decoration:none; 
    		cursor:pointer;  
    	}
    	.page-link {
    		color: inherit;
    		text-decoration: none;
    		outline: none;
    	}
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div align="center">
<img src="image/Masker1.png" style="width: 20%;">
</div><br>

<a href="masker-produk.php" style="width: auto;">
<div class="jumbotron jumbotron-fluid" style="background-image: url(image/2.jpg); background-size: cover; padding: 30px; margin: 0px 55px 55px 55px; border-radius: 20px">
  <div class="container">
    <h1 class="display-4">Nama Edisi</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
</a>

<?php include 'footer.php' ?>

</body>
</html>
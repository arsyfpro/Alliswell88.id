<?php
	session_start();

	if (!isset($_SESSION['customer']) || empty($_SESSION['customer'])) {
		echo "<script> alert('Silakan login terlebih dahulu!'); </script>";
        echo "<script> window.location.href = 'login.php'; </script>";
	}

	include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Masker & Scrunchie</title>
	<meta charset="utf-8">
    <?php include 'scrsty.php'; ?>
</head>
<body>

<?php include 'navbar.php'; ?>

	<div align="center" style="margin: 15px">
	<div class="card" style="width: 60rem; margin: 30px;">
		<div class="card-body">
			<table class="table table-borderless">
			  <thead>
			    <tr>
			      <th colspan="2" style="text-align: center;">
			      	<h2> Your Account </h2><a href="riwayat.php">Order History</a>
			  	  </th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Nama</td>
			      <td><?php echo $_SESSION['customer']['nama']; ?></td>
			    </tr>
			    <tr>
			      <td>Email</td>
			      <td><?php echo $_SESSION['customer']['email']; ?></td>
			    </tr>
			    <tr>
			      <td>Password</td>
			      <td><input class="form control" style="border: none;" type="Password" value="****" disabled></td>
			    </tr>
			    <tr>
			      <td>No Hp</td>
			      <td><?php echo $_SESSION['customer']['no_hp']; ?></td>
			    </tr>
			    <tr>
			      <td>Alamat</td>
			      <td style="width: 40rem; text-align: justify;">
			      	<?php 
			      		if($_SESSION['customer']['alamat'] != '') {
			      			$alamat = $_SESSION['customer']['alamat'].", ".$_SESSION['customer']['kode_pos']; echo $alamat;
			      		}
			      		else {
			      			echo "";
			      		}
			      	?>
			      </td>
			    </tr>
			    <tr>
			    	<td><a class="btn btn-secondary" href="edit_profil.php">Edit Data</a></td>
			    	<td></td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
			<a style="width: 75px; margin-left: 30px" onclick="return confirm('Apakah Anda yakin ingin logout? Semua item dalam keranjang akan hilang.')" class="btn btn-outline-danger" href="logout.php">Logout</a> <br>
	</div>

<?php include 'footer.php'; ?>

</body>
</html>
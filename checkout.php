<?php
	session_start();

	include 'koneksi.php';

	if (!isset($_SESSION['customer']) || empty($_SESSION['customer'])) {
		echo "<script>alert('Silakan login terlebih dahulu!')</script>";
		echo "<script> window.location.href = 'login.php'; </script>";
	}
	else if (!isset($_SESSION['cart']) || empty($_SESSION['cart']) || !empty($_SESSION['cart']) == 0) {
		echo "<script>alert('Keranjang kamu kosong!')</script>";
		echo "<script> window.location.href = 'allstuff.php'; </script>";
	}
	else if ($_SESSION['customer']['alamat'] == '') {
		echo "<script>alert('Harap isi alamat kamu terlebih dahulu!')</script>";
		echo "<script> window.location.href = 'edit_profil.php'; </script>";
	}

	if (!isset($_POST['submitOngkir'])) {
		echo "<script> window.location.href = 'keranjang.php'; </script>";
	}

	$layanan = explode(",", $_POST['pilOngkir']);

	$kurir = $_POST['kurir'];
	$tujuan = $_POST['kotaTujuan'].", ".$_POST['provTujuan'];
	$jenisLayanan = $layanan[0];
	$tarif = $layanan[1];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Masker & Scrunchie</title>
	<?php include 'scrsty.php'; ?>

	<style type="text/css">
      .btn-kustom {
        color: #fff;
        background-color: #5d8975;
        border-color: #5d8975;
      }

      .btn-kustom:hover {
        color: #fff;
        background-color: #48695a;
        border-color: #48695a;
      }
    </style>
</head>
<body>

	<?php include 'navbar.php'; ?>

<div style="margin: 15px" align="center">
	  <div class="card" style="width: 73rem; margin: 30px;">
		<div class="card-body">
			<h5>Opsi Pengiriman</h5>
			<br><br>
			<table width="100%">
				<tr>
					<th>Kurir</th>
					<th>Tujuan</th>
					<th>Jenis Layanan</th>
					<th>Tarif</th>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td><?= $kurir ?></td>
					<td><?= $tujuan ?></td>
					<td><?= $jenisLayanan ?></td>
					<td>Rp <?= number_format($tarif) ?>,-</td>
				</tr>
				<tr><td><br></td></tr>
				<tr><td><br></td></tr>
				<tr><td><br></td></tr>
				<tr>
			  		<th colspan="3">Subtotal untuk Pengiriman</th>
			  		<th>Rp <?= number_format($tarif) ?>,-</th>
			  	</tr>
			</table>

		</div>
	</div>
</div>

	<div style="margin: 15px" align="center">
	  <div class="card" style="width: 73rem; margin: 30px;">
		<div class="card-body">
			<table width="100%" class="table table-borderless">
			  <thead>
			    <tr>
			      <th>Produk</th>
			      <th></th>
			      <th>Harga Satuan</th>
			      <th>Jumlah</th>
			      <th>Subtotal</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<tr>
			  		<td>foto produk</td>
			  		<td>nama produk</td>
			  		<td>harga satuan</td>
			  		<td>jumlah</td>
			  		<td>total</td>
			  	</tr>
			  </tbody>
			  <tfoot>
			  	<tr>
			  		<th colspan="4">Subtotal untuk Produk</th>
			  		<th>Rp. ,-</th>
			  	</tr>
			  </tfoot>
			</table>
		</div>
	</div>
</div>

<div style="margin: 15px" align="center">
	  <div class="card" style="width: 73rem; margin: 30px;">
		<div class="card-body">
			<table width="100%">
			  	<tr>
			  		<td>Subtotal untuk Pengiriman</td>
			  		<td>Rp. ,-</td>
			  	</tr>
			  	<tr>
			  		<td>Subtotal untuk Produk</td>
			  		<td>Rp. ,-</td>
			  	</tr>
			  	<tr>
			  		<th>TOTAL PEMBAYARAN</th>
			  		<th style="color: red">Rp. ,-</th>
			  	</tr>
			</table>
		</div>
	</div>
</div>
	
<div style="margin: 15px" align="center">
	  <div class="card" style="width: 73rem; margin: 30px; border-style: none;">
			<button type="button" class="btn btn-kustom btn-sm btn-block">Buat Pesanan</button>
			<button type="button" class="btn btn-outline-secondary btn-sm btn-block">Batal</button>
		</div>
	</div>
</div>

	<?php include 'footer.php'; ?>

</body>
</html>
<?php
	session_start();

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
			      <th colspan="2" style="text-align: center;">Biodata Diri</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Nama</td>
			      <td>nama member</td>
			    </tr>
			    <tr>
			      <td>Email</td>
			      <td>email member</td>
			    </tr>
			    <tr>
			      <td>Password</td>
			      <td>password member</td>
			    </tr>
			    <tr>
			      <td>No Hp</td>
			      <td>no hp member</td>
			    </tr>
			    <tr>
			      <td>Alamat</td>
			      <td style="width: 40rem; text-align: justify;">
			      	Jalan Dr. T. Mansur No.9, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara 20222
			      </td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
	<a href="editmember.php" class="btn btn-sm btn-success" style="font-size: 15px">Ubah Biodata Diri</a> 
	</div>

<?php include 'footer.php'; ?>

</body>
</html>
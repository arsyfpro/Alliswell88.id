<?php
	session_start();

	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Biodata Diri</title>
	<meta charset="utf-8">
    <?php include 'scrsty.php'; ?>
</head>
<body>

<?php include 'navbar.php'; ?>

	<div align="center" style="margin: 15px">
	<div class="card" style="width: 60rem; margin: 30px;">
		<div class="card-body">

		<h6 style="margin-bottom: 20px">Ubah Biodata Diri</h6>

		 <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Nama</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="#">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Email</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="#">
		    </div>
		  </div>

		 <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="#">
		    </div>
		  </div>

		 <div class="form-group row">
		    <label class="col-sm-2 col-form-label">No Hp</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="#">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Alamat</label>
		    <div class="col-sm-10">
		      <textarea type="text" class="form-control" id="#"></textarea>
		    </div>
		  </div>

		</div>
	</div>
	<a href="profil.php" class="btn btn-sm btn-danger" style="font-size: 15px; margin-right: 50px">Kembali</a> 
	<a href="profil.php" class="btn btn-sm btn-success" style="font-size: 15px; margin-left: 50px">Simpan</a> 
	</div>


<?php include 'footer.php'; ?>

</body>
</html>
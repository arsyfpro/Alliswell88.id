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
			
			<form action="uploadbukti.php" method="post" enctype="multipart/form-data">
			  Unggah bukti pembayaran:
			  <input class="btn btn-sm" type="file" name="fileToUpload" id="fileToUpload"><br>
			  <input class="btn btn-kustom" type="submit" value="Kirim Bukti Pembayaran" name="image">
			</form>

		</div>
	</div>
</div>

	<?php include 'footer.php'; ?>

</body>
</html>
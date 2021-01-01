<!DOCTYPE html>
<html>
<head>
	<title>Masker & Scrunchie</title>
	<meta charset="utf-8">
    <?php include 'scrsty.php'; ?>

    <style type="text/css">
      .btn-kustom {
        color: #5d8975;
        background-color: #fff;
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

<div align="center">
	  <div class="card" style="width: 73rem; margin: 30px;">
		<div class="card-body">
			<table width="100%" class="table table-borderless">
			  <thead>
			    <tr>
			      <th>Order</th>
			      <th>Tanggal</th>
			      <th>Status Pembayaran</th>
			      <th>Total</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			    	<td><a href="nota.php" class="btn btn-kustom">no order</a></td>
			    	<td>tanggal</td>
			    	<td>status Pembayaran</td>
			    	<td>total</td>
			    </tr>
			  </tbody>
			</table>
		</div>
	  </div>

<?php  include 'footer.php'; ?>

</body>
</html>
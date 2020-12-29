<!DOCTYPE html>
<html>
<head>
	<title>Masker & Scrunchie</title>
	<?php include 'scrsty.php'; ?>
	<style>
		.table-borderless > tbody > tr > td,
		.table-borderless > tbody > tr > th,
		.table-borderless > tfoot > tr > td,
		.table-borderless > tfoot > tr > th,
		.table-borderless > thead > tr > td,
		.table-borderless > thead > tr > th {
		    border: none;
		}
	</style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div style="margin: 15px" align="center">
	  <div class="card" style="width: 73rem; margin: 30px;">
		<div style="padding-left: 100px; padding-right: 100px"  class="card-body">
			<table width="100%" class="table table-sm table-borderless">
				<thead>
					<th colspan="2" style="text-align: center;">Pesanan a/n member</th>
				</thead>
				<tbody>
				<tr>
			  		<td width="35%"><img width="100px" src="#"></td>
			  		<td>
			  			nama produk <br>
			  			harga satuan <br>
			  			jumlah <br>
			  			total
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>Alamat</td>
			  		<td style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit fugit, error amet numquam iure provident voluptate esse quasi nostrum quisquam eum porro a pariatur veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit fugit, error amet numquam iure provident voluptate esse quasi nostrum quisquam eum porro a pariatur veniam.</td>
			  	</tr>
			  	<tr>
			  		<td>Jasa Pengiriman</td>
			  		<td>J&T</td>
			  	</tr>
			  	</tbody>
			  	<tfoot>
			  		<tr>
			  			<th>TOTAL PEMBAYARAN</th>
			  			<th>Rp. ,-</th>
			  		</tr>
			  	</tfoot>
			</table>

		</div>
	</div>
</div>

<div style="margin: 15px;" align="center">
		<div style="width: 73rem; margin: 30px;">
			<div class="alert alert-info">
					<p>Silahkan Melakukan Pembayaran sebesar Rp. ,- ke:</p>
					<table style="font-weight: bold;">
					  <strong>
						<tr>
							<td>BANK BRI</td>
							<td>&nbsp;:&nbsp;</td>
							<td>530-301-037-288-537 A/N MHD. ARSYAFIKRI</td>
						</tr>
						<tr>
							<td>OVO/Gopay/Dana/LinkAja!</td>
							<td>&nbsp;:&nbsp;</td>
							<td>0822-7580-9719</td>
						</tr>
					  </strong>
					</table>
			</div>
		</div>
<h6>Sudah melakukan pembayaran? Upload bukti pembayaran <a href="pembayaran.php">di sini</a></h6>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
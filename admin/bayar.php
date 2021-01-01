<?php
$nopesan = $_GET['pesanan'];

if(isset($_GET['username']))
	$uname = $_GET['username'];

$query = $koneksi->query("SELECT * FROM buktibayar WHERE no_pemesanan = '$nopesan'");
$data = $query->fetch_assoc();
?>

<h3>Data Pembayaran Nomor Pemesanan:</h3>
<form method="POST">
	<table class="table table-borderless">
		<tr>
			<td>No. Pembayaran</td>
			<td>:</td>
			<td></td>
			
		</tr>
		<tr>
			<td>Nama Pembayar</td>
			<td>:</td>
			<td></td>
			
		</tr>
		<tr>
			<td>Metode Pembayaran</td>
			<td>:</td>
			<td></td>
		
		</tr>
		<tr>
			<td>Jumlah Pembayaran</td>
			<td>:</td>
			<td>Rp</td>
			
		</tr>
		<tr>
			<td>Tanggal Pembayaran</td>
			<td>:</td>
			<td></td>
			
		</tr>
		<tr>
			<td>Bukti Pembayaran</td>
			<td>:</td>
			<td></td>
			
		</tr>
		<tr>
			<td>Pilih Status</td>
			<td>:</td>
			<td></td>
			<td>
				<select class="form-control" name="stats" required>
					<option value="">--Pilih Status--</option>
					<option value="sukses">Lakukan COD</option>
					<option value="invalid">Tidak Valid</option>
					<option value="batal">Batalkan Pesanan</option>
				</select>
			</td>	
		</tr>
		<tr>
			<td colspan="4">
				<button class="btn btn-info" name="proses" type="submit">Proses</button>
			</td>
		</tr>
	</table>
</form>
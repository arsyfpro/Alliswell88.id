<?php
$nopesanan = $_GET['pesanan'];

$query=$koneksi->query("SELECT * FROM pemesanan JOIN akun ON pemesanan.username=akun.username WHERE pemesanan.no_pemesanan = '$nopesanan'");
$detail=$query->fetch_assoc();
?>

<h3>Detail Pesanan Nomor: <?php echo $nopesanan; ?></h3>

<br>
<hr>
<div class="row">
	<div class="col-md-4">
		<h3>Pembelian</h3>
		<strong>
			No. Pemesanan 	: <?php echo $detail['no_pemesanan']; ?>
		</strong>
		<br>
			Tanggal 		: <?php echo $detail['tanggal_pesan']; ?>
		<br>
			Total 	 		: Rp <?php echo number_format($detail['total_bayar']); ?>
	</div>

	<div class="col-md-4">
		<h3>Pelanggan</h3>
		<div>
			<b><?php echo $detail['nama']; ?></b>
			<br>
			<?php echo $detail['no_hp']; ?>
			<br>
			<?php echo $detail['email']; ?>
		</div>
	</div>

	<div class="col-md-4">
		<h3>Daerah COD</h3>
		<strong>
			<?php echo $detail['area_cod']; ?>
		</strong>
		<br>
			Rp <?php echo number_format($detail['biaya_cod']); ?>
		<br>
			<?php echo $detail['alamat']; ?>
		<br>
	</div>
</div>
<br>
<table class="table table-bordered">
	<thead>
	<tr>
		<th>No</th>
		<th>Nama Barang</th>
		<th>Harga</th>
		<th>Ukuran</th>
		<th>Jumlah</th>
		<th>Total Harga</th>
	</tr>
	</thead>
	<tbody>
		<tr>

		<?php
		$nomor=1;
		$ambil=$koneksi->query("SELECT * FROM pemesanan_barang WHERE no_pemesanan='$_GET[pesanan]'");

		while($pecah=$ambil->fetch_assoc()){
		  ?>
	<td><?php echo $nomor;?></td>
	<td><?php echo $pecah['nama_barang']; ?></td>
	<td>Rp <?php echo number_format($pecah['harga_barang']); ?>,-</td>
	<td><?php echo $pecah['ukuran_barang']; ?></td>
	<td><?php echo $pecah['jumlah_barang']; ?></td>
	<td>Rp <?php echo number_format($pecah['total_harga']); ?>,-</td>

		</tr>
	<?php
	$nomor++;
	 } ?>
</tbody>
</table>
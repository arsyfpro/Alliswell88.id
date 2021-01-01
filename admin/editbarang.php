<h3>Edit Barang Djadjan</h3>
<?php
	$data = $koneksi->query("SELECT * FROM barang WHERE id_barang = '$_GET[id]'")->fetch_assoc();
?>
<form enctype="multipart/form-data" method="POST">
	<table class="table table-borderless">
		<tr>
			<td>Nama Produk</td>
			<td></td>
			<td><input required class="form-control" type="text" name="nama" value="<?php echo $data['nama_produk']; ?>"></td>
		</tr>
		<tr>
			<td>Harga (Rp)</td>
			<td></td>
			<td><input required class="form-control" type="number" min="1" name="harga" value="<?php echo $data['harga_produk']; ?>"></td>
		</tr>
		<tr>
		<tr>
			<td>Deskripsi</td>
			<td></td>
			<td><textarea required class="form-control" name="deskripsi"><?php echo $data['deskripsi_produk']; ?></textarea></td>
		</tr>
		<tr>
			<td>Stok</td>
			<td></td>
			<td><input required class="form-control" type="number" min="0" name="stok" value="<?php echo $data['stok_produk']; ?>"></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td width="125px"><img width="125px" src="../image/produk/<?php echo($data['foto_produk']); ?>"></td>
			<td><input class="form-control" type="file" name="foto"></td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td></td>
			<td>
				<select name="jenis" class="form-control" required>
					<option value="">--Pilih Jenis--</option>
					<option value="snack">Snack</option>
					<option value="drink">Drink</option>
				</select>
			</td>
		</tr>
	</table>
	<button class="btn btn-success" name="simpan">Simpan</button>
</form>

<?php

if (isset($_POST['simpan'])) {
	$namafotobarang = $_FILES['foto']['name'];
	$lokasisementarafoto = $_FILES['foto']['tmp_name'];

	if (!empty($lokasisementarafoto)) {
		move_uploaded_file($lokasisementarafoto, "../image/produk".$namafotobarang);

		$koneksi->query("UPDATE barang SET 
			nama_barang = '$_POST[nama]',
			harga_barang = '$_POST[harga]',
			ukuran_barang = '$_POST[ukuran]',
			deskripsi_barang = '$_POST[deskripsi]',
			stok_barang = '$_POST[stok]',
			gambar_barang = '$namafotobarang',
			jenis = '$_POST[jenis]'
			WHERE id_barang = '$_GET[id]'
			");

		echo "<script>alert('Data Disimpan!');</script>";
		echo "<script>location='index.php?halaman=produk';</script>";
	}
	else{
		$koneksi->query("UPDATE barang SET 
			nama_barang = '$_POST[nama]',
			harga_barang = '$_POST[harga]',
			ukuran_barang = '$_POST[ukuran]',
			deskripsi_barang = '$_POST[deskripsi]',
			stok_barang = '$_POST[stok]',
			jenis = '$_POST[jenis]'
			WHERE id_barang = '$_GET[id]'
			");

		echo "<script>alert('Data Disimpan!');</script>";
		echo "<script>location='index.php?halaman=produk';</script>";
	}
}

?>
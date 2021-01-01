<h3>Input Barang Djadjan</h3>

<form enctype="multipart/form-data" method="POST">
	<table class="table table-borderless">
		<tr>
			<td>Nama Produk</td>
			<td></td>
			<td><input required class="form-control" type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Harga (Rp)</td>
			<td></td>
			<td><input required class="form-control" type="number" min="1" name="harga"></td>
		</tr>
		<tr>
			<td>Stok</td>
			<td></td>
			<td><input required class="form-control" type="number" min="0" name="stok" ></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td></td>
			<td><textarea required class="form-control" name="deskripsi"></textarea></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td></td>
			<td><input class="form-control" type="file" name="foto" required></td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td></td>
			<td>
				<select name="jenis" class="form-control" required>
					<option value="">--Pilih Jenis--</option>
					<option value="snack">Masker</option>
					<option value="drink">Scrunchie</option>
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
	move_uploaded_file($lokasisementarafoto, "../image/produk/".$namafotobarang);

		$koneksi->query("INSERT INTO produk(
			nama_produk,
			harga_produk,
			stok_produk,
			deskripsi_produk,
			foto_produk,
			jenis)
			VALUES(
			'$_POST[nama]',
			'$_POST[harga]',
			'$_POST[ukuran]',
			'$_POST[deskripsi]',
			'$_POST[stok]',
			'$namafotobarang',
			'$_POST[jenis]'
			)");

		echo "<script>alert('Data Disimpan!');</script>";
		echo "<script>location='index.php?halaman=produk';</script>";
}

?>
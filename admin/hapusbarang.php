<?php

$ambil = $koneksi->query("SELECT * FROM barang WHERE id_barang='$_GET[id]'");
$data = $ambil->fetch_assoc();
$foto = $data['gambar_barang'];

if (file_exists("../image/produk/$foto"))
{
	unlink("../image/produk/$foto");
}


$koneksi->query("DELETE FROM barang WHERE id_barang='$_GET[id]'");

echo "<script>alert('Barang Dihapus!');</script>";
echo "<script>location='index.php?halaman=produk';</script>";

?>
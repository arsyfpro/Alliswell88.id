<?php
session_start();

include 'koneksi.php';

if (!isset($_SESSION['customer']) || empty($_SESSION['customer'])) {
		echo "<script> alert('Silakan login terlebih dahulu!'); </script>";
        echo "<script> window.location.href = 'login.php'; </script>";
}

else{
$id = $_GET['id'];

$data = $koneksi->query("SELECT stok_produk FROM produk WHERE id_produk = '$id'")->fetch_assoc();

if (empty($_SESSION['cart'][$id]) || !empty($_SESSION['cart'][$id]) == 0) {
	$_SESSION['cart'][$id] = 1;
}
else if (!empty($_SESSION['cart'][$id])){
	if ($_SESSION['cart'][$id] >= $data['stok_produk']){

		$_SESSION['cart'][$id] = $data['stok_produk'];
	}
	else{
		$_SESSION['cart'][$id]+=1;
	}

}

echo "<script>alert('Produk berhasil dimasukkan ke keranjang!');</script>";
echo "<script>window.history.back();</script>";
}
?>
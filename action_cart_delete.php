<?php
session_start();
$id_produk = $_GET["id"];

unset($_SESSION['cart'][$id_produk]);

echo "<script>alert('Produk berhasil dihapus dari keranjang');</script>";
echo "<script>location ='keranjang.php';</script>";
?>
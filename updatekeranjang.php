<?php
	session_start();

	foreach ($_SESSION['cart'] as $id => $jumlah) {

		$input = 'jumlah'.$id;

		$jumlah =  $_GET[$input];

		$_SESSION['cart'][$id] = $jumlah;
	}

	echo "<script>alert('Data keranjang berhasil diupdate!');</script>";
	echo "<script>location = 'keranjang.php';</script>";
?>
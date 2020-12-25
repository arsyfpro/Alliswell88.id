-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 07:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alliswell88.id`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(5) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `type_user` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `email`, `password`, `nama`, `alamat`, `no_hp`, `type_user`) VALUES
(1, 'alliswell88id@gmail.com', 'admin123', 'Admin', '-', '-', 1),
(2, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk_edisi`
--

CREATE TABLE `kategori_produk_edisi` (
  `id_edisi` int(2) NOT NULL,
  `edisi` varchar(15) NOT NULL,
  `foto_masker` varchar(100) NOT NULL,
  `foto_scrunchie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_produk_edisi`
--

INSERT INTO `kategori_produk_edisi` (`id_edisi`, `edisi`, `foto_masker`, `foto_scrunchie`) VALUES
(1, 'Spunbond', 'spunbond-mask.png', ''),
(2, 'Linen', 'linen-mask.png', ''),
(3, 'Satin', 'satin-mask.png', 'satin-scrunchie.png'),
(4, 'Katun', 'katun-mask.png', 'cotton-scrunchie.png'),
(5, 'Emboss', 'emboss-mask.png', ''),
(6, 'Tie Dye', 'tie-dye-mask.png', 'tie-dye-scrunchie-tie-dye.png'),
(7, 'Batik', 'batik-mask.png', ''),
(8, 'Christmas', 'christmas-mask.png', 'christmas-scrunchie.png'),
(9, 'Crepe', '', 'crepe-scrunchie.png'),
(10, 'Silky', 'silky-mask.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk_jenis`
--

CREATE TABLE `kategori_produk_jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_produk_jenis`
--

INSERT INTO `kategori_produk_jenis` (`id_jenis`, `jenis`) VALUES
(1, 'Masker'),
(2, 'Scrunchie - Biasa'),
(3, 'Scrunchie - Zipper');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_warna_produk`
--

CREATE TABLE `kategori_warna_produk` (
  `id_warna` int(3) NOT NULL,
  `id_edisi` int(2) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_warna_produk`
--

INSERT INTO `kategori_warna_produk` (`id_warna`, `id_edisi`, `warna`) VALUES
(1, 1, 'Black Jet'),
(2, 1, 'Creme'),
(3, 1, 'Gray'),
(4, 1, 'White'),
(5, 1, 'Brown'),
(6, 1, 'Lime Green'),
(7, 1, 'Pink'),
(8, 1, 'Tosca'),
(9, 1, 'Blue Navy'),
(10, 1, 'Dodger Blue'),
(11, 1, 'Fanta'),
(12, 1, 'Light Blue'),
(13, 1, 'Dark Green'),
(14, 1, 'Red'),
(15, 2, 'Brown Sugar'),
(16, 2, 'Dark Tosca'),
(17, 2, 'Ash Grey'),
(18, 3, 'White Klamby'),
(19, 3, 'Red Klamby'),
(20, 3, 'Purple Klamby'),
(21, 3, 'Lilac'),
(22, 3, 'Dusty Rose'),
(23, 3, 'Gold'),
(24, 3, 'Greenmint'),
(25, 4, 'Baby Blue'),
(26, 4, 'Dusty Rose'),
(27, 4, 'Broken White'),
(28, 4, 'Soft Army'),
(29, 4, 'White'),
(30, 4, 'Black'),
(31, 4, 'Plum'),
(32, 4, 'Terracota'),
(33, 5, 'Gold'),
(34, 5, 'Silver'),
(35, 6, 'Cloudy'),
(36, 6, 'Coffee Beige'),
(37, 6, 'Blue Root'),
(38, 6, 'Mud Black'),
(39, 6, 'Santorini Blue'),
(40, 6, 'Berry Plum'),
(41, 6, 'Fine Chocolate'),
(42, 6, 'Sky Blue'),
(43, 6, 'Pineapple Tone'),
(44, 6, 'Black White'),
(45, 6, 'Colourful'),
(46, 7, 'Monochrome'),
(47, 7, 'Gold'),
(48, 7, 'Red'),
(49, 7, 'Brownie'),
(50, 8, 'Red Ginger'),
(51, 8, 'Red Snowball'),
(52, 8, 'Green Ginger'),
(53, 8, 'White Snow'),
(54, 9, 'Navy'),
(55, 9, 'Maroon'),
(56, 9, 'Black'),
(57, 9, 'Baby Blue'),
(58, 10, 'Navy'),
(59, 10, 'Maroon');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `id_jenis` int(5) NOT NULL,
  `id_warna` int(3) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(10) NOT NULL,
  `foto_produk` varchar(200) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok_produk` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_jenis`, `id_warna`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi_produk`, `stok_produk`) VALUES
(1, 1, 15, 'Masker Kain Katun Linen 2 ply - Brown Sugar', 7500, 'linen-mask-brown-sugar.png', 'Fabric : Katun Linen + Katun Import Jepang\r\nSize : 17 x 13 cm\r\nReady Stock no Pre-Order\r\n-\r\n> Earloop\r\n> Tidak ada lubang tisu\r\n> Karet dapat disesuaikan sendiri (free stopper)\r\n> Tersedia juga dalam model dewasa earloop dan headloop\r\n> Pilihan Motif lain silahkan check di etalase\r\n> Dipacking 1 plastik ziplock/item\r\n-\r\nMOHON DIPERHATIKAN :\r\nProduk ini merupakan mass produk sehingga kemungkinan terdapat perbedaan 1-2cm dari size yang tertera.', 32),
(2, 1, 17, 'Masker Kain Katun Linen 2 ply - Ash Grey', 7500, 'linen-mask-ash-grey.png', 'Fabric : Katun Linen + Katun Import Jepang <br>\r\nSize : 17 x 13 cm <br>\r\nReady Stock no Pre-Order <br>\r\n- <br>\r\n> Earloop<br>\r\n> Tidak ada lubang tisu<br>\r\n> Karet dapat disesuaikan sendiri (free stopper)<br>\r\n> Tersedia juga dalam model dewasa earloop dan headloop<br>\r\n> Pilihan Motif lain silahkan check di etalase<br>\r\n> Dipacking 1 plastik ziplock/item<br>\r\n-<br>\r\nMOHON DIPERHATIKAN :<br>\r\nProduk ini merupakan mass produk sehingga kemungkinan terdapat perbedaan 1-2cm dari size yang tertera.', 32),
(3, 1, 16, 'Masker Kain Katun Linen 2 ply - Dark Tosca', 7500, 'linen-mask-dark-tosca.png', 'Fabric : Katun Linen + Katun Import Jepang\r\nSize : 17 x 13 cm\r\nReady Stock no Pre-Order\r\n-\r\n> Earloop\r\n> Tidak ada lubang tisu\r\n> Karet dapat disesuaikan sendiri (free stopper)\r\n> Tersedia juga dalam model dewasa earloop dan headloop\r\n> Pilihan Motif lain silahkan check di etalase\r\n> Dipacking 1 plastik ziplock/item\r\n-\r\nMOHON DIPERHATIKAN :\r\nProduk ini merupakan mass produk sehingga kemungkinan terdapat perbedaan 1-2cm dari size yang tertera.', 32),
(4, 1, 21, 'Masker Kain Satin 2 ply - Lilac', 12000, 'satin-mask-lilac-2.png', 'Fabric : Satin + Katun Import Jepang\r\nSize : 17 x 13 cm\r\nReady Stock no Pre-Order\r\n-\r\n> Earloop\r\n> Tidak ada lubang tisu\r\n> Karet dapat disesuaikan sendiri (free stopper)\r\n> Tersedia juga dalam model dewasa earloop dan headloop\r\n> Pilihan Motif lain silahkan check di etalase\r\n> Dipacking 1 plastik ziplock/item\r\n-\r\nMOHON DIPERHATIKAN :\r\nProduk ini merupakan mass produk sehingga kemungkinan terdapat perbedaan 1-2cm dari size yang tertera.', 23),
(5, 1, 33, 'Masker Kain Satin Emboss 2 ply - Gold', 12000, 'emboss-mask-gold.png', 'Fabric : Satin Emboss Glitter + Katun Import Jepang\r\nSize : 17 x 13 cm\r\nReady Stock no Pre-Order\r\n-\r\n> Earloop\r\n> Tidak ada lubang tisu\r\n> Karet dapat disesuaikan sendiri (free stopper)\r\n> Tersedia juga dalam model dewasa earloop dan headloop\r\n> Pilihan Motif lain silahkan check di etalase\r\n> Dipacking 1 plastik ziplock/item\r\n-\r\nMOHON DIPERHATIKAN :\r\nProduk ini merupakan mass produk sehingga kemungkinan terdapat perbedaan 1-2cm dari size yang tertera.', 21),
(6, 1, 34, 'Masker Kain Satin Emboss 2 ply - Silver', 12000, 'emboss-mask-silver.png', 'Fabric : Satin Emboss Glitter + Katun Import Jepang\r\nSize : 17 x 13 cm\r\nReady Stock no Pre-Order\r\n-\r\n> Earloop\r\n> Tidak ada lubang tisu\r\n> Karet dapat disesuaikan sendiri (free stopper)\r\n> Tersedia juga dalam model dewasa earloop dan headloop\r\n> Pilihan Motif lain silahkan check di etalase\r\n> Dipacking 1 plastik ziplock/item\r\n-\r\nMOHON DIPERHATIKAN :\r\nProduk ini merupakan mass produk sehingga kemungkinan terdapat perbedaan 1-2cm dari size yang tertera.', 20),
(7, 2, 56, 'Ikat Rambut Scrunchie Crepe - Black', 8000, 'crepe-scrunchie-black.png', 'Fabric : Diamond Crepe\r\nSize : approx 12 cm\r\nHarga tertera adalah harga satuan\r\nDipacking satuan dengan plastik ziplock\r\n\r\nNyaman dipakai, ringan, jahitan rapi dan karet kuat (Less Hair Friction & Breakage).\r\n', 4),
(8, 3, 56, 'Ikat Rambut Scrunchie Crepe Zipper - Black', 12000, 'crepe-scrunchie-black.png', 'Fabric : Diamond Crepe\r\nSize : approx 12 cm\r\nHarga tertera adalah harga satuan\r\nDipacking satuan dengan plastik ziplock\r\n\r\nNyaman dipakai, ringan, jahitan rapi dan karet kuat (Less Hair Friction & Breakage).', 4),
(9, 1, 8, 'Masker Kain Spunbond 2 ply - Tosca', 2500, 'spunbond-mask-Tosca.png', 'Bahan Spunbond 2 lapis (sesuai di foto)\r\nBahan nyaman dipakai\r\nDipacking dengan plastik ziplock\r\nJahitan Rapi Rapat Kuat\r\nSangat Cocok untuk di pakai sendiri maupun kegiatan sosial karena harga sangat terjangkau\r\nDapat di cuci dan di gunakan kembali\r\nWarna dikirim sesuai pilihan variant', 795),
(10, 1, 26, 'Masker Kain Katun 2 ply - Dusty Rose', 12000, 'cotton-mask-dusty-rose.png', 'Fabric : Cotton Import Jepang\r\nReady Stock no Pre-Order\r\n\r\nEarloop\r\nTidak ada lubang tisu\r\nKaret dapat disesuaikan sendiri (free stopper)\r\nTersedia juga dalam model dewasa earloop dan headloop\r\nPilihan Motif lain silahkan check di etalase\r\nDi packing 1 plastik ziplock/item', 8),
(11, 1, 36, 'Masker Kain Tie Dye 2 ply - Coffee Beige', 12000, 'tie-dye-mask-coffee-beige.png', 'Fabric : Tie Dye Rayon Janger + Katun Import Jepang\r\nReady Stock no Pre-Order\r\n\r\nEarloop\r\nTidak ada lubang tisu\r\nKaret dapat disesuaikan sendiri (free stopper)\r\nTersedia juga dalam model dewasa earloop dan headloop\r\nPilihan Motif lain silahkan check di etalase\r\nDi packing 1 plastik ziplock/item', 11),
(12, 1, 48, 'Masker Kain Batik 2 ply - Red', 12000, 'batik-mask-Red-Bata.png', 'Fabric : Batik Sandwos + Katun Import Jepang\r\nReady Stock no Pre-Order\r\n\r\nEarloop\r\nTidak ada lubang tisu\r\nKaret dapat disesuaikan sendiri (free stopper)\r\nTersedia juga dalam model dewasa earloop dan headloop\r\nPilihan Motif lain silahkan check di etalase\r\nDi packing 1 plastik ziplock/item', 14),
(13, 1, 50, 'Masker Kain Christmas 2 ply - Red Ginger', 12000, 'christmas-mask-red-ginger.png', 'Fabric : Katun Import Jepang\r\nReady Stock no Pre-Order\r\n\r\nEarloop\r\nTidak ada lubang tisu\r\nKaret dapat disesuaikan sendiri (free stopper)\r\nTersedia juga dalam model dewasa earloop dan headloop\r\nPilihan Motif lain silahkan check di etalase\r\nDi packing 1 plastik ziplock/item', 13),
(14, 1, 59, 'Masker Kain Silky 2 ply - Maroon', 12000, 'silky-mask-maroon.png', 'Fabric : Satin Jaguar + Katun Import Jepang\r\nReady Stock no Pre-Order\r\n\r\nEarloop\r\nTidak ada lubang tisu\r\nKaret dapat disesuaikan sendiri (free stopper)\r\nTersedia juga dalam model dewasa earloop dan headloop\r\nPilihan Motif lain silahkan check di etalase\r\nDi packing 1 plastik ziplock/item', 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `kategori_produk_edisi`
--
ALTER TABLE `kategori_produk_edisi`
  ADD PRIMARY KEY (`id_edisi`);

--
-- Indexes for table `kategori_produk_jenis`
--
ALTER TABLE `kategori_produk_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori_warna_produk`
--
ALTER TABLE `kategori_warna_produk`
  ADD PRIMARY KEY (`id_warna`),
  ADD KEY `id_edisi` (`id_edisi`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_warna` (`id_warna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_produk_edisi`
--
ALTER TABLE `kategori_produk_edisi`
  MODIFY `id_edisi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori_produk_jenis`
--
ALTER TABLE `kategori_produk_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_warna_produk`
--
ALTER TABLE `kategori_warna_produk`
  MODIFY `id_warna` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori_warna_produk`
--
ALTER TABLE `kategori_warna_produk`
  ADD CONSTRAINT `kategori_warna_produk_ibfk_1` FOREIGN KEY (`id_edisi`) REFERENCES `kategori_produk_edisi` (`id_edisi`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_warna`) REFERENCES `kategori_warna_produk` (`id_warna`),
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_jenis`) REFERENCES `kategori_produk_jenis` (`id_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

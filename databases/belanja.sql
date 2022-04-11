-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 06:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belanja`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(20) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `gambar` varchar(20) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `jenis` varchar(10) NOT NULL,
  `harga` int(100) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar`, `deskripsi`, `jenis`, `harga`, `tgl_upload`) VALUES
(21, 'Tas Mewah Murah', 'tas1.jpg', 'tas merk fusae sangat mantap dinikmati untuk bersantai, berjalan jalan pantai', 'tas', 150000, '2022-03-10'),
(22, 'jaket kecil buat anak gaya pisan uyy', 'baju1.jpg', 'jaket hanya di pakai anak umur 22 - kebawah, tidak di anjurkan di pakai orang berumur 22 keatas, nanti sobek', 'baju', 75000, '2022-03-10'),
(23, 'laptop anti baret dan tahan air', 'laptop7.jpg', 'laptop mahal yang bisa di beli orang kaya, laptop anti lag lag parah pokonamah, buruan di beli', 'laptop', 14000000, '2022-03-10'),
(24, 'buku belajar buat orang cerdas', 'buku4.png', 'buku untuk anak belajar, lisensi DMCA asli', 'buku', 50000, '2022-03-10'),
(25, 'sepatu murah meriah', 'sepatu15.jpg', 'hargi murah lewih tipasar senennya', 'sepatu', 45000, '2022-03-10'),
(27, 'Tas baru merk Fusae', 'tas8.jpg', 'tas ini baru di luncurkan bulan kemarin.\r\nsudah bnyak digunakna artis kalangan tingkat dewa,\r\njangan menyesal membeli tas ini', 'tas', 2000000, '2022-03-10'),
(28, 'Tas Gunung', 'ta7.jpg', 'pake tas ini, moal sien ku maung', 'tas', 500000, '2022-03-10'),
(29, 'Tas Kertas', 'tas5.jpg', 'Buat ke Indomaret atau Alfa, bagi yang go Green', 'tas', 2000, '2022-03-10'),
(30, 'Tas Style Jisso Blackpink', 'tas9.jpg', 'Merk Tas mirip yang di pakai jisoo di prance, tas ini berbahan bulu kelinci', 'tas', 4000000, '2022-03-10'),
(31, 'Tas Dokter/ P3K', 'tas2.jpg', 'Khusus untuk mahasiswa jurusan dokter dan farmasi', 'tas', 200000, '2022-03-10'),
(32, 'Tas Sekolah', 'tas3.jpg', 'Kekinian!!!!, muat banyak tanpa perlu khawatir buku ketinggalan', 'tas', 150000, '2022-03-10'),
(33, 'buku belajar bitCoin', 'buku2.png', 'Bagi yang blum mengenal bitcoin, buku ini cocok untuk anda', 'buku', 100000, '2022-03-10'),
(34, 'Buku Belajar Blogger Pemula', 'buku3.png', 'Buku di khususkan untuk anda bila anda ingin dapat cuan dari internet', 'buku', 80000, '2022-03-10'),
(35, 'Belajar Software Enginer', 'buku5.png', 'Buku bukan buat pemalas', 'baju', 145000, '2022-03-10'),
(36, 'buku style management', 'buku1.png', 'buku untuk memperbaiki karakter kamu', 'buku', 30000, '2022-03-10'),
(37, 'kerudung anti gerah', 'baju3.jpg', 'dengan memakai kerudung ini, kamu tidak keramas sebulan pun tidak apa apa, kerudung ini terbuat dengan bahan yang tidak mudah sobek', 'baju', 35000, '2022-03-10'),
(38, 'Baju Pria turtle Nex', 'baju6.jpg', 'Baju ini buat Oppa korea', 'baju', 145000, '2022-03-10'),
(39, 'celana mocci', 'baju5.jpg', 'celana ini berasal dari sukabumi, makanya di beri nama mociii, jadi gemol', 'baju', 90000, '2022-03-10'),
(40, 'rok mini kantoran', 'baju7.jpg', 'membuat penampilan mu lebih pede', 'baju', 60000, '2022-03-10'),
(41, 'Swetear Wanita', 'baju4.jpg', 'Mudah dipakai, dengan rajutan yang rapih', 'baju', 200000, '2022-03-10'),
(42, 'TV - LAMA / JADUL', 'laptop3.jpg', 'TV ini dijual murah, karena banyak kenangan', 'laptop', 500000, '2022-03-10'),
(43, 'pc layar edge', 'laptop1.jpg', 'cocok untuk dipakai game seharian', 'laptop', 5000000, '2022-03-10'),
(44, 'mac pc', 'laptop6.jpg', 'mahal, tapi enak dipandang', 'laptop', 7000000, '2022-03-10'),
(45, 'laptop Asus Saya', 'laptop5.jpg', 'Dijual laptop asus dengan spec rendah', 'laptop', 6000000, '2022-03-10'),
(46, 'iphone 6s', 'laptop14.jpg', 'speck camera 21mp\r\nmantap buat foto foto', 'laptop', 2000000, '2022-03-10'),
(47, 'sepatu snake -warna pink', 'sepatu2.jpg', 'sepatu untuk wanita', 'sepatu', 50000, '2022-03-10'),
(48, 'sepatu snake -warna green', 'sepatu3.jpg', 'sepatu untuk pria', 'sepatu', 50000, '2022-03-10'),
(49, 'sepatu mirip pentople', 'sepatu1.jpg', 'cocok buat kencan dengan pasangan mu', 'sepatu', 90000, '2022-03-10'),
(50, 'sepatu roda bekas', 'sepatu4.jpg', 'bekas pakai 20tahun', 'sepatu', 60000, '2022-03-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 09:33 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rentalmobil`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_sewa`
-- (See below for the actual view)
--
CREATE TABLE `daftar_sewa` (
`tanggal_mulai` date
,`tanggal_akhir` date
,`tujuan` varchar(100)
,`NIK` varchar(20)
,`nama_pelanggan` varchar(20)
,`nopol` varchar(20)
,`merk_id` int(11)
,`warna` varchar(20)
,`biaya_sewa` double
);

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `produk` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id`, `nama`, `produk`) VALUES
(1, 'Toyota', 'Rush'),
(2, 'Mitsubishi', 'Xpander'),
(3, 'Suzuki', 'Ertiga'),
(4, 'Honda', 'Mobilio');

-- --------------------------------------------------------

--
-- Stand-in structure for view `merkmobil`
-- (See below for the actual view)
--
CREATE TABLE `merkmobil` (
`nopol` varchar(20)
,`merk_id` int(11)
,`merk` varchar(30)
,`produk` varchar(30)
,`warna` varchar(20)
,`biaya_sewa` double
,`cc` int(11)
,`mobil_id` int(11)
,`tahun` int(11)
,`deskripsi` text
,`foto` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `nopol` varchar(20) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `biaya_sewa` double DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `cc` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `merk_id` int(11) NOT NULL,
  `foto` varchar(30) NOT NULL DEFAULT 'mobil/default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `nopol`, `warna`, `biaya_sewa`, `deskripsi`, `cc`, `tahun`, `merk_id`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'B2050SJD', 'putih', 350000, 'Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 45 L · Ground Clearance 200 mm · Tinggi 1695 mm', 1500, 2020, 2, 'mobil/B2050SJD.png', NULL, '2023-01-13 22:52:20'),
(17, 'B27822EYD', 'hitam', 300000, 'Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 35 L · Ground Clearance 200 mm · Tinggi 1600 mm', 1300, 2021, 1, 'mobil/default.jpg', '2023-01-13 22:20:50', '2023-01-13 22:20:50'),
(18, 'B2398HAS', 'Putih', 1000000, 'Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 35 L · Ground Clearance 200 mm · Tinggi 1600 mm', 10000, 2022, 4, 'mobil/B2398HAS.png', '2023-01-13 22:30:10', '2023-01-13 22:30:10'),
(19, 'B2334BYW', 'Hitam', 500000, 'Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 35 L · Ground Clearance 200 mm · Tinggi 1600 mm', 1000, 2020, 3, 'mobil/default.jpg', '2023-01-14 08:27:17', NULL),
(20, 'B1445POR', 'Putih', 1200000, 'Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 35 L · Ground Clearance 200 mm · Tinggi 1600 mm', 1500, 2022, 2, 'mobil/default.jpg', '2023-01-14 08:27:17', NULL),
(21, 'B9873QGR', 'Merah', 1000000, 'Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 35 L · Ground Clearance 200 mm · Tinggi 1600 mm', 1300, 2021, 3, 'mobil/default.jpg', '2023-01-14 08:27:17', NULL),
(22, 'B7894TER', 'Hitam', 2000000, 'Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 35 L · Ground Clearance 200 mm · Tinggi 1600 mm', 1200, 2022, 4, 'mobil/default.jpg', '2023-01-14 08:27:17', NULL),
(23, 'B7893IHG', 'Pelangi', NULL, 'Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 35 L · Ground Clearance 200 mm · Tinggi 1600 mm', 1000, 2020, 1, 'mobil/default.jpg', '2023-01-14 08:27:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id` int(11) NOT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `noktp` varchar(20) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `mobil_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id`, `tanggal_mulai`, `tanggal_akhir`, `tujuan`, `noktp`, `users_id`, `mobil_id`, `created_at`, `updated_at`) VALUES
(1, '2022-06-12', '2022-06-16', 'Bandung', '1041202300220', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '2022-07-05', '2022-07-07', 'Bandung', '3276012504010007', 7, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '2023-01-10', '2023-01-12', 'Jakarta', '09887797896', 7, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '2023-01-13', '2023-01-16', 'Japan', '12331234243412', 7, 1, '2023-01-13 08:25:56', '2023-01-13 08:25:56'),
(8, '2023-01-14', '2023-01-15', 'Bandung', '234732924', 7, 19, '2023-01-13 20:06:39', '2023-01-13 20:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` smallint(6) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `last_login`, `status`, `role`, `updated_at`) VALUES
(1, 'admin', '$2y$10$f71GWOckTKbkQl7h36gijunT7D8WIYTu5qK6fjI2OxPK8ShQNNi9C', 'admin@gmail.com', '2022-06-11 23:51:03', '2022-06-11 23:51:03', 1, 'administrator', NULL),
(2, 'aminah', '$2y$10$f71GWOckTKbkQl7h36gijunT7D8WIYTu5qK6fjI2OxPK8ShQNNi9C', 'aminah@gmail.com', '2022-06-11 23:51:08', '2022-06-11 23:51:08', 1, 'public', NULL),
(7, 'rizqi', '$2y$10$f71GWOckTKbkQl7h36gijunT7D8WIYTu5qK6fjI2OxPK8ShQNNi9C', 'rizqi8517@gmail.com', '2022-07-04 07:18:06', '2022-07-04 07:18:06', 1, 'public', NULL);

-- --------------------------------------------------------

--
-- Structure for view `daftar_sewa`
--
DROP TABLE IF EXISTS `daftar_sewa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_sewa`  AS SELECT `a`.`tanggal_mulai` AS `tanggal_mulai`, `a`.`tanggal_akhir` AS `tanggal_akhir`, `a`.`tujuan` AS `tujuan`, `a`.`noktp` AS `NIK`, `b`.`username` AS `nama_pelanggan`, `c`.`nopol` AS `nopol`, `c`.`merk_id` AS `merk_id`, `c`.`warna` AS `warna`, `c`.`biaya_sewa` AS `biaya_sewa` FROM ((`sewa` `a` left join `users` `b` on(`a`.`users_id` = `b`.`id`)) left join `mobil` `c` on(`a`.`mobil_id` = `c`.`id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `merkmobil`
--
DROP TABLE IF EXISTS `merkmobil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `merkmobil`  AS SELECT `a`.`nopol` AS `nopol`, `a`.`merk_id` AS `merk_id`, `b`.`nama` AS `merk`, `b`.`produk` AS `produk`, `a`.`warna` AS `warna`, `a`.`biaya_sewa` AS `biaya_sewa`, `a`.`cc` AS `cc`, `a`.`id` AS `mobil_id`, `a`.`tahun` AS `tahun`, `a`.`deskripsi` AS `deskripsi`, `a`.`foto` AS `foto` FROM (`mobil` `a` join `merk` `b` on(`a`.`merk_id` = `b`.`id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nopol_UNIQUE` (`nopol`),
  ADD KEY `fk_produk_jenis_produk_idx` (`merk_id`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_users1_idx` (`users_id`),
  ADD KEY `fk_pesanan_produk1_idx` (`mobil_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `fk_produk_jenis_produk` FOREIGN KEY (`merk_id`) REFERENCES `merk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`mobil_id`) REFERENCES `mobil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

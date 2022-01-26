-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 10:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emasadil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_g_barang`
--

CREATE TABLE `tb_g_barang` (
  `id` int(15) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_k_barang` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_g_barang`
--

INSERT INTO `tb_g_barang` (`id`, `foto`, `id_k_barang`) VALUES
(5, 'barang.jpeg', 7),
(7, 'gam_1.jpeg', 7),
(8, 'gam_2.jpeg', 7),
(10, 'gam_4.jpeg', 7),
(12, 'gam_5.jpeg', 7),
(13, 'gam_6.jpeg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_g_toko`
--

CREATE TABLE `tb_g_toko` (
  `id` int(15) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_k_toko` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_g_toko`
--

INSERT INTO `tb_g_toko` (`id`, `foto`, `id_k_toko`) VALUES
(1, 'DSC_0017.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(15) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `no_hp` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nama`, `alamat`, `jabatan`, `foto`, `no_hp`) VALUES
(4, 'niar yamin', 'sulawesi', 'kasir', '4.jpg', '08967543'),
(6, 'Puas Triawan', 'sdsfs', 'admin', '3.jpg', '0987668865453'),
(9, 'bagas candra permana', 'dsadsasa', 'kasir', '4x6.JPG', '0867564323');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(15) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_k_barang`
--

CREATE TABLE `tb_k_barang` (
  `id_kategori` int(15) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_k_barang`
--

INSERT INTO `tb_k_barang` (`id_kategori`, `kategori`) VALUES
(6, 'Gelang Kaki'),
(7, 'Gelang Tangan'),
(8, 'Kalung'),
(9, 'Anting'),
(13, 'Cincin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_k_toko`
--

CREATE TABLE `tb_k_toko` (
  `id_kat_tk` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_k_toko`
--

INSERT INTO `tb_k_toko` (`id_kat_tk`, `kategori`) VALUES
(1, 'Galeri Toko');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_user` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_user`, `email`, `password`, `nama`, `no_tlp`, `status`, `level`, `created_at`) VALUES
(1, 'puastriawan@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'PUAS TRIAWAN', '086533572811', '1', 'Admin', '2020-02-06 09:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id` int(15) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` double NOT NULL,
  `wa` double NOT NULL,
  `web` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id`, `foto`, `alamat`, `no_tlp`, `wa`, `web`, `email`, `sejarah`) VALUES
(1, 'g_11.jpg', 'Pasar Induk Ajibarang Ruko No. 6 - 7 Banyumas', 821571418, 82242104909, 'www.tokoemasadil.com', 'tokoemasadil@gmail.com', '<p>Toko Mas Adil didirikan sejak tahun 2000 yang di dirikan oleh H. Nuhdiyanto dan Hj. Endang Nuraeni. Toko Emas Adil sudah berkembang sampai saat ini, dari berdirinya sampai sekarang toko Emas Adil sudah bisa membuka 4 cabang toko yaitu :</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id` int(15) NOT NULL,
  `slide` varchar(100) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id`, `slide`, `nama`) VALUES
(1, 'slider.jpg', 'Slider 1'),
(3, 'slider3.jpg', 'Slider 2'),
(4, 'slider1.jpg', 'Slider 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_g_barang`
--
ALTER TABLE `tb_g_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_k_barang` (`id_k_barang`);

--
-- Indexes for table `tb_g_toko`
--
ALTER TABLE `tb_g_toko`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_k_barang` (`id_k_toko`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tb_k_barang`
--
ALTER TABLE `tb_k_barang`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_k_toko`
--
ALTER TABLE `tb_k_toko`
  ADD PRIMARY KEY (`id_kat_tk`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_g_barang`
--
ALTER TABLE `tb_g_barang`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_g_toko`
--
ALTER TABLE `tb_g_toko`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_k_barang`
--
ALTER TABLE `tb_k_barang`
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_k_toko`
--
ALTER TABLE `tb_k_toko`
  MODIFY `id_kat_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_g_barang`
--
ALTER TABLE `tb_g_barang`
  ADD CONSTRAINT `tb_g_barang_ibfk_1` FOREIGN KEY (`id_k_barang`) REFERENCES `tb_k_barang` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_g_toko`
--
ALTER TABLE `tb_g_toko`
  ADD CONSTRAINT `tb_g_toko_ibfk_1` FOREIGN KEY (`id_k_toko`) REFERENCES `tb_k_toko` (`id_kat_tk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

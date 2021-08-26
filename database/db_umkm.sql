-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 10:28 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_umkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `f_id` int(11) NOT NULL,
  `f_nama` varchar(50) NOT NULL,
  `f_username` varchar(50) NOT NULL,
  `f_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`f_id`, `f_nama`, `f_username`, `f_password`) VALUES
(1, 'admin', 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tb_join`
--

CREATE TABLE `tb_join` (
  `f_id_join` int(11) NOT NULL,
  `f_nama` varchar(50) NOT NULL,
  `f_nama_warung` varchar(50) NOT NULL,
  `f_alamat_warung` varchar(200) NOT NULL,
  `f_no_telp_warung` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_join`
--

INSERT INTO `tb_join` (`f_id_join`, `f_nama`, `f_nama_warung`, `f_alamat_warung`, `f_no_telp_warung`) VALUES
(2, 'Naufal Hibatulloh', 'Warung Mantap', 'Jl. Imam Bonjol No.5', '+6285736453532'),
(4, 'admin', 'Warung Bu Jus', 'Jl. Imam Bonjol No.5', '+6285736453532'),
(5, 'qq', 'qsq', 'qs', 'wsw');

-- --------------------------------------------------------

--
-- Table structure for table `tb_makanan`
--

CREATE TABLE `tb_makanan` (
  `f_id_makanan` int(11) NOT NULL,
  `f_nama_makanan` varchar(50) NOT NULL,
  `f_harga` int(15) NOT NULL,
  `f_nama_warung` varchar(50) NOT NULL,
  `f_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_makanan`
--

INSERT INTO `tb_makanan` (`f_id_makanan`, `f_nama_makanan`, `f_harga`, `f_nama_warung`, `f_gambar`) VALUES
(1, 'Sate', 15000, 'Warung Bu Jus', 'sate_kambing1.jpg'),
(14, 'Mie Ayam', 8000, 'Warung Bu Nad', 'mie_ayam.jpg'),
(16, 'Soto', 15000, 'Warung Mantap', 'soto2.jpg'),
(17, 'Mie Goreng', 10000, 'Warung Bu Nad', 'mie_goreng.jpg'),
(18, 'Kare', 15000, 'Warung Bu Jus', 'kare1.jpg'),
(19, 'Sate', 15000, 'Warung Bu Nad', 'sate_kambing2.jpg'),
(21, 'Soto', 15000, 'Warung Mantap', 'soto3.jpg'),
(22, 'Mie Ayam', 8000, 'Warung Bu Jus', 'mie_ayam2.jpg'),
(23, 'Kare', 25000, 'Warung Bu Nad', 'kare2.jpg'),
(25, 'Sate', 15000, 'Warung Bu Nad', 'sate_kambing3.jpg'),
(26, 'Sate', 15555, 'Warung Mantap', 'sate_kambing4.jpg'),
(27, 'Soto', 5000, 'Warung Bu Jus', 'soto4.jpg'),
(28, 'soto', 5000, 'Warung A', 'mie_ayam3.jpg'),
(29, 'Gule', 20000, 'Warung A', 'mie_goreng2.jpg'),
(31, 'Rawon', 25000, 'Warung A', '11.jpg'),
(33, 'Rawon', 10000, 'Warung A', 'mie_goreng3.jpg'),
(34, 'Gule', 1000, 'Warung A', 'mie goreng.jpg'),
(35, 'Rawon', 12000, 'Warung A', 'mie_goreng4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `f_id_pembeli` int(11) NOT NULL,
  `f_nama_pembeli` varchar(50) NOT NULL,
  `f_tanggal` datetime NOT NULL,
  `f_alamat` varchar(200) NOT NULL,
  `f_no_telp` varchar(15) NOT NULL,
  `f_jumlah_order` int(11) NOT NULL,
  `f_total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`f_id_pembeli`, `f_nama_pembeli`, `f_tanggal`, `f_alamat`, `f_no_telp`, `f_jumlah_order`, `f_total_bayar`) VALUES
(24, 'mamad', '2021-08-25 12:13:38', 'wirogunan', '089519876677', 2, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_warung`
--

CREATE TABLE `tb_warung` (
  `f_id_warung` int(11) NOT NULL,
  `f_nama_warung` varchar(50) NOT NULL,
  `f_alamat` varchar(200) NOT NULL,
  `f_no_telp` varchar(15) NOT NULL,
  `f_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_warung`
--

INSERT INTO `tb_warung` (`f_id_warung`, `f_nama_warung`, `f_alamat`, `f_no_telp`, `f_gambar`) VALUES
(1, 'Warung Bu Jus', 'utara makam gusdur', '6289519876676', 'warung2.jpg'),
(2, 'Warung Bu Nad', 'Jl gusdur no.4', '6285101619574', 'warung3.jpg'),
(3, 'Warung Mantap', 'Jl. Imam Bonjol No.5', '6285736453532', 'warung.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tb_join`
--
ALTER TABLE `tb_join`
  ADD PRIMARY KEY (`f_id_join`);

--
-- Indexes for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD PRIMARY KEY (`f_id_makanan`);

--
-- Indexes for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`f_id_pembeli`);

--
-- Indexes for table `tb_warung`
--
ALTER TABLE `tb_warung`
  ADD PRIMARY KEY (`f_id_warung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_join`
--
ALTER TABLE `tb_join`
  MODIFY `f_id_join` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  MODIFY `f_id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  MODIFY `f_id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_warung`
--
ALTER TABLE `tb_warung`
  MODIFY `f_id_warung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

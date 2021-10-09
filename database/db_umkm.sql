-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 01:18 PM
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
(1, 'admin', 'admin', '$2y$10$xGRvJ4egipdsXXaZDkr8EuaPFvYvGGGrk8fIK5a.eMf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_makanan`
--

CREATE TABLE `tb_makanan` (
  `f_id_makanan` int(11) NOT NULL,
  `f_id_warung` int(11) NOT NULL,
  `f_nama_makanan` varchar(50) NOT NULL,
  `f_harga` int(15) NOT NULL,
  `f_nama_warung` varchar(50) NOT NULL,
  `f_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_makanan`
--

INSERT INTO `tb_makanan` (`f_id_makanan`, `f_id_warung`, `f_nama_makanan`, `f_harga`, `f_nama_warung`, `f_gambar`) VALUES
(1, 1, 'Soto', 5000, 'Warung Mantap', 'soto.jpg'),
(2, 2, 'Sate', 10000, 'Warung Asrun', 'sate_kambing5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_minuman`
--

CREATE TABLE `tb_minuman` (
  `f_id_minuman` int(11) NOT NULL,
  `f_id_warung` int(11) NOT NULL,
  `f_nama_minuman` varchar(50) NOT NULL,
  `f_harga` varchar(15) NOT NULL,
  `f_nama_warung` varchar(50) NOT NULL,
  `f_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_minuman`
--

INSERT INTO `tb_minuman` (`f_id_minuman`, `f_id_warung`, `f_nama_minuman`, `f_harga`, `f_nama_warung`, `f_gambar`) VALUES
(1, 1, 'Kopi Hitam', '5000', 'Warung Mantap', 'kopi1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mitra`
--

CREATE TABLE `tb_mitra` (
  `f_id_mitra` int(11) NOT NULL,
  `f_nama_mitra` varchar(50) NOT NULL,
  `f_nama_warung` varchar(50) NOT NULL,
  `f_alamat_warung` varchar(200) NOT NULL,
  `f_tanggal` datetime NOT NULL,
  `f_no_telp_warung` varchar(15) NOT NULL,
  `f_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `f_id_pembeli` int(11) NOT NULL,
  `f_id_makanan` int(11) NOT NULL,
  `f_id_minuman` int(11) NOT NULL,
  `f_nama_pembeli` varchar(50) NOT NULL,
  `f_alamat` varchar(200) NOT NULL,
  `f_tanggal` datetime NOT NULL,
  `f_no_telp` varchar(15) NOT NULL,
  `f_jumlah_order` int(11) NOT NULL,
  `f_total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Warung Mantap', 'jl kenanga no.3', '6285755466161', 'warung.jpg'),
(2, 'Warung Asrun', 'jl. gusdur no.22', '6285101619574', 'warung1.jpg'),
(3, 'Warung Bu Jus', 'utara makam gusdurr', '6289519876677', 'warung2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD PRIMARY KEY (`f_id_makanan`),
  ADD KEY `f_id_warung` (`f_id_warung`);

--
-- Indexes for table `tb_minuman`
--
ALTER TABLE `tb_minuman`
  ADD PRIMARY KEY (`f_id_minuman`),
  ADD KEY `f_id_warung` (`f_id_warung`);

--
-- Indexes for table `tb_mitra`
--
ALTER TABLE `tb_mitra`
  ADD PRIMARY KEY (`f_id_mitra`);

--
-- Indexes for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`f_id_pembeli`),
  ADD KEY `f_id_makanan` (`f_id_makanan`),
  ADD KEY `f_id_minuman` (`f_id_minuman`);

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
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  MODIFY `f_id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_minuman`
--
ALTER TABLE `tb_minuman`
  MODIFY `f_id_minuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_mitra`
--
ALTER TABLE `tb_mitra`
  MODIFY `f_id_mitra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  MODIFY `f_id_pembeli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_warung`
--
ALTER TABLE `tb_warung`
  MODIFY `f_id_warung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD CONSTRAINT `tb_pembeli_ibfk_1` FOREIGN KEY (`f_id_makanan`) REFERENCES `tb_makanan` (`f_id_makanan`),
  ADD CONSTRAINT `tb_pembeli_ibfk_2` FOREIGN KEY (`f_id_minuman`) REFERENCES `tb_minuman` (`f_id_minuman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

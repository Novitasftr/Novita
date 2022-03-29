-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2022 at 05:22 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel_novita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin1', 1234),
(2, 'admin2', 5678);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(150) NOT NULL,
  `jml_bed` int(11) NOT NULL,
  `harga_kamar` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `nama_kamar`, `jml_bed`, `harga_kamar`) VALUES
(2, 'Single Room', 2, 500000),
(3, 'Double Room', 2, 600000),
(4, 'Family Room', 2, 800000),
(5, 'Room VIP King', 2, 950000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` varchar(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kabkota` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `username`, `email`, `no_telp`, `password`, `alamat`, `provinsi`, `kabkota`, `kecamatan`) VALUES
('PL01', 'Novita ', 'novitasftr27@gmail.com', '08886364557', 'novita123', 'lagadar', 'jawa barat', 'bandung', 'margaasih'),
('PL02', 'piyanita', 'piyanita@gmail.com', '089765456789', 'piya123', 'cibingbin', 'jawa barat', 'bandung barat', 'padalarang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_resepsionis`
--

CREATE TABLE `tb_resepsionis` (
  `id_resepsionis` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `tb_resepsionis`
--

INSERT INTO `tb_resepsionis` (`id_resepsionis`, `username`, `password`) VALUES
(1, 'resepsionis1', 'r123'),
(2, 'resepsionis2', 'r456');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `nama_tamu` varchar(255) NOT NULL,
  `alamat_tamu` text NOT NULL,
  `hp_tamu` varchar(12) NOT NULL,
  `id_kamar_reservasi` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `jml_dewasa` int(11) NOT NULL,
  `jml_anak` int(11) NOT NULL,
  `jml_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_reservasi`
--

INSERT INTO `tb_reservasi` (`id_reservasi`, `nama_tamu`, `alamat_tamu`, `hp_tamu`, `id_kamar_reservasi`, `check_in`, `check_out`, `jml_dewasa`, `jml_anak`, `jml_kamar`) VALUES
(1, 'test', 'Jalan caringin no 127', '082215582990', 3, '2022-03-28', '2022-03-29', 1, 1, 1),
(2, 'test', 'asdasdasd', '1322213', 4, '2022-03-28', '2022-03-29', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_resepsionis`
--
ALTER TABLE `tb_resepsionis`
  ADD PRIMARY KEY (`id_resepsionis`);

--
-- Indexes for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

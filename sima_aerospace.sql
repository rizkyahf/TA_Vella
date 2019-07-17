-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2019 at 04:15 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sima_aerospace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `inventarisasi_aset`
--

CREATE TABLE `inventarisasi_aset` (
  `nomor_aset` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tanggal_pengadaan` date NOT NULL,
  `deskripsi_kegunaan` text NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `penanggungjawab` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `inventarisasi_aset`
--

INSERT INTO `inventarisasi_aset` (`nomor_aset`, `nama`, `jenis`, `tanggal_pengadaan`, `deskripsi_kegunaan`, `tipe`, `keterangan`, `status`, `lokasi`, `penanggungjawab`) VALUES
('08009105', 'Test Input Aset', '3000', '2012-03-04', 'gunanya', 'Tipe Aset', 'Keterangan Barang 3', 'status ase', 'dirumah', 'PJ nya'),
('3000753', 'V_BLOCK ', '3000 ', '2012-07-27', 'Block & Clamp UP V ', 'LPI-1688-1 ', 'ASDFG ', 'CIR ', 'Lemari 4-c ', 'IN STORE'),
('3007729', 'HOLTEST update', '4000', '2012-07-26', 'Tesa White Set 16 Pairs, 1 set update', 'LPI-1039', 'update', 'VALID upda', 'R29-AU', 'OUT CELL COUPLING UPDATE');

-- --------------------------------------------------------

--
-- Table structure for table `legal_audit`
--

CREATE TABLE `legal_audit` (
  `nomor_aset` varchar(20) NOT NULL,
  `nomor_dokumen` varchar(20) NOT NULL,
  `tanggal_penetapan` date NOT NULL,
  `foto_aset` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `legal_audit`
--

INSERT INTO `legal_audit` (`nomor_aset`, `nomor_dokumen`, `tanggal_penetapan`, `foto_aset`) VALUES
('08009105', '1999', '2019-07-09', '5d253a9b92acb.jpg'),
('3007729', 'Kartu Kepemilikan ', '2012-07-27', 'LPI-1038');

-- --------------------------------------------------------

--
-- Table structure for table `optimasi_aset`
--

CREATE TABLE `optimasi_aset` (
  `akusisi` varchar(20) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `komponen_rusak` varchar(20) NOT NULL,
  `jenis_pemeliharaan` varchar(20) NOT NULL,
  `foto_optimasi` varchar(20) DEFAULT NULL,
  `estimasi_biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `optimasi_aset`
--

INSERT INTO `optimasi_aset` (`akusisi`, `kondisi`, `komponen_rusak`, `jenis_pemeliharaan`, `foto_optimasi`, `estimasi_biaya`) VALUES
('4808109', 'Broken ', 'Lamp ', 'Penggantian lampu', NULL, 1400000),
('AK-TEST', 'bagus', 'gaada', 'didiemin', '5d1c897ab7117.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_aset`
--

CREATE TABLE `penilaian_aset` (
  `nomor_aset` varchar(20) NOT NULL,
  `akusisi` varchar(100) NOT NULL,
  `akumulasi_depresiasi` varchar(10) NOT NULL,
  `nilai_akhir` varchar(20) NOT NULL,
  `BalShTm` varchar(20) NOT NULL,
  `ApCacct` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `penilaian_aset`
--

INSERT INTO `penilaian_aset` (`nomor_aset`, `akusisi`, `akumulasi_depresiasi`, `nilai_akhir`, `BalShTm`, `ApCacct`) VALUES
('3000753', '4808109', '334613.879', '146196.139', '1409', '1530009'),
('08009105', 'AK-TEST', '974818', '9999', '120', '120');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`) USING BTREE;

--
-- Indexes for table `inventarisasi_aset`
--
ALTER TABLE `inventarisasi_aset`
  ADD PRIMARY KEY (`nomor_aset`) USING BTREE;

--
-- Indexes for table `legal_audit`
--
ALTER TABLE `legal_audit`
  ADD PRIMARY KEY (`nomor_dokumen`) USING BTREE,
  ADD KEY `nomor_aset` (`nomor_aset`) USING BTREE;

--
-- Indexes for table `optimasi_aset`
--
ALTER TABLE `optimasi_aset`
  ADD KEY `akusisi` (`akusisi`) USING BTREE;

--
-- Indexes for table `penilaian_aset`
--
ALTER TABLE `penilaian_aset`
  ADD PRIMARY KEY (`akusisi`) USING BTREE,
  ADD KEY `nomor_aset` (`nomor_aset`) USING BTREE;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `legal_audit`
--
ALTER TABLE `legal_audit`
  ADD CONSTRAINT `legal_audit_ibfk_1` FOREIGN KEY (`nomor_aset`) REFERENCES `inventarisasi_aset` (`nomor_aset`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `optimasi_aset`
--
ALTER TABLE `optimasi_aset`
  ADD CONSTRAINT `optimasi_aset_ibfk_1` FOREIGN KEY (`akusisi`) REFERENCES `penilaian_aset` (`akusisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaian_aset`
--
ALTER TABLE `penilaian_aset`
  ADD CONSTRAINT `penilaian_aset_ibfk_1` FOREIGN KEY (`nomor_aset`) REFERENCES `inventarisasi_aset` (`nomor_aset`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

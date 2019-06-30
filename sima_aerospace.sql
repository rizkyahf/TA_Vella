-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 04:30 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `legal_audit`
--

CREATE TABLE `legal_audit` (
  `nomor_aset` varchar(20) NOT NULL,
  `nomor_dokumen` varchar(20) NOT NULL,
  `tanggal_penetapan` varchar(8) NOT NULL,
  `foto_aset` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `optimasi_aset`
--

CREATE TABLE `optimasi_aset` (
  `akusisi` varchar(20) NOT NULL,
  `kondisi` int(11) NOT NULL,
  `komponen_rusak` int(11) NOT NULL,
  `jenis_pemeliharaan` int(11) NOT NULL,
  `foto_optimasi` varchar(20) NOT NULL,
  `estimasi_biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `inventarisasi_aset`
--
ALTER TABLE `inventarisasi_aset`
  ADD PRIMARY KEY (`nomor_aset`);

--
-- Indexes for table `legal_audit`
--
ALTER TABLE `legal_audit`
  ADD PRIMARY KEY (`nomor_dokumen`);

--
-- Indexes for table `penilaian_aset`
--
ALTER TABLE `penilaian_aset`
  ADD PRIMARY KEY (`akusisi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

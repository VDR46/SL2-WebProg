-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 08:58 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nasabah`
--

-- --------------------------------------------------------

--
-- Table structure for table `msuser`
--

CREATE TABLE `msuser` (
  `namaDepan` varchar(20) NOT NULL,
  `namaTengah` varchar(20) NOT NULL,
  `namaBelakang` varchar(20) NOT NULL,
  `tempatLahir` varchar(20) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `nik` char(15) NOT NULL,
  `wargaNegara` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `kodePos` char(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `fotoProfil` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msuser`
--

INSERT INTO `msuser` (`namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tanggalLahir`, `nik`, `wargaNegara`, `email`, `nohp`, `alamat`, `kodePos`, `username`, `Password`, `fotoProfil`) VALUES
('Niko', 'Demus', 'Solius', 'Bandung', '2003-01-28', '007', 'Indonesia', 'nk@gmail.com', '08193652', 'Jalan Jalan, Jakarta Barat', '0321', 'nikodemus', '123456789', 0x506e674974656d5f3635313430342e706e67),
('Valentino', 'Dhamma', 'Rakkhitta', 'Bandung', '2002-05-15', '01131558646', 'Indonesia', 'valentinodhamma46@gmail.com', '083124536603', 'Jalan Cipeujeuh wetan no. 49', '45183', 'VDR46', '112233', 0x706e6777696e672e636f6d202835292e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msuser`
--
ALTER TABLE `msuser`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2025 at 11:26 PM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `GoTravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `Pelanggan`
--

CREATE TABLE `Pelanggan` (
  `Nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Lokasi` text COLLATE utf8mb4_general_ci NOT NULL,
  `Paket` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Telepon` int NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Pelanggan`
--

INSERT INTO `Pelanggan` (`Nama`, `Lokasi`, `Paket`, `Alamat`, `Telepon`, `Tanggal`) VALUES
('qweeqwqw', 'weqwe', 'eqwqwe', 'qweqwe', 123123, '2025-10-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Pelanggan`
--
ALTER TABLE `Pelanggan`
  ADD PRIMARY KEY (`Nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

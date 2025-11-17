-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2025 at 11:25 PM
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
-- Table structure for table `Data_Admin`
--

CREATE TABLE `Data_Admin` (
  `Username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Umur` int NOT NULL,
  `Alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `Kelamin` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Tanggal_Lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Data_Admin`
--

INSERT INTO `Data_Admin` (`Username`, `Password`, `Umur`, `Alamat`, `Kelamin`, `Tanggal_Lahir`) VALUES
('alvin', '$2y$10$ST2zRdDfRgLAXltmF/anjOsdPnhxufHTy9FAnAa3u04.oOLpabAD.', 17, 'anjay', 'laki', '2025-10-28'),
('HIN', '$2y$10$3Tops30ejQzKiWyZMHGC/OUTK.T9Ori6I4uC.ioDqO7TfK2gjOoeu', 132, 'qwe', 'asd', '2025-10-28'),
('VIN', '$2y$10$8qIWcHbBTRTaYz19y7kIP.RVpuUNz7lCKh8lxISWofiiacRAe/a5m', 3243, '12qw', 'qqe2', '2025-11-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Data_Admin`
--
ALTER TABLE `Data_Admin`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

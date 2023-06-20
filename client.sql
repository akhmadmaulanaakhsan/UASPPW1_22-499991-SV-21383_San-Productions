-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2023 at 06:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasa_fotografi`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` char(20) NOT NULL,
  `nama_client` varchar(255) DEFAULT NULL,
  `username_client` varchar(255) DEFAULT NULL,
  `password_client` varchar(255) DEFAULT NULL,
  `jenis_kelamin_client` varchar(255) DEFAULT NULL,
  `email_client` varchar(255) DEFAULT NULL,
  `telepon_client` varchar(255) DEFAULT NULL,
  `alamat_client` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nama_client`, `username_client`, `password_client`, `jenis_kelamin_client`, `email_client`, `telepon_client`, `alamat_client`) VALUES
('C0001', 'Akhmad Maulana Akhsan', 'akhsan99', 'Desember11', 'Laki-laki', 'maulanaakhsan10@gmail.com', '08883628035', 'Yogyakarta'),
('C0002', 'Akhmad Maulana', 'akhsann99', 'Desember111', 'Laki-laki', 'maulana10@gmail.com', '08883628035', 'Yogyakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

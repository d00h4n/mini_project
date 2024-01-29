-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 07:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `id_posisi` int(20) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `id_posisi`, `tanggal_lahir`, `alamat`, `username`, `email`, `password`, `no_hp`, `tanggal_masuk`, `create_at`, `update_at`) VALUES
(1, 'admin', 1, NULL, 'admin', 'admin', 'admin@gmail.com', '12345678', '08123456789', '2024-01-02', '2024-01-29 06:31:07', '2024-01-29 06:31:07'),
(2, 'Brian', 2, '2024-01-03', 'salatiga', 'brian1', 'brian1@gmail.com', '1234', '08123456789', '2024-01-10', '2024-01-29 06:33:48', '2024-01-29 06:33:48'),
(4, 'Briyan', 2, '2024-01-03', 'salatiga', 'Briyan1', 'Briyan1@gmail.com', '1234', '08123456789', '2024-01-02', '2024-01-29 06:45:32', '2024-01-29 06:45:32'),
(5, 'Briyan2', 2, '2024-01-03', 'salatiga', 'Briyan2', 'Briyan2@gmail.com', '1234', '08123456789', '2024-01-02', '2024-01-29 06:46:17', '2024-01-29 06:46:17'),
(6, 'Briyan3', 2, '2024-01-03', 'salatiga', 'Briyan3', 'Briyan3@gmail.com', '1234', '08123456789', '2024-01-02', '2024-01-29 06:46:17', '2024-01-29 06:46:17'),
(7, 'Briyan4', 2, '2024-01-03', 'salatiga', 'Briyan4', 'Briyan4@gmail.com', '1234', '08123456789', '2024-01-02', '2024-01-29 06:46:17', '2024-01-29 06:46:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_posisi_2` (`id_posisi`),
  ADD KEY `id_posisi` (`id_posisi`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_posisi`) REFERENCES `posisi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

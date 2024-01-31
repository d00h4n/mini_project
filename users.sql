-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2024 at 09:58 AM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_posisi` int NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `id_posisi`, `roles`, `gambar`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `username`, `email`, `password`, `no_hp`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(4, 'Rudi', 1, 'admin', 'rudi.jpg', 'Laki-laki', '1990-01-01', 'Jl. Kalisombo Salatiga', 'rudi ganteng', 'rudi@gmail.com', '$2y$10$kRzpW1MF.2f3eLxpe3buF.6rbzq6A8BKmsZLJarVOmYvW2DxszhSi', '081234567890', '2022-01-01', '2024-01-29 21:33:53', '2024-01-30 09:09:02'),
(5, 'Fernando', 2, 'karyawan', 'fernando.jpg', 'Laki-laki', '1990-01-01', 'Maluku', 'Kaka Fernando', 'fernando@gmail.com', '$2y$10$6RaC7f41She75tfhwKQQwO4HxsO5RaXvwETeZdqlnrqS7YEJxcbqa', '081234567890', '2022-01-01', '2024-01-29 21:33:53', '2024-01-30 09:09:11'),
(6, 'Jepri', 3, 'karyawan', 'jepri.jpg', 'Laki-laki', '1990-01-01', 'Surakarta', 'Bang Jep', 'jepri@gmail.com', '$2y$10$1toFhV1X82vBcRnfHFeyauLEkLGKmA6dcctHWup4sP1pYAcBqOo1G', '081234567890', '2022-01-01', '2024-01-29 21:33:53', '2024-01-30 09:09:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

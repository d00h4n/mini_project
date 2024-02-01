-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 05:23 AM
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
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` tinyint(20) NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `approval` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `id_posisi` int(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
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

INSERT INTO `karyawan` (`id`, `nama`, `id_posisi`, `gambar`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `username`, `email`, `password`, `no_hp`, `tanggal_masuk`, `create_at`, `update_at`) VALUES
(1, 'admin', 1, '', '', NULL, 'admin', 'admin', 'admin@gmail.com', '12345678', '08123456789', '2024-01-02', '2024-01-29 06:31:07', '2024-01-29 06:31:07'),
(2, 'Brian', 2, '', '', '2024-01-03', 'salatiga', 'brian1', 'brian1@gmail.com', '1234', '08123456789', '2024-01-10', '2024-01-29 06:33:48', '2024-01-29 06:33:48'),
(4, 'Briyan', 2, '', '', '2024-01-03', 'salatiga', 'Briyan1', 'Briyan1@gmail.com', '1234', '08123456789', '2024-01-02', '2024-01-29 06:45:32', '2024-01-29 06:45:32'),
(5, 'Briyan2', 2, '', '', '2024-01-03', 'salatiga', 'Briyan2', 'Briyan2@gmail.com', '1234', '08123456789', '2024-01-02', '2024-01-29 06:46:17', '2024-01-29 06:46:17'),
(6, 'Briyan3', 2, '', '', '2024-01-03', 'salatiga', 'Briyan3', 'Briyan3@gmail.com', '1234', '08123456789', '2024-01-02', '2024-01-29 06:46:17', '2024-01-29 06:46:17'),
(7, 'Briyan4', 2, '', '', '2024-01-03', 'salatiga', 'Briyan4', 'Briyan4@gmail.com', '1234', '08123456789', '2024-01-02', '2024-01-29 06:46:17', '2024-01-29 06:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_29_035902_posisi', 1),
(6, '2024_01_29_040116_presensi', 1),
(7, '2024_01_29_040137_absensi', 1),
(8, '2024_01_29_041005_karyawan', 1),
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_29_035902_posisi', 1),
(6, '2024_01_29_040116_presensi', 1),
(7, '2024_01_29_040137_absensi', 1),
(8, '2024_01_29_041005_karyawan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id` int(20) NOT NULL,
  `n_posisi` varchar(225) NOT NULL,
  `deskrip` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id`, `n_posisi`, `deskrip`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, '2024-01-29 06:22:47', '2024-01-29 06:22:47'),
(2, 'Game Designer', NULL, '2024-01-29 06:25:07', '2024-01-29 06:25:07'),
(3, 'Game Developer / Programmer:', NULL, '2024-01-29 06:25:47', '2024-01-29 06:25:47'),
(4, '3D Artist / Animator', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(5, '2D Artist / Illustrator', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(6, 'Game Tester', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(7, 'Sound Designer / Composer', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(8, 'Game Producer / Project Manager', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(9, 'UI/UX Designer', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(10, 'Game Writer', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(11, 'Community Manager', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(1, 'admin', NULL, '2024-01-29 06:22:47', '2024-01-29 06:22:47'),
(2, 'Game Designer', NULL, '2024-01-29 06:25:07', '2024-01-29 06:25:07'),
(3, 'Game Developer / Programmer:', NULL, '2024-01-29 06:25:47', '2024-01-29 06:25:47'),
(4, '3D Artist / Animator', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(5, '2D Artist / Illustrator', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(6, 'Game Tester', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(7, 'Sound Designer / Composer', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(8, 'Game Producer / Project Manager', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(9, 'UI/UX Designer', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(10, 'Game Writer', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52'),
(11, 'Community Manager', NULL, '2024-01-29 06:27:52', '2024-01-29 06:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_pulang` time DEFAULT NULL,
  `id_absensi` tinyint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id`, `id_karyawan`, `tanggal`, `jam_masuk`, `jam_pulang`, `id_absensi`) VALUES
(1, 5, '2024-02-01', '05:13:48', '03:25:46', NULL),
(8, 6, '2024-02-01', '10:34:16', '10:34:23', NULL),
(9, 6, '2024-02-02', '10:41:08', '10:52:55', NULL),
(10, 5, '2024-02-02', '10:53:25', '10:53:32', NULL),
(11, 5, '2024-02-03', '10:54:31', '10:55:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(225) NOT NULL,
  `id_posisi` int(11) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `id_posisi`, `roles`, `gambar`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `username`, `email`, `password`, `no_hp`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(4, 'Rudi', 1, 'admin', 'rudi.jpg', 'Laki-laki', '1990-01-01', 'Jl. Kalisombo Salatiga', 'rudi ganteng', 'rudi@gmail.com', '$2y$10$kRzpW1MF.2f3eLxpe3buF.6rbzq6A8BKmsZLJarVOmYvW2DxszhSi', '081234567890', '2022-01-01', '2024-01-29 21:33:53', '2024-01-30 09:09:02'),
(5, 'Fernando', 2, 'karyawan', 'fernando.jpg', 'Laki-laki', '1990-01-01', 'Maluku', 'Kaka Fernando', 'fernando@gmail.com', '$2y$10$6RaC7f41She75tfhwKQQwO4HxsO5RaXvwETeZdqlnrqS7YEJxcbqa', '081234567890', '2022-01-01', '2024-01-29 21:33:53', '2024-01-30 09:09:11'),
(6, 'Jepri', 3, 'karyawan', 'jepri.jpg', 'Laki-laki', '1990-01-01', 'Surakarta', 'Bang Jep', 'jepri@gmail.com', '$2y$10$1toFhV1X82vBcRnfHFeyauLEkLGKmA6dcctHWup4sP1pYAcBqOo1G', '081234567890', '2022-01-01', '2024-01-29 21:33:53', '2024-01-30 09:09:15'),
(7, 'angga', 2, 'karyawan', 'angga.jpg', 'Laki-laki', '1999-02-16', 'jakarta', 'angga', 'angga@gmail.com', '123456', '08123456789', '2024-01-02', '2024-01-31 22:06:29', '2024-01-31 22:08:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_posisi_2` (`id_posisi`),
  ADD KEY `id_posisi` (`id_posisi`) USING BTREE;

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_absensi` (`id_absensi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` tinyint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`id_absensi`) REFERENCES `absensi` (`id_absensi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

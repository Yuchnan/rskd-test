-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 10:54 AM
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
-- Database: `rskd`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024_17_11_000001', 'App\\Database\\Migrations\\CreateRawatInap', 'default', 'App', 1731923152, 1),
(2, '2024_17_11_000001', 'App\\Database\\Migrations\\CreateRawatJalan', 'default', 'App', 1731923152, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap`
--

CREATE TABLE `rawat_inap` (
  `nocm` int(11) UNSIGNED NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tgl_masuk` text NOT NULL,
  `r_akhir` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rawat_jalan`
--

CREATE TABLE `rawat_jalan` (
  `nocm` int(11) UNSIGNED NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tgl_kunjung` datetime NOT NULL,
  `r_masuk` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rawat_jalan`
--

INSERT INTO `rawat_jalan` (`nocm`, `nama`, `tgl_kunjung`, `r_masuk`, `created_at`, `updated_at`) VALUES
(1, 'ASRIL KOMAR', '0000-00-00 00:00:00', 'Klinik Psikiatri', '2024-11-18 09:46:09', '2024-11-18 09:46:09'),
(2, 'SITI AISYAH', '0000-00-00 00:00:00', 'Klinik Psikiatri', '2024-11-18 09:46:46', '2024-11-18 09:46:46'),
(3, 'JAKA SUGIRI', '0000-00-00 00:00:00', 'Poli Kulit', '2024-11-18 09:51:20', '2024-11-18 09:51:20'),
(4, 'JAKA SUGIRI', '2019-01-06 23:22:00', 'Poli Kulit', '2024-11-18 09:52:17', '2024-11-18 09:52:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  ADD PRIMARY KEY (`nocm`);

--
-- Indexes for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  ADD PRIMARY KEY (`nocm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  MODIFY `nocm` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  MODIFY `nocm` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

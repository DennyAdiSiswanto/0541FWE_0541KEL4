-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 12:31 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `framework1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE IF NOT EXISTS `cuti` (
`id` int(10) unsigned NOT NULL,
  `total_hari` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `total_hari`, `created_at`, `updated_at`) VALUES
(1, '20', '2017-05-19 19:57:45', '2017-05-19 19:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `devisi`
--

CREATE TABLE IF NOT EXISTS `devisi` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `devisi`
--

INSERT INTO `devisi` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'DOTA2', '2017-05-19 19:49:06', '2017-05-19 19:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE IF NOT EXISTS `gaji` (
`id` int(10) unsigned NOT NULL,
  `gaji` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `golongan_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id`, `gaji`, `golongan_id`, `created_at`, `updated_at`) VALUES
(1, '2000000', 1, '2017-05-19 19:57:36', '2017-05-19 19:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE IF NOT EXISTS `golongan` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'tetap', '2017-05-19 19:57:24', '2017-05-19 19:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `kerja`
--

CREATE TABLE IF NOT EXISTS `kerja` (
`id` int(10) unsigned NOT NULL,
  `jam_kerja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pegawai_id` int(10) unsigned NOT NULL,
  `cuti_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ktp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `devisi_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `nama`, `ktp`, `alamat`, `pengguna_id`, `devisi_id`, `created_at`, `updated_at`) VALUES
(2, 'denny', '1515015217', 'mugirejo', 13, 1, '2017-05-21 03:31:58', '2017-05-21 03:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_18_145014_table_penggunaa', 1),
('2017_05_18_145314_table_devisi', 1),
('2017_05_18_145447_table_manager', 1),
('2017_05_18_145553_table_golongan', 1),
('2017_05_18_145637_table_gaji', 1),
('2017_05_18_145735_table_ruang', 1),
('2017_05_18_145827_table_pegawai', 1),
('2017_05_18_145933_table_cuti', 1),
('2017_05_18_150016_table_kerja', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ktp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `manager_id` int(10) unsigned NOT NULL,
  `gaji_id` int(10) unsigned NOT NULL,
  `ruang_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `ktp`, `alamat`, `manager_id`, `gaji_id`, `ruang_id`, `created_at`, `updated_at`) VALUES
(1, 'dennyadisiswanto', '217', 'mugirejo', 2, 1, 1, '2017-05-21 03:32:33', '2017-05-21 03:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'tes', 'tes', 'IXU0LXNLuT8WvCQnFeLMgniLQh9iWR0s9DpHaDOMTemPgiPCNZYbqEMsMkVH', '2017-05-19 19:49:25', '2017-05-21 04:10:33'),
(3, 'tes', 'tes', NULL, '2017-05-19 19:50:12', '2017-05-19 19:50:12'),
(4, 'tes', 'tes', NULL, '2017-05-19 19:50:33', '2017-05-19 19:50:33'),
(5, 'tes', 'tes', NULL, '2017-05-19 19:50:43', '2017-05-19 19:50:43'),
(6, 'tes', 'tes', NULL, '2017-05-19 19:51:24', '2017-05-19 19:51:24'),
(7, 'tes', '', NULL, '2017-05-19 19:51:34', '2017-05-19 19:51:34'),
(8, 'tes', 'tes', NULL, '2017-05-19 19:51:41', '2017-05-19 19:51:41'),
(9, 'denny', 'denny', NULL, '2017-05-19 19:58:41', '2017-05-19 19:58:41'),
(10, 'denny', 'denny', NULL, '2017-05-19 19:59:05', '2017-05-19 19:59:05'),
(11, 'tes', 'tes', NULL, '2017-05-19 20:02:28', '2017-05-19 20:02:28'),
(12, 'tes', 'tes', NULL, '2017-05-21 03:31:20', '2017-05-21 03:31:20'),
(13, 'tes', 'tes', NULL, '2017-05-21 03:31:58', '2017-05-21 03:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE IF NOT EXISTS `ruang` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, '2014', '2017-05-19 19:57:15', '2017-05-19 19:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devisi`
--
ALTER TABLE `devisi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
 ADD PRIMARY KEY (`id`), ADD KEY `gaji_golongan_id_foreign` (`golongan_id`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerja`
--
ALTER TABLE `kerja`
 ADD PRIMARY KEY (`id`), ADD KEY `kerja_pegawai_id_foreign` (`pegawai_id`), ADD KEY `kerja_cuti_id_foreign` (`cuti_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
 ADD PRIMARY KEY (`id`), ADD KEY `manager_pengguna_id_foreign` (`pengguna_id`), ADD KEY `manager_devisi_id_foreign` (`devisi_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`id`), ADD KEY `pegawai_manager_id_foreign` (`manager_id`), ADD KEY `pegawai_gaji_id_foreign` (`gaji_id`), ADD KEY `pegawai_ruang_id_foreign` (`ruang_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `devisi`
--
ALTER TABLE `devisi`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kerja`
--
ALTER TABLE `kerja`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
ADD CONSTRAINT `gaji_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kerja`
--
ALTER TABLE `kerja`
ADD CONSTRAINT `kerja_cuti_id_foreign` FOREIGN KEY (`cuti_id`) REFERENCES `cuti` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `kerja_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
ADD CONSTRAINT `manager_devisi_id_foreign` FOREIGN KEY (`devisi_id`) REFERENCES `devisi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `manager_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
ADD CONSTRAINT `pegawai_gaji_id_foreign` FOREIGN KEY (`gaji_id`) REFERENCES `gaji` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pegawai_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `manager` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pegawai_ruang_id_foreign` FOREIGN KEY (`ruang_id`) REFERENCES `ruang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

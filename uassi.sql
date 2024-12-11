-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 06:54 AM
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
-- Database: `uassi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `kode_alternatif` varchar(16) NOT NULL,
  `nama_alternatif` varchar(255) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`kode_alternatif`, `nama_alternatif`, `no_hp`, `created_at`, `updated_at`) VALUES
('A1', 'Budi Setyawan', '08123456789', '2024-11-08 11:39:50', '2024-11-08 11:39:50'),
('A2', 'Nita Arum Sari', '08987654321', '2024-11-08 11:40:09', '2024-11-08 11:40:09'),
('A3', 'Rahmat Budiawan', '08654987321', '2024-11-08 11:40:29', '2024-11-08 11:40:29'),
('A4', 'Galih Andrawan', '08321987654', '2024-11-08 11:40:46', '2024-11-08 11:40:46'),
('A5', 'Tina Hapsari', '08147258369', '2024-11-08 11:41:06', '2024-11-08 11:41:06'),
('A6', 'Bambang Yudha', '08963852741', '2024-11-08 11:41:30', '2024-11-08 11:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `kode_kriteria` varchar(16) NOT NULL,
  `nama_kriteria` varchar(255) DEFAULT NULL,
  `bobot` double NOT NULL,
  `atribut` enum('benefit','cost') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`kode_kriteria`, `nama_kriteria`, `bobot`, `atribut`, `created_at`, `updated_at`) VALUES
('C1', 'Penjualan', 0.3, 'benefit', '2024-11-20 11:18:59', '2024-11-20 11:18:59'),
('C2', 'Absensi', 0.25, 'benefit', '2024-11-20 11:18:59', '2024-11-21 18:38:49'),
('C3', 'Kedisiplinan', 0.2, 'benefit', '2024-11-20 11:18:59', '2024-11-20 11:18:59'),
('C4', 'Skill', 0.15, 'benefit', '2024-11-20 11:18:59', '2024-11-21 18:39:07'),
('C5', 'Kerjasama Tim', 0.1, 'benefit', '2024-11-20 11:18:59', '2024-11-20 11:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matriks_keputusan`
--

CREATE TABLE `tb_matriks_keputusan` (
  `kode_matriks` bigint(20) UNSIGNED NOT NULL,
  `kode_alternatif` varchar(16) NOT NULL,
  `kode_kriteria` varchar(16) NOT NULL,
  `kode_periode` varchar(16) NOT NULL,
  `nilai` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_matriks_keputusan`
--

INSERT INTO `tb_matriks_keputusan` (`kode_matriks`, `kode_alternatif`, `kode_kriteria`, `kode_periode`, `nilai`, `created_at`, `updated_at`) VALUES
(209, 'A1', 'C1', 'P1', 2, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(210, 'A1', 'C2', 'P1', 3, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(211, 'A1', 'C3', 'P1', 3, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(212, 'A1', 'C4', 'P1', 2, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(213, 'A1', 'C5', 'P1', 2, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(214, 'A2', 'C1', 'P1', 2, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(215, 'A2', 'C2', 'P1', 4, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(216, 'A2', 'C3', 'P1', 3, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(217, 'A2', 'C4', 'P1', 4, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(218, 'A2', 'C5', 'P1', 4, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(219, 'A3', 'C1', 'P1', 4, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(220, 'A3', 'C2', 'P1', 4, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(221, 'A3', 'C3', 'P1', 3, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(222, 'A3', 'C4', 'P1', 3, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(223, 'A3', 'C5', 'P1', 3, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(224, 'A4', 'C1', 'P1', 2, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(225, 'A4', 'C2', 'P1', 3, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(226, 'A4', 'C3', 'P1', 4, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(227, 'A4', 'C4', 'P1', 2, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(228, 'A4', 'C5', 'P1', 2, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(229, 'A5', 'C1', 'P1', 2, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(230, 'A5', 'C2', 'P1', 4, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(231, 'A5', 'C3', 'P1', 3, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(232, 'A5', 'C4', 'P1', 3, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(233, 'A5', 'C5', 'P1', 3, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(234, 'A6', 'C1', 'P1', 4, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(235, 'A6', 'C2', 'P1', 4, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(236, 'A6', 'C3', 'P1', 4, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(237, 'A6', 'C4', 'P1', 3, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(238, 'A6', 'C5', 'P1', 3, '2024-11-21 20:10:46', '2024-11-21 20:10:46'),
(239, 'A1', 'C1', 'P2', 3, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(240, 'A1', 'C2', 'P2', 4, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(241, 'A1', 'C3', 'P2', 2, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(242, 'A1', 'C4', 'P2', 3, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(243, 'A1', 'C5', 'P2', 2, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(244, 'A2', 'C1', 'P2', 3, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(245, 'A2', 'C2', 'P2', 5, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(246, 'A2', 'C3', 'P2', 4, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(247, 'A2', 'C4', 'P2', 3, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(248, 'A2', 'C5', 'P2', 5, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(249, 'A3', 'C1', 'P2', 5, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(250, 'A3', 'C2', 'P2', 5, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(251, 'A3', 'C3', 'P2', 3, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(252, 'A3', 'C4', 'P2', 4, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(253, 'A3', 'C5', 'P2', 4, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(254, 'A4', 'C1', 'P2', 4, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(255, 'A4', 'C2', 'P2', 3, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(256, 'A4', 'C3', 'P2', 4, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(257, 'A4', 'C4', 'P2', 2, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(258, 'A4', 'C5', 'P2', 2, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(259, 'A5', 'C1', 'P2', 3, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(260, 'A5', 'C2', 'P2', 5, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(261, 'A5', 'C3', 'P2', 4, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(262, 'A5', 'C4', 'P2', 3, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(263, 'A5', 'C5', 'P2', 4, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(264, 'A6', 'C1', 'P2', 5, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(265, 'A6', 'C2', 'P2', 5, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(266, 'A6', 'C3', 'P2', 4, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(267, 'A6', 'C4', 'P2', 4, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(268, 'A6', 'C5', 'P2', 4, '2024-11-21 20:13:52', '2024-11-21 20:13:52'),
(269, 'A1', 'C1', 'P3', 1, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(270, 'A1', 'C2', 'P3', 2, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(271, 'A1', 'C3', 'P3', 2, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(272, 'A1', 'C4', 'P3', 1, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(273, 'A1', 'C5', 'P3', 1, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(274, 'A2', 'C1', 'P3', 3, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(275, 'A2', 'C2', 'P3', 5, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(276, 'A2', 'C3', 'P3', 4, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(277, 'A2', 'C4', 'P3', 3, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(278, 'A2', 'C5', 'P3', 4, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(279, 'A3', 'C1', 'P3', 4, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(280, 'A3', 'C2', 'P3', 5, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(281, 'A3', 'C3', 'P3', 3, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(282, 'A3', 'C4', 'P3', 3, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(283, 'A3', 'C5', 'P3', 3, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(284, 'A4', 'C1', 'P3', 1, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(285, 'A4', 'C2', 'P3', 1, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(286, 'A4', 'C3', 'P3', 2, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(287, 'A4', 'C4', 'P3', 1, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(288, 'A4', 'C5', 'P3', 1, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(289, 'A5', 'C1', 'P3', 3, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(290, 'A5', 'C2', 'P3', 4, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(291, 'A5', 'C3', 'P3', 3, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(292, 'A5', 'C4', 'P3', 3, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(293, 'A5', 'C5', 'P3', 4, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(294, 'A6', 'C1', 'P3', 5, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(295, 'A6', 'C2', 'P3', 5, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(296, 'A6', 'C3', 'P3', 5, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(297, 'A6', 'C4', 'P3', 4, '2024-11-21 20:15:20', '2024-11-21 20:15:20'),
(298, 'A6', 'C5', 'P3', 4, '2024-11-21 20:15:20', '2024-11-21 20:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_periode`
--

CREATE TABLE `tb_periode` (
  `kode_periode` varchar(16) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_periode`
--

INSERT INTO `tb_periode` (`kode_periode`, `tanggal`, `created_at`, `updated_at`) VALUES
('P1', '2024-01-01', '2024-11-20 11:19:05', '2024-11-20 11:19:05'),
('P2', '2024-02-01', '2024-11-20 11:19:05', '2024-12-09 17:16:05'),
('P3', '2024-03-01', '2024-11-20 11:19:05', '2024-12-09 17:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_subkriteria`
--

CREATE TABLE `tb_subkriteria` (
  `kode_subkriteria` varchar(16) NOT NULL,
  `kode_kriteria` varchar(16) NOT NULL,
  `nama_subkriteria` varchar(255) DEFAULT NULL,
  `bobot` double NOT NULL,
  `batas_min` double DEFAULT NULL,
  `batas_max` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_subkriteria`
--

INSERT INTO `tb_subkriteria` (`kode_subkriteria`, `kode_kriteria`, `nama_subkriteria`, `bobot`, `batas_min`, `batas_max`, `created_at`, `updated_at`) VALUES
('S1', 'C1', 'Kurang', 1, 0, 20, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S10', 'C3', 'Cukup', 2, 71, 75, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S11', 'C3', 'Baik', 3, 76, 83, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S12', 'C3', 'Sangat Baik', 4, 84, 90, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S13', 'C4', 'Kurang', 1, 0, 70, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S14', 'C4', 'Cukup', 2, 71, 75, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S15', 'C4', 'Baik', 3, 76, 83, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S16', 'C4', 'Sangat Baik', 4, 84, 90, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S2', 'C1', 'Cukup', 2, 21, 30, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S3', 'C1', 'Baik', 3, 31, 40, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S4', 'C1', 'Sangat Baik', 4, 41, 50, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S5', 'C2', 'Kurang', 1, 0, 7, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S6', 'C2', 'Cukup', 2, 8, 14, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S7', 'C2', 'Baik', 3, 15, 19, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S8', 'C2', 'Sangat Baik', 4, 20, 26, '2024-11-21 20:11:59', '2024-11-21 20:11:59'),
('S9', 'C3', 'Kurang', 1, 0, 70, '2024-11-21 20:11:59', '2024-11-21 20:11:59');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tb_view_nilai_preferensi`
-- (See below for the actual view)
--
CREATE TABLE `tb_view_nilai_preferensi` (
`kode_alternatif` varchar(16)
,`kode_periode` varchar(16)
,`total_nilai` double
,`rangking` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tb_view_normalisasi`
-- (See below for the actual view)
--
CREATE TABLE `tb_view_normalisasi` (
`kode_alternatif` varchar(16)
,`kode_kriteria` varchar(16)
,`kode_periode` varchar(16)
,`nilai` double
,`bobot` double
,`normalisasi_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tb_view_optimasi`
-- (See below for the actual view)
--
CREATE TABLE `tb_view_optimasi` (
`kode_alternatif` varchar(16)
,`kode_periode` varchar(16)
,`optimasi_penjualan` double
,`optimasi_absensi` double
,`optimasi_kedisiplinan` double
,`optimasi_skill` double
,`optimasi_kerjasama_tim` double
);

-- --------------------------------------------------------

--
-- Structure for view `tb_view_nilai_preferensi`
--
DROP TABLE IF EXISTS `tb_view_nilai_preferensi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tb_view_nilai_preferensi`  AS SELECT `o`.`kode_alternatif` AS `kode_alternatif`, `o`.`kode_periode` AS `kode_periode`, `o`.`optimasi_penjualan`+ `o`.`optimasi_absensi` + `o`.`optimasi_kedisiplinan` + `o`.`optimasi_skill` + `o`.`optimasi_kerjasama_tim` AS `total_nilai`, rank() over ( partition by `o`.`kode_periode` order by `o`.`optimasi_penjualan` + `o`.`optimasi_absensi` + `o`.`optimasi_kedisiplinan` + `o`.`optimasi_skill` + `o`.`optimasi_kerjasama_tim` desc) AS `rangking` FROM `tb_view_optimasi` AS `o` ;

-- --------------------------------------------------------

--
-- Structure for view `tb_view_normalisasi`
--
DROP TABLE IF EXISTS `tb_view_normalisasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tb_view_normalisasi`  AS SELECT `m`.`kode_alternatif` AS `kode_alternatif`, `m`.`kode_kriteria` AS `kode_kriteria`, `m`.`kode_periode` AS `kode_periode`, `m`.`nilai` AS `nilai`, `k`.`bobot` AS `bobot`, CASE WHEN `k`.`atribut` = 'benefit' THEN `m`.`nilai`/ sqrt(sum(pow(`m`.`nilai`,2)) over ( partition by `m`.`kode_kriteria`,`m`.`kode_periode`)) WHEN `k`.`atribut` = 'cost' THEN min(`m`.`nilai`) over ( partition by `m`.`kode_kriteria`,`m`.`kode_periode`) / `m`.`nilai` END AS `normalisasi_nilai` FROM (`tb_matriks_keputusan` `m` join `tb_kriteria` `k` on(`m`.`kode_kriteria` = `k`.`kode_kriteria`)) ORDER BY `m`.`kode_kriteria` ASC, `m`.`kode_alternatif` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `tb_view_optimasi`
--
DROP TABLE IF EXISTS `tb_view_optimasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tb_view_optimasi`  AS SELECT `n`.`kode_alternatif` AS `kode_alternatif`, `n`.`kode_periode` AS `kode_periode`, max(case when `n`.`kode_kriteria` = 'C1' then `n`.`normalisasi_nilai` * `n`.`bobot` else 0 end) AS `optimasi_penjualan`, max(case when `n`.`kode_kriteria` = 'C2' then `n`.`normalisasi_nilai` * `n`.`bobot` else 0 end) AS `optimasi_absensi`, max(case when `n`.`kode_kriteria` = 'C3' then `n`.`normalisasi_nilai` * `n`.`bobot` else 0 end) AS `optimasi_kedisiplinan`, max(case when `n`.`kode_kriteria` = 'C4' then `n`.`normalisasi_nilai` * `n`.`bobot` else 0 end) AS `optimasi_skill`, max(case when `n`.`kode_kriteria` = 'C5' then `n`.`normalisasi_nilai` * `n`.`bobot` else 0 end) AS `optimasi_kerjasama_tim` FROM `tb_view_normalisasi` AS `n` GROUP BY `n`.`kode_alternatif`, `n`.`kode_periode` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`kode_alternatif`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`kode_kriteria`);

--
-- Indexes for table `tb_matriks_keputusan`
--
ALTER TABLE `tb_matriks_keputusan`
  ADD PRIMARY KEY (`kode_matriks`),
  ADD KEY `kode_alternatif` (`kode_alternatif`),
  ADD KEY `kode_kriteria` (`kode_kriteria`),
  ADD KEY `kode_periode` (`kode_periode`);

--
-- Indexes for table `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`kode_periode`);

--
-- Indexes for table `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  ADD PRIMARY KEY (`kode_subkriteria`),
  ADD KEY `kode_kriteria` (`kode_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_matriks_keputusan`
--
ALTER TABLE `tb_matriks_keputusan`
  MODIFY `kode_matriks` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_matriks_keputusan`
--
ALTER TABLE `tb_matriks_keputusan`
  ADD CONSTRAINT `tb_matriks_keputusan_ibfk_1` FOREIGN KEY (`kode_alternatif`) REFERENCES `tb_alternatif` (`kode_alternatif`),
  ADD CONSTRAINT `tb_matriks_keputusan_ibfk_2` FOREIGN KEY (`kode_kriteria`) REFERENCES `tb_kriteria` (`kode_kriteria`),
  ADD CONSTRAINT `tb_matriks_keputusan_ibfk_3` FOREIGN KEY (`kode_periode`) REFERENCES `tb_periode` (`kode_periode`);

--
-- Constraints for table `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  ADD CONSTRAINT `tb_subkriteria_ibfk_1` FOREIGN KEY (`kode_kriteria`) REFERENCES `tb_kriteria` (`kode_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

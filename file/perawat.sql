-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2021 pada 08.49
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perawat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `tanggal` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `id_perawat` int(16) NOT NULL,
  `01` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `02` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `03` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `04` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `05` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `06` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `07` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `08` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `09` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `10` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `11` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `12` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `13` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `14` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `15` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `16` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `17` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `18` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `19` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `20` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `21` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `22` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `23` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `24` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `25` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `26` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `27` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `28` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `29` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `30` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL,
  `31` enum('P','S','M','L') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`tanggal`, `id_perawat`, `01`, `02`, `03`, `04`, `05`, `06`, `07`, `08`, `09`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`) VALUES
('2020_01_1', 1, 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M'),
('2020_01_10', 10, 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L'),
('2020_01_11', 11, 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L'),
('2020_01_12', 12, 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L'),
('2020_01_13', 13, 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L'),
('2020_01_14', 14, 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L'),
('2020_01_15', 15, 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P'),
('2020_01_16', 16, 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P'),
('2020_01_17', 17, 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P'),
('2020_01_18', 18, 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P'),
('2020_01_19', 19, 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S'),
('2020_01_2', 2, 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M'),
('2020_01_20', 20, 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S'),
('2020_01_21', 21, 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S'),
('2020_01_22', 22, 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M'),
('2020_01_3', 3, 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L'),
('2020_01_4', 4, 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L'),
('2020_01_5', 5, 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L'),
('2020_01_6', 6, 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L'),
('2020_01_7', 7, 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L'),
('2020_01_8', 8, 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L'),
('2020_01_9', 9, 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L'),
('2020_02_1', 1, 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', NULL, NULL),
('2020_02_10', 10, 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', NULL, NULL),
('2020_02_11', 11, 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', NULL, NULL),
('2020_02_12', 12, 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', NULL, NULL),
('2020_02_13', 13, 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', NULL, NULL),
('2020_02_14', 14, 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', NULL, NULL),
('2020_02_15', 15, 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', NULL, NULL),
('2020_02_16', 16, 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', NULL, NULL),
('2020_02_17', 17, 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', NULL, NULL),
('2020_02_18', 18, 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', NULL, NULL),
('2020_02_19', 19, 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', NULL, NULL),
('2020_02_2', 2, 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', NULL, NULL),
('2020_02_20', 20, 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', NULL, NULL),
('2020_02_21', 21, 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', NULL, NULL),
('2020_02_22', 22, 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', NULL, NULL),
('2020_02_3', 3, 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', NULL, NULL),
('2020_02_4', 4, 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', NULL, NULL),
('2020_02_5', 5, 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', NULL, NULL),
('2020_02_6', 6, 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', NULL, NULL),
('2020_02_7', 7, 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', NULL, NULL),
('2020_02_8', 8, 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'M', 'L', 'S', 'L', 'P', 'L', 'P', NULL, NULL),
('2020_02_9', 9, 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', 'L', 'P', 'M', 'L', 'M', 'L', 'S', 'L', 'S', 'L', 'P', NULL, NULL),
('2020_03_1', 1, 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L'),
('2020_03_10', 10, 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P'),
('2020_03_11', 11, 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S'),
('2020_03_12', 12, 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S'),
('2020_03_13', 13, 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S'),
('2020_03_14', 14, 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M'),
('2020_03_15', 15, 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M'),
('2020_03_16', 16, 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L'),
('2020_03_17', 17, 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L'),
('2020_03_18', 18, 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L'),
('2020_03_19', 19, 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L'),
('2020_03_2', 2, 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L'),
('2020_03_20', 20, 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L'),
('2020_03_21', 21, 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L'),
('2020_03_22', 22, 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L'),
('2020_03_28', 28, 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L'),
('2020_03_29', 29, 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L'),
('2020_03_3', 3, 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L'),
('2020_03_4', 4, 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L'),
('2020_03_5', 5, 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L'),
('2020_03_6', 6, 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L'),
('2020_03_7', 7, 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'L', 'P'),
('2020_03_8', 8, 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P'),
('2020_03_9', 9, 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'S', 'L', 'L', 'P'),
('2020_04_1', 1, 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', NULL),
('2020_04_10', 10, 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', NULL),
('2020_04_11', 11, 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', NULL),
('2020_04_12', 12, 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', NULL),
('2020_04_13', 13, 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', NULL),
('2020_04_14', 14, 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', NULL),
('2020_04_15', 15, 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', NULL),
('2020_04_16', 16, 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', NULL),
('2020_04_17', 17, 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', NULL),
('2020_04_18', 18, 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', NULL),
('2020_04_19', 19, 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', NULL),
('2020_04_2', 2, 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', NULL),
('2020_04_20', 20, 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', NULL),
('2020_04_21', 21, 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', NULL),
('2020_04_22', 22, 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', NULL),
('2020_04_28', 28, 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', NULL),
('2020_04_29', 29, 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', NULL),
('2020_04_3', 3, 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', NULL),
('2020_04_4', 4, 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', NULL),
('2020_04_5', 5, 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', NULL),
('2020_04_6', 6, 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', NULL),
('2020_04_7', 7, 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', NULL),
('2020_04_8', 8, 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', NULL),
('2020_04_9', 9, 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', NULL),
('2020_05_1', 1, 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L'),
('2020_05_10', 10, 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L'),
('2020_05_11', 11, 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L'),
('2020_05_12', 12, 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L'),
('2020_05_13', 13, 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P'),
('2020_05_14', 14, 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P'),
('2020_05_15', 15, 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P'),
('2020_05_16', 16, 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P'),
('2020_05_17', 17, 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S'),
('2020_05_18', 18, 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S'),
('2020_05_19', 19, 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S'),
('2020_05_2', 2, 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L'),
('2020_05_20', 20, 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M'),
('2020_05_21', 21, 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M'),
('2020_05_22', 22, 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M'),
('2020_05_28', 28, 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L'),
('2020_05_29', 29, 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L'),
('2020_05_3', 3, 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L'),
('2020_05_4', 4, 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L'),
('2020_05_5', 5, 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L'),
('2020_05_6', 6, 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L'),
('2020_05_7', 7, 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L'),
('2020_05_8', 8, 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L'),
('2020_05_9', 9, 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'S', 'L'),
('2020_06_1', 1, 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', NULL),
('2020_06_10', 10, 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', NULL),
('2020_06_11', 11, 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', NULL),
('2020_06_12', 12, 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', NULL),
('2020_06_13', 13, 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', NULL),
('2020_06_14', 14, 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', NULL),
('2020_06_15', 15, 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', NULL),
('2020_06_16', 16, 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', NULL),
('2020_06_17', 17, 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', NULL),
('2020_06_18', 18, 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', NULL),
('2020_06_19', 19, 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', NULL),
('2020_06_2', 2, 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', NULL),
('2020_06_20', 20, 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', NULL),
('2020_06_21', 21, 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', NULL),
('2020_06_22', 22, 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', NULL),
('2020_06_28', 28, 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', NULL),
('2020_06_29', 29, 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', NULL),
('2020_06_3', 3, 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', NULL),
('2020_06_4', 4, 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', NULL),
('2020_06_5', 5, 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', NULL),
('2020_06_6', 6, 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', NULL),
('2020_06_7', 7, 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'P', NULL),
('2020_06_8', 8, 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', NULL),
('2020_06_9', 9, 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', 'M', 'L', 'S', 'L', 'P', 'M', 'L', 'S', NULL),
('2021_01_1', 1, 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M'),
('2021_01_10', 10, 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L'),
('2021_01_11', 11, 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L'),
('2021_01_12', 12, 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L'),
('2021_01_13', 13, 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L'),
('2021_01_14', 14, 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L'),
('2021_01_15', 15, 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P'),
('2021_01_16', 16, 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P'),
('2021_01_17', 17, 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P'),
('2021_01_18', 18, 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P'),
('2021_01_19', 19, 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S'),
('2021_01_2', 2, 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M'),
('2021_01_20', 20, 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S'),
('2021_01_21', 21, 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S'),
('2021_01_22', 22, 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M'),
('2021_01_3', 3, 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L'),
('2021_01_4', 4, 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L'),
('2021_01_5', 5, 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L'),
('2021_01_6', 6, 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L'),
('2021_01_7', 7, 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L'),
('2021_01_8', 8, 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'M', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L'),
('2021_01_9', 9, 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L', 'S', 'L', 'M', 'L', 'L', 'P', 'L', 'P', 'L', 'S', 'L'),
('2021_02_1', 1, 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', NULL, NULL, NULL),
('2021_02_10', 10, 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', NULL, NULL, NULL),
('2021_02_11', 11, 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', NULL, NULL, NULL),
('2021_02_12', 12, 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', NULL, NULL, NULL),
('2021_02_13', 13, 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', NULL, NULL, NULL),
('2021_02_14', 14, 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', NULL, NULL, NULL),
('2021_02_15', 15, 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', NULL, NULL, NULL),
('2021_02_16', 16, 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', NULL, NULL, NULL),
('2021_02_17', 17, 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', NULL, NULL, NULL),
('2021_02_18', 18, 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', NULL, NULL, NULL),
('2021_02_19', 19, 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', NULL, NULL, NULL),
('2021_02_2', 2, 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', NULL, NULL, NULL),
('2021_02_20', 20, 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', NULL, NULL, NULL),
('2021_02_21', 21, 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', NULL, NULL, NULL),
('2021_02_22', 22, 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', NULL, NULL, NULL),
('2021_02_28', 28, 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', NULL, NULL, NULL),
('2021_02_29', 29, 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', NULL, NULL, NULL),
('2021_02_3', 3, 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', NULL, NULL, NULL),
('2021_02_4', 4, 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', 'P', 'L', NULL, NULL, NULL),
('2021_02_5', 5, 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', NULL, NULL, NULL),
('2021_02_6', 6, 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', NULL, NULL, NULL),
('2021_02_7', 7, 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', NULL, NULL, NULL),
('2021_02_8', 8, 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', 'S', 'L', NULL, NULL, NULL),
('2021_02_9', 9, 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', 'M', 'L', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perawat`
--

CREATE TABLE `perawat` (
  `id` int(6) NOT NULL,
  `nama` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(512) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `perawat`
--

INSERT INTO `perawat` (`id`, `nama`, `user_name`, `jenis_kelamin`, `alamat`, `foto`) VALUES
(1, 'Halimatus Sakdiyah, S.Kep.,Ns', 'user0', 'perempuan', 'Jalan Jauh', ''),
(2, 'Rizal N. Andika, S.Kep., Ns', 'admin', 'laki-laki', '', 'img/perawat/1.jpg'),
(3, 'Siti Fatimah,Amd.Kep', 'user1', 'perempuan', '', ''),
(4, 'Kurniawati,Amd.Keb', '', 'perempuan', '', ''),
(5, 'Roesliana Dewi, S.Kep, Ns', '', 'perempuan', '', ''),
(6, 'Putri Ayuningtyas,Amd. Keb', '', 'perempuan', '', ''),
(7, 'Nurul Arifiani,Amd.Keb', '', 'perempuan', '', ''),
(8, 'Silvia Nurrohim, S.Kep.,Ns', '', 'perempuan', '', ''),
(9, 'R. Azmy Septiana, Amd. Keb', '', 'perempuan', '', ''),
(10, 'Wasiatul Rohmah,Amd.Keb', '', 'perempuan', '', ''),
(11, 'Enni Yulita, Amd.Kep', '', 'perempuan', '', ''),
(12, 'Nurhamilah, Amd. Kep', '', 'perempuan', '', ''),
(13, 'Meyla Karunia Sari, SST', '', 'perempuan', '', ''),
(14, 'Mutihah, S.Kep., Ns', '', 'perempuan', '', ''),
(15, 'Rika Sulistiyo Rini, SST', '', 'perempuan', '', ''),
(16, 'Ayu Puspasari, Amd. Keb', '', 'perempuan', '', ''),
(17, 'Izzatur Rohmah, Amd. Kep', '', 'perempuan', '', ''),
(18, 'Indah Kusuma D, Amd.Keb', '', 'perempuan', '', ''),
(19, 'Widya Cahya, STr. Keb', '', 'perempuan', '', ''),
(20, 'Imroatun', '', 'perempuan', '', ''),
(21, 'RA. Dewi Yulastri', '', 'perempuan', '', ''),
(22, 'Nunung Meliana', '', 'perempuan', '', ''),
(28, 'mbaru', '', 'laki-laki', 'Coba Tebak', 'img/perawat/foto_png'),
(29, 'uus', '', 'perempuan', 'Yang lain', 'img/perawat/foto_jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `perihal` int(2) NOT NULL,
  `pesannya` varchar(512) COLLATE latin1_general_ci NOT NULL,
  `tanggal_p` date NOT NULL,
  `respon` enum('1','0') COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `perihal`, `pesannya`, `tanggal_p`, `respon`) VALUES
(1, 'Halimatus Sakdiyah, S.Kep.,Ns', 1, 'data saya hilang', '0000-00-00', '1'),
(2, 'SITI FATIMAH,AMD.KEP', 2, 'Untuk teman', '0000-00-00', '1'),
(3, 'SITI FATIMAH,AMD.KEP', 3, 'saya mau pindah', '0000-00-00', '1'),
(4, 'SITI FATIMAH,AMD.KEP', 3, 'senin ke selaa', '0000-00-00', '1'),
(5, 'HALIMATUS SAKDIYAH, S.KEP.,NS', 1, 'ubah\r\n', '2021-01-07', '1'),
(6, 'HALIMATUS SAKDIYAH, S.KEP.,NS', 2, 'barunya', '2021-01-07', '0'),
(7, 'HALIMATUS SAKDIYAH, S.KEP.,NS', 3, 'mau ganti', '2021-01-07', '0'),
(8, 'Kurniawati,Amd.Keb', 2, 'saya belum punya\r\n', '2021-01-07', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `nomor` int(6) NOT NULL,
  `nama_ruang` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jumlah_pasien` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`nomor`, `nama_ruang`, `jumlah_pasien`) VALUES
(1, 'R. Tropical Disease', 1),
(2, 'R. Kelas 1A', 1),
(3, 'R. Kelas 1B', 1),
(4, 'R. Kelas 1C', 1),
(5, 'R. Kelas II', 1),
(6, 'R. Respibologi', 1),
(7, 'R. Gea', 1),
(8, 'HCU', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_name` varchar(16) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_name`, `password`, `status`) VALUES
('admin', '$2y$10$4FZ5VEvr.KCXMKN621t.fultYH3PxTohPnMEKAo3/G15BlHhVUBT.', 1),
('user0', '$2y$10$dK6YJaNjaRN3ldQI.69cIu0ERldsxKUXgP.sPLXMO.EJ1k2oVvExm', 0),
('user1', '$2y$10$1ht2JHSL8bnv5dyWTk1rpe5UBR7PjhhwJnD2LhAuZK.woPOzyf3oS', 0),
('user123', '$2y$10$Z2WplC19ZO6tpwSeAhT0UeE655rEvCGuNkk0UyoUn938U6MRmZyv.', 0),
('user2', '$2y$10$pyv44aZnXkOQrzFF9aN9tOZMAfQgbWd6552eMXJhwCzIpoXUvWkKS', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`tanggal`);

--
-- Indeks untuk tabel `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perawat`
--
ALTER TABLE `perawat`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

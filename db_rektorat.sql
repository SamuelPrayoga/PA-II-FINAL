-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 12:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rektorat`
--

-- --------------------------------------------------------

--
-- Table structure for table `asistendosen`
--

CREATE TABLE `asistendosen` (
  `asdosID` int(13) NOT NULL,
  `namaasdos` text NOT NULL,
  `matakuliah` text NOT NULL,
  `fakultas` text NOT NULL,
  `prodi` text NOT NULL,
  `pendidikan` text NOT NULL,
  `tahun` year(4) NOT NULL,
  `aktifstart` date NOT NULL,
  `aktifend` date NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asistendosen`
--

INSERT INTO `asistendosen` (`asdosID`, `namaasdos`, `matakuliah`, `fakultas`, `prodi`, `pendidikan`, `tahun`, `aktifstart`, `aktifend`, `created_at`, `updated_at`) VALUES
(1009928, 'Maria Vania Siahaan', 'PBO, PAM', 'Vokasi', 'D4TRPL, D3TI', 'Sarjana Terapan', 2018, '2022-04-01', '2022-04-23', '2022-04-19 21:09:56.000000', '2022-04-21 19:29:37.000000');

-- --------------------------------------------------------

--
-- Table structure for table `asrama`
--

CREATE TABLE `asrama` (
  `id` int(11) NOT NULL,
  `namagedung` varchar(50) NOT NULL,
  `kategori` text NOT NULL,
  `jumlahkamar` varchar(50) DEFAULT NULL,
  `kapasitasruangan` varchar(50) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asrama`
--

INSERT INTO `asrama` (`id`, `namagedung`, `kategori`, `jumlahkamar`, `kapasitasruangan`, `total`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'Asrama Silo', 'ASRAMA', '24', '6', '144', 'Napitupulu total kamar 26; 24 mahasiswa baru putra, 2 pengurus asrama, dihuni 95 orang mahasiswa', '2022-04-24 11:59:43.000000', '2022-04-25 00:15:01.000000');

-- --------------------------------------------------------

--
-- Table structure for table `dispalattulis`
--

CREATE TABLE `dispalattulis` (
  `id` int(11) NOT NULL,
  `itembarang` text NOT NULL,
  `kodeaset` varchar(50) NOT NULL,
  `jumlahunit` varchar(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` varchar(50) DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `nilaibuku` varchar(50) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispalattulis`
--

INSERT INTO `dispalattulis` (`id`, `itembarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `sumberdana`, `nilaibuku`, `lokasi`, `alasan`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'dasd', 'asdsdad', 'sadsa', 'asdds', 'sdaasd', 'sdad', 'sadsadasd', 'sdasdsad', 'sadasdasdsa', 'Terlalu Bagus', 'wkwk', NULL, '2022-04-28 00:56:32.000000');

-- --------------------------------------------------------

--
-- Table structure for table `dispaudio`
--

CREATE TABLE `dispaudio` (
  `id` int(11) NOT NULL,
  `itembarang` text NOT NULL,
  `kodeaset` varchar(50) NOT NULL,
  `jumlahunit` varchar(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` varchar(50) DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `nilaibuku` varchar(50) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispaudio`
--

INSERT INTO `dispaudio` (`id`, `itembarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `sumberdana`, `nilaibuku`, `lokasi`, `alasan`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'dasd', 'asdsdad', 'sadsa', 'asdds', 'sdaasd', 'sdad', 'sadsadasd', 'sdasdsad', 'sadasdasdsa', 'Terlalu Bagus', 'dsadaas', NULL, '2022-04-27 11:55:14.000000');

-- --------------------------------------------------------

--
-- Table structure for table `dispjaringan`
--

CREATE TABLE `dispjaringan` (
  `id` int(11) NOT NULL,
  `itembarang` text NOT NULL,
  `kodeaset` varchar(50) NOT NULL,
  `jumlahunit` varchar(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` varchar(50) DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `nilaibuku` varchar(50) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispjaringan`
--

INSERT INTO `dispjaringan` (`id`, `itembarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `sumberdana`, `nilaibuku`, `lokasi`, `alasan`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'dasd', 'asdsdad', 'sadsa', 'asdds', 'sdaasd', 'sdad', 'sadsadasd', 'sdasdsad', 'sadasdasdsa', 'Terlalu Bagus', 'dsadaas', NULL, '2022-04-27 11:55:14.000000');

-- --------------------------------------------------------

--
-- Table structure for table `displab`
--

CREATE TABLE `displab` (
  `id` int(11) NOT NULL,
  `itembarang` text NOT NULL,
  `kodeaset` varchar(50) NOT NULL,
  `jumlahunit` varchar(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` varchar(50) DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `nilaibuku` varchar(50) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `displab`
--

INSERT INTO `displab` (`id`, `itembarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `sumberdana`, `nilaibuku`, `lokasi`, `alasan`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'dasd', 'asdsdad', 'sadsa', 'asdds', 'sdaasd', 'sdad', 'sadsadasd', 'sdasdsad', 'sadasdasdsa', 'hh', 'dsadaas', NULL, '2022-04-28 09:30:28.000000');

-- --------------------------------------------------------

--
-- Table structure for table `dispmaintanance`
--

CREATE TABLE `dispmaintanance` (
  `id` int(11) NOT NULL,
  `itembarang` text NOT NULL,
  `kodeaset` varchar(50) NOT NULL,
  `jumlahunit` varchar(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` varchar(50) DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `nilaibuku` varchar(50) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispmaintanance`
--

INSERT INTO `dispmaintanance` (`id`, `itembarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `sumberdana`, `nilaibuku`, `lokasi`, `alasan`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'dasd', 'asdsdad', 'sadsa', 'asdds', 'sdaasd', 'sdad', 'sadsadasd', 'sdasdsad', 'sadasdasdsa', 'Terlalu Bagus', 'dsadaas', NULL, '2022-04-27 11:55:14.000000'),
(2, 'dfghh', 'dfdfg', '121', '12', '21', 'Rp 65.789', 'SDDS', 'dsf', 'sdf', 'dsfsf', 'dsfs', '2022-04-28 09:35:41.000000', '2022-04-28 09:35:41.000000');

-- --------------------------------------------------------

--
-- Table structure for table `dispmebeler`
--

CREATE TABLE `dispmebeler` (
  `id` int(11) NOT NULL,
  `itembarang` text NOT NULL,
  `kodeaset` varchar(50) NOT NULL,
  `jumlahunit` varchar(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` varchar(50) DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `nilaibuku` varchar(50) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispmebeler`
--

INSERT INTO `dispmebeler` (`id`, `itembarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `sumberdana`, `nilaibuku`, `lokasi`, `alasan`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'dasd', 'asdsdad', 'sadsa', 'asdds', 'sdaasd', 'sdad', 'sadsadasd', 'sdasdsad', 'sadasdasdsa', 'Terlalu Bagus', 'dsadaas', NULL, '2022-04-27 11:55:14.000000');

-- --------------------------------------------------------

--
-- Table structure for table `dispperalatan`
--

CREATE TABLE `dispperalatan` (
  `id` int(11) NOT NULL,
  `itembarang` text NOT NULL,
  `kodeaset` varchar(50) NOT NULL,
  `jumlahunit` varchar(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` varchar(50) DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `nilaibuku` varchar(50) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispperalatan`
--

INSERT INTO `dispperalatan` (`id`, `itembarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `sumberdana`, `nilaibuku`, `lokasi`, `alasan`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'dasd', 'asdsdad', 'sadsa', 'asdds', 'sdaasd', 'sdad', 'sadsadasd', 'sdasdsad', 'sadasdasdsa', 'Terlalu Bagus', 'dsadaas', NULL, '2022-04-27 11:55:14.000000');

-- --------------------------------------------------------

--
-- Table structure for table `disppersediaan`
--

CREATE TABLE `disppersediaan` (
  `id` int(11) NOT NULL,
  `itembarang` text NOT NULL,
  `kodeaset` varchar(50) NOT NULL,
  `jumlahunit` varchar(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` varchar(50) DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `nilaibuku` varchar(50) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disppersediaan`
--

INSERT INTO `disppersediaan` (`id`, `itembarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `sumberdana`, `nilaibuku`, `lokasi`, `alasan`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'dasd', 'asdsdad', 'sadsa', 'asdds', 'sdaasd', 'sdad', 'sadsadasd', 'sdasdsad', 'sadasdasdsa', 'Terlalu Bagus', 'dsadaas', NULL, '2022-04-27 11:55:14.000000');

-- --------------------------------------------------------

--
-- Table structure for table `disptaman`
--

CREATE TABLE `disptaman` (
  `id` int(11) NOT NULL,
  `itembarang` text NOT NULL,
  `kodeaset` varchar(50) NOT NULL,
  `jumlahunit` varchar(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` varchar(50) DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `nilaibuku` varchar(50) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disptaman`
--

INSERT INTO `disptaman` (`id`, `itembarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `sumberdana`, `nilaibuku`, `lokasi`, `alasan`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'dasd', 'asdsdad', 'sadsa', 'asdds', 'sdaasd', 'sdad', 'sadsadasd', 'sdasdsad', 'sadasdasdsa', 'Terlalu Bagus', 'dsadaas', NULL, '2022-04-27 11:55:14.000000');

-- --------------------------------------------------------

--
-- Table structure for table `dosenaktif`
--

CREATE TABLE `dosenaktif` (
  `nidn` int(12) NOT NULL,
  `namaDosen` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `jabatanAkademik` varchar(50) NOT NULL,
  `golonganKepangkatan` varchar(50) NOT NULL,
  `statusIkatan` varchar(50) NOT NULL,
  `aktifStart` date NOT NULL,
  `aktifEnd` date DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosenaktif`
--

INSERT INTO `dosenaktif` (`nidn`, `namaDosen`, `prodi`, `jabatanAkademik`, `golonganKepangkatan`, `statusIkatan`, `aktifStart`, `aktifEnd`, `created_at`, `updated_at`) VALUES
(109049002, 'Ike Ningsih S.Si', 'D-III Teknologi Informasi', 'Lektor', 'III C', 'Dosen NON-PNS', '2022-04-02', '2026-12-22', '2022-04-21 18:45:33.000000', '2022-04-21 18:55:31.000000');

-- --------------------------------------------------------

--
-- Table structure for table `dosentugas`
--

CREATE TABLE `dosentugas` (
  `namaDosen` text NOT NULL,
  `nidn` int(11) NOT NULL,
  `prodi` text NOT NULL,
  `lokasi` text NOT NULL,
  `program` text NOT NULL,
  `programStudi` text NOT NULL,
  `mulaiTugas` date NOT NULL,
  `rencanaAktif` date NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosentugas`
--

INSERT INTO `dosentugas` (`namaDosen`, `nidn`, `prodi`, `lokasi`, `program`, `programStudi`, `mulaiTugas`, `rencanaAktif`, `created_at`, `updated_at`) VALUES
('Raja Siahaans', 123456, 'D-IV Teknologi Rekayasa Perangkat Lunak', 'Institut Teknologi Bandung', 'Profesor', 'Scientific and Artificial Intelligence', '2022-04-01', '2025-01-19', '2022-04-18 11:35:12.000000', '2022-04-19 20:51:18.000000');

-- --------------------------------------------------------

--
-- Table structure for table `ipk`
--

CREATE TABLE `ipk` (
  `ipk_id` int(11) NOT NULL,
  `prodi` text NOT NULL,
  `rataanipk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kantin`
--

CREATE TABLE `kantin` (
  `kantinID` int(13) NOT NULL,
  `namaperumahan` text NOT NULL,
  `jumlahmeja` varchar(50) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kantin`
--

INSERT INTO `kantin` (`kantinID`, `namaperumahan`, `jumlahmeja`, `kapasitas`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Depan - Atas', '23', 6, 138, '2022-04-23 07:06:13.000000', '2022-04-23 07:14:58.000000'),
(4, 'Villa Tambunan No. 3', '2', 3, 3, '2022-04-26 10:39:11.000000', '2022-04-26 10:39:11.000000');

-- --------------------------------------------------------

--
-- Table structure for table `kapasitasruangankelas`
--

CREATE TABLE `kapasitasruangankelas` (
  `id` int(13) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `luas` int(12) NOT NULL,
  `kapasitasnormal` int(12) NOT NULL,
  `perkiraan` int(13) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kapasitasruangankelas`
--

INSERT INTO `kapasitasruangankelas` (`id`, `ruangan`, `keterangan`, `luas`, `kapasitasnormal`, `perkiraan`, `created_at`, `updated_at`) VALUES
(1, 'Auditorium', 'Ruang Kuliah Umum', 12, 13, 15, '2022-04-22 03:12:41.000000', '2022-04-22 03:17:05.000000');

-- --------------------------------------------------------

--
-- Table structure for table `keasramaan`
--

CREATE TABLE `keasramaan` (
  `keasramaanID` int(13) NOT NULL,
  `nama` text NOT NULL,
  `pendidikan` text NOT NULL,
  `jabatan` text NOT NULL,
  `asrama` text NOT NULL,
  `asal` text NOT NULL,
  `notelp` varchar(14) NOT NULL DEFAULT '(+62)',
  `aktifstart` date NOT NULL,
  `aktifend` date DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keasramaan`
--

INSERT INTO `keasramaan` (`keasramaanID`, `nama`, `pendidikan`, `jabatan`, `asrama`, `asal`, `notelp`, `aktifstart`, `aktifend`, `created_at`, `updated_at`) VALUES
(102030405, 'Pdt.Timur Hutagalung S.Th', 'Sarjana Teologi', 'Koordinator Keasramaan', 'Asrama Silo', 'Kota Medan', '082272093950', '2021-12-01', '2022-04-30', '2022-04-21 19:15:00.000000', '2022-04-22 07:40:38.000000');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `noplat` varchar(10) NOT NULL,
  `driver` text NOT NULL,
  `penanggungjawab` text NOT NULL,
  `jeniskendaraan` text NOT NULL,
  `operasional` text NOT NULL,
  `keterangan` text DEFAULT 'Not Set',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `noplat`, `driver`, `penanggungjawab`, `jeniskendaraan`, `operasional`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'BB 2435 TY', 'Mario Tangkas', 'Mahalini Sianipar', 'Bus', 'Dosen/Staff', 'Everything\'s gonna be right', '2022-04-26 05:59:00.000000', '2022-05-01 09:29:19.000000');

-- --------------------------------------------------------

--
-- Table structure for table `komputer`
--

CREATE TABLE `komputer` (
  `id` int(11) NOT NULL,
  `gedung` varchar(50) NOT NULL,
  `penanggungjawab` text NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kategori` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komputer`
--

INSERT INTO `komputer` (`id`, `gedung`, `penanggungjawab`, `jabatan`, `kategori`, `jumlah`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'GD724', 'Febrian Sidabutar', 'Teaching Assistant', 'Komputer', 25, 'Semuanya dalam kondisi Baik dan Layak Pakai', '2022-04-25 21:15:55.000000', '2022-04-25 21:20:15.000000');

-- --------------------------------------------------------

--
-- Table structure for table `lalattulis`
--

CREATE TABLE `lalattulis` (
  `id` int(11) NOT NULL,
  `itembarang` text DEFAULT NULL,
  `tipebarang` text DEFAULT NULL,
  `kodeaset` varchar(50) DEFAULT NULL,
  `jumlahunit` int(11) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` text DEFAULT NULL,
  `umurekonomis` text DEFAULT NULL,
  `depresiasi` text DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `akumulasidepresiasi` text DEFAULT NULL,
  `nilaibuku` text DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lalattulis`
--

INSERT INTO `lalattulis` (`id`, `itembarang`, `tipebarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `umurekonomis`, `depresiasi`, `sumberdana`, `akumulasidepresiasi`, `nilaibuku`, `lokasi`, `unit`, `created_at`, `updated_at`) VALUES
(2, 'asas', 'asasasas', 'IIIB', 12, '23', '34', 'Rp 65.789', '123', 'DSDS', 'SDDS', 'SDS', 'AAA', 'BB', 'BK', '2022-04-27 07:27:25.000000', '2022-04-27 07:35:27.000000');

-- --------------------------------------------------------

--
-- Table structure for table `laudiovisual`
--

CREATE TABLE `laudiovisual` (
  `id` int(11) NOT NULL,
  `itembarang` text DEFAULT NULL,
  `tipebarang` text DEFAULT NULL,
  `kodeaset` varchar(50) DEFAULT NULL,
  `jumlahunit` int(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` text DEFAULT NULL,
  `umurekonomis` text DEFAULT NULL,
  `depresiasi` text DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `akumulasidepresiasi` text DEFAULT NULL,
  `nilaibuku` text DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laudiovisual`
--

INSERT INTO `laudiovisual` (`id`, `itembarang`, `tipebarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `umurekonomis`, `depresiasi`, `sumberdana`, `akumulasidepresiasi`, `nilaibuku`, `lokasi`, `unit`, `created_at`, `updated_at`) VALUES
(2, 'asas', 'asasasas', 'IIIB', 12, '23', '34', 'Rp 65.789', '123', 'DSDS', 'SDDS', 'SDS', 'AAB', 'BB', 'BK', '2022-04-27 07:27:25.000000', '2022-04-27 08:12:27.000000');

-- --------------------------------------------------------

--
-- Table structure for table `listgedung`
--

CREATE TABLE `listgedung` (
  `gedungid` varchar(13) NOT NULL,
  `penomoran` varchar(100) NOT NULL,
  `namagedung` text NOT NULL,
  `namaruangan` text NOT NULL,
  `kapasitasruangan` varchar(50) NOT NULL,
  `lokasimeja` text NOT NULL,
  `namapemakai` text DEFAULT NULL,
  `terisi` varchar(50) DEFAULT NULL,
  `ketersediaan` varchar(50) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listgedung`
--

INSERT INTO `listgedung` (`gedungid`, `penomoran`, `namagedung`, `namaruangan`, `kapasitasruangan`, `lokasimeja`, `namapemakai`, `terisi`, `ketersediaan`, `keterangan`, `created_at`, `updated_at`) VALUES
('121', 'Gedung 1', 'Rektorat LT.1', 'HRD 3 Staff', '3', 'Meja 1', 'Fidelis Silalahi', '2', '3', 'Realisasi', '2022-04-22 01:15:04.000000', '2022-04-22 01:17:39.000000');

-- --------------------------------------------------------

--
-- Table structure for table `ljaringan`
--

CREATE TABLE `ljaringan` (
  `id` int(11) NOT NULL,
  `itembarang` text DEFAULT NULL,
  `tipebarang` text DEFAULT NULL,
  `kodeaset` varchar(50) DEFAULT NULL,
  `jumlahunit` int(11) DEFAULT NULL,
  `nopr` int(11) DEFAULT NULL,
  `nopo` int(11) DEFAULT NULL,
  `nilaiinvoice` text DEFAULT NULL,
  `umurekonomis` text DEFAULT NULL,
  `depresiasi` text DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `akumulasidepresiasi` text DEFAULT NULL,
  `nilaibuku` text DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ljaringan`
--

INSERT INTO `ljaringan` (`id`, `itembarang`, `tipebarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `umurekonomis`, `depresiasi`, `sumberdana`, `akumulasidepresiasi`, `nilaibuku`, `lokasi`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'asas', 'asasasas', 'IIIB', 12, 23, 34, 'Rp 65.789', '123', 'DSDS', 'SDDS', 'SDS', 'AAA', 'DUKTEK', 'BK', '2022-04-27 07:27:25.000000', '2022-04-27 09:22:15.000000');

-- --------------------------------------------------------

--
-- Table structure for table `llab`
--

CREATE TABLE `llab` (
  `id` int(11) NOT NULL,
  `itembarang` text DEFAULT NULL,
  `tipebarang` text DEFAULT NULL,
  `kodeaset` varchar(50) DEFAULT NULL,
  `jumlahunit` int(11) DEFAULT NULL,
  `nopr` int(11) DEFAULT NULL,
  `nopo` int(11) DEFAULT NULL,
  `nilaiinvoice` text DEFAULT NULL,
  `umurekonomis` text DEFAULT NULL,
  `depresiasi` text DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `akumulasidepresiasi` text DEFAULT NULL,
  `nilaibuku` text DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `llab`
--

INSERT INTO `llab` (`id`, `itembarang`, `tipebarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `umurekonomis`, `depresiasi`, `sumberdana`, `akumulasidepresiasi`, `nilaibuku`, `lokasi`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'asas', 'asasasas', 'IIIB', 12, 23, 34, 'Rp 65.789', '123', 'DSDS', 'SDDS', 'SDS', 'AAA', 'BB', 'BO', '2022-04-27 07:27:25.000000', '2022-04-27 09:12:55.000000');

-- --------------------------------------------------------

--
-- Table structure for table `lmaintanance`
--

CREATE TABLE `lmaintanance` (
  `id` int(11) NOT NULL,
  `itembarang` text DEFAULT NULL,
  `tipebarang` text DEFAULT NULL,
  `kodeaset` varchar(50) DEFAULT NULL,
  `jumlahunit` int(11) DEFAULT NULL,
  `nopr` int(11) DEFAULT NULL,
  `nopo` int(11) DEFAULT NULL,
  `nilaiinvoice` text DEFAULT NULL,
  `umurekonomis` text DEFAULT NULL,
  `depresiasi` text DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `akumulasidepresiasi` text DEFAULT NULL,
  `nilaibuku` text DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lmaintanance`
--

INSERT INTO `lmaintanance` (`id`, `itembarang`, `tipebarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `umurekonomis`, `depresiasi`, `sumberdana`, `akumulasidepresiasi`, `nilaibuku`, `lokasi`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'WKWKW', 'asasasas', 'IIIB', 12, 23, 34, 'Rp 65.789', '123', 'DSDS', 'SDDS', 'SDS', 'AAA', 'BB', 'BK', '2022-04-27 07:27:25.000000', '2022-04-27 09:42:54.000000');

-- --------------------------------------------------------

--
-- Table structure for table `lmebeler`
--

CREATE TABLE `lmebeler` (
  `id` int(11) NOT NULL,
  `itembarang` text DEFAULT NULL,
  `tipebarang` text DEFAULT NULL,
  `kodeaset` varchar(50) DEFAULT NULL,
  `jumlahunit` varchar(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` text DEFAULT NULL,
  `umurekonomis` text DEFAULT NULL,
  `depresiasi` text DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `akumulasidepresiasi` text DEFAULT NULL,
  `nilaibuku` text DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lmebeler`
--

INSERT INTO `lmebeler` (`id`, `itembarang`, `tipebarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `umurekonomis`, `depresiasi`, `sumberdana`, `akumulasidepresiasi`, `nilaibuku`, `lokasi`, `unit`, `created_at`, `updated_at`) VALUES
(2, 'asas', 'asasasas', 'IIIB', '12', '23', '34', 'Rp 65.789', '123', 'DSDS', 'SDDS', 'SDS', 'AAA', 'BB', 'BK', '2022-04-27 07:27:25.000000', '2022-04-27 07:35:27.000000');

-- --------------------------------------------------------

--
-- Table structure for table `lperalatan`
--

CREATE TABLE `lperalatan` (
  `id` int(11) NOT NULL,
  `itembarang` text DEFAULT NULL,
  `tipebarang` text DEFAULT NULL,
  `kodeaset` varchar(50) DEFAULT NULL,
  `jumlahunit` varchar(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` text DEFAULT NULL,
  `umurekonomis` text DEFAULT NULL,
  `depresiasi` text DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `akumulasidepresiasi` text DEFAULT NULL,
  `nilaibuku` text DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lperalatan`
--

INSERT INTO `lperalatan` (`id`, `itembarang`, `tipebarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `umurekonomis`, `depresiasi`, `sumberdana`, `akumulasidepresiasi`, `nilaibuku`, `lokasi`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'asas', 'asasasas', 'III.C.3.330.05.02.2022.GD 714.01', '12', '23', '34', 'Rp 65.789', '123', 'DSDS', 'SDDS', 'SDS', '7BIIV', 'BB', 'BK', '2022-04-27 07:27:25.000000', '2022-04-27 08:42:31.000000');

-- --------------------------------------------------------

--
-- Table structure for table `lpersediaan`
--

CREATE TABLE `lpersediaan` (
  `id` int(11) NOT NULL,
  `itembarang` text DEFAULT NULL,
  `tipebarang` text DEFAULT NULL,
  `kodeaset` varchar(50) DEFAULT NULL,
  `jumlahunit` varchar(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` text DEFAULT NULL,
  `umurekonomis` text DEFAULT NULL,
  `depresiasi` text DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `akumulasidepresiasi` text DEFAULT NULL,
  `nilaibuku` text DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lpersediaan`
--

INSERT INTO `lpersediaan` (`id`, `itembarang`, `tipebarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `umurekonomis`, `depresiasi`, `sumberdana`, `akumulasidepresiasi`, `nilaibuku`, `lokasi`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'asas', 'asasasas', 'III.C.3.330.05.02.2022.GD 714.01', '12', '23', '34', 'Rp 65.789', '123', 'DSDS', 'SDDS', 'SDS', '7BIIV', 'BB', 'BK', '2022-04-27 07:27:25.000000', '2022-04-27 08:42:31.000000');

-- --------------------------------------------------------

--
-- Table structure for table `ltaman`
--

CREATE TABLE `ltaman` (
  `id` int(11) NOT NULL,
  `itembarang` text DEFAULT NULL,
  `tipebarang` text DEFAULT NULL,
  `kodeaset` varchar(50) DEFAULT NULL,
  `jumlahunit` varchar(50) DEFAULT NULL,
  `nopr` varchar(50) DEFAULT NULL,
  `nopo` varchar(50) DEFAULT NULL,
  `nilaiinvoice` text DEFAULT NULL,
  `umurekonomis` text DEFAULT NULL,
  `depresiasi` text DEFAULT NULL,
  `sumberdana` text DEFAULT NULL,
  `akumulasidepresiasi` text DEFAULT NULL,
  `nilaibuku` text DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ltaman`
--

INSERT INTO `ltaman` (`id`, `itembarang`, `tipebarang`, `kodeaset`, `jumlahunit`, `nopr`, `nopo`, `nilaiinvoice`, `umurekonomis`, `depresiasi`, `sumberdana`, `akumulasidepresiasi`, `nilaibuku`, `lokasi`, `unit`, `created_at`, `updated_at`) VALUES
(1, '81sas', 'asasasas', 'III.C.3.330.05.02.2022.GD 714.01', '12', '23', '34', 'Rp 65.789', '123', 'DSDS', 'SDDS', 'SDS', '7BIIV', '6', 'BK', '2022-04-27 07:27:25.000000', '2022-04-27 09:59:07.000000');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswaaktif`
--

CREATE TABLE `mahasiswaaktif` (
  `nim` varchar(11) NOT NULL,
  `nama` text NOT NULL,
  `fakultas` text NOT NULL,
  `prodi` text NOT NULL,
  `kelas` text NOT NULL,
  `angkatan` year(4) NOT NULL,
  `jalurmasuk` varchar(10) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `emailaktif` varchar(200) NOT NULL,
  `dosenwali` text NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswaaktif`
--

INSERT INTO `mahasiswaaktif` (`nim`, `nama`, `fakultas`, `prodi`, `kelas`, `angkatan`, `jalurmasuk`, `notelp`, `emailaktif`, `dosenwali`, `created_at`, `updated_at`) VALUES
('11420029', 'Samuel Prayoga Tampubolon', 'Vokasi', 'D-IV Teknologi Rekayasa Perangkat Lunak', '42TRPL1', 2020, 'PMDK', '082272093950', 'if420029@students.del.ac.id', 'Dr.Arnaldo M Sinaga, S.T,M.InfoTech', '2022-04-26 10:48:38.000000', '2022-04-26 10:49:05.000000');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswaalumni`
--

CREATE TABLE `mahasiswaalumni` (
  `nim` varchar(15) NOT NULL,
  `nama` text NOT NULL,
  `fakultas` text NOT NULL,
  `prodi` text NOT NULL,
  `angkatan` year(4) NOT NULL,
  `lulus` date NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `lokasikerja` text NOT NULL,
  `posisi` text NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswaalumni`
--

INSERT INTO `mahasiswaalumni` (`nim`, `nama`, `fakultas`, `prodi`, `angkatan`, `lulus`, `notelp`, `lokasikerja`, `posisi`, `created_at`, `updated_at`) VALUES
('11420030', 'Samuel Prayoga Tampubolon', 'Vokasi', 'D-IV Teknologi Rekayasa Perangkat Lunak', 2018, '2022-07-30', '082272093950', 'PT Nusantara II', 'Project Manager', '2022-04-21 18:41:57.000000', '2022-04-21 18:42:20.000000');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawaiID` int(13) NOT NULL,
  `nama` text NOT NULL,
  `bagian` text NOT NULL,
  `jabatan` text NOT NULL,
  `pendidikan` text NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(14) NOT NULL DEFAULT '0',
  `aktifstart` date NOT NULL,
  `aktifend` date NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`pegawaiID`, `nama`, `bagian`, `jabatan`, `pendidikan`, `alamat`, `notelp`, `aktifstart`, `aktifend`, `created_at`, `updated_at`) VALUES
(12345, 'Oka Sianturi', 'Security', 'Koordianator', 'SMA', 'Silalahi Dolok', '081245678901', '2022-04-14', '2022-05-07', '2022-04-26 10:52:52.000000', '2022-04-26 10:52:52.000000');

-- --------------------------------------------------------

--
-- Table structure for table `perumahandalam`
--

CREATE TABLE `perumahandalam` (
  `id` int(11) NOT NULL,
  `namaperumahan` text NOT NULL,
  `namapenghuni` text NOT NULL,
  `jabatan` text NOT NULL,
  `jumlahkamar` varchar(13) NOT NULL,
  `kapasitaskamar` varchar(13) NOT NULL,
  `istri` varchar(13) NOT NULL,
  `anak` varchar(13) NOT NULL,
  `dll` varchar(13) NOT NULL,
  `total` varchar(13) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perumahandalam`
--

INSERT INTO `perumahandalam` (`id`, `namaperumahan`, `namapenghuni`, `jabatan`, `jumlahkamar`, `kapasitaskamar`, `istri`, `anak`, `dll`, `total`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'sdasd', 'sadasd', 'asdasd', '1', '2', '3', '1', '2', '1', 'dasdasd', '2022-04-23 10:42:16.000000', '2022-04-23 10:42:16.000000');

-- --------------------------------------------------------

--
-- Table structure for table `perumahanluar`
--

CREATE TABLE `perumahanluar` (
  `id` int(11) NOT NULL,
  `namaperumahan` text NOT NULL,
  `jumlahkamar` varchar(12) NOT NULL,
  `kapasitaskamar` varchar(12) NOT NULL,
  `jumlah` varchar(12) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perumahanluar`
--

INSERT INTO `perumahanluar` (`id`, `namaperumahan`, `jumlahkamar`, `kapasitaskamar`, `jumlah`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Villa Tambunan No. 3', '2', '2', '4', 'Dosen keluarga (Arie)', '2022-04-23 11:05:54.000000', '2022-04-23 11:23:13.000000');

-- --------------------------------------------------------

--
-- Table structure for table `rusun3`
--

CREATE TABLE `rusun3` (
  `id` int(11) NOT NULL,
  `nomorkamar` varchar(50) NOT NULL,
  `namapenghuni` text DEFAULT NULL,
  `jabatan` text DEFAULT NULL,
  `jumlahkamar` int(11) DEFAULT NULL,
  `kapasitaskamar` int(11) DEFAULT NULL,
  `istri` int(11) DEFAULT NULL,
  `anak` int(11) DEFAULT NULL,
  `dll` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rusun3`
--

INSERT INTO `rusun3` (`id`, `nomorkamar`, `namapenghuni`, `jabatan`, `jumlahkamar`, `kapasitaskamar`, `istri`, `anak`, `dll`, `total`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Kamar 01', 'Togu', 'Dosen', 1, 2, 0, 0, 0, 1, 'Belum Menikah', NULL, '2022-04-25 00:52:29.000000'),
(2, 'Kamar 02', 'Fidelis', 'HRD dan Legal', 1, 2, 0, 0, 0, 1, 'Menikah', '2022-04-25 00:48:13.000000', '2022-04-25 00:52:38.000000'),
(3, 'Kamar 03', 'Devis', 'Dosen', 1, 2, 0, 0, 0, 1, 'Belum Menikah', '2022-04-25 06:36:01.000000', '2022-04-25 06:36:01.000000'),
(4, 'Kamar 04', 'Jojo', 'Staff Radio', 1, 2, 0, 0, 0, 1, 'Belum Menikah', '2022-04-25 06:36:39.000000', '2022-04-25 06:36:39.000000'),
(6, 'Kamar 06', 'Anggiat', 'Staff BAAK', 1, 2, 0, 0, 0, 1, 'Belum Menikah', '2022-04-25 06:40:14.000000', '2022-04-25 06:40:14.000000');

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `stafID` int(11) NOT NULL,
  `namastaf` text NOT NULL,
  `bagian` text NOT NULL,
  `jabatan` text NOT NULL,
  `pendidikan` text NOT NULL,
  `aktifstart` date DEFAULT NULL,
  `aktifend` date DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asistendosen`
--
ALTER TABLE `asistendosen`
  ADD PRIMARY KEY (`asdosID`);

--
-- Indexes for table `asrama`
--
ALTER TABLE `asrama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispalattulis`
--
ALTER TABLE `dispalattulis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispaudio`
--
ALTER TABLE `dispaudio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispjaringan`
--
ALTER TABLE `dispjaringan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `displab`
--
ALTER TABLE `displab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispmaintanance`
--
ALTER TABLE `dispmaintanance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispmebeler`
--
ALTER TABLE `dispmebeler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispperalatan`
--
ALTER TABLE `dispperalatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disppersediaan`
--
ALTER TABLE `disppersediaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disptaman`
--
ALTER TABLE `disptaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosenaktif`
--
ALTER TABLE `dosenaktif`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `dosentugas`
--
ALTER TABLE `dosentugas`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `ipk`
--
ALTER TABLE `ipk`
  ADD PRIMARY KEY (`ipk_id`);

--
-- Indexes for table `kantin`
--
ALTER TABLE `kantin`
  ADD PRIMARY KEY (`kantinID`);

--
-- Indexes for table `kapasitasruangankelas`
--
ALTER TABLE `kapasitasruangankelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keasramaan`
--
ALTER TABLE `keasramaan`
  ADD PRIMARY KEY (`keasramaanID`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `noplat` (`noplat`);

--
-- Indexes for table `komputer`
--
ALTER TABLE `komputer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lalattulis`
--
ALTER TABLE `lalattulis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laudiovisual`
--
ALTER TABLE `laudiovisual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listgedung`
--
ALTER TABLE `listgedung`
  ADD PRIMARY KEY (`gedungid`);

--
-- Indexes for table `ljaringan`
--
ALTER TABLE `ljaringan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `llab`
--
ALTER TABLE `llab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lmaintanance`
--
ALTER TABLE `lmaintanance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lmebeler`
--
ALTER TABLE `lmebeler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lperalatan`
--
ALTER TABLE `lperalatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lpersediaan`
--
ALTER TABLE `lpersediaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ltaman`
--
ALTER TABLE `ltaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswaaktif`
--
ALTER TABLE `mahasiswaaktif`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mahasiswaalumni`
--
ALTER TABLE `mahasiswaalumni`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawaiID`);

--
-- Indexes for table `perumahandalam`
--
ALTER TABLE `perumahandalam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perumahanluar`
--
ALTER TABLE `perumahanluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rusun3`
--
ALTER TABLE `rusun3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`stafID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asrama`
--
ALTER TABLE `asrama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dispalattulis`
--
ALTER TABLE `dispalattulis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dispaudio`
--
ALTER TABLE `dispaudio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dispjaringan`
--
ALTER TABLE `dispjaringan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `displab`
--
ALTER TABLE `displab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dispmaintanance`
--
ALTER TABLE `dispmaintanance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dispmebeler`
--
ALTER TABLE `dispmebeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dispperalatan`
--
ALTER TABLE `dispperalatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `disppersediaan`
--
ALTER TABLE `disppersediaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `disptaman`
--
ALTER TABLE `disptaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ipk`
--
ALTER TABLE `ipk`
  MODIFY `ipk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kantin`
--
ALTER TABLE `kantin`
  MODIFY `kantinID` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komputer`
--
ALTER TABLE `komputer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lalattulis`
--
ALTER TABLE `lalattulis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laudiovisual`
--
ALTER TABLE `laudiovisual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ljaringan`
--
ALTER TABLE `ljaringan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `llab`
--
ALTER TABLE `llab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lmaintanance`
--
ALTER TABLE `lmaintanance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lmebeler`
--
ALTER TABLE `lmebeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lperalatan`
--
ALTER TABLE `lperalatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lpersediaan`
--
ALTER TABLE `lpersediaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ltaman`
--
ALTER TABLE `ltaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `perumahandalam`
--
ALTER TABLE `perumahandalam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perumahanluar`
--
ALTER TABLE `perumahanluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rusun3`
--
ALTER TABLE `rusun3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 03:04 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(10) UNSIGNED NOT NULL,
  `id_peg` int(10) UNSIGNED NOT NULL,
  `nama_anak` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lair` date DEFAULT NULL,
  `jns_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pdd` int(10) UNSIGNED NOT NULL,
  `sts_tunjangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sts_menikah` enum('Menikah','Belum menikah') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id_anak`, `id_peg`, `nama_anak`, `t_lahir`, `tgl_lair`, `jns_kelamin`, `kode_pdd`, `sts_tunjangan`, `sts_menikah`, `ket`, `created_at`, `updated_at`) VALUES
(1, 14, 'Saiful', 'Mns. ketapang', '2019-12-17', 'P', 1, 'Iya', 'Menikah', NULL, NULL, NULL),
(2, 14, 'Reza', 'Lhoksukon', '2019-12-11', 'L', 1, 'Tidak', 'Belum menikah', 'Ket', NULL, NULL),
(3, 17, 'anak1', 'asa', '2019-12-01', 'L', 1, 'Tidak', 'Menikah', '222', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `istri_suami`
--

CREATE TABLE `istri_suami` (
  `id_istrisuami` int(10) UNSIGNED NOT NULL,
  `id_peg` int(10) UNSIGNED NOT NULL,
  `nama_istri_suami` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jns_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pdd` int(10) UNSIGNED DEFAULT NULL,
  `sts_tunjangan` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_menikah` date NOT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `istri_suami`
--

INSERT INTO `istri_suami` (`id_istrisuami`, `id_peg`, `nama_istri_suami`, `t_lahir`, `tgl_lahir`, `jns_kelamin`, `kode_pdd`, `sts_tunjangan`, `tgl_menikah`, `ket`, `created_at`, `updated_at`) VALUES
(3, 14, 'istri', 'aron', '2019-12-16', 'P', 1, 'Ya', '2019-12-19', 'ket', NULL, NULL),
(4, 16, 'nunun', 'lsm', '2019-12-17', 'P', 2, 'Ya', '2019-12-01', 'samawa', NULL, NULL),
(5, 17, 'dia', 'lsm', '2019-12-01', 'P', 1, 'Ya', '2019-12-01', '111', NULL, NULL),
(6, 16, 'google', 'asas', '2019-12-09', 'P', 1, 'Tidak', '2019-12-01', 'aaaa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000001_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_04_124205_create_pensiun', 1),
(4, '2019_08_04_122203_create_unit_kerja', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_09_04_115624_create_tm_agama', 1),
(7, '2019_09_04_120025_create_tm_pendidikan', 1),
(8, '2019_09_04_120156_create_tm_golongan', 1),
(9, '2019_09_04_120322_create_tm_diklat', 1),
(10, '2019_09_04_120515_create_tm_jabatanstruktural', 1),
(11, '2019_09_04_120755_create_tm_jabatanf', 1),
(12, '2019_09_04_120937_create_tm_jabatanft', 1),
(13, '2019_09_04_121127_create_tm_gapok', 1),
(14, '2019_09_04_121716_create_tm_ppkenaikangaji', 1),
(15, '2019_09_04_122022_create_tm_satuanorganisasi', 1),
(16, '2019_09_11_126707_create_pegawai', 1),
(17, '2019_09_12_115229_create_riwayat_organisasi', 1),
(18, '2019_12_04_013926_create_ciri_fisik', 1),
(19, '2019_12_04_014322_create_alamat', 1),
(20, '2019_12_04_014840_create_pendidikan', 1),
(21, '2019_12_04_015214_create_istri_suami', 1),
(22, '2019_12_04_015859_create_anak', 1),
(23, '2019_12_04_020801_create_orangtua', 1),
(24, '2019_12_04_021147_create_mertua', 1),
(25, '2019_12_04_103653_create_saudara', 1),
(26, '2019_12_04_103926_create_riwayat_satuankerja', 1),
(27, '2019_12_04_104350_create_riwayat_stskepeg', 1),
(28, '2019_12_04_104851_create_riwayat_pangkat', 1),
(29, '2019_12_04_105306_create_riwayat_gapok', 1),
(30, '2019_12_04_105551_create_riwayat_jabatan', 1),
(31, '2019_12_04_105837_create_riwayat_jabatanfungsional', 1),
(32, '2019_12_04_110026_create_riwayat_jabatanftambahan', 1),
(33, '2019_12_04_110215_create_riwayat_diklat', 1),
(34, '2019_12_04_112317_create_penghargaan', 1),
(35, '2019_12_04_112650_create_kunjungan_luarnegeri', 1),
(36, '2019_12_04_113123_create_riwayat_indisipliner', 1),
(37, '2019_12_04_122452_create_naik_pangkat', 1),
(38, '2019_12_04_123442_create_naik_kgb', 1),
(39, '2019_12_04_125707_create_hubungi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `naik_kgb`
--

CREATE TABLE `naik_kgb` (
  `id_naikkgb` int(10) UNSIGNED NOT NULL,
  `id_peg` int(10) UNSIGNED NOT NULL,
  `no_sklama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sklama` date DEFAULT NULL,
  `pejabat_sklama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_lama` date NOT NULL,
  `no_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sk` date DEFAULT NULL,
  `pejabat_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gapok_lama` double NOT NULL,
  `mk_lama` int(11) NOT NULL,
  `kode_gapok` int(10) UNSIGNED NOT NULL,
  `tmt_baru` date NOT NULL,
  `naik_selanjutnya` date NOT NULL,
  `ket` enum('Belum diproses','Proses','Disetujui','Ditolak') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `naik_kgb`
--

INSERT INTO `naik_kgb` (`id_naikkgb`, `id_peg`, `no_sklama`, `tgl_sklama`, `pejabat_sklama`, `tmt_lama`, `no_sk`, `tgl_sk`, `pejabat_sk`, `gapok_lama`, `mk_lama`, `kode_gapok`, `tmt_baru`, `naik_selanjutnya`, `ket`, `created_at`, `updated_at`) VALUES
(2, 14, 'asd/P02/DS', '2019-12-11', 'asas', '2019-12-11', 'ADDD/23C', '2019-12-20', 'Syahrul', 29000000, 23123, 2, '2019-12-10', '2019-12-31', 'Disetujui', NULL, NULL),
(3, 14, 'sklama', '2019-12-03', 'asas', '2019-12-03', 'dfsdf', '2019-12-02', 'dfsd', 123123, 23234, 1, '2019-12-03', '2019-12-11', 'Disetujui', NULL, NULL),
(4, 16, 'asas', '2019-12-18', 'dfd/kl', '2019-12-10', 'xzxzxc', '2019-12-11', 'asna', 3400000, 2019, 2, '2019-12-10', '2019-12-10', 'Proses', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `naik_pangkat`
--

CREATE TABLE `naik_pangkat` (
  `id_naikpangkat` int(10) UNSIGNED NOT NULL,
  `id_peg` int(10) UNSIGNED NOT NULL,
  `no_surat_usul` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_surat_usul` date DEFAULT NULL,
  `no_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sk` date DEFAULT NULL,
  `pejabat_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mk_tahun` int(11) NOT NULL,
  `mk_bulan` int(11) NOT NULL,
  `kode_gol` int(10) UNSIGNED NOT NULL,
  `tmt_baru` date NOT NULL,
  `gapok_baru` double NOT NULL,
  `gapok_terbilang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naik_selanjutnya` date NOT NULL,
  `ket` enum('Belum diproses','Proses','Disetujui','Ditolak') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE `orangtua` (
  `id_ortu` int(10) UNSIGNED NOT NULL,
  `id_peg` int(10) UNSIGNED NOT NULL,
  `nama_ortu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jns_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orangtua`
--

INSERT INTO `orangtua` (`id_ortu`, `id_peg`, `nama_ortu`, `t_lahir`, `tgl_lahir`, `jns_kelamin`, `alamat`, `pekerjaan`, `ket`, `created_at`, `updated_at`) VALUES
(1, 17, 'asavv', 'sddf', '2019-12-01', 'L', 'dsadasd', 'sdasd', 'asdasd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_peg` int(10) UNSIGNED NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_lama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jns_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_agama` int(10) UNSIGNED DEFAULT NULL,
  `sts_marital` enum('Menikah','Belum menikah') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pdd` int(10) UNSIGNED DEFAULT NULL,
  `nama_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_sttb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar_depan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar_belakang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sts_pegawai` enum('Aktif','Tidak aktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `kode_gol` int(10) UNSIGNED DEFAULT NULL,
  `tmt` date DEFAULT NULL,
  `kode_jbts` int(10) UNSIGNED DEFAULT NULL,
  `tmt_jab` date DEFAULT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_peg`, `nip`, `nama`, `nip_lama`, `t_lahir`, `tgl_lahir`, `jns_kelamin`, `kode_agama`, `sts_marital`, `kode_pdd`, `nama_sekolah`, `tahun_sttb`, `gelar_depan`, `gelar_belakang`, `hobi`, `sts_pegawai`, `id_user`, `kode_gol`, `tmt`, `kode_jbts`, `tmt_jab`, `no_telp`, `foto`, `created_at`, `updated_at`) VALUES
(13, '111111', 'sdasd', '8678678', 'asdasd', '2019-12-04', 'L', 1, NULL, 1, 'fdgdfg', '23234', '456456', '67567567', 'sdfsdf', 'Aktif', 1, NULL, '2019-12-02', 1, '2019-12-04', '344234', '111111.png', NULL, NULL),
(14, '34555555555555', 'asdas', '23123', 'asdasd', '2019-12-03', 'P', 2, 'Belum menikah', 1, 'dsfsdf', '23423', 'dfsdf', 'sdfsdf', 'dsdfsdf', 'Aktif', 1, NULL, '2019-11-25', 1, '2019-12-04', '4234234', '34555555555555.png', NULL, NULL),
(16, '11111111123', 'aisyaah', '2323', 'lsm', '2019-12-02', 'P', 1, 'Menikah', 1, 'SMK', '2019', 'mm', 'md', 'asasa', 'Tidak aktif', 2, NULL, '2019-12-18', 1, '2019-12-13', '121212', '11111111123.JPG', NULL, NULL),
(17, '1212', 'sdfsdf', '34234234', 'dssdf', '2019-11-24', 'L', 1, 'Menikah', 1, 'dfsdf', '3423423', 'dsfsdf', 'sdfsdf', 'dsfsdf', 'Tidak aktif', 1, NULL, '2019-12-01', 1, '2019-12-05', '324234', '1212.png', NULL, NULL),
(18, '98888', '988888', '9888', '9888', '2019-12-09', 'L', 2, 'Belum menikah', 2, '98888', '988888', '988', '988888', '9888888888', 'Aktif', 2, NULL, '2019-12-09', 1, '2019-12-09', '988888', '98888.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pdd` int(10) UNSIGNED NOT NULL,
  `id_peg` int(10) UNSIGNED NOT NULL,
  `kode_pdd` int(10) UNSIGNED NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_sttb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `th_sttb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_diklat`
--

CREATE TABLE `riwayat_diklat` (
  `id_diklat` int(10) UNSIGNED NOT NULL,
  `id_peg` int(10) UNSIGNED NOT NULL,
  `kode_diklat` int(10) UNSIGNED NOT NULL,
  `nama_diklat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `no_sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thn_sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyelenggara` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_gapok`
--

CREATE TABLE `riwayat_gapok` (
  `id_gapok` int(10) UNSIGNED NOT NULL,
  `id_peg` int(10) UNSIGNED NOT NULL,
  `no_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sk` date DEFAULT NULL,
  `pejabat_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_gapok` int(10) UNSIGNED NOT NULL,
  `tmt` date NOT NULL,
  `naik_selanjutnya` date NOT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_indisipliner`
--

CREATE TABLE `riwayat_indisipliner` (
  `id_hukuman` int(10) UNSIGNED NOT NULL,
  `id_peg` int(10) UNSIGNED NOT NULL,
  `hukuman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sk` date DEFAULT NULL,
  `pejabat_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat_indisipliner`
--

INSERT INTO `riwayat_indisipliner` (`id_hukuman`, `id_peg`, `hukuman`, `no_sk`, `tgl_sk`, `pejabat_sk`, `ket`, `created_at`, `updated_at`) VALUES
(3, 16, 'hukuman', 'sk', '2019-12-10', 'asas', 'sadasd', '2019-12-14 19:34:29', '2019-12-14 19:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_jabatan`
--

CREATE TABLE `riwayat_jabatan` (
  `id_jabatan` int(10) UNSIGNED NOT NULL,
  `id_peg` int(10) UNSIGNED NOT NULL,
  `no_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sk` date DEFAULT NULL,
  `pejabat_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_jbts` int(10) UNSIGNED NOT NULL,
  `tmt` date NOT NULL,
  `kode_gol` int(10) UNSIGNED NOT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_jabatanftambahan`
--

CREATE TABLE `riwayat_jabatanftambahan` (
  `id_jbtft` int(10) UNSIGNED NOT NULL,
  `id_peg` int(10) UNSIGNED NOT NULL,
  `no_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sk` date DEFAULT NULL,
  `pejabat_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_jbtft` int(10) UNSIGNED NOT NULL,
  `tmt` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat_jabatanftambahan`
--

INSERT INTO `riwayat_jabatanftambahan` (`id_jbtft`, `id_peg`, `no_sk`, `tgl_sk`, `pejabat_sk`, `kode_jbtft`, `tmt`, `created_at`, `updated_at`) VALUES
(1, 16, '22223/KK/90', '2019-12-02', '2nama pejabat pengesah sk', 1, '2019-12-02', NULL, NULL),
(3, 17, '2111111111', '2019-12-02', '211111111111', 1, '2019-12-02', '2019-12-15 10:09:42', '2019-12-15 10:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_jabatanfungsional`
--

CREATE TABLE `riwayat_jabatanfungsional` (
  `id_jabatanf` int(10) UNSIGNED NOT NULL,
  `id_peg` int(10) UNSIGNED NOT NULL,
  `no_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sk` date DEFAULT NULL,
  `pejabat_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_jbtf` int(10) UNSIGNED NOT NULL,
  `tmt` date NOT NULL,
  `kode_gol` int(10) UNSIGNED NOT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tm_agama`
--

CREATE TABLE `tm_agama` (
  `kode_agama` int(10) UNSIGNED NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_agama`
--

INSERT INTO `tm_agama` (`kode_agama`, `agama`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'islam', NULL, NULL, NULL),
(2, 'kristen', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tm_diklat`
--

CREATE TABLE `tm_diklat` (
  `kode_diklat` int(10) UNSIGNED NOT NULL,
  `jenis_diklat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_diklat`
--

INSERT INTO `tm_diklat` (`kode_diklat`, `jenis_diklat`, `created_at`, `updated_at`) VALUES
(1, 'diklat 1', NULL, NULL),
(2, 'diklat 2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tm_gapok`
--

CREATE TABLE `tm_gapok` (
  `kode_gapok` int(10) UNSIGNED NOT NULL,
  `masa_kerja` int(11) NOT NULL,
  `PP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_gol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gapok` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_gapok`
--

INSERT INTO `tm_gapok` (`kode_gapok`, `masa_kerja`, `PP`, `kode_gol`, `gapok`, `created_at`, `updated_at`) VALUES
(1, 2019, 'Peraturan Pemerintah', 'III/D', 2500000, NULL, NULL),
(2, 2020, 'sdsd', '1212', 1500000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tm_golongan`
--

CREATE TABLE `tm_golongan` (
  `kode_gol` int(10) UNSIGNED NOT NULL,
  `pangkat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_golongan`
--

INSERT INTO `tm_golongan` (`kode_gol`, `pangkat`, `created_at`, `updated_at`) VALUES
(1, 'Pengatur', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tm_jabatanf`
--

CREATE TABLE `tm_jabatanf` (
  `kode_jbtf` int(10) UNSIGNED NOT NULL,
  `nama_jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_jabatanf`
--

INSERT INTO `tm_jabatanf` (`kode_jbtf`, `nama_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Ketua Majlis zikir', NULL, NULL),
(2, 'a', '2019-12-15 18:05:32', '2019-12-15 18:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `tm_jabatanft`
--

CREATE TABLE `tm_jabatanft` (
  `kode_jbtft` int(10) UNSIGNED NOT NULL,
  `tugas_tambahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_jabatanft`
--

INSERT INTO `tm_jabatanft` (`kode_jbtft`, `tugas_tambahan`, `created_at`, `updated_at`) VALUES
(1, 'Membuat proyek A', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tm_jabatanstruktural`
--

CREATE TABLE `tm_jabatanstruktural` (
  `kode_jbts` int(10) UNSIGNED NOT NULL,
  `nama_jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_jabatanstruktural`
--

INSERT INTO `tm_jabatanstruktural` (`kode_jbts`, `nama_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Seksi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tm_pendidikan`
--

CREATE TABLE `tm_pendidikan` (
  `kode_pdd` int(10) UNSIGNED NOT NULL,
  `pendidikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_pendidikan`
--

INSERT INTO `tm_pendidikan` (`kode_pdd`, `pendidikan`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'SMA', NULL, NULL, NULL),
(2, 'Kuliah', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','adminpusat','adminunit','kepala','pegawai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Saiful Riza', 'saiful@mail.com', NULL, '$2y$10$ISeGjeqHmTpuyleQS/g8iuKreaUP2dPltSSwzei.2pIXVcKAuVkL2', 'admin', 'mzWNjCuaYbJRhKCePCPtGkU5rtxqik00dsEfzkK5V5tf4KuG5lDsnlvBatS9', '2019-12-04 16:47:39', '2019-12-04 16:47:39'),
(2, 'Azir Lufias', 'azir@mail.com', NULL, '$2y$10$NbZ5KOQ0VobbtBxZuLKslOQtQRLcu1slp6SmusNGKK/m8GgfqCEF6', 'admin', NULL, '2019-12-05 03:08:50', '2019-12-05 03:08:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`),
  ADD KEY `anak_id_peg_foreign` (`id_peg`),
  ADD KEY `anak_kode_pdd_foreign` (`kode_pdd`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `istri_suami`
--
ALTER TABLE `istri_suami`
  ADD PRIMARY KEY (`id_istrisuami`),
  ADD KEY `istri_suami_id_peg_foreign` (`id_peg`),
  ADD KEY `istri_suami_kode_pdd_foreign` (`kode_pdd`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `naik_kgb`
--
ALTER TABLE `naik_kgb`
  ADD PRIMARY KEY (`id_naikkgb`),
  ADD KEY `naik_kgb_id_peg_foreign` (`id_peg`),
  ADD KEY `naik_kgb_kode_gapok_foreign` (`kode_gapok`);

--
-- Indexes for table `naik_pangkat`
--
ALTER TABLE `naik_pangkat`
  ADD PRIMARY KEY (`id_naikpangkat`),
  ADD KEY `naik_pangkat_id_peg_foreign` (`id_peg`),
  ADD KEY `naik_pangkat_kode_gol_foreign` (`kode_gol`);

--
-- Indexes for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`id_ortu`),
  ADD KEY `orangtua_id_peg_foreign` (`id_peg`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_peg`),
  ADD KEY `pegawai_kode_agama_foreign` (`kode_agama`),
  ADD KEY `pegawai_kode_pdd_foreign` (`kode_pdd`),
  ADD KEY `pegawai_id_user_foreign` (`id_user`),
  ADD KEY `pegawai_kode_gol_foreign` (`kode_gol`),
  ADD KEY `pegawai_kode_jbts_foreign` (`kode_jbts`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pdd`),
  ADD KEY `pendidikan_id_peg_foreign` (`id_peg`),
  ADD KEY `pendidikan_kode_pdd_foreign` (`kode_pdd`);

--
-- Indexes for table `riwayat_diklat`
--
ALTER TABLE `riwayat_diklat`
  ADD PRIMARY KEY (`id_diklat`),
  ADD KEY `riwayat_diklat_id_peg_foreign` (`id_peg`),
  ADD KEY `riwayat_diklat_kode_diklat_foreign` (`kode_diklat`);

--
-- Indexes for table `riwayat_gapok`
--
ALTER TABLE `riwayat_gapok`
  ADD PRIMARY KEY (`id_gapok`),
  ADD KEY `riwayat_gapok_id_peg_foreign` (`id_peg`),
  ADD KEY `riwayat_gapok_kode_gapok_foreign` (`kode_gapok`);

--
-- Indexes for table `riwayat_indisipliner`
--
ALTER TABLE `riwayat_indisipliner`
  ADD PRIMARY KEY (`id_hukuman`),
  ADD KEY `riwayat_indisipliner_id_peg_foreign` (`id_peg`);

--
-- Indexes for table `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `riwayat_jabatan_id_peg_foreign` (`id_peg`),
  ADD KEY `riwayat_jabatan_kode_gol_foreign` (`kode_gol`),
  ADD KEY `riwayat_jabatan_kode_jbts_foreign` (`kode_jbts`);

--
-- Indexes for table `riwayat_jabatanftambahan`
--
ALTER TABLE `riwayat_jabatanftambahan`
  ADD PRIMARY KEY (`id_jbtft`),
  ADD KEY `riwayat_jabatanftambahan_id_peg_foreign` (`id_peg`),
  ADD KEY `riwayat_jabatanftambahan_kode_jbtf_foreign` (`kode_jbtft`);

--
-- Indexes for table `riwayat_jabatanfungsional`
--
ALTER TABLE `riwayat_jabatanfungsional`
  ADD PRIMARY KEY (`id_jabatanf`),
  ADD KEY `riwayat_jabatanfungsional_id_peg_foreign` (`id_peg`),
  ADD KEY `riwayat_jabatanfungsional_kode_gol_foreign` (`kode_gol`),
  ADD KEY `riwayat_jabatanfungsional_kode_jbtf_foreign` (`kode_jbtf`);

--
-- Indexes for table `tm_agama`
--
ALTER TABLE `tm_agama`
  ADD PRIMARY KEY (`kode_agama`);

--
-- Indexes for table `tm_diklat`
--
ALTER TABLE `tm_diklat`
  ADD PRIMARY KEY (`kode_diklat`);

--
-- Indexes for table `tm_gapok`
--
ALTER TABLE `tm_gapok`
  ADD PRIMARY KEY (`kode_gapok`);

--
-- Indexes for table `tm_golongan`
--
ALTER TABLE `tm_golongan`
  ADD PRIMARY KEY (`kode_gol`);

--
-- Indexes for table `tm_jabatanf`
--
ALTER TABLE `tm_jabatanf`
  ADD PRIMARY KEY (`kode_jbtf`);

--
-- Indexes for table `tm_jabatanft`
--
ALTER TABLE `tm_jabatanft`
  ADD PRIMARY KEY (`kode_jbtft`);

--
-- Indexes for table `tm_jabatanstruktural`
--
ALTER TABLE `tm_jabatanstruktural`
  ADD PRIMARY KEY (`kode_jbts`);

--
-- Indexes for table `tm_pendidikan`
--
ALTER TABLE `tm_pendidikan`
  ADD PRIMARY KEY (`kode_pdd`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `istri_suami`
--
ALTER TABLE `istri_suami`
  MODIFY `id_istrisuami` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `naik_kgb`
--
ALTER TABLE `naik_kgb`
  MODIFY `id_naikkgb` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `naik_pangkat`
--
ALTER TABLE `naik_pangkat`
  MODIFY `id_naikpangkat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `id_ortu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_peg` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pdd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_diklat`
--
ALTER TABLE `riwayat_diklat`
  MODIFY `id_diklat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `riwayat_gapok`
--
ALTER TABLE `riwayat_gapok`
  MODIFY `id_gapok` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `riwayat_indisipliner`
--
ALTER TABLE `riwayat_indisipliner`
  MODIFY `id_hukuman` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  MODIFY `id_jabatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `riwayat_jabatanftambahan`
--
ALTER TABLE `riwayat_jabatanftambahan`
  MODIFY `id_jbtft` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayat_jabatanfungsional`
--
ALTER TABLE `riwayat_jabatanfungsional`
  MODIFY `id_jabatanf` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tm_agama`
--
ALTER TABLE `tm_agama`
  MODIFY `kode_agama` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tm_diklat`
--
ALTER TABLE `tm_diklat`
  MODIFY `kode_diklat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tm_gapok`
--
ALTER TABLE `tm_gapok`
  MODIFY `kode_gapok` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tm_golongan`
--
ALTER TABLE `tm_golongan`
  MODIFY `kode_gol` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tm_jabatanf`
--
ALTER TABLE `tm_jabatanf`
  MODIFY `kode_jbtf` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tm_jabatanft`
--
ALTER TABLE `tm_jabatanft`
  MODIFY `kode_jbtft` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tm_jabatanstruktural`
--
ALTER TABLE `tm_jabatanstruktural`
  MODIFY `kode_jbts` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tm_pendidikan`
--
ALTER TABLE `tm_pendidikan`
  MODIFY `kode_pdd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anak`
--
ALTER TABLE `anak`
  ADD CONSTRAINT `anak_id_peg_foreign` FOREIGN KEY (`id_peg`) REFERENCES `pegawai` (`id_peg`) ON DELETE CASCADE,
  ADD CONSTRAINT `anak_kode_pdd_foreign` FOREIGN KEY (`kode_pdd`) REFERENCES `tm_pendidikan` (`kode_pdd`) ON DELETE CASCADE;

--
-- Constraints for table `istri_suami`
--
ALTER TABLE `istri_suami`
  ADD CONSTRAINT `istri_suami_id_peg_foreign` FOREIGN KEY (`id_peg`) REFERENCES `pegawai` (`id_peg`) ON DELETE CASCADE,
  ADD CONSTRAINT `istri_suami_kode_pdd_foreign` FOREIGN KEY (`kode_pdd`) REFERENCES `tm_pendidikan` (`kode_pdd`) ON DELETE CASCADE;

--
-- Constraints for table `naik_kgb`
--
ALTER TABLE `naik_kgb`
  ADD CONSTRAINT `naik_kgb_id_peg_foreign` FOREIGN KEY (`id_peg`) REFERENCES `pegawai` (`id_peg`) ON DELETE CASCADE,
  ADD CONSTRAINT `naik_kgb_kode_gapok_foreign` FOREIGN KEY (`kode_gapok`) REFERENCES `tm_gapok` (`kode_gapok`) ON DELETE CASCADE;

--
-- Constraints for table `naik_pangkat`
--
ALTER TABLE `naik_pangkat`
  ADD CONSTRAINT `naik_pangkat_id_peg_foreign` FOREIGN KEY (`id_peg`) REFERENCES `pegawai` (`id_peg`) ON DELETE CASCADE,
  ADD CONSTRAINT `naik_pangkat_kode_gol_foreign` FOREIGN KEY (`kode_gol`) REFERENCES `tm_golongan` (`kode_gol`) ON DELETE CASCADE;

--
-- Constraints for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD CONSTRAINT `orangtua_id_peg_foreign` FOREIGN KEY (`id_peg`) REFERENCES `pegawai` (`id_peg`) ON DELETE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pegawai_kode_agama_foreign` FOREIGN KEY (`kode_agama`) REFERENCES `tm_agama` (`kode_agama`) ON DELETE CASCADE,
  ADD CONSTRAINT `pegawai_kode_gol_foreign` FOREIGN KEY (`kode_gol`) REFERENCES `tm_golongan` (`kode_gol`) ON DELETE CASCADE,
  ADD CONSTRAINT `pegawai_kode_jbts_foreign` FOREIGN KEY (`kode_jbts`) REFERENCES `tm_jabatanstruktural` (`kode_jbts`) ON DELETE CASCADE,
  ADD CONSTRAINT `pegawai_kode_pdd_foreign` FOREIGN KEY (`kode_pdd`) REFERENCES `tm_pendidikan` (`kode_pdd`) ON DELETE CASCADE;

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_id_peg_foreign` FOREIGN KEY (`id_peg`) REFERENCES `pegawai` (`id_peg`) ON DELETE CASCADE,
  ADD CONSTRAINT `pendidikan_kode_pdd_foreign` FOREIGN KEY (`kode_pdd`) REFERENCES `tm_pendidikan` (`kode_pdd`) ON DELETE CASCADE;

--
-- Constraints for table `riwayat_diklat`
--
ALTER TABLE `riwayat_diklat`
  ADD CONSTRAINT `riwayat_diklat_id_peg_foreign` FOREIGN KEY (`id_peg`) REFERENCES `pegawai` (`id_peg`) ON DELETE CASCADE,
  ADD CONSTRAINT `riwayat_diklat_kode_diklat_foreign` FOREIGN KEY (`kode_diklat`) REFERENCES `tm_diklat` (`kode_diklat`) ON DELETE CASCADE;

--
-- Constraints for table `riwayat_gapok`
--
ALTER TABLE `riwayat_gapok`
  ADD CONSTRAINT `riwayat_gapok_id_peg_foreign` FOREIGN KEY (`id_peg`) REFERENCES `pegawai` (`id_peg`) ON DELETE CASCADE,
  ADD CONSTRAINT `riwayat_gapok_kode_gapok_foreign` FOREIGN KEY (`kode_gapok`) REFERENCES `tm_gapok` (`kode_gapok`) ON DELETE CASCADE;

--
-- Constraints for table `riwayat_indisipliner`
--
ALTER TABLE `riwayat_indisipliner`
  ADD CONSTRAINT `riwayat_indisipliner_id_peg_foreign` FOREIGN KEY (`id_peg`) REFERENCES `pegawai` (`id_peg`) ON DELETE CASCADE;

--
-- Constraints for table `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  ADD CONSTRAINT `riwayat_jabatan_id_peg_foreign` FOREIGN KEY (`id_peg`) REFERENCES `pegawai` (`id_peg`) ON DELETE CASCADE,
  ADD CONSTRAINT `riwayat_jabatan_kode_gol_foreign` FOREIGN KEY (`kode_gol`) REFERENCES `tm_golongan` (`kode_gol`) ON DELETE CASCADE,
  ADD CONSTRAINT `riwayat_jabatan_kode_jbts_foreign` FOREIGN KEY (`kode_jbts`) REFERENCES `tm_jabatanstruktural` (`kode_jbts`) ON DELETE CASCADE;

--
-- Constraints for table `riwayat_jabatanftambahan`
--
ALTER TABLE `riwayat_jabatanftambahan`
  ADD CONSTRAINT `riwayat_jabatanftambahan_id_peg_foreign` FOREIGN KEY (`id_peg`) REFERENCES `pegawai` (`id_peg`) ON DELETE CASCADE,
  ADD CONSTRAINT `riwayat_jabatanftambahan_kode_jbtf_foreign` FOREIGN KEY (`kode_jbtft`) REFERENCES `tm_jabatanft` (`kode_jbtft`) ON DELETE CASCADE;

--
-- Constraints for table `riwayat_jabatanfungsional`
--
ALTER TABLE `riwayat_jabatanfungsional`
  ADD CONSTRAINT `riwayat_jabatanfungsional_id_peg_foreign` FOREIGN KEY (`id_peg`) REFERENCES `pegawai` (`id_peg`) ON DELETE CASCADE,
  ADD CONSTRAINT `riwayat_jabatanfungsional_kode_gol_foreign` FOREIGN KEY (`kode_gol`) REFERENCES `tm_golongan` (`kode_gol`) ON DELETE CASCADE,
  ADD CONSTRAINT `riwayat_jabatanfungsional_kode_jbtf_foreign` FOREIGN KEY (`kode_jbtf`) REFERENCES `tm_jabatanf` (`kode_jbtf`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

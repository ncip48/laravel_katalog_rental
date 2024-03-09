-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2024 at 08:22 AM
-- Server version: 8.1.0
-- PHP Version: 8.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gedung`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `nama`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Mandiri', 'mandiri.png', '2022-10-22 08:29:57', NULL),
(2, 'BCA', 'bca.png', '2022-10-22 08:29:57', NULL),
(3, 'BNI', 'bni.png', '2022-10-22 08:29:57', NULL),
(4, 'BRI', 'bri.png', '2022-10-22 08:29:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran`
--

CREATE TABLE `bukti_pembayaran` (
  `id` bigint UNSIGNED NOT NULL,
  `id_reservasi` int NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukti_pembayaran`
--

INSERT INTO `bukti_pembayaran` (`id`, `id_reservasi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 68, '/img/bukti/1666438174.png', '2022-10-22 09:29:35', '2022-10-22 09:29:35'),
(2, 69, '/img/bukti/1666438447.png', '2022-10-22 09:34:07', '2022-10-22 09:34:07'),
(3, 71, '/img/bukti/1666438617.jpeg', '2022-10-22 09:36:57', '2022-10-22 09:36:57'),
(4, 73, '/img/bukti/1666449142.jpg', '2022-10-22 12:32:22', '2022-10-22 12:32:22'),
(5, 75, '/img/bukti/1668670702.jpg', '2022-11-17 06:38:22', '2022-11-17 06:38:22'),
(6, 76, '/img/bukti/1668872891.jpg', '2022-11-19 14:48:11', '2022-11-19 14:48:11'),
(7, 77, '/img/bukti/1670668247.jpg', '2022-12-10 09:30:48', '2022-12-10 09:30:48'),
(8, 79, '/img/bukti/1671529072.jpg', '2022-12-20 08:37:52', '2022-12-20 08:37:52'),
(9, 80, '/img/bukti/1671691385.jpg', '2022-12-22 05:43:06', '2022-12-22 05:43:06'),
(10, 81, '/img/bukti/1673009370.jpg', '2023-01-06 11:49:31', '2023-01-06 11:49:31'),
(11, 82, '/img/bukti/1673168771.jpeg', '2023-01-08 08:06:11', '2023-01-08 08:06:11'),
(12, 83, '/img/bukti/1673168933.png', '2023-01-08 08:08:53', '2023-01-08 08:08:53'),
(13, 85, '/img/bukti/1677002356.jpg', '2023-02-21 16:59:16', '2023-02-21 16:59:16'),
(14, 86, '/img/bukti/1677065630.jpg', '2023-02-22 10:33:50', '2023-02-22 10:33:50'),
(15, 87, '/img/bukti/1678308715.jpg', '2023-03-08 19:51:55', '2023-03-08 19:51:55'),
(16, 91, '/img/bukti/1706769318.png', '2024-01-31 23:35:18', '2024-01-31 23:35:18'),
(17, 92, '/img/bukti/1706769798.png', '2024-01-31 23:43:18', '2024-01-31 23:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint UNSIGNED NOT NULL,
  `tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `tag`, `url`, `created_at`, `updated_at`) VALUES
(11, '1691085790.jpg', '1691085790.jpg', '2023-08-03 16:03:10', '2023-08-03 16:03:10'),
(12, '1691085797.jpg', '1691085797.jpg', '2023-08-03 16:03:17', '2023-08-03 16:03:17'),
(13, '1691085804.jpg', '1691085804.jpg', '2023-08-03 16:03:24', '2023-08-03 16:03:24'),
(14, '1691085810.jpg', '1691085810.jpg', '2023-08-03 16:03:30', '2023-08-03 16:03:30'),
(15, '1691085819.jpg', '1691085819.jpg', '2023-08-03 16:03:39', '2023-08-03 16:03:39'),
(16, '1691085834.jpg', '1691085834.jpg', '2023-08-03 16:03:54', '2023-08-03 16:03:54'),
(17, '1691085842.jpg', '1691085842.jpg', '2023-08-03 16:04:02', '2023-08-03 16:04:02'),
(18, '1691085848.jpg', '1691085848.jpg', '2023-08-03 16:04:08', '2023-08-03 16:04:08'),
(19, '1691085856.jpg', '1691085856.jpg', '2023-08-03 16:04:16', '2023-08-03 16:04:16'),
(20, '1691085862.jpg', '1691085862.jpg', '2023-08-03 16:04:22', '2023-08-03 16:04:22'),
(21, '1691085872.jpg', '1691085872.jpg', '2023-08-03 16:04:32', '2023-08-03 16:04:32'),
(22, '1691085878.jpg', '1691085878.jpg', '2023-08-03 16:04:38', '2023-08-03 16:04:38'),
(23, '1691085883.jpg', '1691085883.jpg', '2023-08-03 16:04:43', '2023-08-03 16:04:43'),
(24, '1691085890.jpg', '1691085890.jpg', '2023-08-03 16:04:50', '2023-08-03 16:04:50'),
(25, '1691085895.jpg', '1691085895.jpg', '2023-08-03 16:04:55', '2023-08-03 16:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`id`, `nama`, `deskripsi`, `foto`, `harga`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gedung Balitro', '08.00 - 14:00', 'gedung-a.jpg', '7000000', 1, NULL, '2022-08-12 02:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_04_093212_create_gedung_table', 1),
(6, '2022_07_04_093544_create_reservasi_table', 1),
(7, '2022_07_04_094616_create_galeri_table', 1),
(8, '2022_08_10_051559_create_site_table', 1),
(9, '2022_10_22_101201_tambah_kolom_di_reservasi', 2),
(10, '2022_10_22_102319_create_rekening_table', 3),
(11, '2022_10_22_102346_create_bank_table', 3),
(12, '2022_10_22_102626_create_bukti_pembayaran_table', 4),
(13, '2022_12_10_034214_tambah_kolom_di_site', 5),
(15, '2022_12_10_122026_create_pembatalan_table', 6),
(16, '2023_01_08_105106_tambah_kolom_username_di_users', 7),
(17, '2024_02_01_061852_tambah_kolom_keperluan_di_reservasi', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembatalan`
--

CREATE TABLE `pembatalan` (
  `id` bigint UNSIGNED NOT NULL,
  `id_reservasi` int NOT NULL,
  `alasan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembatalan`
--

INSERT INTO `pembatalan` (`id`, `id_reservasi`, `alasan`, `status`, `created_at`, `updated_at`) VALUES
(1, 77, 'Gatau pengen batalin aja', '1', '2022-12-10 11:48:42', '2023-01-06 13:39:30'),
(2, 75, 'Asdfkadfasf', '1', '2022-12-10 11:51:59', '2022-12-10 12:37:16'),
(3, 76, 'test ajahhh', '2', '2022-12-10 11:53:30', '2022-12-10 12:36:01'),
(4, 85, 'xxxxx', '1', '2023-02-21 17:35:33', '2023-06-05 05:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id` bigint UNSIGNED NOT NULL,
  `id_bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `atas_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id`, `id_bank`, `no_rekening`, `atas_nama`, `cabang`, `status`, `created_at`, `updated_at`) VALUES
(1, '4', '005701063854502', 'Guruh', 'Bogor', 'Aktif', '2022-10-22 08:30:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` bigint UNSIGNED NOT NULL,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int DEFAULT '0',
  `id_gedung` int NOT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `snap_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `kode`, `id_user`, `id_gedung`, `total`, `tanggal`, `status`, `nama`, `email`, `no_hp`, `snap_token`, `payment_type`, `id_rekening`, `keperluan`, `created_at`, `updated_at`) VALUES
(73, 'GDG2196', 0, 1, '7000000', '2022-10-22', 1, 'Ibu junaidi', 'al104140401941@gmail.com', '082137889921', NULL, 'bank', '1', NULL, '2022-10-22 12:30:31', '2022-11-14 23:41:44'),
(74, 'GDG6421', 0, 1, '7000000', '2022-11-16', 3, 'Bapak Juned', 'juned@asdf.com', '085156842765', NULL, NULL, NULL, NULL, '2022-11-14 23:00:26', '2022-11-14 23:47:12'),
(75, 'GDG2145', 0, 1, '7000000', '2022-11-18', 3, 'Bapak john lenon', 'john00000000066s@gmail.com', '083178778821', NULL, 'bank', '1', NULL, '2022-11-17 06:37:17', '2022-12-10 12:37:16'),
(76, 'GDG7809', 0, 1, '7000000', '2022-12-15', 1, 'Bapak Loremipsum', 'lorem@mail.com', '9282728919100', NULL, 'bank', '1', NULL, '2022-11-19 14:46:35', '2022-12-20 08:35:35'),
(80, 'GDG4559', 0, 1, '7000000', '2022-12-24', 1, 'Bapak jajang', 'jajang10201201021@gmail.com', '0838178788213', NULL, 'bank', '2', NULL, '2022-12-22 05:42:17', '2022-12-22 05:44:30'),
(82, 'GDG1492', 0, 1, '7000000', '2023-01-25', 1, 'Bapak mung', '828393o@gmal.com', '082112529951', NULL, 'bank', '1', NULL, '2023-01-08 08:05:45', '2023-01-08 08:06:57'),
(83, 'GDG2905', 0, 1, '7000000', '2023-01-31', 1, 'Bapak ridwan kamil', 'asu@gmail.conm', '081312693096', NULL, 'bank', '1', NULL, '2023-01-08 08:08:19', '2023-01-08 08:09:13'),
(84, 'GDG7464', 0, 1, '7000000', '2023-01-09', 0, 'Bapak Bogor Kuy', 'bogorkuy@gmail.com', '085156842765', NULL, NULL, NULL, NULL, '2023-01-08 09:48:38', '2023-01-08 09:48:38'),
(85, 'GDG6313', 0, 1, '7000000', '2023-02-23', 3, 'Bapak Janet Alexander', 'alwanddkentood@gmail.com', '089441888210', NULL, 'bank', '2', NULL, '2023-02-21 16:50:32', '2023-06-05 05:10:39'),
(87, 'GDG6537', 0, 1, '7000000', '2023-03-30', 2, 'Bapak feli', 'jun@131312.com', '08314888821', NULL, 'bank', '2', NULL, '2023-03-08 19:01:16', '2023-03-08 19:33:14'),
(88, 'GDG7743', 0, 1, '7000000', '2023-08-05', 1, 'Bapak Hanya Contoh', 'contoh@gmailzz.com', '082112529951', NULL, 'bank', '1', NULL, '2023-08-03 16:38:52', '2023-08-03 16:53:36'),
(89, 'GDG6968', 0, 1, '7000000', '2024-02-10', 0, 'Bapak fulan', 'fulan@gmail.com', '081902512555', NULL, NULL, NULL, NULL, '2023-11-12 19:16:14', '2023-11-12 19:16:14'),
(91, 'GDG3661', 0, 1, '7000000', '2024-02-03', 1, 'Bapak Goeroeh', 'guruh@konz.com', '081335241314', NULL, 'bank', '1', 'Acara Sekolah', '2024-01-31 23:33:04', '2024-01-31 23:45:55'),
(92, 'GDG3887', 0, 1, '7000000', '2024-02-05', 2, 'Bapak GG', 'gg@gg.com', '081335241314', NULL, 'bank', '1', 'Mencoba ajah mint', '2024-01-31 23:34:07', '2024-01-31 23:41:32'),
(93, 'GDG6797', 0, 1, '7000000', '2024-03-08', 0, 'Bapak Herly Chahya Putra', 'mbahcip00@gmail.com', '081359569879', NULL, NULL, NULL, 'Pernikahan', '2024-03-07 19:20:38', '2024-03-07 19:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sk` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `name`, `address`, `phone`, `email`, `facebook`, `twitter`, `instagram`, `whatsapp`, `description`, `logo`, `favicon`, `about`, `sk`, `created_at`, `updated_at`) VALUES
(1, 'Hall Building Balitro', 'Jl Tentara Pelajar no 3 RT.04/RW.15, Menteng, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16111', '085156842765', 'guruh52480@gmail.com', NULL, NULL, NULL, NULL, 'reservasi sistem', 'kkn.png', '1660276797.png', 'Konten tentang perusahaan', '<p>Konten Tentang Syarat Dan ketentuan</p>', '2022-08-12 01:52:20', '2023-08-03 16:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'admin@gmail.com', '2022-08-12 01:52:20', '$2y$10$EgpAhJCGaCJJOqMRupGrcuHa.O4o/ed3vxq63hykj2d5oJEOU17gO', 1, NULL, '2022-08-12 01:52:20', '2022-08-12 01:52:20'),
(2, 'guruh', 'Guruh', 'guruh@gmail.com', '2022-08-12 01:52:20', '$2y$10$KTtfCRlBnx2s9RCxns6Zmu6AhnWjrNz2FCM6NPp.xVc1yCnZYi/wa', 1, NULL, '2022-08-12 01:52:20', '2022-08-12 01:52:20'),
(3, 'karyawan', 'Karyawan', 'karyawan@gmail.com', NULL, '$2y$10$hLqBosXbJAdbAqB/POwUbe8877z29CMKgPapE8wYy55bJLuII9tbO', 0, NULL, '2023-01-06 13:20:39', '2023-01-06 13:21:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembatalan`
--
ALTER TABLE `pembatalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pembatalan`
--
ALTER TABLE `pembatalan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

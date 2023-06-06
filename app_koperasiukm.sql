-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 11:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_koperasiukm`
--

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
-- Table structure for table `koperasis`
--

CREATE TABLE `koperasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_koperasi` varchar(255) NOT NULL,
  `arsip_pendirian` varchar(255) NOT NULL,
  `arsip_pad_1` varchar(255) DEFAULT NULL,
  `arsip_pad_2` varchar(255) DEFAULT NULL,
  `arsip_pad_3` varchar(255) DEFAULT NULL,
  `id_kotakab` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `koperasis`
--

INSERT INTO `koperasis` (`id`, `nama_koperasi`, `arsip_pendirian`, `arsip_pad_1`, `arsip_pad_2`, `arsip_pad_3`, `id_kotakab`) VALUES
(25, 'Koperasi Pegawai Republik Indonesia Sekolah', 'papa-19-koperasi-pegawai-republik-indonesia-sekolah-pendirianpdf.pdf', 'papa-19-koperasi-pegawai-republik-indonesia-sekolah-padpdf.pdf', 'agam-124-koperasi-unit-desa-gadut-pad1pdf.pdf', '', 15),
(26, 'KOPERASI JASA ANGKUTAN MELATI KOTAMADYA PADANG', 'pdg-1-koperasi-jasa-angkutan-melati-kotamadya-padang-pendirianpdf.pdf', 'pdg-1-koperasi-jasa-angkutan-melati-kotamadya-padang-padpdf.pdf', '', '', 14),
(27, 'Koperasi Unit Desa Gadut', 'agam-124-koperasi-unit-desa-gadut-pendirianpdf.pdf', 'agam-124-koperasi-unit-desa-gadut-pad1pdf.pdf', 'agam-124-koperasi-unit-desa-gadut-pad2pdf.pdf', 'agam-124-koperasi-unit-desa-gadut-pad3pdf.pdf', 1),
(28, 'Koperasi Unit Desa Sarainan', 'mtw-01-kud-sarainan-pendirianpdf.pdf', 'agam-124-koperasi-unit-desa-gadut-pad2pdf.pdf', NULL, '', 3),
(29, 'Koperasi Karyawan PT PLN (Persero) Ranting Sicincin', 'padpar-29-koperasi-karyawan-pt-pln-persero-ranting-sicincin-pendirianpdf.pdf', '', '', '', 5),
(30, 'KOPERASI PEGAWAI NEGERI KESEHATAN', 'pastim-1-koperasi-pegawai-negeri-kesehatan-kabupaten-pasaman-pendirianpdf.pdf', 'pastim-1-koperasi-pegawai-negeri-kesehatan-kabupaten-pasaman-padpdf.pdf', 'pastim-1-koperasi-pegawai-negeri-kesehatan-kabupaten-pasaman-pad-1pdf.pdf', '', 7);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_13_020547_create_roles_table', 1),
(6, '2023_01_19_071218_create_wilayahs_table', 1),
(7, '2023_01_27_020556_create_koperasis_table', 1),
(8, '2023_02_01_075309_create_profiles_table', 2),
(9, '2014_10_12_000000_create_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `email`, `alamat`, `no_telepon`) VALUES
(1, 'diskop@sumbarprov.go.id', 'Jl. Khatib Sulaiman No. 11 Padang', '0751 - 7055292');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `no_telepon`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Diskop', 'diskop@sumbarprov.go.id', NULL, '$2y$10$Th0/XRh4.ESljQ/w7.6uROvein7kAaOOH2ITO8Af8xvupmk9oY/Q2', 'Jl. Khatib Sulaiman No. 11 Padang', '0751 - 7055292', NULL, NULL, '2023-02-08 18:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `wilayahs`
--

CREATE TABLE `wilayahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wilayahs`
--

INSERT INTO `wilayahs` (`id`, `nama`, `gambar`) VALUES
(1, 'Kabupaten Agam', '230128074616.png'),
(2, 'Kabupaten Dharmasraya', '230130071216.png'),
(3, 'Kabupaten Kepulauan Mentawai', '230130071234.jpg'),
(4, 'Kabupaten Lima Puluh Kota', '230130071247.png'),
(5, 'Kabupaten Padang Pariaman', '230130071310.gif'),
(6, 'Kabupaten Pasaman Barat', '230130071337.png'),
(7, 'Kabupaten Pasaman', '230130071403.png'),
(8, 'Kabupaten Pesisir Selatan', '230130071507.png'),
(9, 'Kabupaten Sijunjung', '230130071525.png'),
(10, 'Kabupaten Solok', '230130071543.png'),
(11, 'Kabupaten Solok Selatan', '230130071558.png'),
(12, 'Kabupaten Tanah Datar', '230130071620.png'),
(13, 'Kota Bukittinggi', '230130071641.png'),
(14, 'Kota Padang', '230130071653.png'),
(15, 'Kota Padang Panjang', '230130071718.png'),
(16, 'Kota Pariaman', '230130071734.png'),
(17, 'Kota Payakumbuh', '230130071750.png'),
(18, 'Kota Sawahlunto', '230130071804.png'),
(19, 'Kota Solok', '230130071820.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `koperasis`
--
ALTER TABLE `koperasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kotakab` (`id_kotakab`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wilayahs`
--
ALTER TABLE `wilayahs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `koperasis`
--
ALTER TABLE `koperasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wilayahs`
--
ALTER TABLE `wilayahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `koperasis`
--
ALTER TABLE `koperasis`
  ADD CONSTRAINT `koperasis_ibfk_1` FOREIGN KEY (`id_kotakab`) REFERENCES `wilayahs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

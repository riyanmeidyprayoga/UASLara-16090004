-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 06:52 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dolandtegal`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pantai', '1246306541.jpg', NULL, '2019-07-09 21:25:02', '2019-07-09 21:25:02'),
(2, 'Pegunungan', '2135379654.jpg', NULL, '2019-07-09 21:25:23', '2019-07-09 21:25:23'),
(3, 'Bermain', '613857085.jpg', NULL, '2019-07-09 21:25:40', '2019-07-09 21:25:40'),
(4, 'Sejarah', '67663421.jpg', NULL, '2019-07-09 21:25:59', '2019-07-09 21:25:59'),
(5, 'Belanja', '1466090871.jpg', NULL, '2019-07-09 21:26:23', '2019-07-09 21:26:23'),
(6, 'Taman', '23791806.jpg', NULL, '2019-07-09 21:26:47', '2019-07-09 21:26:47'),
(7, 'gfsd', '196783517.jpg', '2019-07-10 16:54:31', '2019-07-10 09:53:41', '2019-07-10 09:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `act` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `id_user`, `act`, `created_at`, `updated_at`) VALUES
(1, '1', 'on wisata', '2019-07-10 11:42:42', '2019-07-10 11:42:42'),
(2, '1', 'on beranda', '2019-07-10 11:44:41', '2019-07-10 11:44:41'),
(3, '1', 'on wisata', '2019-07-10 11:44:44', '2019-07-10 11:44:44'),
(4, '1', 'on kategori', '2019-07-10 11:44:45', '2019-07-10 11:44:45'),
(5, '1', 'on kategori', '2019-07-10 11:44:49', '2019-07-10 11:44:49'),
(6, '1', 'on kategori', '2019-07-10 11:44:51', '2019-07-10 11:44:51'),
(7, '1', 'on wisata', '2019-07-10 11:45:23', '2019-07-10 11:45:23'),
(8, '1', 'on beranda', '2019-07-10 11:45:24', '2019-07-10 11:45:24'),
(9, '1', 'on kategori', '2019-07-10 11:45:26', '2019-07-10 11:45:26'),
(10, '1', 'on beranda', '2019-07-10 11:45:28', '2019-07-10 11:45:28'),
(11, '1', 'on kategori', '2019-07-10 11:45:30', '2019-07-10 11:45:30'),
(12, '1', 'on wisata', '2019-07-10 11:45:31', '2019-07-10 11:45:31'),
(13, '1', 'on kategori', '2019-07-10 11:45:33', '2019-07-10 11:45:33'),
(14, '1', 'on beranda', '2019-07-10 11:45:34', '2019-07-10 11:45:34'),
(15, '1', 'on beranda', '2019-07-10 11:45:35', '2019-07-10 11:45:35'),
(16, '1', 'on kategori', '2019-07-10 11:49:48', '2019-07-10 11:49:48'),
(17, '1', 'on wisata', '2019-07-10 11:49:50', '2019-07-10 11:49:50'),
(18, '1', 'on wisata', '2019-07-10 11:50:15', '2019-07-10 11:50:15'),
(19, '1', 'on wisata', '2019-07-10 11:50:32', '2019-07-10 11:50:32'),
(20, '1', 'on kategori', '2019-07-10 11:50:39', '2019-07-10 11:50:39'),
(21, '1', 'on kategori', '2019-07-10 11:50:45', '2019-07-10 11:50:45'),
(22, '1', 'on user', '2019-07-10 11:51:04', '2019-07-10 11:51:04'),
(23, '1', 'on beranda', '2019-07-10 11:53:49', '2019-07-10 11:53:49'),
(24, '1', 'on wisata', '2019-07-10 12:27:21', '2019-07-10 12:27:21'),
(25, '1', 'on beranda', '2019-07-10 12:27:29', '2019-07-10 12:27:29'),
(26, '1', 'on wisata', '2019-07-10 12:34:37', '2019-07-10 12:34:37'),
(27, '1', 'on beranda', '2019-07-13 21:16:57', '2019-07-13 21:16:57'),
(28, '1', 'on wisata', '2019-07-13 21:17:01', '2019-07-13 21:17:01'),
(29, '1', 'on kategori', '2019-07-13 21:17:10', '2019-07-13 21:17:10');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_22_152638_create_wisata_table', 1),
(4, '2019_04_22_154823_create_cache_table', 1),
(5, '2019_07_05_165133_create_table_kategori', 1),
(7, '2019_07_08_071251_create_table_logs', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `filename`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Riyan Meidy Prayoga', 'riyanmeidyprayoga@gmail.com', NULL, '$2y$10$JFeqCQ3xs2m7dpXN2lfnBebb.4YiPvE2rhy8KVY9BD2GGkQYkgj6O', NULL, NULL, '2019-07-09 21:08:33', '2019-07-09 21:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wisata` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `lokasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_wisata`, `id_kategori`, `lokasi`, `image`, `deskripsi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pemandian Air Panas Guci', 2, 'Tegal', '245278666.jpg', 'wahana pemandian air panas Guci. Tempat pemandian ini selalu ramai di akhir pekan atau hari libur. Letaknya di Jl. Objek Wisata Guci, Sigedong, Bumijawa, Tegal, Jawa Tengah, Indonesia. Tempat ini cukup unik, karena suhu air berbeda-beda, tergantung dari tingkatannya, dimana ada 25 buah tingkatan. Adapun sumber air panasnya berasal dari Gunung Slamet. Jika anda mandi disini, penyakit kulit bisa sembuh karena air mengandung blerang. Oh ya, bagi anda yang memiliki riwayat penyakit jantung jangan lama-lama mandinyanya. Untuk mencapai pemandian ini perjalanan yang ditempuh sekitar 30 km dari Slawi atau 40 km dari Kota Tegal menuju ke selatan. Pemandangan yang disuguhkan sangat indah dan asri. Untuk mencapai pemandian ini anda harus berjalan melawati perbukitan yang cukup terjal. Setelah melewati sampai, kita akan disuguhkan pemandangan yang indah serta udara yang segar dan hawa dingin. Dsini ada beberapa wahana yang ditawarkan, yaitu berupa pemandian terbuka, pemandian tertutup serta kolam renang.', NULL, '2019-07-09 22:15:58', '2019-07-09 22:15:58'),
(2, 'Pantai Purwahamba Indah (Purin)', 1, 'Tegal', '96102576.jpg', 'Pasir pantainya memang tidak putih seperti pasir di Bali, tapi pemandangan pantai ini sangat indah. Lokasinya berada di Desa Purwahamba, Kecamatan Suradadi ini, anda bisa menikmati banyak fasilitas yang yang tersedia, seperti kolam renang, waterboom, sepeda air, kereta mini, gazebo cafe, kebun binatang mini, arena bermain anak dan masih banyak lagi. Dari terminal bus Kota Tegal, anda hanya akan menempuh jarak sekitar 14 KM untuk mencapai pantai ini.', NULL, '2019-07-09 22:16:30', '2019-07-09 22:16:30'),
(3, 'Waduk Cacaban', 2, 'Tegal', '704481308.jpg', 'Waduk cacaban adalah tempat wisata di Tegal yang tidak boleh anda lewatkan. Suasana yang damai dan asri serta panorama yang indah akan memberikan kedamaian tersendiri bagi wisatawan. waduk ini sendiri dibangun pada 1952 oleh Soekarno. Di waduk ini ada berabgai macam wahana permainan seperti bumi perkemahan, tempat bermain anak, panggung hiburan, warung apung, kapal wisata dll. Sangat disayangkan sekali kalau anda ke Tegal di mengunjungi waduk cacaban ini.', NULL, '2019-07-09 22:17:10', '2019-07-09 22:17:10'),
(4, 'PG Pangkah (Loco Antik)', 4, 'Tegal', '35407637.jpg', 'Jika anda dan keluarga ingin merasakan sensasi berkeliling kebun tebu dengan lokomotif tempo dulu, coba di Agro Wisata Loko antik yang dikelola oleh PG. Pangka di Kabupaten Tegal. Disini anda disuguhkan dengan pemandangan kebun tebu miliki penjajah Belanda dan sudah kini otomatis menjadi perusahaan Indonesia.', NULL, '2019-07-09 22:17:55', '2019-07-09 22:17:55'),
(5, 'Curug Cantel', 2, 'Tegal', '615817840.jpg', 'Curug ini memiliki ketinggian sekitar 60 meter. Bagi anda yang mau merasakan sejuknya air curug ini silahkan bawa pakaian ganti. Adapun lokasinya ada di Pedukuhan Kalipedes, Desa Sigedong Kecamatan Bumijawa Kabupaten Tegal. Akses untuk menuju lokasi wisata ini juga masih susah yaitu dengan tracking sejauh 400 meter dari jalan raya.', NULL, '2019-07-09 22:18:41', '2019-07-09 22:18:41'),
(6, 'Curug Putri', 2, 'Tegal', '1028490991.jpg', 'Curug putri merupakan salah satu tempat wisata di Tegal yang tidak boleh dilewatkan. Keindahan alamnya dan kesejukan air di curug ini membuat wisatawan ingin kembali lagi. Untuk menuju lokasi juga sangat mudah. Curug putri hanya memiliki ketinggian 25 meter. Namun karena keindahan dan akses menuju lokasi yang mudah maka tempat wisata alam di Tegal yang satu ini selalu ramai oleh wisatawan dari berbagai daerah. Adapun lokasi curug putri ada di perbatasan dua Kabupaten yaitu Kabupaten Tegal dan Brebes.', NULL, '2019-07-09 22:19:08', '2019-07-09 22:19:08'),
(7, 'Pantai Alam Indah', 1, 'Tegal', '1558722102.jpg', 'Salah satu tempat wisata pantai yang populer di Tegal adalah pantai Alam Indah. Komplek pantai ini selalu ramai dikunjungi oleh wisatawan. Lokasinya sangat strategis sekali, pantai ini juga cukup panjang yaitu sekitar 2100 meter serta memiliki pemandangan yang bagus karena bersih dari sampah. Di lokasi Kompleks Pantai Alam Indah ini sudah dibangun beberapa fasilitas yang menarik diantaranya adalah waterboom, Monumen Bahari serat wisata perahu yang sangat diminati wisatawan. Jika anda berminat berkunjung ke Kompleks Pantai Alam Indah ini anda dapat datang ke alamat jalan Sangir Kelurahan Mintaragen Kecamatan Tegal Timur Kota Tegal.', NULL, '2019-07-09 22:19:41', '2019-07-09 22:19:41'),
(8, 'Gerbang Mas Bahari Waterpart', 3, 'Tegal', '1289281461.jpg', 'Objek Wisata air Gerbang Mas Bahari Waterpark menjadi salah satu pilihan berwisata keluarga, lokasinya dekat terminal Kota Tegal. Untuk masuk anda harus membayar tiket seharga 15.000 pada hari biasa atau 25.000 pada hari Sabtu, Minggu dan Libur Nasional maka anda dapat menikmati berbagai macam permainan air seperti kolam renang, kolam ombak, wet futsal, kiddy pool dll.', NULL, '2019-07-09 22:20:16', '2019-07-09 22:20:16'),
(9, 'Telaga Air Cempaka', 2, 'Tegal', '800062993.jpg', 'Lokasi objek wisata telaga air cempaka ada di Desa Cempaka, Kecamatan Bumijawa Kabupaten Tegal. Telaga ini memiliki keindahan yang menawan, pemandangan asri, pepohonan yang rindang serta udara yang sejuk. Luas telaga air Cempaka adalah 15 meter persegi dan digunakan oleh warga sekitar untuk keperluan sehari-hari serta sebagai sarana irigasi persawahan di sekitarnya.', NULL, '2019-07-09 22:20:42', '2019-07-09 22:20:42'),
(10, 'Rita Park', 3, 'Tegal', '998296317.jpg', 'Rita Park merupakan salah satu wahana bermain yang terkenal di Tegal. Rita Park memberikan pengalaman bermain yang mengesankan. Wahana ini tidak hanya terkenal di Tegal saja, tetapi juga ti Jawa Tengah. Ada banyak sekali wahana disini seperti Bom – bom Car, Cinema 5D, Circus Travel, Flying Tiger, Frog Jump, Kiddie Ride dll. Masyarakat Jawa Tengah menjulukinya sebagai Dufan nya Jawa Tengah.', NULL, '2019-07-09 22:21:07', '2019-07-09 22:21:07'),
(11, 'Taman Rakyat Slawi Ayu', 6, 'Tegal', '1845571259.jpg', 'Taman wisata rakyat Slawi merupakan Tempat wisata Kuliner di Tegal yang wajib anda kunjungi. Disini tempat berkumpulnya orangorang untuk menikmati sajian kuliner khas Tegal. Tempat ini baru dibuka pada 2013 lalu. Lokasinya ada di depan terminal bus Slawi sehingga untuk menjangkaunya sangat mudah sekali. Tujuan pendirian Taman Rakyat Slawi Ayu (Trasa)  di RTH Slawi adalah sebagai tempat interaksi masyarakat Kabupaten Tegal dalam berbagai aktivitas, seperti aktivitas sosial, pentas seni, olah raga dan sebagainya.', NULL, '2019-07-09 22:21:37', '2019-07-09 22:21:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_unique` (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2020 pada 05.24
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'HeavyMetal', 'uploads/posts/1567479085m4.jpg', '2019-09-03 02:51:25', '2019-09-16 01:50:41'),
(3, 'DarkNess', 'uploads/posts/1567479103m2.jpg', '2019-09-03 02:51:43', '2019-09-16 01:51:30'),
(4, 'Seafood', 'uploads/posts/1567479339m1.jpg', '2019-09-15 13:01:37', '2019-09-15 13:01:37'),
(5, 'SealFood', 'uploads/posts/1567479339m1.jpg', '2019-09-15 14:19:12', '2019-09-16 01:56:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_05_010319_create_posts_table', 1),
(4, '2018_06_05_010949_create_categories_table', 1),
(5, '2018_07_03_030802_create_tags_table', 1),
(6, '2018_07_03_032848_create_post_tag_table', 1),
(7, '2018_07_05_015624_create_profiles_table', 1),
(8, '2018_07_16_035435_create_settings_table', 1),
(9, '2018_07_26_015719_insert_user_id_column', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `category_id`, `featured`, `deleted_at`, `created_at`, `updated_at`, `user_id`) VALUES
(2, 'Hidup Bagaikan Langit', 'hidup-bagaikan-rahwana', 'The default guard accepts 2 parameters in the \"attempt\" method (however the actual Guard interface does not actually require an attempt method to exist at all this is all just default Laravel scaffolding).', 3, 'uploads/posts/1567479339m1.jpg', NULL, '2019-09-03 02:55:39', '2019-09-19 02:49:28', 1),
(5, 'Store in Backapm', 'store-in-backapm', 'World\'s simplest image base64 encoder. Just select your JPG, PNG, GIF, or BMP picture or drag & drop it below, press Convert to Base64 button, and you get a base-64 string. Press button, get base64. No ads, nonsense or garbage. Works only in modern browsers.', 2, 'uploads/posts/1567479339m1.jpg', NULL, '2019-09-13 03:46:10', '2019-09-13 03:46:10', 1),
(6, 'Supir Truk Madiun', 'supir-truk-madiun', 'JavaScript (not to be confused with Java) is a high-level, dynamic, multi-paradigm, object-oriented, prototype-based, weakly-', 3, 'uploads/posts/1567479339m1.jpg', '2019-09-19 06:43:54', '2019-09-16 03:13:24', '2019-09-19 06:43:54', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 3, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 3, 3, NULL, NULL),
(6, 3, 4, NULL, NULL),
(7, 5, 4, NULL, NULL),
(8, 6, 2, NULL, NULL),
(9, 6, 4, NULL, NULL),
(10, 6, 5, NULL, NULL),
(11, 6, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `vision` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id`, `avatar`, `user_id`, `about`, `vision`, `mission`, `facebook`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'uploads/avatars/ide.png', 1, 'Menurut Djamaludin, pengertian visi adalah statement yang berisi', 'Secara umum, pengertian Visi adalah pandangan jauh ke depan dari individu', 'Secara umum pengertian misi adalah segala sesuatu', 'https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Fgroups%2F35688476100%2Fabout%2F', 'https://youtu.be/w5MJIvCwPp0', '2019-09-03 02:14:35', '2019-09-17 07:32:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `contact_number`, `contact_email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'OpNews Media', '6287702229899', 'rizqimln11@gmail.com', 'Surabaya, Jawatimur, Indonesia', '2019-09-03 02:14:35', '2019-09-19 02:52:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(2, 'indonesiaHokya', '2019-09-03 02:53:10', '2019-09-11 03:57:29'),
(4, 'DeviGeranium', '2019-09-03 02:53:34', '2019-09-15 14:59:13'),
(5, 'Makanan Lunak', '2019-09-03 03:02:09', '2019-09-03 03:02:09'),
(6, 'indonesiaDihajarThai', '2019-09-10 04:18:51', '2019-09-11 04:03:23'),
(7, 'kautetapindonesiaku', '2019-09-10 04:34:03', '2019-09-10 04:34:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `password`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'RizqiMaulana', 'mojokerto11@gmail.com', 1, '$2y$10$JFe7Y0EAfo5aL/iEKUDGKulOrLSnFxPcYXuNGJfu636/AALeiGu7m', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9BdXRoXC9sb2dpbiIsImlhdCI6MTU2NzQ3NTg3MywiZXhwIjoxNTY3NDc5NDczLCJuYmYiOjE1Njc0NzU4NzMsImp0aSI6IldsNkFpNW', 'FndL7LDaQpTIeLccU0YqHsDMkz4CGjrhQ84OiuwUEKwBW4vUliZpcMCpZT5v', '2019-09-03 02:14:35', '2019-09-17 07:07:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

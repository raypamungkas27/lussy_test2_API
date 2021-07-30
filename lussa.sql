-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 02:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lussa`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_blog`
--

CREATE TABLE `m_blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul_blog` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_blog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_blog`
--

INSERT INTO `m_blog` (`id`, `judul_blog`, `isi_blog`, `status`, `img`, `kategori`, `created_at`, `updated_at`) VALUES
(3, 'tes', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem minima quo sequi nesciunt eum suscipit, perferendis in, nihil, possimus rerum ab. Laudantium perspiciatis inventore saepe quod enim vitae quia. Nam.</p>', '1', 'http://127.0.0.1:8000/assets/img/img1.jpg', 'Umum', '2021-07-04 02:35:48', '2021-07-04 02:35:48'),
(14, 'test2', '<p>sfsfsfsafsafafdfdsfsdfdsfsdfdsfdsf2</p>', '1', 'http://127.0.0.1:8000/assets/img/20210730120415-image.jpg', 'Umum', '2021-07-30 03:42:28', '2021-07-30 05:04:15'),
(15, 'qwewq', '<p>wqdwq</p>', '1', 'http://127.0.0.1:8000/assets/img/20210730105325-image.jpg', 'Umum', '2021-07-30 03:53:25', '2021-07-30 03:53:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_blog`
--
ALTER TABLE `m_blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_blog`
--
ALTER TABLE `m_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

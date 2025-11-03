-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2025 at 02:39 PM
-- Server version: 10.6.23-MariaDB-cll-lve
-- PHP Version: 8.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextvisionweb_avpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'about us', 'A V P A & Co. is a forward-looking Chartered Accountancy firm built on the pillars of knowledge, experience, and ethics. We are dedicated to simplifying financial complexities and helping businesses as well as individuals make informed financial decisions with confidence. new', NULL, '2025-09-04 11:29:25', '2025-09-24 01:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `delete_status` tinyint(11) DEFAULT 0,
  `block_status` tinyint(12) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `name`, `address`, `email`, `phone`, `delete_status`, `block_status`, `created_at`, `updated_at`) VALUES
(1, 'Ghaziabad Office', 'AVPA & Co. 93, First Floor, Navyug Market, Ghaziabad - 201001 (U.P.)', 'Varun@avpaco.com', '8810571361', 0, 0, '2025-09-25 02:32:49', '2025-10-22 02:38:08'),
(2, 'Delhi Office', 'Delhi- IX/2261 , Street No-10 , Kailash nagar ,Gandhi Nagar, Delhi-110031', 'Palak@avpaco.com', '9560037610', 0, 0, '2025-10-18 04:43:12', '2025-10-18 04:43:12'),
(3, 'Noida Office', 'No. B-510, 5th Floor, Tower T4, NX One Byte, Techzone- IV, Greater Noida West, UP-201301', 'anjali@avpaco.com', '9873041300', 0, 0, '2025-10-18 04:44:24', '2025-10-18 04:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@avpaco.com', '$2y$12$e5v0Hfz7bbkzLMXkd94SVeh3afjEi6FzusS2ZAI3aOyJTxFVyu0Qe', 'JnyqL0QmS38viQAHeMNnxvbdHpxsH7o2p1FIXSJccF2bGBcl3eajQFcye7MR', '2025-09-03 04:10:45', '2025-09-03 04:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Akash Kaushik', 'akkikaushik125@gmail.com', '09910632023', 'yy', 'khvfkf', '2025-09-10 02:25:25', '2025-09-10 02:25:25'),
(2, 'Akash Kaushik', 'akkikaushik125@gmail.com', '09910632023', 'yy', 'khvfkf', '2025-09-10 02:25:51', '2025-09-10 02:25:51'),
(3, 'Akash Kaushik', 'akkikaushik125@gmail.com', '09910632023', 'bkvkv', 'bjvkv', '2025-09-10 02:28:36', '2025-09-10 02:28:36'),
(4, 'Akash Kaushik', 'akkikaushik125@gmail.com', '09910632023', 'testing', 'test purpose', '2025-09-11 01:11:01', '2025-09-11 01:11:01'),
(5, 'Akash Kaushik', 'akkikaushik125@gmail.com', '09910632023', 'testing', 'testing', '2025-09-18 06:20:21', '2025-09-18 06:20:21'),
(6, 'Akash Kaushik', 'akkikaushik125@gmail.com', '09910632023', 'taxation', 'enquiry', '2025-09-24 01:24:05', '2025-09-24 01:24:05'),
(7, 'palak', 'and@gamil.com', 'aa', 'aaa', 'aa', '2025-10-22 02:44:35', '2025-10-22 02:44:35');

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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, NULL, 'uploads/gallery/1756921148-White Rock Beige And Redwood Minimalist Creative Proposal Presentation.png', NULL, '2025-09-03 12:09:08', '2025-09-03 12:09:08'),
(4, NULL, 'uploads/gallery/1757002406-White Rock Beige And Redwood Minimalist Creative Proposal Presentation.png', NULL, '2025-09-04 10:43:26', '2025-09-04 10:43:26'),
(5, NULL, 'uploads/gallery/1758696289-White Rock Beige And Redwood Minimalist Creative Proposal Presentation.png', NULL, '2025-09-24 01:14:49', '2025-09-24 01:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `get_in_touches`
--

CREATE TABLE `get_in_touches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `get_in_touches`
--

INSERT INTO `get_in_touches` (`id`, `image`, `created_at`, `updated_at`) VALUES
(6, 'uploads/get_in_touch/1761158664_map.png', '2025-10-22 13:14:24', '2025-10-22 13:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `delete_status` tinyint(15) DEFAULT 0,
  `block_status` tinyint(12) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `name`, `image`, `description`, `delete_status`, `block_status`, `created_at`, `updated_at`) VALUES
(1, 'Information Technology', 'images/MMnUqvByYUSc9GFdH0ohkWvV5B5LQHU5FaE0zqkL.png', NULL, 1, 0, '2025-09-20 11:26:17', '2025-10-23 10:08:15'),
(2, 'Banking', 'images/xFl4oNxEs6L5j7VjY1fOb4oAfkEhWBnS2IuGpbf4.png', NULL, 1, 0, '2025-10-23 09:56:54', '2025-10-23 10:02:40'),
(3, 'Banking', 'images/1761233613.png', NULL, 0, 0, '2025-10-23 10:03:33', '2025-10-23 10:03:33'),
(4, 'Information Technology', 'images/1761300945.png', NULL, 0, 0, '2025-10-24 04:45:45', '2025-10-24 04:45:45'),
(5, 'NBFC', 'images/1761301011.png', NULL, 0, 0, '2025-10-24 04:46:51', '2025-10-24 04:46:51'),
(6, 'Micro Finance', 'images/1761301045.png', NULL, 0, 0, '2025-10-24 04:47:25', '2025-10-24 04:47:25'),
(7, 'Manufacturing', 'images/1761301111.png', NULL, 0, 0, '2025-10-24 04:48:31', '2025-10-24 04:48:31'),
(8, 'Trading', 'images/1761301121.png', NULL, 0, 0, '2025-10-24 04:48:41', '2025-10-24 04:48:41');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_09_03_093645_create_admins_table', 2),
(6, '2025_09_03_170941_create_privacy_policy_terms_conditions_table', 3),
(7, '2025_09_03_171802_create_gallery_table', 4),
(8, '2025_09_03_175852_create_get_in_touches_table', 5),
(9, '2025_09_03_181502_create_testimonials_table', 6),
(10, '2025_09_04_103054_create_trusted_projects_table', 7),
(11, '2025_09_04_111937_create_about_us_table', 8),
(12, '2025_09_10_072844_create_contacts_table', 9),
(13, '2025_09_20_153016_create_industries_table', 10),
(14, '2025_09_25_064906_create_services_table', 11),
(15, '2025_09_25_073622_create_addresses_table', 12),
(16, '2025_10_06_085558_create_news_room_table', 13),
(17, '2025_10_09_094025_create_quick_links_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `news_room`
--

CREATE TABLE `news_room` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `delete_status` tinyint(1) NOT NULL DEFAULT 0,
  `block_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_room`
--

INSERT INTO `news_room` (`id`, `title`, `date`, `link`, `delete_status`, `block_status`, `created_at`, `updated_at`) VALUES
(1, 'latest new', '2025-10-08', 'google.com', 0, 0, '2025-10-06 03:50:59', '2025-10-06 03:51:32'),
(2, 'GST Reforms', '2025-09-01', 'https://static.pib.gov.in/WriteReadData/specificdocs/documents/2025/sep/doc202594628401.pdf', 0, 0, '2025-10-10 07:45:26', '2025-10-10 07:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `privacy_policy_terms_conditions`
--

CREATE TABLE `privacy_policy_terms_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `privacy_policy` longtext DEFAULT NULL,
  `terms_condition` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policy_terms_conditions`
--

INSERT INTO `privacy_policy_terms_conditions` (`id`, `privacy_policy`, `terms_condition`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, absfjasfjafkjasbfkasnfksanfsaknsafa privacy policy', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,asdafasfasfsdgsdg term conditionsadasdasdasd', '2025-09-03 17:14:29', '2025-09-18 06:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `quick_links`
--

CREATE TABLE `quick_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `delete_status` tinyint(1) NOT NULL DEFAULT 0,
  `block_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quick_links`
--

INSERT INTO `quick_links` (`id`, `date`, `title`, `link`, `delete_status`, `block_status`, `created_at`, `updated_at`) VALUES
(1, '2025-10-11', 'latest updated news', 'google.com', 1, 0, '2025-10-09 04:19:23', '2025-10-22 03:25:32'),
(2, '2025-10-01', 'Income Tax Portal', 'https://www.incometax.gov.in/iec/foportal/', 0, 0, '2025-10-10 07:46:24', '2025-10-10 07:46:24'),
(3, '2025-10-22', 'GST', 'https://www.gst.gov.in/', 0, 0, '2025-10-22 12:05:53', '2025-10-22 12:05:53'),
(4, '2025-10-23', 'TDS', 'https://www.tdscpc.gov.in/en/home.html', 0, 0, '2025-10-23 09:53:09', '2025-10-23 09:53:09'),
(5, '2025-10-23', 'MCA', 'https://www.mca.gov.in/mcafoportal/login.do', 0, 0, '2025-10-23 09:53:51', '2025-10-23 09:53:51'),
(6, '2025-10-23', 'ICAI', 'https://www.icai.org/', 0, 0, '2025-10-23 09:54:35', '2025-10-23 09:54:35'),
(7, '2025-10-23', 'FEMA', 'https://enforcementdirectorate.gov.in/fema', 0, 0, '2025-10-23 09:54:57', '2025-10-23 09:54:57'),
(8, '2025-10-23', 'RBI', 'https://www.rbi.org.in/', 0, 0, '2025-10-23 09:55:15', '2025-10-23 09:55:15'),
(9, '2025-10-23', 'CBIC', 'https://www.cbic.gov.in/', 0, 0, '2025-10-23 09:55:33', '2025-10-23 09:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `block_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`, `delete_status`, `block_status`, `created_at`, `updated_at`) VALUES
(1, 'Taxation', 'this is our  new description', 'images/Du72xGlxu33bNgC08zLFd1YleSe8refqcUOIENGU.png', 0, 0, '2025-09-25 01:29:23', '2025-10-22 12:39:04'),
(2, 'Audit & Assurance', 'this is our  new description', 'images/NyYmXQblTUpzvA1ffFxY52UiAH6Oz3EZhHTU4eTH.png', 0, 0, '2025-09-26 04:23:33', '2025-10-22 12:39:11'),
(3, 'Business Setup & Complience', 'this is our  new description', 'images/QoqSNZYznGVk1OPjSpqSh24TnxQCKkuURK7muyza.png', 0, 0, '2025-09-26 04:24:07', '2025-10-22 12:39:16'),
(4, 'Accounting & Outsourcing', 'this is our  new description', 'images/MDL8pyMPUbkAf45PHE5Gj12AOWXgN6C579Bdp1RY.png', 0, 0, '2025-09-26 04:24:34', '2025-10-22 12:39:20'),
(5, 'Advisory & Consultancy', 'this is our  new description', 'images/rBHH3zeaBOgffgSVrB8yr0G7eF2PGo1sPVcqMzXq.png', 0, 0, '2025-09-26 04:25:10', '2025-10-22 12:39:24'),
(6, 'Internal Financial Control Testing', 'this is our  new description', 'images/rH32U3auc2thYrzweHBswZIxylj3xOtZNbkO00pU.jpg', 0, 0, '2025-10-10 07:38:24', '2025-10-22 12:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `position`, `image`, `description`, `created_at`, `updated_at`) VALUES
(3, 'New Client', 'ceo', 'uploads/testimonials/rRcUB1sL2Ni1MSr1St2mlmN5zKuElAgobnSCnUUR.png', 'This is my new description', '2025-09-24 01:13:44', '2025-09-24 01:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `trustedproject`
--

CREATE TABLE `trustedproject` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('active','inactive','completed') NOT NULL DEFAULT 'active',
  `trusted_clients` int(11) DEFAULT NULL,
  `finished_projects` int(11) DEFAULT NULL,
  `year_of_experience` int(11) DEFAULT NULL,
  `visited_experience` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trustedproject`
--

INSERT INTO `trustedproject` (`id`, `name`, `description`, `status`, `trusted_clients`, `finished_projects`, `year_of_experience`, `visited_experience`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, 'active', 15, 15, 9, 12, '2025-09-04 06:58:39', '2025-09-24 01:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `delete_status` tinyint(15) DEFAULT 0,
  `block_status` tinyint(15) DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL COMMENT '0-core, 1-associate',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `image`, `description`, `delete_status`, `block_status`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Akash Kaushik', 'akkikaushik125@gmail.com', '09910632023', NULL, 'Software', 1, 0, NULL, NULL, NULL, NULL, '2025-09-02 04:41:08', '2025-09-04 06:33:00'),
(2, 'test user', 'test@yopmail.com', '8855447755', 'images/gMdHp0yui8YAWEcxHClW9YtU9zA8kARAlZPSyGPd.png', 'this is descriptioncxxbxdv', 1, 1, NULL, NULL, NULL, NULL, '2025-09-04 06:21:34', '2025-09-04 06:42:00'),
(5, 'CA Varun Garg, FCA B.Com', 'varun@avpaco.com', '8810571361', '1760520906.jpg', 'CA. Varun Garg is a Chartered Accountant with over 5 years of post-qualification experience. He has led internal audits, statutory audits, and financial control testing for reputed Indian companies, demonstrating a strong command of financial oversight and operational excellence. Previously associated with Deloitte, he specialized in Sarbanes-Oxley (SoX) compliance and risk advisory. His skill set includes IT General Controls (ITGC), SOC 1 reporting, and business process evaluation—crucial pillars in today’s compliance landscape. He brings deep expertise in GST, Income Tax representation, and regulatory compliance. He has successfully handled audits for PSU banks and multinational clients, consistently delivering high standards of accuracy and integrity.  Proficient in tools like Finacle, Tally, and Flexcube, Varun ensures seamless financial operations through smart use of technology. He is known for his analytical approach, clear communication, and client-first mindset. Fluent in Hindi and English, Varun effectively bridges technical financial concepts with practical business solutions. He is driven by a passion for accuracy, transparency, and helping businesses grow responsibly.', 0, 0, NULL, NULL, NULL, 0, '2025-09-04 07:06:36', '2025-10-16 02:58:30'),
(6, 'CA Palak Bhatia, FCA B.Com(H) M.Com (F&T)  PGDBF', 'Palak@avpaco.com', '9560037610', '1761555386_68ff33badd10a.jpg', 'CA Palak Bhatia is a seasoned banking and finance professional with over 10 years of diverse experience in credit underwriting, Financial Analysis, Taxation, and Compliance. A Chartered Accountant by profession, she has successfully managed credit portfolios in reputed Bank’s ,NBFC’s, FFMSC’s specializing in MSME, LAP, and Home Loan underwriting & Risk Management.  Her expertise extends to Tax consultancy, GST, Financial Reporting, Risk Advisory and Internal Controls, making her a well-rounded advisor for both corporates and individuals. With leadership roles in credit risk management and finance operations, she brings a sharp analytical approach and practical business insights to client engagements.  Her pragmatic leadership style and industry exposure strengthen AVPA & Co’s client services— delivering not just technical precision but strategic value. Through mentorship and collaborative engagement, she drives both team excellence and client confidence.  Her approach combines technical depth, analytical clarity, and a proactive mindset—positioning her as a strategic partner committed to sustainable financial outcomes.', 0, 0, NULL, NULL, NULL, 0, '2025-09-04 10:35:41', '2025-10-27 03:26:26'),
(7, 'CA Anjali Agrawal ,FCA B.Com', 'anjali@avpaco.com', '9654052521', '1761555352_68ff339840052.jpg', 'CA Anjali Agarwal is a dedicated finance professional with more than 25 years of experience in the fields of accounting, taxation, audit, and financial consultancy. With a strong academic foundation in commerce and years of hands-on practice, she has developed a comprehensive understanding of financial systems, business processes, and regulatory frameworks. Over the years, she has worked extensively in bank audits, tax planning, compliance reviews, and financial advisory, helping clients achieve both accuracy and long-term financial clarity. Her keen analytical ability and practical approach enable her to design efficient solutions that align with business goals while maintaining transparency and compliance. Anjali’s work ethic is defined by precision, integrity, and a deep commitment to client satisfaction. Her leadership style encourages collaboration and continuous improvement, ensuring that each engagement delivers measurable results and lasting value. With a blend of experience, ethical practice, and strategic thinking, CA Anjali Agarwal continues to support individuals and organizations in building stable and sustainable financial growth.', 0, 0, NULL, NULL, NULL, 0, '2025-10-10 07:28:53', '2025-10-27 03:25:52'),
(10, 'Aakash', 'akash@yopmail.com', '9350769024', '1760607767_68f0be172fe55.png', 'New Member', 1, 0, NULL, NULL, NULL, 0, '2025-10-16 04:12:48', '2025-10-27 03:32:16'),
(13, 'asdas', 'aa@gmail.com', '09910632023', '1761557671_68ff3ca7ca40d.png', 'sdad', 1, 0, NULL, NULL, NULL, 1, '2025-10-27 04:04:32', '2025-10-27 04:04:54'),
(14, 'CA Neha Bansal', 'info@avpaco.com', '9560037610', NULL, 'CA Neha', 0, 0, NULL, NULL, NULL, 1, '2025-10-27 06:10:02', '2025-10-27 06:10:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_in_touches`
--
ALTER TABLE `get_in_touches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_room`
--
ALTER TABLE `news_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacy_policy_terms_conditions`
--
ALTER TABLE `privacy_policy_terms_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_links`
--
ALTER TABLE `quick_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trustedproject`
--
ALTER TABLE `trustedproject`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `get_in_touches`
--
ALTER TABLE `get_in_touches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news_room`
--
ALTER TABLE `news_room`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policy_terms_conditions`
--
ALTER TABLE `privacy_policy_terms_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quick_links`
--
ALTER TABLE `quick_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trustedproject`
--
ALTER TABLE `trustedproject`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

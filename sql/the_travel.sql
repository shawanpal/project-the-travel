-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 08:51 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gplus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `address`, `mobile_no`, `phone_no`, `email`, `facebook`, `gplus`, `twitter`, `map`, `created_at`, `updated_at`) VALUES
(1, 'Kolkata, India', '+91-9614145541', '+033-2530-6636', 'info@thetravel.com', 'https://www.facebook.com/', '#', 'http://www.twitter.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005\" allowfullscreen></iframe>', '2019-10-02 13:47:05', '2019-10-02 13:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'France', 'paris.jpg', 1, '2019-10-02 15:13:22', '2019-10-02 15:13:22'),
(2, 'India', 'india.jpg', 1, '2019-10-02 15:14:22', '2019-10-02 15:14:22'),
(3, 'England', 'london.jpg', 1, '2019-10-02 15:24:36', '2019-10-02 15:24:36'),
(4, 'United Arab Emirates', 'dubai.jpg', 1, '2019-10-02 15:34:04', '2019-10-02 15:34:04'),
(5, 'Usa', 'usa.jpg', 1, '2019-10-02 15:41:07', '2019-10-02 15:41:07'),
(6, 'Italy', 'italy.jpg', 1, '2019-10-02 16:19:14', '2019-10-02 16:19:14');

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
(1, '2019_09_28_202045_create_users_table', 1),
(2, '2019_10_02_133746_create_contact_infos', 2),
(3, '2019_10_02_150222_create_packages_table', 3),
(4, '2019_10_02_151327_create_package_categories_table', 4),
(5, '2019_10_02_152437_create_countries_table', 5),
(6, '2019_10_02_160352_create_package_galleries_table', 6),
(7, '2019_10_02_161035_create_package_abouts_table', 7),
(8, '2019_10_02_161428_create_package_itineraries_table', 8),
(9, '2019_10_02_162240_create_package_reviews_table', 9),
(10, '2019_10_02_163011_create_package_sales_table', 10),
(11, '2019_10_04_203010_create_package_informations_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` int(11) NOT NULL,
  `duration_days` int(11) NOT NULL,
  `duration_nights` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `category`, `price`, `location`, `country`, `duration_days`, `duration_nights`, `description`, `map`, `thumbnail`, `cover`, `status`, `alias`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Light Up Eiffel Tower', 2, '1459', 'Paris, France', 1, 5, 4, '<p>The most popular tourist place in Paris has stretched to the Parisian skies for 127 years. Although now symbolic of France, it wasn’t meant to last. Without a doubt, the turning point in the Eiffel Tower history took place at the 1889 Universal Exposition. In commemoration of the 100th anniversary of the French Revolution, a competition was organized with the aim to build on the Champ-de-Mars an iron tower with a square base, 125 meters wide and 300 meters high.</p>\r\n\r\n<p>The Eiffel Tower history was not an easy one. At the time, many were against the building and voiced their concern in a letter entitled \"Artists Against Mr. Eiffel’s Tower\", stating the tower to be a threat against the aesthetic nature of Paris. An iron tower erected smack in the heart of Paris was considered unacceptable, a stark contrast to the elegance and refined beauty of the city. For example, Verlaine nicknamed the Eiffel Tower the “Skeleton of Beffroi” to demonstrate the giant tower’s ungainly appearance that was bound to “disfigure” the city.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d167998.10803373056!2d2.206977064368058!3d48.858774103123785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C%20France!5e0!3m2!1sen!2sin!4v1570034319868!5m2!1sen!2sin\" allowfullscreen=\"\"></iframe>', 'package_paris_tumb.jpg', 'package_paris_cover.jpg', 1, 'light-up-eiffel-tower', '4.6', '2019-10-02 15:45:08', '2019-10-02 15:45:08'),
(2, 'City of Water Venice ', 1, '1750', 'Venice, Italy', 6, 4, 3, '<p>Venice, the capital of northern Italy’s Veneto region, is built on more than 100 small islands in a lagoon in the Adriatic Sea. It has no roads, just canals – including the Grand Canal thoroughfare – lined with Renaissance and Gothic palaces. The central square, Piazza San Marco, contains St. Mark’s Basilica, which is tiled with Byzantine mosaics, and the Campanile bell tower offering views of the city’s red roofs.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d358560.6174840353!2d12.101560863975985!3d45.404200754014774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477eb1daf1d63d89%3A0x7ba3c6f0bd92102f!2sVenice%2C%20Metropolitan%20City%20of%20Venice%2C%20Italy!5e0!3m2!1sen!2sin!4v1570036088283!5m2!1sen!2sin\" allowfullscreen=\"\"></iframe>', 'package_venice_tumb.jpg', 'package_venice_cover.jpg', 1, 'city-of-water-venice ', '4.8', '2019-10-02 16:53:08', '2019-10-02 16:53:08'),
(3, 'Taj Mahal An Indian icon', 2, '950', 'Delhi, India', 2, 3, 2, '<p>The Taj Mahal is an ivory-white marble mausoleum on the south bank of the Yamuna river in the Indian city of Agra. It was commissioned in 1632 by the Mughal emperor Shah Jahan to house the tomb of his favourite wife, Mumtaz Mahal; it also houses the tomb of Shah Jahan himself.</p>\r\n<p>Construction of the mausoleum was essentially completed in 1643, but work continued on other phases of the project for another 10 years. The Taj Mahal complex is believed to have been completed in its entirety in 1653 at a cost estimated at the time to be around 32 million rupees, which in 2015 would be approximately 52.8 billion rupees (U.S. $827 million). The construction project employed some 20,000 artisans under the guidance of a board of architects led by the court architect to the emperor, Ustad Ahmad Lahauri.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14197.60221324001!2d78.0421422!3d27.1751448!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdd2ae4803f767dde!2sTaj%20Mahal!5e0!3m2!1sen!2sin!4v1570205200346!5m2!1sen!2sin\" allowfullscreen=\"\"></iframe>', 'package_taj_mahal_tumb.jpg', 'package_taj_mahal_cover.jpg', 1, 'taj-mahal-an-indian-icon', '4.1', '2019-10-04 16:53:08', '2019-10-04 16:53:08'),
(4, 'Louvre Museum World\'s largest art museum', 2, '1230', 'Paris, France', 1, 5, 4, '<p>The Louvre, or the Louvre Museum, is the world\'s largest art museum and a historic monument in Paris, France. A central landmark of the city, it is located on the Right Bank of the Seine in the city\'s 1st arrondissement.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10499.496405115677!2d2.337644!3d48.8606111!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb975fcfa192f84d4!2sLouvre%20Museum!5e0!3m2!1sen!2sin!4v1570299974610!5m2!1sen!2sin\" allowfullscreen=\"\"></iframe>', 'package_louvre_museum_tumb.jpg', 'package_louvre_museum_cover.jpg', 1, 'louvre-museum-worlds-largest-art-museum', '4.2', '2019-10-05 16:03:26', '2019-10-05 16:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `package_abouts`
--

CREATE TABLE `package_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` int(11) NOT NULL,
  `cover_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inclusions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exclusions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_abouts`
--

INSERT INTO `package_abouts` (`id`, `package_id`, `cover_place`, `inclusions`, `exclusions`, `days`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'St. Mark\'s Basilica', 'Accommodation', 'Return Airfare & Taxes', 1, 1, '2019-10-04 20:40:02', '2019-10-04 20:40:02'),
(2, 2, 'Palazzo Ducale and Bridge of Sighs', 'Breakfast, Lunch & Dinner', 'Arrival & Departure transfers', 1, 1, '2019-10-04 20:46:06', '2019-10-04 20:46:06'),
(3, 2, 'Canale Grande (Grand Canal)', 'First-class Travel', 'Travel insurance', 2, 1, '2019-10-04 21:08:26', '2019-10-04 21:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `package_categories`
--

CREATE TABLE `package_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_categories`
--

INSERT INTO `package_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Family Package', 1, '2019-10-02 15:16:13', '2019-10-02 15:16:13'),
(2, 'Holiday Package', 1, '2019-10-02 15:17:13', '2019-10-02 15:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `package_galleries`
--

CREATE TABLE `package_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` int(11) NOT NULL,
  `pic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_galleries`
--

INSERT INTO `package_galleries` (`id`, `package_id`, `pic_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 's1.jpg', 1, '2019-10-04 19:23:15', '2019-10-04 19:23:15'),
(2, 2, 's2.jpg', 1, '2019-10-04 19:23:30', '2019-10-04 19:23:30'),
(3, 2, 's3.jpg', 1, '2019-10-04 19:28:21', '2019-10-04 19:28:21'),
(4, 2, 's4.jpg', 1, '2019-10-04 19:28:28', '2019-10-04 19:28:28'),
(5, 2, 's5.jpg', 1, '2019-10-04 19:32:00', '2019-10-04 19:32:00'),
(6, 2, 's6.jpg', 1, '2019-10-04 19:39:04', '2019-10-04 19:39:04'),
(7, 2, 's7.jpg', 1, '2019-10-04 19:42:06', '2019-10-04 19:42:06'),
(8, 2, 's8.jpg', 1, '2019-10-04 19:50:08', '2019-10-04 19:50:08'),
(9, 2, 's9.jpg', 1, '2019-10-04 19:56:13', '2019-10-04 19:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `package_informations`
--

CREATE TABLE `package_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` int(11) NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_informations`
--

INSERT INTO `package_informations` (`id`, `package_id`, `info`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Accommodation', 1, '2019-10-04 22:32:04', '2019-10-04 22:32:04'),
(2, 2, 'Breakfast, Lunch & Dinner', 1, '2019-10-04 22:40:04', '2019-10-04 22:40:04'),
(3, 2, 'Free Sightseeing & Hotel', 1, '2019-10-04 22:45:03', '2019-10-04 22:45:03'),
(4, 2, 'First-class Travel', 1, '2019-10-04 23:06:03', '2019-10-04 23:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `package_itineraries`
--

CREATE TABLE `package_itineraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` int(11) NOT NULL,
  `day_no` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_itineraries`
--

INSERT INTO `package_itineraries` (`id`, `package_id`, `day_no`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Arrival and Evening Dhow Cruise', 'Arrive at the airport and transfer to hotel. Check-in time at the hotel will be at 2:00 PM. In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.', 1, '2019-10-04 21:23:44', '2019-10-04 21:23:44'),
(2, 2, 2, 'City Tour and Evening Free for Leisure', 'After breakfast, proceed for tour of Dubai city. Visit Jumeirah Mosque, World Trade Centre, Palaces and Dubai Museum. Enjoy your overnight stay at the hotel.In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.', 1, '2019-10-04 21:31:04', '2019-10-04 21:31:04'),
(3, 2, 3, 'Desert Safari with Dinner', 'Relish a yummy breakfast and later, proceed to explore the city on your own. Enjoy shopping at Mercato Shopping Mall, Dubai Mall and Wafi City. In the evening, enjoy the desert safari experience and belly dance performance. Relish a mouth-watering barbecue dinner and enjoy staying overnight in City.', 1, '2019-10-04 21:41:08', '2019-10-04 21:41:08'),
(4, 2, 4, 'Day at leisure', 'Savour a satiating breakfast and relax for a while. Day Free for leisure. Overnight stay will be arranged in Dubai. In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.', 1, '2019-10-04 21:45:08', '2019-10-04 21:45:08'),
(5, 2, 5, 'Departure', 'Fill your tummy with yummy breakfast and relax for a while. Later, check out from the hotel and proceed for your onward journey.In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.', 1, '2019-10-04 21:50:08', '2019-10-04 21:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `package_reviews`
--

CREATE TABLE `package_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package_sales`
--

CREATE TABLE `package_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` int(11) NOT NULL,
  `band` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_band` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_sales`
--

INSERT INTO `package_sales` (`id`, `package_id`, `band`, `offer_band`, `sale`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'band50.png', 'offer50.png', '50', 1, '2019-10-04 15:05:17', '2019-10-04 15:05:17'),
(2, 2, 'band50.png', 'offer50.png', '50', 1, '2019-10-04 15:05:17', '2019-10-04 15:05:17'),
(3, 3, 'band30.png', 'offer30.png', '30', 1, '2019-10-04 15:55:09', '2019-10-04 15:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile_no`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shawan', 'Pal', '9614145541', 'shawanpal111@gmail.com', '$2y$10$zAFUwB01UjssPeBRQYOrBusqHrVkMtCh3xjVx29ShKv3gxvUkQhqG', 1, NULL, '2019-09-30 12:22:13', '2019-09-30 12:22:13'),
(2, 'wqewq', 'Pal', '34234234234', 'shawan@jhunsinfotech.com', '$2y$10$0Lui7fQ9K1.FoujIi7.qCu0xh4CUpRzFZ.GNOinR9GQfsyq.jWNYC', 1, NULL, '2019-10-02 03:30:01', '2019-10-02 03:30:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_infos_mobile_no_unique` (`mobile_no`),
  ADD UNIQUE KEY `contact_infos_phone_no_unique` (`phone_no`),
  ADD UNIQUE KEY `contact_infos_email_unique` (`email`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Indexes for table `package_abouts`
--
ALTER TABLE `package_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_categories`
--
ALTER TABLE `package_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_galleries`
--
ALTER TABLE `package_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_informations`
--
ALTER TABLE `package_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_itineraries`
--
ALTER TABLE `package_itineraries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_reviews`
--
ALTER TABLE `package_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_sales`
--
ALTER TABLE `package_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_no_unique` (`mobile_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package_abouts`
--
ALTER TABLE `package_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package_categories`
--
ALTER TABLE `package_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package_galleries`
--
ALTER TABLE `package_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `package_informations`
--
ALTER TABLE `package_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package_itineraries`
--
ALTER TABLE `package_itineraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package_reviews`
--
ALTER TABLE `package_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_sales`
--
ALTER TABLE `package_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

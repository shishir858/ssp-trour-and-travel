-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2026 at 05:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `cab_enquiries`
--

CREATE TABLE `cab_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `passenger` varchar(255) DEFAULT NULL,
  `pickup_location` varchar(255) NOT NULL,
  `drop_location` varchar(255) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `pickup_time` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cab_enquiries`
--

INSERT INTO `cab_enquiries` (`id`, `name`, `passenger`, `pickup_location`, `drop_location`, `vehicle_type`, `phone`, `date`, `pickup_time`, `email`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Amit Sharma', '2', 'Delhi Airport', 'Connaught Place', 'Sedan', '9876543210', '2026-02-22', '10:00 AM', 'amit@example.com', 'Need early morning pickup.', 'confirmed', '2026-02-21 10:16:04', '2026-02-21 05:22:00'),
(2, 'Priya Singh', '4', 'Noida Sector 18', 'Gurgaon Cyber Hub', 'SUV', '9123456789', '2026-02-23', '2:30 PM', 'priya@example.com', 'Family trip, need spacious vehicle.', 'pending', '2026-02-21 10:16:04', '2026-02-21 10:16:04'),
(3, 'testing', '1 Passenger', 'mumbai', 'delhi', 'Sedan', '+91 9899065905', '2026-02-27', '16:38', 'backddfdenddata.ssp@gmail.com', NULL, 'pending', '2026-02-21 05:33:28', '2026-02-21 05:33:28'),
(4, 'testing', '1 Passenger', 'mumbai', 'delhi', 'Sedan', '+91 9899065905', '2026-02-27', '16:38', 'backddfdenddata.ssp@gmail.com', NULL, 'pending', '2026-02-21 05:34:32', '2026-02-21 05:34:32'),
(5, 'fdfdfda', '1 Passenger', 'mumbai', 'delhi', 'Sedan', '1234567890', '2026-02-28', '18:40', 'backeddfdnddata.ssp@gmail.com', NULL, 'pending', '2026-02-21 05:35:24', '2026-02-21 05:35:24'),
(6, 'Backend', '1 Passenger', 'mumbai', 'delhi', '5 Seater', '+91 9899065905', '2026-02-27', '16:50', 'backenddata.ssp@gmail.com', NULL, 'pending', '2026-02-21 05:45:29', '2026-02-21 05:45:29'),
(7, 'Backend SSP', '4', 'mumbai', 'delhi', 'Sedan', '1212125100', '2026-03-08', '15:58', 'backenddata.ssp@gmail.com', NULL, 'pending', '2026-02-27 04:54:03', '2026-02-27 04:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('ssptourandtravels-cache-footer_routes', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:5:{i:0;O:16:\"App\\Models\\Route\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:6:\"routes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:2:{s:4:\"name\";s:16:\"Cochin to Munnar\";s:4:\"slug\";s:16:\"cochin-to-munnar\";}s:11:\"\0*\0original\";a:2:{s:4:\"name\";s:16:\"Cochin to Munnar\";s:4:\"slug\";s:16:\"cochin-to-munnar\";}s:10:\"\0*\0changes\";a:0:{}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:3:{s:10:\"base_price\";s:9:\"decimal:2\";s:10:\"is_popular\";s:7:\"boolean\";s:9:\"is_active\";s:7:\"boolean\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:16:{i:0;s:4:\"name\";i:1;s:4:\"slug\";i:2;s:13:\"from_location\";i:3;s:11:\"to_location\";i:4;s:8:\"distance\";i:5;s:8:\"duration\";i:6;s:11:\"description\";i:7;s:10:\"highlights\";i:8;s:10:\"base_price\";i:9;s:5:\"image\";i:10;s:10:\"is_popular\";i:11;s:9:\"is_active\";i:12;s:10:\"meta_title\";i:13;s:16:\"meta_description\";i:14;s:13:\"meta_keywords\";i:15;s:14:\"meta_canonical\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:1;O:16:\"App\\Models\\Route\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:6:\"routes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:2:{s:4:\"name\";s:15:\"Delhi to Jaipur\";s:4:\"slug\";s:15:\"delhi-to-jaipur\";}s:11:\"\0*\0original\";a:2:{s:4:\"name\";s:15:\"Delhi to Jaipur\";s:4:\"slug\";s:15:\"delhi-to-jaipur\";}s:10:\"\0*\0changes\";a:0:{}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:3:{s:10:\"base_price\";s:9:\"decimal:2\";s:10:\"is_popular\";s:7:\"boolean\";s:9:\"is_active\";s:7:\"boolean\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:16:{i:0;s:4:\"name\";i:1;s:4:\"slug\";i:2;s:13:\"from_location\";i:3;s:11:\"to_location\";i:4;s:8:\"distance\";i:5;s:8:\"duration\";i:6;s:11:\"description\";i:7;s:10:\"highlights\";i:8;s:10:\"base_price\";i:9;s:5:\"image\";i:10;s:10:\"is_popular\";i:11;s:9:\"is_active\";i:12;s:10:\"meta_title\";i:13;s:16:\"meta_description\";i:14;s:13:\"meta_keywords\";i:15;s:14:\"meta_canonical\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:2;O:16:\"App\\Models\\Route\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:6:\"routes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:2:{s:4:\"name\";s:15:\"Delhi to Manali\";s:4:\"slug\";s:15:\"delhi-to-manali\";}s:11:\"\0*\0original\";a:2:{s:4:\"name\";s:15:\"Delhi to Manali\";s:4:\"slug\";s:15:\"delhi-to-manali\";}s:10:\"\0*\0changes\";a:0:{}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:3:{s:10:\"base_price\";s:9:\"decimal:2\";s:10:\"is_popular\";s:7:\"boolean\";s:9:\"is_active\";s:7:\"boolean\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:16:{i:0;s:4:\"name\";i:1;s:4:\"slug\";i:2;s:13:\"from_location\";i:3;s:11:\"to_location\";i:4;s:8:\"distance\";i:5;s:8:\"duration\";i:6;s:11:\"description\";i:7;s:10:\"highlights\";i:8;s:10:\"base_price\";i:9;s:5:\"image\";i:10;s:10:\"is_popular\";i:11;s:9:\"is_active\";i:12;s:10:\"meta_title\";i:13;s:16:\"meta_description\";i:14;s:13:\"meta_keywords\";i:15;s:14:\"meta_canonical\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:3;O:16:\"App\\Models\\Route\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:6:\"routes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:2:{s:4:\"name\";s:13:\"Mumbai to Goa\";s:4:\"slug\";s:13:\"mumbai-to-goa\";}s:11:\"\0*\0original\";a:2:{s:4:\"name\";s:13:\"Mumbai to Goa\";s:4:\"slug\";s:13:\"mumbai-to-goa\";}s:10:\"\0*\0changes\";a:0:{}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:3:{s:10:\"base_price\";s:9:\"decimal:2\";s:10:\"is_popular\";s:7:\"boolean\";s:9:\"is_active\";s:7:\"boolean\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:16:{i:0;s:4:\"name\";i:1;s:4:\"slug\";i:2;s:13:\"from_location\";i:3;s:11:\"to_location\";i:4;s:8:\"distance\";i:5;s:8:\"duration\";i:6;s:11:\"description\";i:7;s:10:\"highlights\";i:8;s:10:\"base_price\";i:9;s:5:\"image\";i:10;s:10:\"is_popular\";i:11;s:9:\"is_active\";i:12;s:10:\"meta_title\";i:13;s:16:\"meta_description\";i:14;s:13:\"meta_keywords\";i:15;s:14:\"meta_canonical\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:4;O:16:\"App\\Models\\Route\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:6:\"routes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:2:{s:4:\"name\";s:17:\"Bangalore to Ooty\";s:4:\"slug\";s:17:\"bangalore-to-ooty\";}s:11:\"\0*\0original\";a:2:{s:4:\"name\";s:17:\"Bangalore to Ooty\";s:4:\"slug\";s:17:\"bangalore-to-ooty\";}s:10:\"\0*\0changes\";a:0:{}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:3:{s:10:\"base_price\";s:9:\"decimal:2\";s:10:\"is_popular\";s:7:\"boolean\";s:9:\"is_active\";s:7:\"boolean\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:16:{i:0;s:4:\"name\";i:1;s:4:\"slug\";i:2;s:13:\"from_location\";i:3;s:11:\"to_location\";i:4;s:8:\"distance\";i:5;s:8:\"duration\";i:6;s:11:\"description\";i:7;s:10:\"highlights\";i:8;s:10:\"base_price\";i:9;s:5:\"image\";i:10;s:10:\"is_popular\";i:11;s:9:\"is_active\";i:12;s:10:\"meta_title\";i:13;s:16:\"meta_description\";i:14;s:13:\"meta_keywords\";i:15;s:14:\"meta_canonical\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 1772190582),
('ssptourandtravels-cache-header_locations', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:2:{i:0;O:19:\"App\\Models\\Location\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:9:\"locations\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:2:{s:5:\"title\";s:14:\"cab-in-gurgaon\";s:4:\"slug\";s:14:\"cab-in-gurgaon\";}s:11:\"\0*\0original\";a:2:{s:5:\"title\";s:14:\"cab-in-gurgaon\";s:4:\"slug\";s:14:\"cab-in-gurgaon\";}s:10:\"\0*\0changes\";a:0:{}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:9:{i:0;s:5:\"title\";i:1;s:4:\"slug\";i:2;s:10:\"meta_title\";i:3;s:13:\"meta_keywords\";i:4;s:16:\"meta_description\";i:5;s:14:\"meta_canonical\";i:6;s:5:\"image\";i:7;s:7:\"content\";i:8;s:9:\"is_active\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:1;O:19:\"App\\Models\\Location\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:9:\"locations\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:2:{s:5:\"title\";s:17:\"Sector 29 Gurgaon\";s:4:\"slug\";s:17:\"sector-29-gurgaon\";}s:11:\"\0*\0original\";a:2:{s:5:\"title\";s:17:\"Sector 29 Gurgaon\";s:4:\"slug\";s:17:\"sector-29-gurgaon\";}s:10:\"\0*\0changes\";a:0:{}s:11:\"\0*\0previous\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:27:\"\0*\0relationAutoloadCallback\";N;s:26:\"\0*\0relationAutoloadContext\";N;s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:9:{i:0;s:5:\"title\";i:1;s:4:\"slug\";i:2;s:10:\"meta_title\";i:3;s:13:\"meta_keywords\";i:4;s:16:\"meta_description\";i:5;s:14:\"meta_canonical\";i:6;s:5:\"image\";i:7;s:7:\"content\";i:8;s:9:\"is_active\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 1772190582),
('ssptourandtravels-cache-site_settings', 'a:9:{s:13:\"contact_email\";s:16:\"info@example.com\";s:13:\"contact_phone\";s:15:\"+91 456 453 345\";s:16:\"contact_whatsapp\";s:15:\"+91 345 533 865\";s:13:\"whatsapp_link\";s:26:\"https://wa.me/919876543210\";s:15:\"contact_address\";s:80:\"2nd Floor, MG Road, Near Metro Station, Connaught Place, New Delhi 110001, India\";s:15:\"social_facebook\";s:1:\"#\";s:16:\"social_instagram\";s:1:\"#\";s:15:\"social_linkedin\";s:1:\"#\";s:14:\"social_youtube\";s:1:\"#\";}', 1772190801);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `location_id`, `question`, `answer`, `is_active`, `order`, `created_at`, `updated_at`) VALUES
(1, 2, 'dfsdfsfs', 'adfafdfdf', 1, 1, '2026-02-26 06:53:18', '2026-02-26 06:53:18'),
(2, 2, 'adfadfdfadfd', 'afdffdfafdfdfdfafdf', 1, 2, '2026-02-26 06:53:35', '2026-02-26 06:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_canonical` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `title`, `slug`, `meta_title`, `meta_keywords`, `meta_description`, `meta_canonical`, `image`, `content`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Sector 29 Gurgaon', 'sector-29-gurgaon', 'Outstation Cab Services from Gurugram for Easy Travel', 'Outstation cab services', 'Outstation Cab Services from Gurugram for Easy Travel', NULL, 'locations/6uOQzasBpHlnrCbaVHhfdaGhy6k6ESbUaekb1iTS.png', 'Sector 29, Gurgaon, is a bustling hub brimming with shopping centers, trendy cafes, restaurants, and vibrant nightlife. Whether you\'re a resident or visiting for leisure or business, navigating this lively neighborhood can be a challenge without dependable transportation. That\'s where our Cab Service in Sector 29 steps in, providing seamless and stress-free travel solutions tailored to meet your needs.\r\n\r\nFrom quick rides to the nearest metro station to long-distance trips across Gurgaon or Delhi NCR, we ensure a comfortable and safe journey. Our focus on punctuality, customer satisfaction, and affordability makes us your ideal travel partner in Sector 29.', 1, '2026-02-26 05:01:26', '2026-02-26 05:01:26'),
(2, 'cab-in-gurgaon', 'cab-in-gurgaon', '18 Seater Minibus Rental Delhi | Mini Bus Hire for Groups', '18 Seater Minibus', 'Book an Outstation Cab Service in Gurgaon with GurgaonCab. Comfortable rides, 24/7 service, and budget-friendly fares. Call now or book online in seconds fgfgfg', 'https://ssptourandtravels.com/location/', 'locations/RiznBFADdzod52UzWDKftK3ruUSfVTqoBE71a9SI.jpg', '<p>Arranging for a trusted taxi service in Gurgaon may turn out to be quite a task at times, especially when you are looking for smooth and on-time pickups. From commuting between offices to dropping at airports or taking care of official and short trips around the city, every travel experience becomes easier with a trusted outstation <a title=\"cab service in Gurgaon\" href=\"https://gurgaoncab.com/cab/cab-in-gurgaon\"><strong>cab service in Gurgaon</strong></a> at your fingertips. Gurugram Cab Service is all about providing that exact experience. Right from the time of booking your cab Gurgaon, everything remains simple and hassle-free. You get picked up on time, your routes are carefully chalked out, and the journey remains comfort-fit until you are finally dropped off. Be it a local ride or an out-of-town one, this cab service in Gurgaon is designed with reliability and convenience in mind.</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"http://localhost:8000/storage/uploads/tinymce/GvxuO6ZEjdohb80M6PyyBd969qO1ZpPFK0rvssW8.jpg\" alt=\"\" width=\"800\" height=\"354\"></p>\r\n<ul>\r\n<li>dfdfdfdfdf</li>\r\n<li>gfgfddgfdgf</li>\r\n<li>dfdfdsdfdfdf</li>\r\n<li>ffdfsfdfgggf</li>\r\n</ul>', 1, '2026-02-26 05:46:07', '2026-02-27 02:15:12');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '2026_02_13_063820_create_routes_table', 1),
(3, '2026_02_13_063820_create_vehicles_table', 1),
(4, '2026_02_13_063843_add_role_to_users_table', 1),
(5, '2026_02_13_072216_add_slug_to_vehicles_table', 1),
(6, '2026_02_13_100000_create_settings_table', 1),
(7, '2026_02_21_055711_create_cache_table', 1),
(8, '2026_02_21_130000_create_cab_enquiries_table', 1),
(9, '2026_02_21_140000_add_status_to_cab_enquiries_table', 2),
(10, '2026_02_23_120000_add_meta_fields_to_vehicles_table', 3),
(11, '2026_02_23_120001_add_meta_fields_to_routes_table', 3),
(12, '2026_02_26_000000_create_locations_table', 4),
(13, '2026_02_26_200000_create_faqs_table', 5),
(14, '2026_02_27_000000_remove_type_from_vehicles_table', 6),
(15, '2026_02_27_120000_make_image_nullable_in_routes_table', 7),
(16, '2026_02_27_130000_make_base_price_nullable_in_routes_table', 8);

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
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `from_location` varchar(255) NOT NULL,
  `to_location` varchar(255) NOT NULL,
  `distance` int(11) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `highlights` text DEFAULT NULL,
  `base_price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_canonical` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `name`, `slug`, `from_location`, `to_location`, `distance`, `duration`, `description`, `highlights`, `base_price`, `image`, `is_popular`, `is_active`, `created_at`, `updated_at`, `meta_title`, `meta_description`, `meta_keywords`, `meta_canonical`) VALUES
(1, 'Delhi to Agra', 'delhi-to-agra', 'Delhi', 'Agrafdfdf', 230, '4-5 hours', '<p>Scenic route via Yamuna Expressway to the city of Taj Mahal dfadfadfdfaddfdfadfdfd</p>\r\n<p><img src=\"http://localhost:8000/storage/uploads/tinymce/mCWKCPk55rCJAf4szyW3ICBKkfgavo472UH8JOtE.jpg\" alt=\"fddf\" width=\"600\" height=\"338\"></p>', 'Yamuna Expressway, Taj Mahal, Agra Fort', 3500.00, 'https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=600&q=80', 0, 1, '2026-02-12 20:24:39', '2026-02-27 03:22:31', 'Delhi to Agra Route - SSP Tourandtravels', 'Travel from Delhi to Agra with SSP Tourandtravels. Scenic route via Yamuna Expressway to the city of Taj Mahal.', 'Delhi to Agra, route, cab booking, SSP Tourandtravels, Taj Mahal', 'https://ssptourandtravels.com/routes/delhi-to-agra'),
(2, 'Delhi to Jaipur', 'delhi-to-jaipur', 'Delhi', 'Jaipur', 280, '5-6 hours', 'Journey to Pink City via NH48', 'Amber Fort, Hawa Mahal, City Palace', 4200.00, 'https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=600&q=80', 1, 1, '2026-02-12 20:24:39', '2026-02-12 20:24:39', 'Delhi to Jaipur Route - SSP Tourandtravels', 'Travel from Delhi to Jaipur with SSP Tourandtravels. Journey to Pink City via NH48.', 'Delhi to Jaipur, route, cab booking, SSP Tourandtravels, Pink City', 'https://ssptourandtravels.com/routes/delhi-to-jaipur'),
(3, 'Delhi to Manali', 'delhi-to-manali', 'Delhi', 'Manali', 540, '12-14 hours', 'Himalayan adventure route through beautiful valleys', 'Mountain views, Kullu Valley, Rohtang Pass', 8500.00, 'https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?auto=format&fit=crop&w=600&q=80', 1, 1, '2026-02-12 20:24:39', '2026-02-22 23:32:09', 'Delhi to Manali Route - SSP Tourandtravels', 'Travel from Delhi to Manali with SSP Tourandtravels. Himalayan adventure route through beautiful valleys.', 'Delhi to Manali, route, cab booking, SSP Tourandtravels, Kullu Valley, Rohtang Pass', 'https://ssptourandtravels.com/routes/delhi-to-manali'),
(4, 'Mumbai to Goa', 'mumbai-to-goa', 'Mumbai', 'Goa', 590, '10-12 hours', 'Coastal route to beach paradise', 'Coastal highway, Beaches, Portuguese heritage', 9000.00, 'https://images.unsplash.com/photo-1512343879784-a960bf40e7f2?auto=format&fit=crop&w=600&q=80', 1, 1, '2026-02-12 20:24:39', '2026-02-22 23:32:09', 'Mumbai to Goa Route - SSP Tourandtravels', 'Travel from Mumbai to Goa with SSP Tourandtravels. Coastal route to beach paradise.', 'Mumbai to Goa, route, cab booking, SSP Tourandtravels, beaches, Portuguese heritage', 'https://ssptourandtravels.com/routes/mumbai-to-goa'),
(5, 'Bangalore to Ooty', 'bangalore-to-ooty', 'Bangalore', 'Ooty', 270, '6-7 hours', '<p>Hill station drive through tea estates safffafdfdfadfdfd</p>', 'Tea gardens, Botanical gardens, Ooty Lake', 4500.00, 'http://localhost:8000/storage/images/routes/1772181321_gallery6.webp', 0, 1, '2026-02-12 20:24:39', '2026-02-27 03:05:21', 'Bangalore to Ooty Route - SSP Tourandtravels', 'Travel from Bangalore to Ooty with SSP Tourandtravels. Hill station drive through tea estates.', 'Bangalore to Ooty, route, cab booking, SSP Tourandtravels, tea gardens, Ooty Lake', 'https://ssptourandtravels.com/routes/bangalore-to-ooty'),
(6, 'Cochin to Munnar', 'cochin-to-munnar', 'Cochin', 'Munnar', 130, '4 hours', 'Scenic drive through spice plantations and tea estates', 'Tea plantations, Spice gardens, Waterfalls', 2800.00, 'https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?auto=format&fit=crop&w=600&q=80', 1, 1, '2026-02-12 20:24:39', '2026-02-22 23:32:09', 'Cochin to Munnar Route - SSP Tourandtravels', 'Travel from Cochin to Munnar with SSP Tourandtravels. Scenic drive through spice plantations and tea estates.', 'Cochin to Munnar, route, cab booking, SSP Tourandtravels, tea plantations, waterfalls', 'https://ssptourandtravels.com/routes/cochin-to-munnar');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('rO4ogidaQMVSgSj56GUepX86ijuNN9YgSvtqbHHV', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibURocVBxc3NSVWJrQThOMEhWUEZrbHV3a3A3b0FtNGFITEVKVjVaNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9yb3V0ZXMiO3M6NToicm91dGUiO3M6MTg6ImFkbWluLnJvdXRlcy5pbmRleCI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1772195317);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'text',
  `group` varchar(255) NOT NULL DEFAULT 'general',
  `label` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `type`, `group`, `label`, `description`, `order`, `created_at`, `updated_at`) VALUES
(1, 'contact_email', 'info@example.com', 'email', 'contact', 'Contact Email', 'Primary email address for contact', 1, '2026-02-23 00:51:42', '2026-02-23 00:51:42'),
(2, 'contact_phone', '+91 456 453 345', 'tel', 'contact', 'Contact Phone', 'Primary phone number for contact', 2, '2026-02-23 00:51:42', '2026-02-23 00:51:42'),
(3, 'contact_whatsapp', '+91 345 533 865', 'tel', 'contact', 'WhatsApp Number', 'WhatsApp number for quick contact', 3, '2026-02-23 00:51:42', '2026-02-23 00:51:42'),
(4, 'whatsapp_link', 'https://wa.me/919876543210', 'text', 'contact', 'WhatsApp Link', 'Full WhatsApp link for floating button', 4, '2026-02-23 00:51:42', '2026-02-23 00:51:42'),
(5, 'contact_address', '2nd Floor, MG Road, Near Metro Station, Connaught Place, New Delhi 110001, India', 'textarea', 'contact', 'Office Address', 'Complete office address', 5, '2026-02-23 00:51:42', '2026-02-23 00:51:42'),
(6, 'social_facebook', '#', 'text', 'social', 'Facebook URL', 'Facebook page link', 1, '2026-02-23 00:51:42', '2026-02-23 00:51:42'),
(7, 'social_instagram', '#', 'text', 'social', 'Instagram URL', 'Instagram profile link', 2, '2026-02-23 00:51:42', '2026-02-23 00:51:42'),
(8, 'social_linkedin', '#', 'text', 'social', 'LinkedIn URL', 'LinkedIn page link', 3, '2026-02-23 00:51:42', '2026-02-23 00:51:42'),
(9, 'social_youtube', '#', 'text', 'social', 'YouTube URL', 'YouTube channel link', 4, '2026-02-23 00:51:42', '2026-02-23 00:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'customer',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', NULL, 'customer', NULL, '$2y$12$YPd8lBvplt5vRELc5xAVqePYsnKFDlHeGFscadrq3ZtIxlbGd3lCS', NULL, '2026-02-21 03:56:16', '2026-02-21 03:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  `seating_capacity` int(11) NOT NULL DEFAULT 4,
  `luggage_capacity` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `features` text DEFAULT NULL,
  `has_ac` tinyint(1) NOT NULL DEFAULT 1,
  `price_per_km` decimal(8,2) NOT NULL,
  `price_per_day` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gallery` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`gallery`)),
  `is_luxury` tinyint(1) NOT NULL DEFAULT 0,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_canonical` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `slug`, `model`, `capacity`, `seating_capacity`, `luggage_capacity`, `description`, `features`, `has_ac`, `price_per_km`, `price_per_day`, `image`, `gallery`, `is_luxury`, `is_available`, `is_active`, `created_at`, `updated_at`, `meta_title`, `meta_description`, `meta_keywords`, `meta_canonical`) VALUES
(9, 'Swift Dzire', 'swift-dzire', '2024', 4, 4, 2, 'The Swift Dzire is a highly popular sedan, ideal for small families and business travelers alike. Known for its excellent fuel efficiency, smooth ride, and compact design, it easily navigates city traffic and highways. The spacious interior, plush seating, and ample boot space ensure comfort for both short and long journeys. With features like air conditioning, music system, and GPS navigation, the Swift Dzire offers a safe and enjoyable travel experience. Choose this car for affordable, reliable, and comfortable rides across the city or for outstation trips.', 'Music System\r\nClean Interior\r\nGPS Navigation', 1, 12.00, 2500.00, '/storage/images/vehicles/1772189631_maruti-suzuki-swift-side.jpeg', NULL, 0, 1, 1, '2026-02-27 05:20:24', '2026-02-27 05:23:51', 'Swift Dzire Sedan - SSP Tourandtravels', 'Swift Dzire is a comfortable sedan perfect for small families. Book with SSP Tourandtravels for best cab experience.', 'Swift Dzire, sedan, cab booking, SSP Tourandtravels, family car', 'https://ssptourandtravels.com/vehicles/swift-dzire'),
(10, 'Ertiga', 'ertiga', '2024', 7, 7, 3, 'The Ertiga is a versatile MPV designed for families and groups who value comfort and space. With its flexible seating arrangement, the Ertiga can accommodate up to seven passengers and still provide generous luggage space. The rear AC vents, comfortable seats, and smooth suspension make every journey pleasant, whether you are traveling within the city or heading out for a long road trip. Its modern design, fuel efficiency, and advanced safety features make the Ertiga a top choice for group travel and family vacations.', 'Music System\r\nRear AC\r\nComfortable Seats', 1, 14.00, 2800.00, '/storage/images/vehicles/1772189682_image-6-1.webp', NULL, 0, 1, 1, '2026-02-27 05:20:24', '2026-02-27 05:24:42', 'Ertiga MPV - SSP Tourandtravels', 'Ertiga is a spacious MPV for family and group travel. Book with SSP Tourandtravels for comfort and convenience.', 'Ertiga, MPV, cab booking, SSP Tourandtravels, group travel', 'https://ssptourandtravels.com/vehicles/ertiga'),
(11, 'Innova Crysta', 'innova-crysta', '2024', 7, 7, 4, 'The Innova Crysta stands out as a premium MPV, perfect for those who seek luxury and comfort on long journeys. Renowned for its powerful engine, smooth ride, and spacious cabin, the Crysta is ideal for families, business groups, and tourists. The plush captain seats, advanced infotainment system, and superior air conditioning ensure a relaxing experience for all passengers. With ample boot space and a reputation for reliability, the Innova Crysta is the preferred choice for outstation trips, airport transfers, and city tours.', 'Music System\r\nRear AC\r\nCaptain Seats\r\nLarge Boot Space', 1, 18.00, 3500.00, '/storage/images/vehicles/1772189742_innova-crysta.jpg', NULL, 0, 1, 1, '2026-02-27 05:20:24', '2026-02-27 05:25:42', 'Innova Crysta MPV - SSP Tourandtravels', 'Innova Crysta is a premium MPV for comfortable long journeys. Book with SSP Tourandtravels for luxury and space.', 'Innova Crysta, MPV, cab booking, SSP Tourandtravels, premium travel', 'https://ssptourandtravels.com/vehicles/innova-crysta'),
(12, 'Fortuner', 'fortuner', '2024', 7, 7, 4, 'The Fortuner is a premium SUV that combines power, luxury, and style, making it perfect for both business and leisure travel. Its robust build and advanced safety features provide confidence on every terrain, from city roads to rugged highways. The spacious and luxurious interior, leather seats, and state-of-the-art infotainment system offer unmatched comfort. With ample seating for seven and a large luggage compartment, the Fortuner is ideal for family vacations, corporate travel, and adventure trips, ensuring a memorable journey every time.', 'Premium Interior\r\nPowerful Engine\r\nAll Wheel Drive', 1, 28.00, 6000.00, '/storage/images/vehicles/1772189797_toyota-fortuner.jpg', NULL, 1, 1, 1, '2026-02-27 05:20:24', '2026-02-27 05:26:37', 'Fortuner SUV - SSP Tourandtravels', 'Fortuner is a luxury SUV for business and leisure travel. Book with SSP Tourandtravels for a premium ride.', 'Fortuner, SUV, cab booking, SSP Tourandtravels, luxury travel', 'https://ssptourandtravels.com/vehicles/fortuner'),
(13, 'Kia Carens', 'kia-carens', '2024', 7, 7, 3, 'The Kia Carens is a modern MPV that blends style, technology, and comfort for today’s travelers. Its spacious cabin, advanced touchscreen infotainment, and multiple seating configurations make it suitable for families and groups. Rear AC vents, ample legroom, and a smooth suspension system ensure a comfortable ride on any journey. The Carens is equipped with the latest safety features and offers excellent fuel efficiency, making it a smart choice for city commutes, outstation trips, and group tours.', 'Touchscreen Infotainment\r\nRear AC\r\nSpacious Cabin', 1, 16.00, 3200.00, '/storage/images/vehicles/1772189841_kia-carens.webp', NULL, 0, 1, 1, '2026-02-27 05:20:24', '2026-02-27 05:27:21', 'Kia Carens MPV - SSP Tourandtravels', 'Kia Carens is a modern MPV with advanced features. Book with SSP Tourandtravels for a stylish and comfortable ride.', 'Kia Carens, MPV, cab booking, SSP Tourandtravels, modern travel', 'https://ssptourandtravels.com/vehicles/kia-carens'),
(14, 'Tempo Traveler', 'tempo-traveler', '2024', 12, 12, 8, 'The Tempo Traveler is the go-to vehicle for large families, tour groups, and corporate outings. With seating for up to twelve passengers, it offers generous space, push-back seats, and a large luggage area for maximum comfort. The powerful air conditioning, music system, and smooth ride make long journeys enjoyable for everyone. Whether you are planning a pilgrimage, school trip, or family vacation, the Tempo Traveler ensures a safe, comfortable, and memorable travel experience for all passengers.', 'Push-back Seats\r\nMusic System\r\nLarge Luggage Space', 1, 22.00, 4500.00, '/storage/images/vehicles/1772189880_tempo-traveller.webp', NULL, 0, 1, 1, '2026-02-27 05:20:24', '2026-02-27 05:28:00', 'Tempo Traveler - SSP Tourandtravels', 'Tempo Traveler is ideal for group tours and family outings. Book with SSP Tourandtravels for spacious and comfortable travel.', 'Tempo Traveler, van, cab booking, SSP Tourandtravels, group travel', 'https://ssptourandtravels.com/vehicles/tempo-traveler');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cab_enquiries`
--
ALTER TABLE `cab_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_location_id_foreign` (`location_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `locations_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `routes_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicles_slug_unique` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cab_enquiries`
--
ALTER TABLE `cab_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

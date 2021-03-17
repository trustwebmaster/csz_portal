-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2021 at 08:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voyager`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2021-01-20 14:20:41', '2021-01-20 14:20:41'),
(2, NULL, 1, 'Category 2', 'category-2', '2021-01-20 14:20:41', '2021-01-20 14:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `company_members`
--

CREATE TABLE `company_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `chapter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 9, 'price', 'text', 'Price', 1, 1, 1, 1, 1, 1, '{}', 2),
(58, 9, 'payment_method', 'text', 'Payment Method', 0, 1, 1, 1, 1, 1, '{}', 3),
(59, 9, 'ISpaid', 'text', 'ISpaid', 0, 1, 1, 1, 1, 1, '{}', 4),
(60, 9, 'poll_url', 'text', 'Poll Url', 0, 1, 1, 1, 1, 1, '{}', 5),
(61, 9, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 6),
(62, 9, 'phone', 'text', 'Phone', 1, 1, 1, 1, 1, 1, '{}', 7),
(63, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(64, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(65, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(66, 10, 'chapter', 'text', 'Chapter', 1, 1, 1, 1, 1, 1, '{}', 2),
(67, 10, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(68, 10, 'interest_group', 'text', 'Interest Group', 1, 1, 1, 1, 1, 1, '{}', 4),
(69, 10, 'firstname', 'text', 'Firstname', 1, 1, 1, 1, 1, 1, '{}', 5),
(70, 10, 'surname', 'text', 'Surname', 1, 1, 1, 1, 1, 1, '{}', 6),
(71, 10, 'number', 'text', 'Number', 1, 1, 1, 1, 1, 1, '{}', 7),
(72, 10, 'password', 'text', 'Password', 1, 1, 1, 1, 1, 1, '{}', 8),
(73, 10, 'school_name', 'text', 'School Name', 1, 1, 1, 1, 1, 1, '{}', 9),
(74, 10, 'date_of_birth', 'text', 'Date Of Birth', 1, 1, 1, 1, 1, 1, '{}', 10),
(75, 10, 'address', 'text', 'Address', 1, 1, 1, 1, 1, 1, '{}', 11),
(76, 10, 'notes', 'text', 'Notes', 1, 1, 1, 1, 1, 1, '{}', 12),
(77, 10, 'school_id', 'text', 'School Id', 1, 1, 1, 1, 1, 1, '{}', 13),
(78, 10, 'national_id', 'text', 'National Id', 1, 1, 1, 1, 1, 1, '{}', 14),
(79, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 15),
(80, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 16),
(81, 10, 'current_year', 'text', 'Current Year', 1, 1, 1, 1, 1, 1, '{}', 17),
(82, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(83, 12, 'chapter', 'text', 'Chapter', 1, 1, 1, 1, 1, 1, '{}', 2),
(84, 12, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(85, 12, 'interest_group', 'text', 'Interest Group', 1, 1, 1, 1, 1, 1, '{}', 4),
(86, 12, 'firstname', 'text', 'Firstname', 1, 1, 1, 1, 1, 1, '{}', 5),
(87, 12, 'surname', 'text', 'Surname', 1, 1, 1, 1, 1, 1, '{}', 6),
(88, 12, 'number', 'text', 'Number', 1, 1, 1, 1, 1, 1, '{}', 7),
(89, 12, 'password', 'text', 'Password', 1, 1, 1, 1, 1, 1, '{}', 8),
(90, 12, 'school_name', 'text', 'School Name', 1, 1, 1, 1, 1, 1, '{}', 9),
(91, 12, 'date_of_birth', 'text', 'Date Of Birth', 1, 1, 1, 1, 1, 1, '{}', 10),
(92, 12, 'address', 'text', 'Address', 1, 1, 1, 1, 1, 1, '{}', 11),
(93, 12, 'notes', 'text', 'Notes', 1, 1, 1, 1, 1, 1, '{}', 12),
(94, 12, 'school_id', 'text', 'School Id', 1, 1, 1, 1, 1, 1, '{}', 13),
(95, 12, 'national_id', 'text', 'National Id', 1, 1, 1, 1, 1, 1, '{}', 14),
(96, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(97, 13, 'chapter', 'text', 'Chapter', 1, 1, 1, 1, 1, 1, '{}', 2),
(98, 13, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(99, 13, 'interest_group', 'text', 'Interest Group', 1, 1, 1, 1, 1, 1, '{}', 4),
(100, 13, 'firstname', 'text', 'Firstname', 1, 1, 1, 1, 1, 1, '{}', 5),
(101, 13, 'surname', 'text', 'Surname', 1, 1, 1, 1, 1, 1, '{}', 6),
(102, 13, 'number', 'text', 'Number', 1, 1, 1, 1, 1, 1, '{}', 7),
(103, 13, 'password', 'text', 'Password', 1, 1, 1, 1, 1, 1, '{}', 8),
(104, 13, 'school_name', 'text', 'School Name', 1, 1, 1, 1, 1, 1, '{}', 9),
(105, 13, 'date_of_birth', 'text', 'Date Of Birth', 1, 1, 1, 1, 1, 1, '{}', 10),
(106, 13, 'address', 'text', 'Address', 1, 1, 1, 1, 1, 1, '{}', 11),
(107, 13, 'notes', 'text', 'Notes', 1, 1, 1, 1, 1, 1, '{}', 12),
(108, 13, 'school_id', 'text', 'School Id', 1, 1, 1, 1, 1, 1, '{}', 13),
(109, 13, 'national_id', 'text', 'National Id', 1, 1, 1, 1, 1, 1, '{}', 14),
(110, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(111, 14, 'chapter', 'text', 'Chapter', 1, 1, 1, 1, 1, 1, '{}', 2),
(112, 14, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(113, 14, 'interest_group', 'text', 'Interest Group', 1, 1, 1, 1, 1, 1, '{}', 4),
(114, 14, 'firstname', 'text', 'Firstname', 1, 1, 1, 1, 1, 1, '{}', 5),
(115, 14, 'surname', 'text', 'Surname', 1, 1, 1, 1, 1, 1, '{}', 6),
(116, 14, 'number', 'text', 'Number', 1, 1, 1, 1, 1, 1, '{}', 7),
(117, 14, 'password', 'text', 'Password', 1, 1, 1, 1, 1, 1, '{}', 8),
(118, 14, 'school_name', 'text', 'School Name', 1, 1, 1, 1, 1, 1, '{}', 9),
(119, 14, 'date_of_birth', 'text', 'Date Of Birth', 1, 1, 1, 1, 1, 1, '{}', 10),
(120, 14, 'address', 'text', 'Address', 1, 1, 1, 1, 1, 1, '{}', 11),
(121, 14, 'notes', 'text', 'Notes', 1, 1, 1, 1, 1, 1, '{}', 12),
(122, 14, 'school_id', 'text', 'School Id', 1, 1, 1, 1, 1, 1, '{}', 13),
(123, 14, 'national_id', 'text', 'National Id', 1, 1, 1, 1, 1, 1, '{}', 14),
(124, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 15),
(125, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 16);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2021-01-20 14:20:35', '2021-01-20 14:20:35'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2021-01-20 14:20:35', '2021-01-20 14:20:35'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2021-01-20 14:20:35', '2021-01-20 14:20:35'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2021-01-20 14:20:40', '2021-01-20 14:20:40'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2021-01-20 14:20:41', '2021-01-20 14:20:41'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(9, 'orders', 'orders', 'Order', 'Orders', NULL, 'App\\Models\\Order', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-01-21 02:09:29', '2021-01-21 02:09:29'),
(10, 'student_members', 'student-members', 'Student Member', 'Student Members', NULL, 'App\\StudentMember', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-01-21 02:10:19', '2021-01-21 02:10:19'),
(12, 'company_members', 'company-members', 'Company Member', 'Company Members', NULL, 'App\\CompanyMember', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-01-21 04:33:20', '2021-01-21 04:33:20'),
(13, 'graduate_members', 'graduate-members', 'Graduate Member', 'Graduate Members', NULL, 'App\\GraduateMember', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-01-21 04:33:46', '2021-01-21 04:33:46'),
(14, 'professional_members', 'professional-members', 'Professional Member', 'Professional Members', NULL, 'App\\ProfessionalMember', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-01-21 04:33:58', '2021-01-21 04:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `graduate_members`
--

CREATE TABLE `graduate_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `chapter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interest_groups`
--

CREATE TABLE `interest_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-01-20 14:20:36', '2021-01-20 14:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2021-01-20 14:20:36', '2021-01-20 14:20:36', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 9, '2021-01-20 14:20:36', '2021-01-21 04:34:21', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2021-01-20 14:20:36', '2021-01-20 14:20:36', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2021-01-20 14:20:36', '2021-01-20 14:20:36', 'voyager.roles.index', NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2021-01-20 14:20:36', '2021-01-20 14:20:36', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2021-01-20 14:20:36', '2021-01-20 14:20:36', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2021-01-20 14:20:36', '2021-01-20 14:20:36', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2021-01-20 14:20:36', '2021-01-20 14:20:36', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2021-01-20 14:20:36', '2021-01-21 04:34:21', 'voyager.settings.index', NULL),
(11, 1, 'Tools', '', '_self', 'voyager-categories', '#000000', NULL, 11, '2021-01-20 14:20:41', '2021-01-21 04:34:21', NULL, ''),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2021-01-20 14:20:44', '2021-01-20 14:20:44', 'voyager.hooks', NULL),
(15, 1, 'Database', '', '_self', 'voyager-data', '#000000', NULL, 10, '2021-01-21 02:00:36', '2021-01-21 04:34:21', 'voyager.database.index', 'null'),
(16, 1, 'BREAD', '', '_self', 'voyager-bread', '#000000', NULL, 12, '2021-01-21 02:02:40', '2021-01-21 04:34:21', 'voyager.bread.index', 'null'),
(17, 1, 'MENU BUILDER', '', '_self', 'voyager-dot-3', '#000000', NULL, 15, '2021-01-21 02:04:32', '2021-01-21 04:38:09', 'voyager.menus.index', 'null'),
(18, 1, 'COMPASS', '', '_self', 'voyager-helm', '#000000', NULL, 13, '2021-01-21 02:05:20', '2021-01-21 04:34:21', 'voyager.compass.index', 'null'),
(19, 1, 'Orders', '', '_self', 'voyager-credit-card', '#000000', NULL, 8, '2021-01-21 02:09:29', '2021-01-21 04:34:21', 'voyager.orders.index', 'null'),
(20, 1, 'Student Members', '', '_self', 'voyager-people', '#000000', NULL, 4, '2021-01-21 02:10:20', '2021-01-21 04:24:57', 'voyager.student-members.index', 'null'),
(21, 1, 'Company Members', '', '_self', 'voyager-company', '#000000', NULL, 5, '2021-01-21 04:33:20', '2021-01-21 04:35:37', 'voyager.company-members.index', 'null'),
(22, 1, 'Graduate Members', '', '_self', 'voyager-people', '#000000', NULL, 6, '2021-01-21 04:33:47', '2021-01-21 04:37:32', 'voyager.graduate-members.index', 'null'),
(23, 1, 'Professional Members', '', '_self', 'voyager-people', '#000000', NULL, 7, '2021-01-21 04:33:58', '2021-01-21 04:37:10', 'voyager.professional-members.index', 'null');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2018_07_21_195626_create_members_table', 1),
(12, '2020_12_16_230619_create_veryfications_table', 1),
(13, '2020_12_17_073154_create_orders_table', 1),
(14, '2020_12_18_034045_create_student_members_table', 1),
(15, '2021_01_20_004328_add_current_year_to_student_members_table', 1),
(16, '2016_01_01_000000_add_voyager_user_fields', 2),
(17, '2016_01_01_000000_create_data_types_table', 2),
(18, '2016_05_19_173453_create_menu_table', 2),
(19, '2016_10_21_190000_create_roles_table', 2),
(20, '2016_10_21_190000_create_settings_table', 2),
(21, '2016_11_30_135954_create_permission_table', 2),
(22, '2016_11_30_141208_create_permission_role_table', 2),
(23, '2016_12_26_201236_data_types__add__server_side', 2),
(24, '2017_01_13_000000_add_route_to_menu_items_table', 2),
(25, '2017_01_14_005015_create_translations_table', 2),
(26, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 2),
(27, '2017_03_06_000000_add_controller_to_data_types_table', 2),
(28, '2017_04_21_000000_add_order_to_data_rows_table', 2),
(29, '2017_07_05_210000_add_policyname_to_data_types_table', 2),
(30, '2017_08_05_000000_add_group_to_settings_table', 2),
(31, '2017_11_26_013050_add_user_role_relationship', 2),
(32, '2017_11_26_015000_create_user_roles_table', 2),
(33, '2018_03_11_000000_add_user_settings', 2),
(34, '2018_03_14_000000_add_details_to_data_types_table', 2),
(35, '2018_03_16_000000_make_settings_value_nullable', 2),
(36, '2016_01_01_000000_create_pages_table', 3),
(37, '2016_01_01_000000_create_posts_table', 3),
(38, '2016_02_15_204651_create_categories_table', 3),
(39, '2017_04_11_000000_alter_post_nullable_fields_table', 3),
(43, '2021_01_21_062557_create_graduate_members_table', 4),
(44, '2021_01_21_062623_create_professional_members_table', 4),
(45, '2021_01_21_062652_create_company_members_table', 4),
(46, '2021_03_13_204352_create_interest_groups_table', 5),
(47, '2021_03_13_210210_create_user_documents_table', 6),
(48, '2021_03_14_063809_add_role_to_users_table', 7),
(49, '2021_03_15_222354_add_status_to_users_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ISpaid` tinyint(1) DEFAULT NULL,
  `poll_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `price`, `payment_method`, `ISpaid`, `poll_url`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 1, 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=c6feef3f-525d-424e-8fe1-18304d1aeb5d', 'tmusikiri43@gmail.com', '0771111111', '2021-01-20 13:51:06', '2021-01-20 13:51:24'),
(2, 2, NULL, 1, 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=992fcc60-2a1d-48fd-8260-a594125b9052', 'tmusikiri43@gmail.com', '0771111111', '2021-01-20 14:47:06', '2021-01-20 14:47:22'),
(3, 2, NULL, 1, 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=13110656-5f4d-4061-8aaf-764ebce81375', 'h180376n@hit.ac.zw', '0771111111', '2021-01-21 05:01:18', '2021-01-21 05:01:34'),
(4, 2, NULL, NULL, 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=72e87eaa-3b7e-410e-993f-c49571b63c5f', 'csz@test.com', '0771111111', '2021-01-21 07:39:15', '2021-01-21 07:39:21'),
(5, 2, NULL, 1, 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=7ae9efd3-4549-4f91-b396-08fe3b1333c0', 'csz@test.com', '0771111111', '2021-01-21 07:42:29', '2021-01-21 07:42:45'),
(6, 2, NULL, 1, 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=e6fa3cf7-4098-4db2-a00e-50214aada226', 'csz@member.com', '0771111111', '2021-01-21 08:23:16', '2021-01-21 08:23:32'),
(7, 2, NULL, NULL, 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=af21de67-afcd-4033-a330-041f31fb8776', 'laravel@test.com', '0771111111', '2021-01-21 08:29:36', '2021-01-21 08:29:37'),
(8, 2, NULL, NULL, 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=2170b178-b149-4f91-9038-1b6bae1fc344', 'laravel@test.com', '0771111111', '2021-01-21 08:30:37', '2021-01-21 08:30:37'),
(9, 2, NULL, 1, 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=5eb4f895-843a-45bc-b05b-68c9821e7c30', 'laravel@test.com', '0771111111', '2021-01-21 08:31:24', '2021-01-21 08:37:29'),
(10, 2, NULL, NULL, NULL, 'blaz@loyd.com', '077111111', '2021-01-21 08:41:44', '2021-01-21 08:41:44'),
(11, 2, NULL, 1, 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=c2e7b040-5fdb-448a-bb57-5e2e1660c895', 'blaz@loyd.com', '0771111111', '2021-01-21 08:43:47', '2021-01-21 08:44:03'),
(12, 2, NULL, 1, 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=25dba49f-8ae0-445c-9105-8d4ce781422f', 'freddynd@gmail.com', '0772147382', '2021-01-21 09:16:47', '2021-01-21 09:17:03'),
(13, 2, NULL, 1, 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=47d40a0e-9b4e-4941-a612-4bb147759249', 'tmusikiri43@gmail.com', '0771111111', '2021-03-13 19:52:19', '2021-03-13 19:52:35'),
(14, 2, NULL, 1, 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=c43241d2-0aba-4339-b52f-7eb0e9c96699', 'tmusikiri43@gmail.com', '0771111111', '2021-03-17 05:34:38', '2021-03-17 05:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2021-01-20 14:20:42', '2021-01-20 14:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_hooks', NULL, '2021-01-20 14:17:29', '2021-01-20 14:17:29'),
(2, 'browse_admin', NULL, '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(3, 'browse_bread', NULL, '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(4, 'browse_database', NULL, '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(5, 'browse_media', NULL, '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(6, 'browse_compass', NULL, '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(7, 'browse_menus', 'menus', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(8, 'read_menus', 'menus', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(9, 'edit_menus', 'menus', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(10, 'add_menus', 'menus', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(11, 'delete_menus', 'menus', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(12, 'browse_roles', 'roles', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(13, 'read_roles', 'roles', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(14, 'edit_roles', 'roles', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(15, 'add_roles', 'roles', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(16, 'delete_roles', 'roles', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(17, 'browse_users', 'users', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(18, 'read_users', 'users', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(19, 'edit_users', 'users', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(20, 'add_users', 'users', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(21, 'delete_users', 'users', '2021-01-20 14:20:37', '2021-01-20 14:20:37'),
(22, 'browse_settings', 'settings', '2021-01-20 14:20:37', '2021-01-20 14:20:37'),
(23, 'read_settings', 'settings', '2021-01-20 14:20:37', '2021-01-20 14:20:37'),
(24, 'edit_settings', 'settings', '2021-01-20 14:20:37', '2021-01-20 14:20:37'),
(25, 'add_settings', 'settings', '2021-01-20 14:20:37', '2021-01-20 14:20:37'),
(26, 'delete_settings', 'settings', '2021-01-20 14:20:37', '2021-01-20 14:20:37'),
(27, 'browse_categories', 'categories', '2021-01-20 14:20:41', '2021-01-20 14:20:41'),
(28, 'read_categories', 'categories', '2021-01-20 14:20:41', '2021-01-20 14:20:41'),
(29, 'edit_categories', 'categories', '2021-01-20 14:20:41', '2021-01-20 14:20:41'),
(30, 'add_categories', 'categories', '2021-01-20 14:20:41', '2021-01-20 14:20:41'),
(31, 'delete_categories', 'categories', '2021-01-20 14:20:41', '2021-01-20 14:20:41'),
(32, 'browse_posts', 'posts', '2021-01-20 14:20:41', '2021-01-20 14:20:41'),
(33, 'read_posts', 'posts', '2021-01-20 14:20:41', '2021-01-20 14:20:41'),
(34, 'edit_posts', 'posts', '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(35, 'add_posts', 'posts', '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(36, 'delete_posts', 'posts', '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(37, 'browse_pages', 'pages', '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(38, 'read_pages', 'pages', '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(39, 'edit_pages', 'pages', '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(40, 'add_pages', 'pages', '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(41, 'delete_pages', 'pages', '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(42, 'browse_orders', 'orders', '2021-01-21 02:09:29', '2021-01-21 02:09:29'),
(43, 'read_orders', 'orders', '2021-01-21 02:09:29', '2021-01-21 02:09:29'),
(44, 'edit_orders', 'orders', '2021-01-21 02:09:29', '2021-01-21 02:09:29'),
(45, 'add_orders', 'orders', '2021-01-21 02:09:29', '2021-01-21 02:09:29'),
(46, 'delete_orders', 'orders', '2021-01-21 02:09:29', '2021-01-21 02:09:29'),
(47, 'browse_student_members', 'student_members', '2021-01-21 02:10:20', '2021-01-21 02:10:20'),
(48, 'read_student_members', 'student_members', '2021-01-21 02:10:20', '2021-01-21 02:10:20'),
(49, 'edit_student_members', 'student_members', '2021-01-21 02:10:20', '2021-01-21 02:10:20'),
(50, 'add_student_members', 'student_members', '2021-01-21 02:10:20', '2021-01-21 02:10:20'),
(51, 'delete_student_members', 'student_members', '2021-01-21 02:10:20', '2021-01-21 02:10:20'),
(52, 'browse_company_members', 'company_members', '2021-01-21 04:33:20', '2021-01-21 04:33:20'),
(53, 'read_company_members', 'company_members', '2021-01-21 04:33:20', '2021-01-21 04:33:20'),
(54, 'edit_company_members', 'company_members', '2021-01-21 04:33:20', '2021-01-21 04:33:20'),
(55, 'add_company_members', 'company_members', '2021-01-21 04:33:20', '2021-01-21 04:33:20'),
(56, 'delete_company_members', 'company_members', '2021-01-21 04:33:20', '2021-01-21 04:33:20'),
(57, 'browse_graduate_members', 'graduate_members', '2021-01-21 04:33:47', '2021-01-21 04:33:47'),
(58, 'read_graduate_members', 'graduate_members', '2021-01-21 04:33:47', '2021-01-21 04:33:47'),
(59, 'edit_graduate_members', 'graduate_members', '2021-01-21 04:33:47', '2021-01-21 04:33:47'),
(60, 'add_graduate_members', 'graduate_members', '2021-01-21 04:33:47', '2021-01-21 04:33:47'),
(61, 'delete_graduate_members', 'graduate_members', '2021-01-21 04:33:47', '2021-01-21 04:33:47'),
(62, 'browse_professional_members', 'professional_members', '2021-01-21 04:33:58', '2021-01-21 04:33:58'),
(63, 'read_professional_members', 'professional_members', '2021-01-21 04:33:58', '2021-01-21 04:33:58'),
(64, 'edit_professional_members', 'professional_members', '2021-01-21 04:33:58', '2021-01-21 04:33:58'),
(65, 'add_professional_members', 'professional_members', '2021-01-21 04:33:58', '2021-01-21 04:33:58'),
(66, 'delete_professional_members', 'professional_members', '2021-01-21 04:33:58', '2021-01-21 04:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-01-20 14:20:42', '2021-01-20 14:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `professional_members`
--

CREATE TABLE `professional_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `chapter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(2, 'user', 'Normal User', '2021-01-20 14:20:36', '2021-01-20 14:20:36'),
(3, 'Secretary', 'secretary', '2021-01-21 09:28:45', '2021-01-21 09:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `student_members`
--

CREATE TABLE `student_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `chapter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `current_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_members`
--

INSERT INTO `student_members` (`id`, `chapter`, `email`, `firstname`, `surname`, `number`, `password`, `school_name`, `date_of_birth`, `address`, `notes`, `created_at`, `updated_at`, `current_year`, `national_id`, `school_id`, `interest_group`) VALUES
(1, 'Harare', 'tmusikiri43@gmail.com', 'Trust', 'Musikiri', '034567', '$2y$10$xGH6gnTNDYjgYcPF8Q4CmuGQKrt7b42OVTUMzUZm.zfUdv/zgkVDa', 'Harare Instistute Of Technology', '2021-01-21', '1963 Hobhouse 2', 'l wanna explore', '2021-01-20 13:51:06', '2021-01-20 13:51:06', 'Final Year', NULL, NULL, NULL),
(2, 'Harare', 'tmusikiri43@gmail.com', 'test', 'test', '345678', '$2y$10$FsyFb7XpEqA9t4mqGqNGeuRr6UZFing0ceM8rPzcAPOvQ8rF94QJS', 'sakubva 1 high', '2021-01-21', 'efe', 'efef', '2021-01-20 14:46:42', '2021-01-20 14:46:42', 'Final Year', NULL, NULL, NULL),
(3, 'Harare', 'tmusikiri43@gmail.com', 'test', 'test', '345678', '$2y$10$1VySboLmiRFFP1ABhi/gL.zXpdGfld6xN3cVkWOO0wcHC80yX9p1i', 'sakubva 1 high', '2021-01-21', 'efe', 'efef', '2021-01-20 14:47:06', '2021-01-20 14:47:06', 'Final Year', NULL, NULL, NULL),
(4, 'Kwekwe', 'h180376n@hit.ac.zw', 'test', 'test', '456789', '$2y$10$lo.0AxGUUN5ZUJPgiDVI2eQVJyyVhgUVOyt0x2eRm2SQA7Mw37vEe', 'Harare Instistute Of Technology', '2021-01-22', 'test', 'test', '2021-01-21 05:01:17', '2021-01-21 05:01:17', 'Final Year', NULL, NULL, NULL),
(6, 'Harare', 'csz@test.com', 'CSZ', 'Membership', '0456785678', '$2y$10$ZDke6BNwLTRoY3vgzCixDeKMDnJEYu21Eog02ViaPDqZWRkiK3i2y', 'Harare Instistute Of Technology', '2021-01-22', 'test', 'test', '2021-01-21 07:42:29', '2021-01-21 07:42:29', 'Final Year', NULL, NULL, NULL),
(7, 'Kwekwe', 'csz@member.com', 'csz', 'portal', '03456789', '$2y$10$kLeB7ByD/CgwkAtvdPmCE.ZJPI4JnCE/hHAojPRDwtUM0uLenBX1C', 'Harare Instistute Of Technology', '2021-01-22', 'test', 'test', '2021-01-21 08:23:16', '2021-01-21 08:23:16', 'Final Year', NULL, NULL, NULL),
(11, 'Harare', 'blaz@loyd.com', 'mukoma', 'lyod', '456789', '$2y$10$eW4HeneCyFfIEplykNOrDeY1FK1ba9r7W8YaAJ.E/OOm2V4YaGC8K', 'Harare Instistute Of Technology', '2021-01-22', 'test', 'test', '2021-01-21 08:41:44', '2021-01-21 08:41:44', 'Final Year', NULL, NULL, NULL),
(12, 'Harare', 'blaz@loyd.com', 'mukoma', 'lyod', '456789', '$2y$10$/u7y3pdlwGGeWGklB.B5he.z0eo3ROe0/eoWFj2U4gOxGcTONP6Ge', 'Harare Instistute Of Technology', '2021-01-22', 'test', 'test', '2021-01-21 08:43:15', '2021-01-21 08:43:15', 'Final Year', NULL, NULL, NULL),
(13, 'Harare', 'blaz@loyd.com', 'mukoma', 'lyod', '456789', '$2y$10$pHFaj2TC1P128hufz9ERIOtiL2O4Bg.fYXgzCPuiN66p9zWQFyIcy', 'Harare Instistute Of Technology', '2021-01-22', 'test', 'test', '2021-01-21 08:43:47', '2021-01-21 08:43:47', 'Final Year', NULL, NULL, NULL),
(14, 'Bulawayo', 'freddynd@gmail.com', 'Mr Trust', 'Ndlovu', '07777777', '$2y$10$IY5OMrgeK2vaF5ss0193CusAg.7wnUrhu2RwwLM21ERlGlebT9XtO', 'Harare Instistute Of Technology', '2021-01-20', '1963 hobhouse 2', 'l wanna explore', '2021-01-21 09:16:47', '2021-01-24 07:52:51', 'Final Year', NULL, NULL, NULL),
(15, 'MUTARE', 'tmusikiri43@gmail.com', 'trust', 'musiiri', '0782504742', '$2y$10$U/DeqO9vYTeJTsTadm7Inubop.2QOj4/7U9arhUZLd51HuUYXAmtC', 'sakubva 1 high', '2021-03-12', 'Harare Institute of Technology (HIT)., Lawley Ave, Harare\r\nHostel 2', 'l want to explore', '2021-03-13 19:29:22', '2021-03-13 19:29:22', 'Final Year', '/home/dev_cs/github_repositories/voyager/storage/app/public/Student Documents/Student-musiiri-png', '/home/dev_cs/github_repositories/voyager/storage/app/public/Student Documents/Membermusiiri-png', 'trust ,english ,teacher'),
(16, 'MUTARE', 'tmusikiri43@gmail.com', 'trust', 'musiiri', '0782504742', '$2y$10$8oR1qsWw3gYCILdONru3YudubXTLdtMMwPFMl8EwKqnrdhfRr0Zdq', 'sakubva 1 high', '2021-03-12', 'Harare Institute of Technology (HIT)., Lawley Ave, Harare\r\nHostel 2', 'l want to explore', '2021-03-13 19:51:10', '2021-03-13 19:51:10', 'Final Year', '/home/dev_cs/github_repositories/voyager/storage/app/public/Student Documents/Student-musiiri-png', '/home/dev_cs/github_repositories/voyager/storage/app/public/Student Documents/Membermusiiri-png', 'trust ,english ,teacher'),
(17, 'MUTARE', 'tmusikiri43@gmail.com', 'trust', 'musiiri', '0782504742', '$2y$10$9PYrBsbpa7yNpEGAH.95j.mC7eT7sdyBXfkXzCyIiUtcSAsRFMCAq', 'sakubva 1 high', '2021-03-12', 'Harare Institute of Technology (HIT)., Lawley Ave, Harare\r\nHostel 2', 'l want to explore', '2021-03-13 19:51:51', '2021-03-13 19:51:51', 'Final Year', '/home/dev_cs/github_repositories/voyager/storage/app/public/Student Documents/Student-musiiri-png', '/home/dev_cs/github_repositories/voyager/storage/app/public/Student Documents/Membermusiiri-png', 'trust ,english ,teacher'),
(18, 'MUTARE', 'tmusikiri43@gmail.com', 'trust', 'musiiri', '0782504742', '$2y$10$Lfcw2LqfZj8Kc5qweQJ.2OZwjo0aiHM8fMd.vB0AmSU9Eit8rFUna', 'sakubva 1 high', '2021-03-12', 'Harare Institute of Technology (HIT)., Lawley Ave, Harare\r\nHostel 2', 'l want to explore', '2021-03-13 19:52:19', '2021-03-13 19:52:19', 'Final Year', '/home/dev_cs/github_repositories/voyager/storage/app/public/Student Documents/Student-musiiri-png', '/home/dev_cs/github_repositories/voyager/storage/app/public/Student Documents/Membermusiiri-png', 'trust ,english ,teacher'),
(19, 'KWEKWE', 'tmusikiri43@gmail.com', 'truth', 'nyamu', '0782504742', '$2y$10$mrHNFnuq4JV5v7G13.bb4eEcC4b1Wbw2VzQEFIS6H9KzIFDzlISga', 'sakubva 1 high', '2021-03-11', 'Harare Institute of Technology (HIT)., Lawley Ave, Harare\r\nHostel 2', 'l want learn', '2021-03-17 05:34:38', '2021-03-17 05:34:38', 'Final Year', '/home/dev_cs/github_repositories/voyager/storage/app/public/Student Documents/Student-nyamu-jpeg', '/home/dev_cs/github_repositories/voyager/storage/app/public/Student Documents/Membernyamu-jpg', 'chess');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2021-01-20 14:20:42', '2021-01-20 14:20:42'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2021-01-20 14:20:43', '2021-01-20 14:20:43'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2021-01-20 14:20:43', '2021-01-20 14:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `role`, `status`) VALUES
(4, 2, 'Trust', 'h180376n@hit.ac.zw', 'users/default.png', '$2y$10$lo.0AxGUUN5ZUJPgiDVI2eQVJyyVhgUVOyt0x2eRm2SQA7Mw37vEe', NULL, '{\"locale\":\"en\"}', '2021-01-21 05:01:17', '2021-01-21 05:09:56', 'user', 'pending'),
(5, 1, 'admin', 'admin@admin.com', 'users/January2021/Fui0jzkuzXYqrZKFt9iJ.png', '$2y$10$QSZQuJpsWeCPP0pApeJelOpnuxRWXceqxb3PJ3Vp3CX1jdjLlAN5y', NULL, '{\"locale\":\"en\"}', '2021-01-21 05:08:44', '2021-01-21 06:22:00', 'user', 'pending'),
(7, 2, 'CSZMembership', 'csz@test.com', 'users/default.png', '$2y$10$ZDke6BNwLTRoY3vgzCixDeKMDnJEYu21Eog02ViaPDqZWRkiK3i2y', NULL, NULL, '2021-01-21 07:42:29', '2021-01-21 07:42:29', 'user', 'pending'),
(8, 2, 'cszportal', 'csz@member.com', 'users/default.png', '123456789', NULL, NULL, '2021-01-21 08:23:16', '2021-01-21 08:23:16', 'user', 'pending'),
(14, 2, 'mukomalyod', 'blaz@loyd.com', 'users/default.png', '$2y$10$pHFaj2TC1P128hufz9ERIOtiL2O4Bg.fYXgzCPuiN66p9zWQFyIcy', NULL, NULL, '2021-01-21 08:43:47', '2021-01-21 08:43:47', 'user', 'pending'),
(15, 2, 'WisdomMusikiri', 'freddynd@gmail.com', 'users/default.png', '$2y$10$IY5OMrgeK2vaF5ss0193CusAg.7wnUrhu2RwwLM21ERlGlebT9XtO', NULL, NULL, '2021-01-21 09:16:47', '2021-01-21 09:16:47', 'user', 'pending'),
(19, NULL, 'trustmusiiri', 'tmusikiri143@gmail.com', 'users/default.png', '$2y$10$Lfcw2LqfZj8Kc5qweQJ.2OZwjo0aiHM8fMd.vB0AmSU9Eit8rFUna', NULL, NULL, '2021-03-13 19:52:19', '2021-03-13 19:52:19', 'user', 'pending'),
(20, NULL, 'truthnyamu', 'tmusikiri43@gmail.com', 'users/default.png', '$2y$10$mrHNFnuq4JV5v7G13.bb4eEcC4b1Wbw2VzQEFIS6H9KzIFDzlISga', NULL, NULL, '2021-03-17 05:34:38', '2021-03-17 05:34:38', 'user', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_documents`
--

CREATE TABLE `user_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `veryfications`
--

CREATE TABLE `veryfications` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `company_members`
--
ALTER TABLE `company_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `graduate_members`
--
ALTER TABLE `graduate_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest_groups`
--
ALTER TABLE `interest_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `professional_members`
--
ALTER TABLE `professional_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `student_members`
--
ALTER TABLE `student_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_documents`
--
ALTER TABLE `user_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Indexes for table `veryfications`
--
ALTER TABLE `veryfications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_members`
--
ALTER TABLE `company_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `graduate_members`
--
ALTER TABLE `graduate_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interest_groups`
--
ALTER TABLE `interest_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `professional_members`
--
ALTER TABLE `professional_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_members`
--
ALTER TABLE `student_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_documents`
--
ALTER TABLE `user_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `veryfications`
--
ALTER TABLE `veryfications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

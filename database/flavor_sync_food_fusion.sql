-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 03, 2025 at 07:28 PM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flavor_sync_food_fusion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-mg@gmail.com|127.0.0.1', 'i:1;', 1759465222),
('laravel-cache-mg@gmail.com|127.0.0.1:timer', 'i:1759465222;', 1759465222),
('laravel-cache-test@gmail.com|127.0.0.1', 'i:1;', 1759382377),
('laravel-cache-test@gmail.com|127.0.0.1:timer', 'i:1759382377;', 1759382377);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `community_categories`
--

CREATE TABLE `community_categories` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `community_categories`
--

INSERT INTO `community_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
('18d11389-5074-4e3d-988c-61f27f8e5903', 'Budget-Friendly', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('60cafc3d-89c5-4a5f-86a5-2e7a89ba467f', 'Healthy & Wellness', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('67e90173-c0fc-4fc8-b279-e396966682e2', 'Quick & Easy', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('798efb2f-aea8-489c-af5c-9a0afb0d5024', 'Global Flavors', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('88b09c87-260b-4d35-a611-30385c6cebb0', 'Comfort Food', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('a388b571-4bb2-4b23-b0a2-10db22219b6b', 'Desserts & Baking', '2025-10-01 22:47:54', '2025-10-01 22:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `community_comments`
--

CREATE TABLE `community_comments` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `post_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `community_comments`
--

INSERT INTO `community_comments` (`id`, `body`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
('4a5c3dcb-0d13-4363-9674-7f970f89a22c', 'Perfect Recipe', 3, '10061157-611a-49cd-a60b-98932d6b0746', '2025-10-02 19:43:44', '2025-10-02 19:43:44'),
('a7105da2-83f3-4ad1-9cb2-6fa4acad9133', 'So Good!!', 3, '10061157-611a-49cd-a60b-98932d6b0746', '2025-10-02 19:43:33', '2025-10-02 19:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `community_followers`
--

CREATE TABLE `community_followers` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `follower_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `community_followers`
--

INSERT INTO `community_followers` (`id`, `user_id`, `follower_id`, `created_at`) VALUES
('dd5704d4-2e05-41b6-aeeb-8d094c64a958', 1, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `community_likes`
--

CREATE TABLE `community_likes` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `community_likes`
--

INSERT INTO `community_likes` (`id`, `post_id`, `user_id`, `created_at`) VALUES
('3c7dedc8-9422-4c36-8fb0-8f997dd85d84', '10061157-611a-49cd-a60b-98932d6b0746', 3, '2025-10-02 19:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `community_posts`
--

CREATE TABLE `community_posts` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `community_posts`
--

INSERT INTO `community_posts` (`id`, `image`, `title`, `slug`, `content`, `category_id`, `user_id`, `published_at`, `created_at`, `updated_at`) VALUES
('0dd63125-53df-4708-a6d4-1d280647926e', 'posts/Benefits_Mediterranean.jpeg', 'The Benefits of a Mediterranean Diet', 'benefits-of-mediterranean-diet', 'The Mediterranean diet is one of the most researched eating patterns in the world. Learn how it supports heart health, boosts energy, and introduces flavorful meals inspired by the Mediterranean region.', '60cafc3d-89c5-4a5f-86a5-2e7a89ba467f', 1, '2025-10-01 22:47:54', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('10061157-611a-49cd-a60b-98932d6b0746', 'posts/Cozy_Soups.jpg', 'Cozy Soups to Warm You Up This Winter', 'cozy-soups-for-winter', 'Nothing beats a warm bowl of soup on a chilly day. From creamy tomato to hearty chicken noodle, discover comforting soup recipes perfect for cold evenings.', '88b09c87-260b-4d35-a611-30385c6cebb0', 1, '2025-10-01 22:47:54', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('160174ad-0e67-4a86-8832-be0a5bbd263e', 'posts/Chocalate_Cake_Impresses_Always.webp', 'Chocolate Cake That Always Impresses', 'chocolate-cake-that-impresses', 'Learn how to make a moist, rich chocolate cake that is guaranteed to wow your friends and family. This simple recipe is a crowd-pleaser for any occasion.', 'a388b571-4bb2-4b23-b0a2-10db22219b6b', 1, '2025-10-01 22:47:54', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('513fb2be-0e12-4e8a-8097-e0c1cf65ed6d', 'posts/Budget_Friendly_Dinners.jpeg', 'Budget-Friendly Dinners Under $10', 'budget-friendly-dinners-under-10', 'Eating well doesn’t have to break the bank. These budget-friendly meals are delicious, nutritious, and cost less than $10 per serving.', '18d11389-5074-4e3d-988c-61f27f8e5903', 1, '2025-10-01 22:47:54', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('a6066867-2681-4bb1-9ab7-df1bebf3e745', 'posts/5_BreakFast_Idea.jpg', '5 Easy Breakfast Ideas for Busy Mornings', '5-easy-breakfast-ideas', 'Start your day right with these quick and healthy breakfast options. From overnight oats to smoothie bowls, these recipes will keep you full and energized without taking up much of your time.', '67e90173-c0fc-4fc8-b279-e396966682e2', 1, '2025-10-01 22:47:54', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('bd6dbf33-0820-44de-9f77-f23f56767000', 'posts/Exploring_Thai_Street_Food.webp', 'Exploring Thai Street Food', 'exploring-thai-street-food', 'Thailand’s street food scene is vibrant, diverse, and incredibly flavorful. Here’s a guide to must-try dishes like Pad Thai, Som Tum, and Mango Sticky Rice.', '798efb2f-aea8-489c-af5c-9a0afb0d5024', 1, '2025-10-01 22:47:54', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('cc62b741-bf23-4776-91fe-9e906c8be552', 'posts/Tips_For_Healthier_Week.jpg', 'Meal Prep Tips for a Healthier Week', 'meal-prep-tips-for-healthier-week', 'Meal prepping can save time, reduce stress, and help you stick to your health goals. Here are 5 practical tips to make your meal prep routine effective and enjoyable.', '60cafc3d-89c5-4a5f-86a5-2e7a89ba467f', 1, '2025-10-01 22:47:54', '2025-10-01 22:47:54', '2025-10-01 22:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `dietary_preferences`
--

CREATE TABLE `dietary_preferences` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dietary_preferences`
--

INSERT INTO `dietary_preferences` (`id`, `name`, `created_at`, `updated_at`) VALUES
('0cc8c59f-b184-4f04-89c4-7344951599ed', 'Gluten-Free', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('2c7293e2-5f9f-41d3-af35-23cb9f666fb0', 'Keto', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('4d7dd029-971b-4924-819d-acf26c04bcd5', 'Low-Carb', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('6c8bd554-7b49-4b8d-ab5a-48acb46e7554', 'Vegetarian', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('9506cdda-92ed-4b50-8043-34d80b902fdc', 'Vegan', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('a2119a22-d4ec-4cd7-88ab-723281279789', 'Paleo', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('a7ed3db9-b897-4912-9628-a987512fd39a', 'Diatary-Free', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('f8db5021-6f7a-449c-9965-99015f27bfb9', 'Nut-Free', '2025-10-01 22:47:54', '2025-10-01 22:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `difficulty_levels`
--

CREATE TABLE `difficulty_levels` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `difficulty_levels`
--

INSERT INTO `difficulty_levels` (`id`, `name`, `created_at`, `updated_at`) VALUES
('0a31861a-24d5-462e-bd49-6f294a343417', 'Beginner', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('37992d96-eded-4ff5-a6fb-561be984f320', 'Expert', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('74515a49-3497-45d4-ae7a-b0f76fada892', 'Advanced', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('d017dacd-1461-469f-a43b-88a46962a3a5', 'Intermediate', '2025-10-01 22:47:54', '2025-10-01 22:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `subject`, `message`, `created_at`, `updated_at`) VALUES
('601659db-3bb2-4c55-855a-c2c7d1465072', 4, 'Recipe', 'All recipes are so good!', '2025-10-03 12:26:10', '2025-10-03 12:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_09_21_072908_create_difficulty_levels_table', 1),
(5, '2025_09_21_073655_create_recipe_categories_table', 1),
(6, '2025_09_22_043544_create_dietary_preferences_table', 1),
(7, '2025_09_24_030746_create_recipes_table', 1),
(8, '2025_09_24_030929_create_recipe_dietary_preferences_table', 1),
(9, '2025_09_27_095958_create_nutritions_table', 1),
(10, '2025_09_27_215856_create_community_categories_table', 1),
(11, '2025_09_27_220414_create_community_posts_table', 1),
(12, '2025_09_27_220847_create_community_followers_table', 1),
(13, '2025_09_27_221545_create_community_likes_table', 1),
(14, '2025_09_29_072156_create_community_comments_table', 1),
(15, '2025_10_01_075013_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nutritions`
--

CREATE TABLE `nutritions` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipe_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calories` int NOT NULL,
  `protein` decimal(6,2) NOT NULL,
  `carbohydrates` decimal(6,2) NOT NULL,
  `fat` decimal(6,2) NOT NULL,
  `fiber` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nutritions`
--

INSERT INTO `nutritions` (`id`, `recipe_id`, `calories`, `protein`, `carbohydrates`, `fat`, `fiber`, `created_at`, `updated_at`) VALUES
('16aa0eb8-f5b2-48aa-ba5f-0fe179d7c9ee', 'd9fd1b17-cfd7-4ea8-b914-b14154d76825', 506, 24.00, 59.00, 20.00, 10.00, '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('226629ea-a766-41c0-9831-8c50d1b78136', '12d3429b-3508-45e9-afda-c90f7e1dfe6c', 733, 14.00, 52.00, 30.00, 2.00, '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('4a33f15e-7e81-4eb6-ab2e-69814e74c35c', '20bb3f3c-a1fa-48e9-81b6-554027aa715a', 420, 9.00, 42.00, 17.00, 7.00, '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('677558bb-bf77-4004-99ae-4875da4ef682', '9f56da5d-722e-46a6-8abe-b8dae6797dbb', 232, 10.00, 92.00, 22.00, 8.00, '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('d5ac96a1-be12-4635-95c8-218ecc6be206', '476aee9a-bd26-46dd-9ba2-9e354f660057', 355, 29.00, 69.00, 28.00, 12.00, '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('dd898b9d-d04b-44c1-b0e9-bbc60231c307', 'b1d410bc-b771-47f0-9708-52fb8db912f6', 653, 27.00, 47.00, 26.00, 2.00, '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('ec8979af-466f-4d52-a8b7-4be871936f27', 'ddfa9435-880f-4db9-914a-4b57a19a6fb3', 750, 40.00, 63.00, 20.00, 12.00, '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('f425caee-dfb1-4d3b-8bda-a6878021f711', '4c09bb57-2c62-424a-aa01-ce4a178c1d31', 728, 36.00, 90.00, 10.00, 6.00, '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('f866b8a1-05bf-4db9-be93-9458478c7e31', 'd58cf765-68ce-41e6-be63-18af0c6e9973', 351, 30.00, 67.00, 26.00, 14.00, '2025-10-01 22:47:54', '2025-10-01 22:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructions` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `category_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `difficulty_level_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prep_time` int NOT NULL,
  `cook_time` int NOT NULL,
  `servings` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `ingredients`, `instructions`, `user_id`, `category_id`, `difficulty_level_id`, `prep_time`, `cook_time`, `servings`, `image`, `is_approved`, `created_at`, `updated_at`) VALUES
('12d3429b-3508-45e9-afda-c90f7e1dfe6c', 'Spaghetti Carbonara', 'Qui pariatur laboriosam quibusdam tempora quia enim cupiditate quia. Tempora reprehenderit voluptatibus itaque nesciunt enim aut quidem.', '400g spaghetti\n200g pancetta or guanciale, diced\n4 large eggs\n100g Pecorino Romano cheese, grated\n100g Parmigiano-Reggiano cheese, grated\nFreshly ground black pepper\nSalt for pasta water', 'Bring a large pot of salted water to boil. Cook spaghetti until al dente.\nIn a skillet, cook pancetta until crispy.\nWhisk eggs, cheeses, and black pepper together in a bowl.\nDrain spaghetti, reserving some cooking water.\nToss spaghetti with pancetta and remove from heat.\nQuickly stir in the egg mixture, adding pasta water if needed.\nServe with extra cheese and black pepper.', 1, 'd03c6c99-afa2-4b1d-b824-0c63eab691d0', '37992d96-eded-4ff5-a6fb-561be984f320', 13, 30, 5, 'recipes/Spaghetti_Carbonara.jpg', '1', '2025-10-01 22:47:54', '2025-10-02 17:55:15'),
('20bb3f3c-a1fa-48e9-81b6-554027aa715a', 'Vegetable Omelette', 'Maxime sapiente error sapiente ut nostrum asperiores quia ut. Ea sit voluptatem eos voluptatem quos repellat dignissimos occaecati. Ut tempore enim sequi sint dolorem beatae et. Quaerat eligendi aut voluptas adipisci laboriosam.', '3 large eggs\n1 onion, diced\n1 red bell pepper, diced\n50g grated cheese\n1 tbsp olive oil\nSalt and pepper to taste', 'Beat eggs with salt and pepper in a bowl.\nHeat oil in a skillet, sauté onion and pepper until soft.\nPour in eggs and cook until nearly set.\nSprinkle cheese on top and fold omelette.\nCook for another minute, then serve.', 1, '8bea2e8f-3854-48ae-8f3a-eac7327f15c4', '37992d96-eded-4ff5-a6fb-561be984f320', 25, 44, 6, 'recipes/Vegetable_Omelette.jpg', '1', '2025-10-01 22:47:54', '2025-10-02 17:55:16'),
('476aee9a-bd26-46dd-9ba2-9e354f660057', 'Vegetable Soup', 'Inventore provident ut iste. Commodi sed facilis eveniet illo voluptas ut. Praesentium quos ea impedit atque ut omnis est. Libero eos debitis ducimus tempore sint veritatis.', '1 onion, chopped\n2 carrots, diced\n2 potatoes, diced\n1 red bell pepper, diced\n1L vegetable stock\n2 tbsp olive oil\nSalt and pepper to taste', 'Heat oil in a pot and sauté onion until soft.\nAdd carrots, potatoes, and bell pepper.\nPour in vegetable stock and bring to a boil.\nSimmer until vegetables are tender.\nSeason with salt and pepper, then serve warm.', 1, '312b57d9-3ff7-4062-8dfd-e49c5a6fbc73', '74515a49-3497-45d4-ae7a-b0f76fada892', 16, 48, 2, 'recipes/Vegetable_Soup.jpg', '1', '2025-10-01 22:47:54', '2025-10-02 17:55:17'),
('4c09bb57-2c62-424a-aa01-ce4a178c1d31', 'Classic Pancakes', 'Vel molestias quae aperiam et quisquam. Ratione magnam a est eaque eum voluptatem. Non minima magnam id nesciunt repellat quam. Repellat error debitis molestiae veniam odio aut.', '200g flour\n2 tbsp sugar\n2 tsp baking powder\n1 egg\n250ml milk\n2 tbsp butter, melted\nPinch of salt', 'Mix flour, sugar, baking powder, and salt.\nWhisk in milk, egg, and melted butter.\nHeat a pan and pour batter to form pancakes.\nCook until bubbles form, then flip.\nServe warm with syrup or fruit.', 1, '310701a3-5da1-4a52-9657-896e0fef6d88', '74515a49-3497-45d4-ae7a-b0f76fada892', 34, 20, 1, 'recipes/Classic_Pancake.webp', '1', '2025-10-01 22:47:54', '2025-10-02 17:55:17'),
('9f56da5d-722e-46a6-8abe-b8dae6797dbb', 'Grilled Chicken Salad', 'Nemo autem voluptatem et maiores. Fugiat illo aspernatur repellat aut exercitationem omnis. Assumenda et dolor optio autem excepturi quae. Sunt ut quas facilis sapiente sed consequatur.', '2 chicken breasts\n200g mixed salad greens\n100g cherry tomatoes\n1 cucumber, sliced\n2 tbsp olive oil\n1 tbsp lemon juice\nSalt and pepper to taste', 'Season chicken with salt and pepper, then grill until cooked.\nSlice grilled chicken into strips.\nArrange greens, cucumber, and tomatoes in a bowl.\nTop with grilled chicken.\nDrizzle with olive oil and lemon juice, then serve.', 1, 'c8d7af6f-df69-436f-a071-24013ba771e7', '37992d96-eded-4ff5-a6fb-561be984f320', 26, 47, 2, 'recipes/Grilled_Chicken_Salad.jpg', '1', '2025-10-01 22:47:54', '2025-10-02 17:55:18'),
('b1d410bc-b771-47f0-9708-52fb8db912f6', 'Tomato Basil Pasta', 'Tenetur id dolore velit id reiciendis vel libero. Quisquam ea commodi qui autem ullam aperiam iste. Nisi cum voluptas quaerat nisi quae voluptatem rerum. Officia optio et fugit eos.', '300g spaghetti\n200g cherry tomatoes\n2 cloves garlic, minced\n2 tbsp olive oil\nFresh basil leaves\nSalt and pepper to taste', 'Cook pasta until al dente.\nIn a skillet, sauté garlic in olive oil.\nAdd cherry tomatoes and cook until softened.\nToss in cooked pasta and basil leaves.\nSeason with salt and pepper, serve warm.', 1, 'd70aa39f-3bd6-409f-8e11-ecee386d38d0', 'd017dacd-1461-469f-a43b-88a46962a3a5', 36, 39, 4, 'recipes/Tomato_Basil_Pasta.jpg', '1', '2025-10-01 22:47:54', '2025-10-02 17:55:18'),
('d58cf765-68ce-41e6-be63-18af0c6e9973', 'Chicken Stir Fry', 'Et aut animi nulla. Ut praesentium earum ex magnam dolores ipsum ipsa. Natus aut maiores ducimus harum omnis adipisci.', '500g chicken breast, sliced\n1 onion, chopped\n1 red bell pepper, diced\n2 cloves garlic, minced\n1 tbsp soy sauce\n1 tsp chili flakes\n1 tbsp olive oil', 'Heat oil in a pan and sauté garlic until fragrant.\nAdd onion and bell pepper, cook until softened.\nAdd chicken and cook until browned.\nStir in soy sauce and chili flakes.\nSimmer briefly and serve hot with rice.', 1, '98462b7b-b4c4-41f3-a15c-379087992dc7', '74515a49-3497-45d4-ae7a-b0f76fada892', 22, 15, 5, 'recipes/Chicken_Stir_Fry.jpg', '1', '2025-10-01 22:47:54', '2025-10-02 17:55:19'),
('d9fd1b17-cfd7-4ea8-b914-b14154d76825', 'Caprese Salad', 'Minus aliquid blanditiis maxime ipsam. Omnis iusto vel est dicta deleniti ex.', '200g cherry tomatoes, halved\n200g fresh mozzarella, sliced\nFresh basil leaves\n2 tbsp olive oil\n1 tbsp balsamic glaze\nSalt and pepper to taste', 'Arrange tomato and mozzarella slices alternately on a plate.\nTuck basil leaves between slices.\nDrizzle with olive oil and balsamic glaze.\nSeason with salt and pepper, then serve fresh.', 1, 'd70aa39f-3bd6-409f-8e11-ecee386d38d0', '74515a49-3497-45d4-ae7a-b0f76fada892', 14, 36, 3, 'recipes/Caprese_Salad.jpg', '1', '2025-10-01 22:47:54', '2025-10-02 17:55:19'),
('ddfa9435-880f-4db9-914a-4b57a19a6fb3', 'Garlic Butter Shrimp', 'Quos voluptatem necessitatibus et aliquid. Et nulla veritatis at sunt et. Aliquid asperiores voluptatem deserunt. Architecto nemo molestias velit sint ut ratione necessitatibus tempore.', '400g shrimp, peeled\n3 cloves garlic, minced\n2 tbsp butter\n1 tbsp olive oil\n1 tbsp lemon juice\nFresh parsley for garnish\nSalt and pepper to taste', 'Heat oil and butter in a pan.\nSauté garlic until fragrant.\nAdd shrimp and cook until pink.\nSeason with salt, pepper, and lemon juice.\nGarnish with parsley and serve immediately.', 1, '98462b7b-b4c4-41f3-a15c-379087992dc7', '0a31861a-24d5-462e-bd49-6f294a343417', 34, 13, 5, 'recipes/Garlic_Butter_Shrimp.jpg', '1', '2025-10-01 22:47:54', '2025-10-02 17:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_categories`
--

CREATE TABLE `recipe_categories` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipe_categories`
--

INSERT INTO `recipe_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
('2fb81a1b-3eb7-4003-9add-4658bd1a6179', 'Vegetarian', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('310701a3-5da1-4a52-9657-896e0fef6d88', 'Desserts', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('312b57d9-3ff7-4062-8dfd-e49c5a6fbc73', 'Mexican', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('7bfac7a4-81e2-45df-b23d-642f0f90b914', 'Soups & Stews', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('8371ba45-3796-4801-9b4c-2bca02155943', 'Mediterranean', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('8bea2e8f-3854-48ae-8f3a-eac7327f15c4', 'American', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('98462b7b-b4c4-41f3-a15c-379087992dc7', 'Italian', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('c8d7af6f-df69-436f-a071-24013ba771e7', 'Appetizers', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('d03c6c99-afa2-4b1d-b824-0c63eab691d0', 'Asian', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('d70aa39f-3bd6-409f-8e11-ecee386d38d0', 'Breakfast', '2025-10-01 22:47:54', '2025-10-01 22:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_dietary_preferences`
--

CREATE TABLE `recipe_dietary_preferences` (
  `recipe_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preference_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipe_dietary_preferences`
--

INSERT INTO `recipe_dietary_preferences` (`recipe_id`, `preference_id`, `created_at`, `updated_at`) VALUES
('12d3429b-3508-45e9-afda-c90f7e1dfe6c', '9506cdda-92ed-4b50-8043-34d80b902fdc', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('20bb3f3c-a1fa-48e9-81b6-554027aa715a', '2c7293e2-5f9f-41d3-af35-23cb9f666fb0', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('20bb3f3c-a1fa-48e9-81b6-554027aa715a', 'a7ed3db9-b897-4912-9628-a987512fd39a', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('476aee9a-bd26-46dd-9ba2-9e354f660057', '2c7293e2-5f9f-41d3-af35-23cb9f666fb0', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('476aee9a-bd26-46dd-9ba2-9e354f660057', 'a2119a22-d4ec-4cd7-88ab-723281279789', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('9f56da5d-722e-46a6-8abe-b8dae6797dbb', 'a2119a22-d4ec-4cd7-88ab-723281279789', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('b1d410bc-b771-47f0-9708-52fb8db912f6', 'a2119a22-d4ec-4cd7-88ab-723281279789', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('d58cf765-68ce-41e6-be63-18af0c6e9973', 'f8db5021-6f7a-449c-9965-99015f27bfb9', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('d9fd1b17-cfd7-4ea8-b914-b14154d76825', '0cc8c59f-b184-4f04-89c4-7344951599ed', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
('ddfa9435-880f-4db9-914a-4b57a19a6fb3', 'a7ed3db9-b897-4912-9628-a987512fd39a', '2025-10-01 22:47:54', '2025-10-01 22:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Xa8Z4trAIaR6JG000E12rjjIdmggvYbnheMZvGx9', 3, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibld2S0pUamxKUW5KbG1lNHVycUFrdVdNc0FZcW80ZmFIUHlFbHNjOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9tZXNzYWdlcyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1759517789);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'User', 'test@example.com', '2025-10-01 22:47:53', '$2y$12$9L02PdPD3UqjCrjZ.RcWpeGWVygM5GBqfd7dF97bDaz3LG/9UbLca', 'user', 'NpRByvs8Sa', '2025-10-01 22:47:54', '2025-10-01 22:47:54'),
(3, 'Paul', 'Logan', 'paul@gmail.com', NULL, '$2y$12$55jMCSldRU45yY5.EetzTOw3wE64.LvSRutMl4N4.BDMrbPQQw7nq', 'admin', NULL, '2025-10-02 01:26:24', '2025-10-02 01:26:24'),
(4, 'Khant', 'Khant', 'khant@gmail.com', NULL, '$2y$12$6NUXSkEh2wp7OVXNRqvNWO4aPbZ6hrdOqERgDLYFh.cHCi341S7OO', 'user', NULL, '2025-10-03 12:25:38', '2025-10-03 12:25:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `community_categories`
--
ALTER TABLE `community_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_comments`
--
ALTER TABLE `community_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `community_comments_user_id_foreign` (`user_id`),
  ADD KEY `community_comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `community_followers`
--
ALTER TABLE `community_followers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `community_followers_user_id_foreign` (`user_id`),
  ADD KEY `community_followers_follower_id_foreign` (`follower_id`);

--
-- Indexes for table `community_likes`
--
ALTER TABLE `community_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `community_likes_post_id_foreign` (`post_id`),
  ADD KEY `community_likes_user_id_foreign` (`user_id`);

--
-- Indexes for table `community_posts`
--
ALTER TABLE `community_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `community_posts_slug_unique` (`slug`),
  ADD KEY `community_posts_category_id_foreign` (`category_id`),
  ADD KEY `community_posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `dietary_preferences`
--
ALTER TABLE `dietary_preferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `difficulty_levels`
--
ALTER TABLE `difficulty_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutritions`
--
ALTER TABLE `nutritions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nutritions_recipe_id_foreign` (`recipe_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipes_user_id_foreign` (`user_id`),
  ADD KEY `recipes_category_id_foreign` (`category_id`),
  ADD KEY `recipes_difficulty_level_id_foreign` (`difficulty_level_id`);

--
-- Indexes for table `recipe_categories`
--
ALTER TABLE `recipe_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe_dietary_preferences`
--
ALTER TABLE `recipe_dietary_preferences`
  ADD PRIMARY KEY (`recipe_id`,`preference_id`),
  ADD KEY `recipe_dietary_preferences_preference_id_foreign` (`preference_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `community_comments`
--
ALTER TABLE `community_comments`
  ADD CONSTRAINT `community_comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `community_posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `community_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `community_followers`
--
ALTER TABLE `community_followers`
  ADD CONSTRAINT `community_followers_follower_id_foreign` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `community_followers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `community_likes`
--
ALTER TABLE `community_likes`
  ADD CONSTRAINT `community_likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `community_posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `community_likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `community_posts`
--
ALTER TABLE `community_posts`
  ADD CONSTRAINT `community_posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `community_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `community_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nutritions`
--
ALTER TABLE `nutritions`
  ADD CONSTRAINT `nutritions_recipe_id_foreign` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `recipe_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recipes_difficulty_level_id_foreign` FOREIGN KEY (`difficulty_level_id`) REFERENCES `difficulty_levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recipes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recipe_dietary_preferences`
--
ALTER TABLE `recipe_dietary_preferences`
  ADD CONSTRAINT `recipe_dietary_preferences_preference_id_foreign` FOREIGN KEY (`preference_id`) REFERENCES `dietary_preferences` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recipe_dietary_preferences_recipe_id_foreign` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

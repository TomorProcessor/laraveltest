-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.36-0ubuntu0.22.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table laravel.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping data for table laravel.migrations: ~0 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(16, '2014_10_12_000000_create_users_table', 1),
	(17, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(18, '2019_08_19_000000_create_failed_jobs_table', 1),
	(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(20, '2024_06_07_135005_create_products_table', 1);

-- Dumping data for table laravel.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping data for table laravel.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping data for table laravel.products: ~10 rows (approximately)
DELETE FROM `products`;
INSERT INTO `products` (`id`, `name`, `owner_id`, `created_at`, `updated_at`) VALUES
	(1, 'Widget A', 0, '2024-06-07 12:54:43', '2024-06-07 12:54:43'),
	(2, 'Gizmo B', 5, '2024-06-07 12:54:43', '2024-06-07 12:54:43'),
	(3, 'Thingamajig C', 0, '2024-06-07 12:54:43', '2024-06-07 12:54:43'),
	(4, 'Doodad X', 0, '2024-06-07 12:54:43', '2024-06-07 12:54:43'),
	(5, 'Whatchamacallit Y', 0, '2024-06-07 12:54:43', '2024-06-07 12:54:43'),
	(6, 'Doohickey Z', 5, '2024-06-07 12:54:43', '2024-06-07 12:54:43'),
	(7, 'Contraption M', 0, '2024-06-07 12:54:43', '2024-06-07 12:54:43'),
	(8, 'Gadget N', 0, '2024-06-07 12:54:43', '2024-06-07 12:54:43'),
	(9, 'Gizmo Deluxe', 5, '2024-06-07 12:54:43', '2024-06-07 12:54:43'),
	(10, 'Widget Pro', 5, '2024-06-07 12:54:43', '2024-06-07 12:54:43');

-- Dumping data for table laravel.users: ~10 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Alice Johnson', 'alice@example.com', 'alise', NULL, '$2y$12$PJrHtF9UnGf6iImfDk7H0uJ.B17pzkWrT.RwlDKAmN.msASl2K3aS', NULL, '2024-06-07 12:42:35', '2024-06-07 12:42:35'),
	(2, 'Bob Smith', 'bob@example.com', 'bobby', NULL, '$2y$12$YaPbeBdynDpic2.Uanj66eGelwgK3.A35VM060m5se471szIfsjB.', NULL, '2024-06-07 12:42:35', '2024-06-07 12:42:35'),
	(3, 'Charlie Brown', 'charlie@example.com', 'charls', NULL, '$2y$12$zo1zVegWDA3WGZsEgkEJo.EjTpOMbuOd8aSdUhXVlBWWsIHOjZ4uG', NULL, '2024-06-07 12:42:35', '2024-06-07 12:42:35'),
	(4, 'David Lee', 'david@example.com', 'davyy', NULL, '$2y$12$P.vUZLzj42Fp5CK/YNVb1OzkQmEQcAQ0wFOUhE3TLsqhfBEOq66oi', NULL, '2024-06-07 12:42:36', '2024-06-07 12:42:36'),
	(5, 'Emily Adams', 'emily@example.com', 'amy', NULL, '$2y$12$2YPKiNN7WV7qLmhDk7sgWurIS/Pv7U63ZnE0ses6UhKk.CQxmB9j2', NULL, '2024-06-07 12:42:36', '2024-06-07 12:42:36'),
	(6, 'Frank Miller', 'frank@example.com', 'franky', NULL, '$2y$12$aYYNPVmG7Pbrj6V/L2TW3O7vjzhuiw2nQ6C0GGWbxBBiB1rZB6Ot2', NULL, '2024-06-07 12:42:36', '2024-06-07 12:42:36'),
	(7, 'Grace Turner', 'grace@example.com', 'gracy', NULL, '$2y$12$G4UAwBk7zSRaqs50FvmGoO2hcBeKzljOZfjCBA/OazHJT7iXiRr56', NULL, '2024-06-07 12:42:36', '2024-06-07 12:42:36'),
	(8, 'Henry Parker', 'henry@example.com', 'henrypark', NULL, '$2y$12$PIhVW/aR/pT6osGLhXiAO..E24NbJ5vcBJMAhbx4b0Pi7rn.FyUAO', NULL, '2024-06-07 12:42:36', '2024-06-07 12:42:36'),
	(9, 'Isabella White', 'isabella@example.com', 'isabelle', NULL, '$2y$12$sEclGcqKBsS/9swaOZejW.UUqjNMWDHFHnNjV1LCuDMdk4jzwMt.S', NULL, '2024-06-07 12:42:37', '2024-06-07 12:42:37'),
	(10, 'Jack Harris', 'jack@example.com', 'jacky', NULL, '$2y$12$wA3uYUtqwRlM1xmfg.tY1OfA7WNzcuFfXRJGstjFBQSjYF0yBk6mO', NULL, '2024-06-07 12:42:37', '2024-06-07 12:42:37');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

CREATE DATABASE IF NOT EXISTS `blogs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blogs`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT, 
  `molbile` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `users` (`id`, `molbile`, `email`, `name`, `password`, `avatar`, `status`, `created_at`, `updated_at`) VALUES
("", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
("", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
("", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
("", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
("", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
("", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
("", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
("", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
("", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
(1"", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
(1"", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
(1"", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
(1"", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
(1"", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
(1"", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
(1"", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
(1"", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
(1"", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
(1"", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL),
(2"", '123456789', 'long10a11999@gmail.com', 'Long', '123456', NULL, 1, NULL, NULL);


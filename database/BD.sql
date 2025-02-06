DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` integer NOT NULL,
  `login` varchar(30) NOT NULL UNIQUE,
  `password` varchar(60) NOT NULL,
  `created_at` datetime, 
  `updated_at` datetime, 
  PRIMARY KEY (`id`)
);
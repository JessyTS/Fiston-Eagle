CREATE TABLE `academia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `domaine` int(255) NOT NULL,
  `niveau` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `Method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `academia`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `academia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
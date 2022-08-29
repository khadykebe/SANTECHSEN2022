-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 29 août 2022 à 17:09
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `SANTECHSEN`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomclient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomclient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailClient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `codeValidation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nomclient`, `prenomclient`, `emailClient`, `created_at`, `updated_at`, `codeValidation`) VALUES
(1, 'kebe', 'khady', 'khady.kebe@univ-thies.sn', '2022-08-29 13:51:58', '2022-08-29 13:51:58', 6702),
(2, 'diaw', 'bamba', 'khadykebe1195@gmail.com', '2022-08-29 13:54:00', '2022-08-29 13:54:00', 3806);

-- --------------------------------------------------------

--
-- Structure de la table `demande_services`
--

CREATE TABLE `demande_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idService` bigint(20) UNSIGNED DEFAULT NULL,
  `idClient` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_services`
--

INSERT INTO `demande_services` (`id`, `idService`, `idClient`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-08-29 13:53:27', '2022-08-29 13:53:27'),
(2, 2, 2, '2022-08-29 13:54:37', '2022-08-29 13:54:37');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomEvenement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateCreation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2022_07_04_104945_create_clients_table', 1),
(21, '2022_07_04_105050_create_partenairs_table', 1),
(22, '2022_07_04_105112_create_type_services_table', 1),
(23, '2022_07_04_105140_create_evenements_table', 1),
(24, '2022_07_04_112640_create_profils_table', 1),
(25, '2022_07_04_112707_create_utilisateurs_table', 1),
(26, '2022_07_04_112725_create_services_table', 1),
(27, '2022_07_04_112919_create_demande_services_table', 1),
(28, '2022_07_04_114714_create_type_pages_table', 1),
(29, '2022_07_04_114749_create_pages_table', 1),
(30, '2022_07_04_115454_create_slides_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contenue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTypePage` bigint(20) UNSIGNED DEFAULT NULL,
  `idUtilisateur` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `partenairs`
--

CREATE TABLE `partenairs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomPartenaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailPartenaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partenairs`
--

INSERT INTO `partenairs` (`id`, `nomPartenaire`, `emailPartenaire`, `telephone`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'khady kebe', 'khady@gmail.com', '78 965 32 6', 'images/1661780658.jpg', '2022-08-29 13:44:18', '2022-08-29 13:44:18'),
(2, 'bamba diaw', 'diaw@gmail.com', '7818799866', 'images/1661780683.jpg', '2022-08-29 13:44:43', '2022-08-29 13:44:43'),
(3, 'khady kebe', 'kebe@gmail.com', '7818799863', 'images/1661783328.jpg', '2022-08-29 14:28:48', '2022-08-29 14:28:48');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomprofil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profils`
--

INSERT INTO `profils` (`id`, `nomprofil`, `created_at`, `updated_at`) VALUES
(4, 'Admin', NULL, NULL),
(6, 'superAdmin', '2022-08-29 13:30:39', '2022-08-29 13:30:39');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomService` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cout` bigint(20) UNSIGNED NOT NULL,
  `dateCreation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `idTypeService` bigint(20) UNSIGNED DEFAULT NULL,
  `idUtilisateur` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nomService`, `contenue`, `image`, `cout`, `dateCreation`, `status`, `idTypeService`, `idUtilisateur`, `created_at`, `updated_at`) VALUES
(1, 'service 1', 'contenue service 1', 'images/1661780944.jpg', 12365, '2022-08-29', 1, 2, 2, '2022-08-29', '2022-08-29'),
(2, 'service 2', 'contenue service 2', 'images/1661780973.jpg', 456, '2022-08-29', 1, 3, 2, '2022-08-29', '2022-08-29'),
(3, 'service 3', 'contenue service 3', 'images/1661781012.jpg', 12365, '2022-08-29', 1, 4, 2, '2022-08-29', '2022-08-29');

-- --------------------------------------------------------

--
-- Structure de la table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contenue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateCreation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUtilisateur` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `slides`
--

INSERT INTO `slides` (`id`, `contenue`, `image`, `dateCreation`, `idUtilisateur`, `created_at`, `updated_at`) VALUES
(3, 'contenue slide 1', 'images/1661780483.jpg', '2022-08-29', 2, '2022-08-29 13:41:23', '2022-08-29 13:41:23'),
(4, 'contenue slide 2', 'images/1661780551.jpg', '2022-08-29', 2, '2022-08-29 13:42:31', '2022-08-29 13:42:31');

-- --------------------------------------------------------

--
-- Structure de la table `type_pages`
--

CREATE TABLE `type_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateCreation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `idUtilisateur` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_services`
--

CREATE TABLE `type_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomTypeService` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_services`
--

INSERT INTO `type_services` (`id`, `nomTypeService`, `status`, `created_at`, `updated_at`) VALUES
(2, 'typeService 1', 1, '2022-08-29 13:46:07', '2022-08-29 13:46:07'),
(3, 'typeService 2', 1, '2022-08-29 13:46:13', '2022-08-29 13:46:13'),
(4, 'typeService 3', 1, '2022-08-29 13:46:19', '2022-08-29 13:46:19');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `idProfil` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `password`, `telephone`, `adresse`, `photo`, `status`, `idProfil`, `created_at`, `updated_at`) VALUES
(2, 'kebe', 'khady', 'khady.kebe@gmail.com', '$2y$10$S8NdayYUcHN1hg7wD2VFUe9y0/6TfJ.dHBHMkxfe9S6Sc1EL2mX0i', '78 965 32 65', 'rufisque', 'images/1661779608.jpg', 1, 4, '2022-08-29 13:26:48', '2022-08-29 13:26:48'),
(3, 'Diaw', 'bamba', 'bamba@gmail.com', '$2y$10$CEm/hQs4jJcTFptEj8SLCuikIiAqswI4dCZAvplCPp9Ac7ndeDjOy', '781879983', 'rufisque', 'images/1661779800.jpg', 0, NULL, '2022-08-29 13:30:00', '2022-08-29 13:30:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_emailclient_unique` (`emailClient`);

--
-- Index pour la table `demande_services`
--
ALTER TABLE `demande_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demande_services_idservice_foreign` (`idService`),
  ADD KEY `demande_services_idclient_foreign` (`idClient`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_idtypepage_foreign` (`idTypePage`),
  ADD KEY `pages_idutilisateur_foreign` (`idUtilisateur`);

--
-- Index pour la table `partenairs`
--
ALTER TABLE `partenairs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `partenairs_emailpartenaire_unique` (`emailPartenaire`),
  ADD UNIQUE KEY `partenairs_telephone_unique` (`telephone`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_idtypeservice_foreign` (`idTypeService`),
  ADD KEY `services_idutilisateur_foreign` (`idUtilisateur`);

--
-- Index pour la table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_idutilisateur_foreign` (`idUtilisateur`);

--
-- Index pour la table `type_pages`
--
ALTER TABLE `type_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_pages_idutilisateur_foreign` (`idUtilisateur`);

--
-- Index pour la table `type_services`
--
ALTER TABLE `type_services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `utilisateurs_email_unique` (`email`),
  ADD UNIQUE KEY `utilisateurs_telephone_unique` (`telephone`),
  ADD UNIQUE KEY `utilisateurs_photo_unique` (`photo`),
  ADD KEY `utilisateurs_idprofil_foreign` (`idProfil`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `demande_services`
--
ALTER TABLE `demande_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `partenairs`
--
ALTER TABLE `partenairs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `type_pages`
--
ALTER TABLE `type_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_services`
--
ALTER TABLE `type_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demande_services`
--
ALTER TABLE `demande_services`
  ADD CONSTRAINT `demande_services_idclient_foreign` FOREIGN KEY (`idClient`) REFERENCES `clients` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `demande_services_idservice_foreign` FOREIGN KEY (`idService`) REFERENCES `services` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_idtypepage_foreign` FOREIGN KEY (`idTypePage`) REFERENCES `type_pages` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `pages_idutilisateur_foreign` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_idtypeservice_foreign` FOREIGN KEY (`idTypeService`) REFERENCES `type_services` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `services_idutilisateur_foreign` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slides_idutilisateur_foreign` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `type_pages`
--
ALTER TABLE `type_pages`
  ADD CONSTRAINT `type_pages_idutilisateur_foreign` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_idprofil_foreign` FOREIGN KEY (`idProfil`) REFERENCES `profils` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

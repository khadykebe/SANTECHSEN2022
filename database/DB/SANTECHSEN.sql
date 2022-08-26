-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 26 août 2022 à 16:53
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
(5, 'kebe', 'khady', 'khady.kebe@univ-thies.sn', '2022-08-16 14:01:20', '2022-08-16 14:01:20', 3474);

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
(4, 3, 5, '2022-08-16 14:01:36', '2022-08-16 14:01:36');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_04_104945_create_clients_table', 1),
(6, '2022_07_04_105050_create_partenairs_table', 1),
(7, '2022_07_04_105112_create_type_services_table', 1),
(8, '2022_07_04_105140_create_evenements_table', 1),
(9, '2022_07_04_112640_create_profils_table', 1),
(10, '2022_07_04_112707_create_utilisateurs_table', 1),
(11, '2022_07_04_112725_create_services_table', 1),
(12, '2022_07_04_112919_create_demande_services_table', 1),
(13, '2022_07_04_114714_create_type_pages_table', 1),
(14, '2022_07_04_114749_create_pages_table', 1),
(15, '2022_07_04_115454_create_slides_table', 1);

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

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `contenue`, `image`, `date`, `idTypePage`, `idUtilisateur`, `created_at`, `updated_at`) VALUES
(2, 'contenue page 1', 'images/1660655140.jpg', '2022-08-16', 4, 2, '2022-08-16 13:05:40', '2022-08-16 13:05:40'),
(3, 'contenue page 2', 'images/1660655169.jpg', '2022-08-16', 3, 2, '2022-08-16 13:06:09', '2022-08-16 13:06:09');

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
(1, 'khady kebe', 'khady@gmail.com', '78 965 32 65', 'images/1660655713.jpg', '2022-08-16 13:15:13', '2022-08-16 13:15:13'),
(2, 'bamba diaw', 'diaw@gmail.com', '781879983', 'images/1660655750.jpg', '2022-08-16 13:15:50', '2022-08-16 13:15:50'),
(3, 'khady kebe', 'kebe@gmail.com', '7818799866', 'images/1660656291.jpg', '2022-08-16 13:24:51', '2022-08-16 13:24:51');

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
(1, 'admin', NULL, NULL),
(2, 'superAdmin', '2022-08-16 12:58:27', '2022-08-16 12:58:27');

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
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nomService`, `contenue`, `image`, `cout`, `dateCreation`, `status`, `idTypeService`, `idUtilisateur`, `updated_at`, `created_at`) VALUES
(3, 'service 3', 'contenue service 2', 'images/1660655507.jpg', 12365, '2022-08-16', 1, 3, 2, '2022-08-16', '2022-08-16'),
(4, 'service 4', 'contenue service 4', 'images/1661169529.jpg', 11444, '2022-08-22', 1, 3, 3, '2022-08-22', '2022-08-22'),
(5, 'seervice 5', 'contenue service 5', 'images/1661170442.jpg', 111, '2022-08-22', 1, 3, 3, '2022-08-22', '2022-08-22');

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
(2, 'contenue slide 1', 'images/1660655241.jpg', '2022-08-16', 2, '2022-08-16 13:07:21', '2022-08-16 13:07:21'),
(5, 'contenue slide 2', 'images/1661172064.jpg', '2022-08-22', 2, '2022-08-22 12:41:04', '2022-08-22 12:41:04');

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

--
-- Déchargement des données de la table `type_pages`
--

INSERT INTO `type_pages` (`id`, `nomType`, `dateCreation`, `status`, `idUtilisateur`, `created_at`, `updated_at`) VALUES
(3, 'typePage1', '2022-08-16', 1, 2, '2022-08-16 13:03:37', '2022-08-16 13:03:37'),
(4, 'typePage2', '2022-08-16', 1, 2, '2022-08-16 13:03:55', '2022-08-16 13:03:55'),
(5, 'typePage3', '2022-08-16', 1, 2, '2022-08-16 13:04:08', '2022-08-16 13:04:08');

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
(1, 'typeService 1', 1, '2022-08-16 13:04:23', '2022-08-16 13:04:23'),
(3, 'typeService 3', 1, '2022-08-16 13:04:46', '2022-08-16 13:04:46');

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
(2, 'Diaw', 'bamba', 'diaw@gmail.com', '$2y$10$L4ILKGLEiUrfGtPmht3ICOBHDoALjEZXL3mMldP0ZUW6MUskVZmqu', '78 965 63 96', 'rufisque', 'images/1660654785.jpg', 1, 2, '2022-08-16 12:59:45', '2022-08-16 12:59:45'),
(3, 'kebe', 'khady', 'kebe@gmail.com', '$2y$10$Knnf9o5sXK2bjfsv.uwAjOvtc1rTTOobf8FvMEFix08QgrvPBeDFm', '78 965 32 65', 'rufisque', 'images/1660654850.jpg', 1, 1, '2022-08-16 13:00:50', '2022-08-16 13:00:50'),
(4, 'kebe', 'khady', 'khady.kebe@univ-thies.sn', '$2y$10$J1Z9gpD5l.tGGSQT7F31ke754okHJdqJg9JtZyfARali52hgVmK2G', '7818799866', 'rufisque', 'images/1661177320.jpg', 1, 2, '2022-08-22 14:08:40', '2022-08-26 13:59:28');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `demande_services`
--
ALTER TABLE `demande_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `type_pages`
--
ALTER TABLE `type_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `type_services`
--
ALTER TABLE `type_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demande_services`
--
ALTER TABLE `demande_services`
  ADD CONSTRAINT `demande_services_idclient_foreign` FOREIGN KEY (`idClient`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `demande_services_idservice_foreign` FOREIGN KEY (`idService`) REFERENCES `services` (`id`);

--
-- Contraintes pour la table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_idtypepage_foreign` FOREIGN KEY (`idTypePage`) REFERENCES `type_pages` (`id`),
  ADD CONSTRAINT `pages_idutilisateur_foreign` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_idtypeservice_foreign` FOREIGN KEY (`idTypeService`) REFERENCES `type_services` (`id`),
  ADD CONSTRAINT `services_idutilisateur_foreign` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slides_idutilisateur_foreign` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `type_pages`
--
ALTER TABLE `type_pages`
  ADD CONSTRAINT `type_pages_idutilisateur_foreign` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_idprofil_foreign` FOREIGN KEY (`idProfil`) REFERENCES `profils` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

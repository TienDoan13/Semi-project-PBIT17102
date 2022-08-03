-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 04:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'Action', 'phim hanh dong'),
(2, 'Horror', 'phim kinh di'),
(3, 'Comedy', 'phim hai'),
(4, 'Drama', 'phim tam ly');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_19_020620_admin-side', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(10) UNSIGNED NOT NULL,
  `movie_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_description` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_character` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_img` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_description`, `release_date`, `director`, `main_character`, `price`, `movie_img`, `category_id`) VALUES
(1, 'Spider-Man: Far From Home', 'Spider-Man: Far From Home is a 2019 American superhero film based on the Marvel Comics character Spider-Man, co-produced by Columbia Pictures and Marvel Studios, and distributed by Sony Pictures Releasing. It is the sequel to Spider-Man: Homecoming (2017) and the 23rd film in the Marvel Cinematic Universe (MCU). The film was directed by Jon Watts, written by Chris McKenna and Erik Sommers, and stars Tom Holland as Peter Parker / Spider-Man, alongside Samuel L. Jackson, Zendaya, Cobie Smulders, Jon Favreau, J. B. Smoove, Jacob Batalon, Martin Starr, Marisa Tomei, and Jake Gyllenhaal. In the film, Parker is recruited by Nick Fury (Jackson) and Mysterio (Gyllenhaal) to face the Elementals while he is on a school trip to Europe.', 'July 2, 2019', 'Jon Watts', 'Tom Holland, Samuel L. Jackson, Zendaya, Cobie Smulders, Jon Favreau, J. B. Smoove, Jacob Batalon, Martin Starr, Marisa Tomei, Jake Gyllenhaal', '700$', '202208021603sanpham1.jpg', 1),
(2, 'Dracula Untold', 'Dracula Untold is a 2014 American dark fantasy action film directed by Gary Shore in his feature film debut and written by Matt Sazama and Burk Sharpless.[4] A reboot of the Dracula film series, the plot creates an origin story for the titular character, rather than using the storyline of Bram Stoker\'s 1897 novel. In this adaptation, Dracula is the monster alter ego of historical figure Vlad III \"the Impaler\" Drăculea. Luke Evans portrays the title character, with Sarah Gadon, Dominic Cooper, Art Parkinson, and Charles Dance cast in supporting roles. Principal photography began in Northern Ireland on August 5, 2013.', 'October 10, 2014', 'Gary Shore', 'Luke Evans, Dominic Cooper, Sarah Gadon, Charles Dance', '700$', '202208021621sanpham2.jpg', 1),
(3, 'Spiderhead', 'Spiderhead is a 2022 American science fiction psychological thriller film directed by Joseph Kosinski, with a screenplay by Rhett Reese and Paul Wernick, based on the dystopian short story \"Escape from Spiderhead\" by George Saunders and first published in The New Yorker. The film stars Chris Hemsworth, Miles Teller, and Jurnee Smollett. The story follows inmates in a luxurious prison who participate in experiments involving mind-altering drugs. Principal photography took place in Australia in 2020.\r\n\r\nSpiderhead premiered in Sydney on June 11, 2022, and was released on Netflix on June 17, 2022. The film received mixed reviews from critics.', 'September 5, 2017', 'Andy Muschietti', 'Jaeden Lieberher, Bill Skarsgård', '500$', '202208021637sanpham6.jpg', 3),
(4, 'Beauty and the Beast', 'Beauty and the Beast is a 2017 American musical romantic fantasy film directed by Bill Condon from a screenplay by Stephen Chbosky and Evan Spiliotopoulos. Co-produced by Walt Disney Pictures and Mandeville Films,[1][7] the film is a live action adaptation of Disney\'s 1991 animated film of the same name, itself an adaptation of Jeanne-Marie Leprince de Beaumont\'s 1756 version of the fairy tale.[8] It features an ensemble and choir cast including Emma Watson and Dan Stevens as the eponymous Belle and the Beast, with Luke Evans, Kevin Kline, Josh Gad, Ewan McGregor, Stanley Tucci, Audra McDonald, Gugu Mbatha-Raw, Ian McKellen, and Emma Thompson in supporting roles.[9]', 'March 17, 2017', 'Bill Condon', 'Emma Watson Dan Stevens Luke Evans Kevin Kline Josh Gad Ewan McGregor Stanley Tucci Audra McDonald Gugu Mbatha-Raw Ian McKellen Emma Thompson', '300$', '202208021641sanpham27.jpg', 4),
(5, 'The Northman', 'The Northman is a 2022 American epic historical action thriller film directed by Robert Eggers, who co-wrote the screenplay with Sjón. Based on the legend of Amleth, the film stars co-producer Alexander Skarsgård, Nicole Kidman, Claes Bang, Anya Taylor-Joy, Ethan Hawke, Björk, and Willem Dafoe. The plot follows Amleth, a Viking prince who sets out on a quest to avenge the murder of his father. The film is heavily influenced by Norse mythology.[6]\r\n\r\nSkarsgård had wanted to make a Viking film for several years, and Eggers decided to make the film his third project after the pair met to discuss possible collaborations. Much of the cast joined in October 2019, and filming took place in locations throughout Northern Ireland and Iceland from August to December 2020.\r\n\r\nThe Northman had its world premiere in Stockholm at Rigoletto Cinema on March 28, 2022. It began theatrical release in some countries on April 13, 2022, and was released theatrically in the United States on April 22 to critical acclaim, with particular praise aimed at its direction, production values, and the performances of the cast. Despite this, it performed poorly at the box office, grossing $68 million worldwide against its $70–90 million production budget, though the film performed well on the VOD and DVD/Blu-ray markets.[7][8]', 'April 22, 2022 (United States)', 'Robert Eggers', 'Alexander Skarsgård Nicole Kidman Claes Bang Anya Taylor-Joy Ethan Hawke Björk Willem Dafoe', '400$', '202208021643sanpham21.jpg', 1);

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
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tienloc', 'locbeo1@gmail.com', NULL, '$2y$10$OIXm/v9obI2f2V12VNVW/.v92cr42qbnhtg9EtuCY6D2IvqtGhtrS', '1', NULL, '2022-08-02 09:04:16', '2022-08-02 09:04:16'),
(2, 'nguyentienloc', 'locbeo2@gmail.com', NULL, '$2y$10$EfHJRAh1TjKW6/9yKLXTAerBel/Vzn3Ypb7tvoGsk8ShXrvPq4sYW', '2', NULL, '2022-08-02 09:14:01', '2022-08-02 09:14:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `movie_category_id_foreign` (`category_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

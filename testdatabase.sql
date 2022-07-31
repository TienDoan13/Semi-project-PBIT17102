-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 06:23 PM
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
  `movie_img` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_description`, `release_date`, `director`, `main_character`, `price`, `movie_img`) VALUES
(1, 'Spider-Man: Far From Home', 'Spider-Man: Far From Home is a 2019 American superhero film based on the Marvel Comics character Spider-Man, co-produced by Columbia Pictures and Marvel Studios, and distributed by Sony Pictures Releasing. It is the sequel to Spider-Man: Homecoming (2017) and the 23rd film in the Marvel Cinematic Universe (MCU). The film was directed by Jon Watts, written by Chris McKenna and Erik Sommers, and stars Tom Holland as Peter Parker / Spider-Man, alongside Samuel L. Jackson, Zendaya, Cobie Smulders, Jon Favreau, J. B. Smoove, Jacob Batalon, Martin Starr, Marisa Tomei, and Jake Gyllenhaal. In the film, Parker is recruited by Nick Fury (Jackson) and Mysterio (Gyllenhaal) to face the Elementals while he is on a school trip to Europe.', 'July 2, 2019', 'Jon Watts', 'Tom Holland, Samuel L. Jackson, Zendaya, Cobie Smulders, Jon Favreau, J. B. Smoove, Jacob Batalon, Martin Starr, Marisa Tomei, Jake Gyllenhaal', '500$', '202207310547sanpham1.jpg'),
(2, 'Dracula Untold', 'abdsadv', 'October 10, 2014', 'Gary Shore', 'Luke Evans, Dominic Cooper, Sarah Gadon, Charles Dance', '200$', '202207310811sanpham2.jpg'),
(4, 'The Gray Man', 'dfgdfbv', 'July 22, 2022', 'Anthony Russo, Joe Russo', 'Ryan Gosling, Chris Evans, Ana de Armas, Jessica Henwick, Regé-Jean Page, Dhanush, Wagner Moura, Julia Butters, Alfre Woodard, Billy Bob Thornton', '250$', '202207310813sanpham3.jpg'),
(5, 'The Old Guard', 'sdfsdv', 'July 10, 2020', 'Gina Prince-Bythewood', 'Charlize Theron, KiKi Layne, Marwan Kenzari, Luca Marinelli, Harry Melling, Veronica Ngo, Matthias Schoenaerts, Chiwetel Ejiofor', '250$', '202207310816sanpham4.jpg'),
(6, 'Texas Chainsaw Massacre (2022)', 'The story team consists of a group of young people, Melody (Sarah Yarkin), her sister Lila (Elsie Fisher), and Dante (Jacob Latimore) who have come to Harlow, Texas to buy discount real estate in hopes of setting up a a connoisseur\'s paradise for a price paid. Conflict ensues when they arrive, to their surprise to find that one of the cheap old houses they thought they\'d bought is still occupied by an old lady who really doesn\'t want to leave. Turns out she was the kind-hearted woman who had taken Leatherface into the orphanage, who helped fill the void in his fractured mind with love, and when she was forced to leave. home and having a heart attack, Leatherface went on a rampage. It all started when Leatherface\'s return came 50 years after a bloody murder from 1973 pulled one of his former victims out of a reclusive life. Sally Hardesty (Olwen Fouéré), the sole survivor of the old massacre, has been waiting to clash with Leatherface to avenge her friends. This Texas chainsaw massacre is a direct sequel to the first film (1974), set in a world where the massacre itself has become a notorious murder mystery, told in a TV documentary about true crime narrated by John Larroquette.', 'February 18, 2022', 'David Blue Garcia', 'Olwen Fouéré, Alice Krige, John Larroquette', '700$', '202207310644sanpham5.jpg.jpg'),
(7, 'Spiderhead', 'Spiderhead is a 2022 American science fiction psychological thriller film directed by Joseph Kosinski, with a screenplay by Rhett Reese and Paul Wernick, based on the dystopian short story \"Escape from Spiderhead\" by George Saunders and first published in The New Yorker. The film stars Chris Hemsworth, Miles Teller, and Jurnee Smollett. The story follows inmates in a luxurious prison who participate in experiments involving mind-altering drugs. Principal photography took place in Australia in 2020.', 'June 11, 2022', 'Joseph Kosinski', 'Chris Hemsworth, Miles Teller, Jurnee Smollett', '400$', '202207310657sanpham6.jpg'),
(8, 'IT', 'ghjgn', 'September 5, 2017', 'Andy Muschietti', 'Jaeden Lieberher, Bill Skarsgård', '300$', '202207310817sanpham7.jpg'),
(9, 'Avengers: Endgame', 'sdgdfvac', 'April 22, 2019', 'Anthony Russo, Joe Russo', 'Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Don Cheadle, Paul Rudd', '700$', '202207310832sanpham8.jpg'),
(10, 'Jumanji: Welcome to the Jungle', 'dfgs', 'December 5, 2017', 'Jake Kasdan', 'Dwayne Johnson, Jack Black, Kevin Hart, Karen Gillan, Nick Jonas, Bobby Cannavale', '300$', '202207310904sanpham9.jpg'),
(11, 'White House Down', 'dfgsdcasc', 'June 28, 2013', 'Roland Emmerich', 'Channing Tatum, Jamie Foxx, Maggie Gyllenhaal, Joey King, Jason Clarke, Richard Jenkins', '300$', '202207310907sanpham10.jpg'),
(12, 'Stillwater', 'gyityui', 'July 30, 2021', 'Tom McCarthy', 'Matt Damon, Camille Cottin, Abigail Breslin', '250$', '202207310909sanpham11.jpg'),
(13, 'Venom', 'Venom is a 2018 American superhero film featuring the Marvel Comics character of the same name, produced by Columbia Pictures in association with Marvel[5] and Tencent Pictures. Distributed by Sony Pictures Releasing, it is the first film in Sony\'s Spider-Man Universe (SSU). Directed by Ruben Fleischer from a screenplay by Jeff Pinkner, Scott Rosenberg, and Kelly Marcel, it stars Tom Hardy as Eddie Brock and Venom alongside Michelle Williams, Riz Ahmed, Scott Haze, and Reid Scott. In the film, struggling journalist Brock gains superpowers after becoming the host of an alien symbiote, Venom, whose species plans to invade Earth.', 'October 5, 2018', 'Ruben Fleischer', 'Tom Hardy, Michelle Williams, Riz Ahmed, Scott Haze, Reid Scott', '400$', '202207310914sanpham12.jpg'),
(14, 'Oblivion', 'oiuytr', 'April 19, 2013', 'Joseph Kosinski', 'Tom Cruise, Morgan Freeman, Olga Kurylenko, Andrea Riseborough, Nikolaj Coster-Waldau', '500$', '202207310917sanpham13.jpg'),
(15, 'The Amazing Spider-Man 2', 'jhgfds', 'May 2, 2014', 'Marc Webb', 'Andrew Garfield, Emma Stone, Jamie Foxx, Dane DeHaan, Campbell Scott, Embeth Davidtz, Colm Feore, Paul Giamatti, Sally Field', '200$', '202207310928sanpham14.jpg'),
(16, 'The Jungle Book', 'hgf', 'April 15, 2016', 'Jon Favreau', 'Bill Murray, Ben Kingsley, Idris Elba', '250$', '202207310932sanpham15.jpg'),
(17, '300', '300 is a 2006 American epic historical action film[4][5] based on the 1998 comic series of the same name by Frank Miller and Lynn Varley. Both are fictionalized retellings of the Battle of Thermopylae in the Persian Wars. The film was co-written and directed by Zack Snyder, while Miller served as executive producer and consultant. It was filmed mostly with a superimposition chroma key technique to replicate the imagery of the original comic book.', 'March 9, 2007', 'Zack Snyder', 'Gerard Butler, Lena Headey, David Wenham, Dominic West', '300$', '202207310934sanpham16.jpg'),
(18, 'The Hobbit', 'The Hobbit is a series consisting of three high fantasy adventure films directed by Peter Jackson. The three films are The Hobbit: An Unexpected Journey (2012), The Hobbit: The Desolation of Smaug (2013), and The Hobbit: The Battle of the Five Armies (2014).[5] The films are based on the 1937 novel The Hobbit by J. R. R. Tolkien, with large portions of the trilogy inspired by the appendices to The Return of the King, which expand on the story told in The Hobbit, as well as new material and characters written especially for the films. Together they act as a prequel to Jackson\'s The Lord of the Rings film trilogy.', '14 December 2012', 'Peter Jackson', 'Martin Freeman Ian McKellen Richard Armitage Benedict Cumberbatch', '500$', '202207310937sanpham17.jpg'),
(19, 'Aquaman', 'kjhgfd', 'December 21, 2018', 'James Wan', 'Jason Momoa Amber Heard Willem Dafoe Patrick Wilson Dolph Lundgren', '700$', '202207310939sanpham18.jpg'),
(20, 'Godzilla vs. Kong', 'jhgf', 'March 31, 2021', 'Adam Wingard', 'Alexander Skarsgård Millie Bobby Brown Rebecca Hall Brian Tyree Henry Shun Oguri', '700$', '202207310945sanpham19.jpg'),
(21, 'Fantastic Beasts: The Crimes of Grindelwald', 'jhgfd', '16 November 2018', 'David Yates', 'Eddie Redmayne Katherine Waterston Dan Fogler Alison Sudol Ezra Miller Zoë Kravitz Callum Turner Claudia Kim William Nadylam Kevin Guthrie Jude Law Johnny Depp', '300$', '202207310946sanpham20.jpg'),
(22, 'The Northman', 'tyhn', 'April 22, 2022', 'Robert Eggers', 'Alexander Skarsgård Nicole Kidman Claes Bang Anya Taylor-Joy Ethan Hawke Björk Willem Dafoe', '500$', '202207310951sanpham21.jpg'),
(23, 'Avatar: The Way of Water', 'Avatar: The Way of Water (also known as Avatar 2) is an upcoming American epic science-fiction film directed by James Cameron and produced by 20th Century Studios.[2] It is the second film in Cameron\'s Avatar franchise, following Avatar (2009). Cameron is producing the film with Jon Landau, with Josh Friedman originally announced as Cameron\'s co-writer; it was later announced that Cameron, Friedman, Rick Jaffa, Amanda Silver, and Shane Salerno took a part in the writing process of all sequels before being attributed separate scripts, making the eventual writing credits unclear.[3][4][5][6] Cast members Sam Worthington, Zoe Saldaña, Stephen Lang, Joel David Moore, CCH Pounder, Giovanni Ribisi, and Matt Gerald reprise their roles from the original film, with Sigourney Weaver returning in a different role.[7] New cast members include Kate Winslet, Cliff Curtis, Edie Falco, Jemaine Clement, Michelle Yeoh, and Vin Diesel.', 'December 16, 2022', 'James Cameron', 'Sam Worthington Zoe Saldaña Sigourney Weaver Stephen Lang Cliff Curtis CCH Pounder Edie Falco Jemaine Clement Kate Winslet', '600$', '202207310954sanpham22.jpg'),
(24, 'Godzilla: King of the Monsters', 'bnbv', 'May 31, 2019', 'Michael Dougherty', 'Kyle Chandler Vera Farmiga Millie Bobby Brown Bradley Whitford Sally Hawkins Charles Dance Thomas Middleditch Aisha Hinds O\'Shea Jackson Jr. David Strathairn Ken Watanabe Zhang Ziy', '500$', '202207311007sanpham23.jpg'),
(25, 'The Curse of La Llorona', 'nbvc', 'April 19, 2019', 'Michael Chaves', 'Linda Cardellini Raymond Cruz Patricia Velásquez', '300$', '202207311027sanpham24.jpg'),
(26, 'Annabelle: Annabelle Comes Home', 'jhgfd', 'June 26, 2019', 'Gary Dauberman', 'Mckenna Grace Madison Iseman Katie Sarife Vera Farmiga Patrick Wilson', '400$', '202207311036sanpham25.jpg'),
(27, 'Harry Potter And The Goblet Of Fire', 'gfdbnmnbv', '18 November 2005', 'Mike Newell', 'Daniel Radcliffe Rupert Grint Emma Watson Robbie Coltrane Ralph Fiennes Michael Gambon Brendan Gleeson Jason Isaacs Gary Oldman Alan Rickman Maggie Smith Timothy Spall', '700$', '202207311043sanpham26.jpg'),
(28, 'Beauty and the Beast', 'uytrd', 'March 17, 2017', 'Bill Condon', 'Emma Watson Dan Stevens Luke Evans Kevin Kline Josh Gad Ewan McGregor Stanley Tucci Audra McDonald Gugu Mbatha-Raw Ian McKellen Emma Thompson', '500$', '202207311047sanpham27.jpg'),
(29, 'Maleficent', 'kjhgfdsa', 'May 30, 2014', 'Robert Stromberg', 'Angelina Jolie Sharlto Copley Elle Fanning Sam Riley Imelda Staunton Juno Temple Lesley Manville', '400$', '202207311052sanpham28.jpg'),
(30, 'The Chronicles Of Narnia', 'tdfvad', '9 December 2005', 'Andrew Adamson, Michael Apted', 'Georgie Henley Skandar Keynes William Moseley Anna Popplewell Ben Barnes Will Poulter Tilda Swinton Liam Neeson', '500$', '202207311056sanpham29.jpg'),
(31, 'Percy Jackson & the Olympians: The Lightning Thief', 'fccsc', 'February 12, 2010', 'Chris Columbus', 'Logan Lerman Brandon T. Jackson Alexandra Daddario Sean Bean Pierce Brosnan Steve Coogan Rosario Dawson Catherine Keener Kevin McKidd Joe Pantoliano Uma Thurman', '700$', '202207311100sanpham30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie_category`
--

CREATE TABLE `movie_category` (
  `movie_category_id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tienloc', 'nguyentienloc0312@gmail.com', NULL, '$2y$10$Vex5KxbGRWrsFvn.u8d.YOgkjWzXDlt32e6jfAkmtg5lDSwTt4dsm', NULL, '2022-07-31 04:00:57', '2022-07-31 04:00:57');

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
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `movie_category`
--
ALTER TABLE `movie_category`
  ADD PRIMARY KEY (`movie_category_id`),
  ADD KEY `movie_category_movie_id_foreign` (`movie_id`),
  ADD KEY `movie_category_category_id_foreign` (`category_id`);

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
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `movie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `movie_category`
--
ALTER TABLE `movie_category`
  MODIFY `movie_category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_category`
--
ALTER TABLE `movie_category`
  ADD CONSTRAINT `movie_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `movie_category_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

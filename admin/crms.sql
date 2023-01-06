-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 02:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crms`
--

-- --------------------------------------------------------

--
-- Table structure for table `criminal_personal_info`
--

CREATE TABLE `criminal_personal_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `image` varchar(225) NOT NULL,
  `gender` varchar(10) NOT NULL DEFAULT 'Male',
  `date_of_birth` varchar(10) NOT NULL,
  `temp_address` text NOT NULL,
  `perma_address` text NOT NULL,
  `nationality` varchar(20) NOT NULL DEFAULT 'Nepal',
  `religion` varchar(20) NOT NULL DEFAULT 'Hindu',
  `citizenship_no` varchar(30) NOT NULL,
  `citizenship_issue_date` varchar(10) NOT NULL,
  `citizenship_issue_district` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminal_personal_info`
--

INSERT INTO `criminal_personal_info` (`id`, `first_name`, `middle_name`, `last_name`, `image`, `gender`, `date_of_birth`, `temp_address`, `perma_address`, `nationality`, `religion`, `citizenship_no`, `citizenship_issue_date`, `citizenship_issue_district`) VALUES
(4, 'Udit', 'Naray', 'Chaudhary', '', 'male', '2022-02-18', 'Bhaktapur', 'Bhaktapur', 'Nepali', 'Hindu', '9564', '2026-02-18', 'Kathmandu'),
(11, 'Milan ', '', 'Baral', '', 'male', '2022-05-19', 'Sinamangal', 'Kathmandu', 'Nepali', 'Hindu', '4456', '2022-06-03', 'Banepa'),
(15, 'dipti', 'Cora Lara', 'Hebert', '', 'other', '2007-11-05', 'Ullam eu dolores aut', 'Dolore in vel ut mol', 'Eu animi eius aute ', 'Harum ipsam labore e', 'Dolore et amet prae', '1990-02-05', 'Et optio labore eli'),
(16, 'diya', 'Quintessa Foster', 'Kane', '', 'male', '1994-07-13', 'Et minim aut beatae ', 'Reprehenderit deseru', 'Unde qui quaerat lab', 'Et nulla maxime aspe', 'Exercitationem ea pa', '1986-01-21', 'ktm'),
(17, 'Abraham', 'Madtulku', 'Potter', '', 'female', '1972-09-16', 'Nostrum explicabo V', 'Aperiam tempore quo', 'Sit dolores eius il', 'Quae nulla laboriosa', 'Consequatur nostrud ', '1978-04-25', 'Nulla et est omnis '),
(19, 'Stuart', 'Tatiana Dale', 'Nielsen', '', 'female', '1980-10-27', 'Molestias reiciendis', 'Ut debitis amet ill', 'Quam anim est possim', 'Architecto nulla sap', 'Voluptatem aut quia ', '1971-10-19', 'Elit vero numquam c'),
(20, '123', '', '456', '', 'female', '2022-09-24', 'Sinamangal', 'Kathmandu', 'nepali', 'hindu', '4568', '2022-06-23', 'Kathmandu');

-- --------------------------------------------------------

--
-- Table structure for table `criminal_record`
--

CREATE TABLE `criminal_record` (
  `id` int(11) NOT NULL,
  `criminal_personal_info_id` int(11) NOT NULL,
  `offense_type` varchar(100) NOT NULL,
  `offense_description` text NOT NULL,
  `offense_date` varchar(10) NOT NULL,
  `punishment_type` varchar(100) NOT NULL,
  `punishment_date_start` varchar(10) NOT NULL,
  `court_case_number` varchar(50) NOT NULL,
  `case_file` text NOT NULL,
  `current_status` tinyint(1) NOT NULL DEFAULT 1,
  `punishment_date_end` varchar(10) NOT NULL,
  `prison_location` varchar(100) NOT NULL,
  `prison_contact` int(11) NOT NULL,
  `station_name` varchar(50) NOT NULL,
  `station_address` text NOT NULL,
  `station_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminal_record`
--

INSERT INTO `criminal_record` (`id`, `criminal_personal_info_id`, `offense_type`, `offense_description`, `offense_date`, `punishment_type`, `punishment_date_start`, `court_case_number`, `case_file`, `current_status`, `punishment_date_end`, `prison_location`, `prison_contact`, `station_name`, `station_address`, `station_number`) VALUES
(1, 3, 'eqrgqrg', 'wrf4f24rf', '', 'wrfrg', '2022-04-21', '5541', 'areg', 0, '2022-05-06', '', 9874, 'fus fus', 'wgh', 'ft4hy6tht64'),
(24, 7, 'absent', 'leaving class', '', 'suspense for 1 week', '2022-04-02', '855', 'qwd', 0, '2022-04-22', '', 0, '', '', ''),
(26, 3, 'qw', 'dsfv', '', 'wsgrrw', '2022-04-30', '55', 'w4tg', 5, '2022-04-12', 'rsgb', 666, 'wrhtg', 'wgh', 'ft4hy6tht64'),
(27, 3, 'Omnis quod quo a rer', 'Quos quod non et lab', '', 'Aut nihil saepe nihi', '1973-11-11', '661', 'Perferendis laborum ', 0, '1975-02-16', 'In magna culpa anim', 0, 'Lamar Myers', 'Rerum sunt et quasi', '627'),
(29, 7, 'Cupidatat commodo et', 'Perspiciatis tempor', '', 'Consequat Amet ea ', '1988-12-08', '607', 'Dignissimos quo eos', 0, '1994-05-12', 'Perferendis facilis ', 0, 'Lillith Potter', 'Laudantium nulla su', '166'),
(31, 7, 'Velit sed quo eu al', 'Hic ea fugiat id vo', '', 'Ea quidem officia du', '1987-03-17', '736', 'Aut excepteur eu qua', 0, '1985-11-08', 'Eos est sint aliqu', 0, 'Yeo Green', 'Quis in totam quaera', '802'),
(32, 11, 'Laborum Et similiqu', 'Voluptates laborum ', '', 'Voluptates magna eos', '2003-05-27', '660', 'Excepteur hic impedi', 0, '1994-03-27', 'Error non eiusmod na', 0, 'Hector Mcintosh', 'Laborum Dolore dele', '587'),
(33, 11, 'Id nihil et aliquam ', 'Proident rerum rem ', '', 'Nostrud eveniet dis', '1987-11-13', '775', 'Est tenetur volupta', 0, '2006-08-18', 'Repudiandae quae sed', 0, 'Salvador Carney', 'Est eum molestiae pe', '761'),
(34, 4, 'Omnis sed tempora en', 'Quis rerum dicta nul', '', 'Nisi earum dolore po', '1989-01-25', '110', 'Dolores porro mollit', 0, '1987-06-23', 'Quia omnis alias in ', 0, 'Zorita Estrada', 'Commodi ullam enim d', '127'),
(35, 4, 'Deserunt voluptas ve', 'Nemo dolor incididun', '', 'Enim amet est elig', '2007-11-07', '375', 'Quasi omnis a quo ac', 0, '1982-07-31', 'Repellendus Aut et ', 0, 'Ivan Berry', 'Soluta magna ipsa i', '98'),
(36, 16, 'Est laboris corpori', 'Laborum nisi atque i', '', 'Et nostrum dolore ei', '1983-07-27', '21', 'Fugiat vel distinct', 0, '2017-06-14', 'Tempore et esse lab', 0, 'Fredericka Mccarthy', 'Non in illum doloru', '773'),
(37, 18, 'mi', 'Libero asperiores cu', '', 'Sunt reprehenderit ', '2022-06-07', '912', 'Magni pariatur Rem ', 1, '1996-12-11', 'In et in qui id inc', 6565, 'April Conrad', 'Alias explicabo Asp', '30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `full_name` varchar(100) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `status`, `full_name`, `is_admin`, `created_at`) VALUES
(4, 'rusma@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'Rusma Khadka', 0, '0000-00-00'),
(5, 'dipti@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'Dipti K.C.', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `country` varchar(150) DEFAULT NULL,
  `city` varchar(180) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip_code` int(50) DEFAULT NULL,
  `facebook_profile` varchar(100) DEFAULT NULL,
  `twitter_profile` varchar(100) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `profile_image` varchar(12) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `country`, `city`, `state`, `zip_code`, `facebook_profile`, `twitter_profile`, `phone`, `profile_image`, `gender`) VALUES
(1, 2, '      Nepal', 'Bhaktapur', 'Nepal', 2298, 'rusma', 'rusma', 2147483647, NULL, 'female'),
(14, 3, ' Nepal', 'Bhaktapur', 'Nepal', 44660, 'rusma', 'rusma', 2147483647, NULL, 'female'),
(15, 4, ' Nepal', 'ktm', 'Nepal', 0, 'dipti', 'ewfdf', 0, NULL, 'female'),
(16, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criminal_personal_info`
--
ALTER TABLE `criminal_personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criminal_record`
--
ALTER TABLE `criminal_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `criminal_personal_info`
--
ALTER TABLE `criminal_personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `criminal_record`
--
ALTER TABLE `criminal_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

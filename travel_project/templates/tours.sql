-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Oct 20, 2021 at 09:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tours`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`email`, `password`, `id`) VALUES
('admin@gmail.com', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `status`) VALUES
(2, 'SideSeeing', '', 1),
(3, 'Religious Places', '', 1),
(4, 'Day Tours', '', 1),
(5, 'Camping', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `pckgId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `userId`, `pckgId`) VALUES
(2, 2, 2),
(3, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `packageDesc` varchar(255) NOT NULL,
  `packagePrice` int(11) NOT NULL,
  `packageType` int(11) NOT NULL,
  `packagePhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `packageName`, `packageDesc`, `packagePrice`, `packageType`, `packagePhoto`) VALUES
(1, 'Mumbai', 'Mumbai is the perfect blend of culture, customs and lifestyles. Mumbai is India\'s most cosmopolitan city, its financial powerhouse and the nerve center of India\'s fashion industry.', 38200, 2, '521659650_download (7).jpg'),
(2, 'Tokyo', 'Tokyo (東京, Tōkyō) is Japan\'s capital and the world\'s most populous metropolis. It is also one of Japan\'s 47 prefectures, consisting of 23 central city wards and multiple cities, towns and villages west of the city center. The Izu and Ogasawara Islands are', 55000, 2, '382915934_download (8).jpg'),
(3, 'Tirupati', 'The very name Tirupati is enough to evoke strong spiritual feelings, and while the name ‘God’s Abode’ indeed does justice to the place, Tirupati has quite a few other tourist attractions as well that make it a city worth visiting.', 37000, 3, '839544455_TIRUPATI.jpg'),
(4, 'Vaishno Devi', 'This town is the holy cave temple of Mata Vaishnodevi, with spirituality and vibrancy lingering in the atmosphere. It is considered one of the most sacred holy places in India.', 42000, 3, '136245396_download (9).jpg'),
(5, 'Spiti Valley, Himachal Pradesh', 'First on our list is, Spiti Valley nestled in the Keylong district of Himachal Pradesh. It is one of the best camping sites in India. Adventure enthusiasts and trekkers from all over the world come here to explore this untouched region in the Himalayas. T', 80000, 5, '471898054_spiti-valley-himachal-pradesh.jpg'),
(6, 'Solang Valley, Manali', 'One of the best camping sites in India, Solang Valley in Manali attracts visitors from the far ends of the world. The verdant spread of lush greenery, the gurgling of a stream nearby and the host of thrilling adventures, makes camping all the more fun. En', 84000, 5, '302561381_solang-valley-manali.jpg'),
(13, 'Hollant Beach:Goa', ' A Picture-Perfect Destination! The curvy bay lined with rustic boats, the clean, golden sand, the colorful shacks on one side, and the mesmerizing views of the sunset make this beach an absolute favorite for all photographers . It is also a great place f', 7500, 4, '244305377_Goa-Beach-Hollant.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `stars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `userId`, `description`, `stars`) VALUES
(1, 1, 'Very nice service! Amazing tours deals in affordable price.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `email`, `password`) VALUES
(1, 'vaibhavidixit511@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `viewmore`
--

CREATE TABLE `viewmore` (
  `id` int(100) NOT NULL,
  `placename` varchar(200) NOT NULL,
  `placelocation` varchar(200) NOT NULL,
  `placedesc` varchar(500) NOT NULL,
  `thingstoknow` varchar(900) NOT NULL,
  `packagecategory` varchar(200) NOT NULL,
  `photoone` varchar(500) NOT NULL,
  `phototwo` varchar(500) NOT NULL,
  `photothree` varchar(500) NOT NULL,
  `photofour` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `viewmore`
--
ALTER TABLE `viewmore`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `viewmore`
--
ALTER TABLE `viewmore`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

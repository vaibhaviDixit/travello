-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Oct 24, 2021 at 07:43 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `address`, `location`, `website`) VALUES
(1, 'Admin', '9284552192', 'admin@gmail.com', 'Solapur', 'Solapur', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `bookId` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `packageId` int(11) NOT NULL,
  `packagePrice` int(11) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL,
  `payMode` varchar(255) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `subTotal` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `rem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `bookId`, `name`, `phone`, `packageId`, `packagePrice`, `checkIn`, `checkOut`, `payMode`, `adults`, `children`, `subTotal`, `discount`, `total`, `paid`, `rem`) VALUES
(4, 'yeabv', 'Shrawani Dixit', '9865986585', 3, 37000, '2021-10-24', '2021-10-26', 'UPI', 2, 2, 222000, 5000, 217000, 10000, 207000);

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
(3, 2, 4),
(4, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `packageDesc` varchar(255) NOT NULL,
  `packagePrice` int(11) NOT NULL,
  `discount` float NOT NULL,
  `packageType` int(11) NOT NULL,
  `packagePhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `packageName`, `packageDesc`, `packagePrice`, `discount`, `packageType`, `packagePhoto`) VALUES
(1, 'Mumbai', 'Mumbai is the perfect blend of culture, customs and lifestyles. Mumbai is India\'s most cosmopolitan city, its financial powerhouse and the nerve center of India\'s fashion industry.', 38200, 0, 2, '521659650_download (7).jpg'),
(2, 'Tokyo', 'Tokyo (東京, Tōkyō) is Japan\'s capital and the world\'s most populous metropolis. It is also one of Japan\'s 47 prefectures, consisting of 23 central city wards and multiple cities, towns and villages west of the city center. The Izu and Ogasawara Islands are', 55000, 0, 2, '382915934_download (8).jpg'),
(3, 'Tirupati', 'The very name Tirupati is enough to evoke strong spiritual feelings, and while the name ‘God’s Abode’ indeed does justice to the place, Tirupati has quite a few other tourist attractions as well that make it a city worth visiting.', 37000, 0, 3, '839544455_TIRUPATI.jpg'),
(4, 'Vaishno Devi', 'This town is the holy cave temple of Mata Vaishnodevi, with spirituality and vibrancy lingering in the atmosphere. It is considered one of the most sacred holy places in India.', 42000, 0, 3, '136245396_download (9).jpg'),
(5, 'Spiti Valley, Himachal Pradesh', 'First on our list is, Spiti Valley nestled in the Keylong district of Himachal Pradesh. It is one of the best camping sites in India. Adventure enthusiasts and trekkers from all over the world come here to explore this untouched region in the Himalayas. T', 80000, 0, 5, '471898054_spiti-valley-himachal-pradesh.jpg'),
(6, 'Solang Valley, Manali', 'One of the best camping sites in India, Solang Valley in Manali attracts visitors from the far ends of the world. The verdant spread of lush greenery, the gurgling of a stream nearby and the host of thrilling adventures, makes camping all the more fun. En', 84000, 0, 5, '302561381_solang-valley-manali.jpg'),
(13, 'Hollant Beach:Goa', ' A Picture-Perfect Destination! The curvy bay lined with rustic boats, the clean, golden sand, the colorful shacks on one side, and the mesmerizing views of the sunset make this beach an absolute favorite for all photographers . It is also a great place f', 7500, 0, 4, '244305377_Goa-Beach-Hollant.jpg');

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
(1, 1, 'Very nice service! Amazing tours deals in affordable price.', 5),
(2, 1, 'Nice service!', 4),
(4, 1, 'very nice', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tourmembers`
--

CREATE TABLE `tourmembers` (
  `id` int(11) NOT NULL,
  `bookId` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourmembers`
--

INSERT INTO `tourmembers` (`id`, `bookId`, `name`, `type`, `amount`) VALUES
(15, 'yeabv', 'Monu', 'child', 18500),
(16, 'yeabv', 'riya', 'adult', 37000),
(17, 'yeabv', 'abhi', 'child', 18500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `address`) VALUES
(1, 'vaibhavi', '9284552192', 'sangola');

-- --------------------------------------------------------

--
-- Table structure for table `viewmore`
--

CREATE TABLE `viewmore` (
  `id` int(11) NOT NULL,
  `packageId` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photoone` varchar(255) NOT NULL,
  `phototwo` varchar(255) NOT NULL,
  `photthree` varchar(255) NOT NULL,
  `photofour` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `viewmore`
--

INSERT INTO `viewmore` (`id`, `packageId`, `location`, `description`, `photoone`, `phototwo`, `photthree`, `photofour`, `link`) VALUES
(1, 2, 'japan', 'idk', '712144922_download (3).jpg', '919435937_download (1).jpg', '507743692_Goa-Beach-Hollant.jpg', '491869502_download (9).jpg', 'https://www.youtube.com/watch?v=Jx6b0isD0jk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bookId` (`bookId`);

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
-- Indexes for table `tourmembers`
--
ALTER TABLE `tourmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewmore`
--
ALTER TABLE `viewmore`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tourmembers`
--
ALTER TABLE `tourmembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `viewmore`
--
ALTER TABLE `viewmore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

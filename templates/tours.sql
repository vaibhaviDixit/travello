-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Nov 02, 2021 at 03:47 PM
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
  `profile` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `profile`, `phone`, `email`, `address`, `location`, `website`, `fb`, `insta`, `whatsapp`) VALUES
(1, 'Admin', '466020427_pic-3.png', '9284552192', 'admin@gmail.com', 'Mumbai                                            ', 'Solapur', 'https://www.youtube.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', '9284552192');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `bookId` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `packageId` int(11) NOT NULL,
  `packagePrice` int(11) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL,
  `payMode` varchar(255) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `subTotal` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `distype` varchar(10) NOT NULL,
  `total` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `rem` int(11) NOT NULL,
  `bookedOn` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `bookId`, `name`, `phone`, `address`, `packageId`, `packagePrice`, `checkIn`, `checkOut`, `payMode`, `adults`, `children`, `subTotal`, `discount`, `distype`, `total`, `paid`, `rem`, `bookedOn`) VALUES
(4, 'yeabv', 'Shrawani Dixit', '9865986585', 'Solapur', 3, 37000, '2021-10-24', '2021-10-26', 'UPI', 2, 2, 222000, 5000, 'cash', 217000, 10000, 207000, '2021-10-31'),
(5, 'ijdbc', 'Shriyansh Mahamuni', '876743102', 'Vasud Road, Sangola                                       ', 5, 7000, '2021-11-01', '2021-11-03', 'OnlineTransfer', 2, 1, 35000, 5, 'per', 33250, 250, 33000, '2021-10-31'),
(6, 'eysjj', 'Mitali Salunkhe', '8764595498', 'Ajinkya plaza,Sangola                                           ', 17, 6400, '2021-10-30', '2021-11-02', 'UPI', 2, 0, 38400, 2, 'per', 37632, 37632, 0, '2021-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `bookonline`
--

CREATE TABLE `bookonline` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `bookId` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `packageId` int(11) NOT NULL,
  `packagePrice` int(11) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `subTotal` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `disType` varchar(100) NOT NULL,
  `coupon` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `paymentId` varchar(255) NOT NULL,
  `paymentStatus` varchar(10) NOT NULL,
  `bookedOn` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookonline`
--

INSERT INTO `bookonline` (`id`, `uid`, `bookId`, `name`, `phone`, `address`, `packageId`, `packagePrice`, `checkIn`, `checkOut`, `adults`, `children`, `subTotal`, `discount`, `disType`, `coupon`, `total`, `paymentId`, `paymentStatus`, `bookedOn`) VALUES
(1, 2, 'IMPERIOUS94554980_2', 'Sayali', '8767431102', 'Thane', 6, 4000, '2021-10-31', '2021-11-02', 1, 1, 12000, 300, 'cash', 'diwali', 10530, '20211030111212800110168645603136917', 'success', '2021-10-31'),
(2, 2, 'IMPERIOUS4756817_2', 'Sayali', '8767431102', 'Thane', 6, 4000, '2021-11-07', '2021-11-09', 1, 1, 12000, 300, 'cash', '', 11700, '20211030111212800110168886903127709', 'success', '2021-10-31'),
(3, 1, 'IMPERIOUS8811716_1', 'Vaibhavi Dixit', '9284552192', 'Sangali', 18, 3000, '2021-11-05', '2021-11-07', 1, 2, 12000, 3, 'per', 'diwali', 10476, '20211031111212800110168210703105638', 'success', '2021-10-31'),
(4, 1, 'IMPERIOUS3941622_1', 'VaibhaviD', '9284552192', 'Sangali', 1, 3400, '2021-11-04', '2021-11-05', 1, 1, 5100, 200, 'cash', '', 4900, '20211031111212800110168443403108938', 'success', '2021-10-31'),
(5, 1, 'IMPERIOUS91794175_1', 'VaibhaviD', '9284552192', 'Sangali', 15, 4300, '2021-11-05', '2021-11-06', 2, 2, 12900, 6, 'per', '', 12126, '20211031111212800110168249703114014', 'success', '2021-10-31'),
(6, 1, 'IMPERIOUS15664954_1', 'VaibhaviD', '9284552192', 'Sangali', 16, 7530, '2021-11-03', '2021-11-05', 1, 1, 22590, 200, 'cash', '', 22390, '', 'pending', '2021-11-01'),
(7, 1, 'IMPERIOUS10984805_1', 'VaibhaviD', '9284552192', 'Sangali', 16, 7530, '2021-11-03', '2021-11-05', 1, 1, 22590, 200, 'cash', '', 22390, '20211101111212800110168822903135859', 'success', '2021-11-01'),
(8, 1, 'IMPERIOUS49634695_1', 'VaibhaviD', '9284552192', 'Sangali', 6, 4000, '2021-11-03', '2021-11-05', 1, 1, 12000, 300, 'cash', '', 11700, '20211101111212800110168576603147418', 'success', '2021-11-01'),
(9, 2, 'IMPERIOUS76103629_2', 'Sayali', '8767431102', 'Thane', 19, 2000, '2021-11-27', '2021-11-28', 1, 1, 3000, 0, 'per', '', 3000, '20211101111212800110168480503123809', 'success', '2021-11-01');

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
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `couponCode` varchar(20) NOT NULL,
  `couponType` enum('p','r') NOT NULL,
  `couponValue` int(11) NOT NULL,
  `minValue` int(11) NOT NULL,
  `expiredOn` date NOT NULL,
  `status` int(11) NOT NULL,
  `addedOn` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `couponCode`, `couponType`, `couponValue`, `minValue`, `expiredOn`, `status`, `addedOn`) VALUES
(1, 'diwali', 'p', 10, 5000, '2021-11-07', 1, '2021-10-25 16:56:14'),
(2, 'AFDH90', 'p', 20, 9000, '2021-10-27', 1, '2021-10-27 14:44:40'),
(3, 'AMJKL3', 'r', 500, 5000, '2021-11-10', 1, '2021-10-30 16:38:01');

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
(5, 1, 18),
(6, 1, 16);

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
  `disType` varchar(10) NOT NULL,
  `packageType` int(11) NOT NULL,
  `packagePhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `packageName`, `packageDesc`, `packagePrice`, `discount`, `disType`, `packageType`, `packagePhoto`) VALUES
(1, 'Mumbai', 'Mumbai is the perfect blend of culture, customs and lifestyles. Mumbai is India\'s most cosmopolitan city, its financial powerhouse and the nerve center of India\'s fashion industry.', 3400, 200, 'cash', 2, '521659650_download (7).jpg'),
(2, 'Tokyo', 'Tokyo (東京, Tōkyō) is Japan\'s capital and the world\'s most populous metropolis. It is also one of Japan\'s 47 prefectures.', 55000, 2, 'per', 2, '382915934_download (8).jpg'),
(3, 'Tirupati', 'The very name Tirupati is enough to evoke strong spiritual feelings, and while the name ‘God’s Abode’ indeed does justice to the place.', 37000, 0, 'per', 3, '839544455_TIRUPATI.jpg'),
(4, 'Vaishno Devi', 'This town is the holy cave temple of Mata Vaishnodevi, with spirituality and vibrancy lingering in the atmosphere. ', 5000, 5, 'per', 3, '136245396_download (9).jpg'),
(5, 'Spiti Valley, Himachal Pradesh', 'First on our list is, Spiti Valley nestled in the Keylong district of Himachal Pradesh. It is one of the best camping sites in India. ', 7000, 2, 'per', 5, '471898054_spiti-valley-himachal-pradesh.jpg'),
(6, 'Solang Valley, Manali', 'One of the best camping sites in India, Solang Valley in Manali attracts visitors from the far ends of the world. ', 4000, 300, 'cash', 5, '302561381_solang-valley-manali.jpg'),
(13, 'Hollant Beach:Goa', ' A Picture-Perfect Destination! The curvy bay lined with rustic boats, the clean, golden sand, the colorful shacks on one side.', 7500, 0, 'per', 4, '244305377_Goa-Beach-Hollant.jpg'),
(14, 'Mahabaleshwar', 'Mahabaleshwar is a hill station located in the Western Ghats, in Satara district of Maharashtra', 5860, 500, 'cash', 2, '162534935_MAHABALESHWAR.jpg'),
(15, 'Shirdi', 'Located at a distance of 122 Km from Nasik in the Ahmednagar district of Maharashtra, Shirdi is the home of Sai Baba.', 4300, 6, 'per', 3, '391234510_SHIRDI.jpg'),
(16, 'Ajantha &amp; Ellora Caves', 'Ajanta and Ellora caves, considered to be one of the finest examples of ancient rock-cut caves, are located near Aurangabad in Maharashtra, India.', 7530, 200, 'cash', 5, '613178458_AJANTA-AND-ELLORA-CAVES.jpg'),
(17, 'Lavasa', 'Known as India\'s newest hill station, the Lavasa Corporation is constructing this private city.', 6400, 6, 'per', 4, '409387949_LAVASA.jpg'),
(18, 'Pachgani', 'Deriving its name from the five hills surrounding it, Panchgani is a popular hill station near Mahabaleshwar in Maharashtra.', 3000, 3, 'per', 4, '285277791_PANCHGANI.jpg'),
(19, 'Ganpatipule', 'Ganpatipule is mainly known for its 400 years old Ganapati Temple which is the prime attraction in Ganpatipule tour packages.', 2000, 0, 'per', 3, '862634137_520468845Ganpatipule_Main_thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `query` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `phone`, `query`) VALUES
(1, '9284552192', 'Please add some historical places for tours.');

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
(4, 1, 'very nice', 4),
(5, 2, 'Better service in affordable price.', 4),
(6, 1, 'Good', 2),
(7, 1, '', 2),
(8, 1, 'woww', 4);

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
(17, 'yeabv', 'abhi', 'child', 18500),
(18, 'wvbjs', 'Abhi', 'child', 3500),
(19, 'wvbjs', 'Rehan', 'adult', 7000),
(20, 'ijdbc', 'Abhi', 'child', 3500),
(21, 'ijdbc', 'Rehan', 'adult', 7000),
(22, 'eysjj', 'Tanuja', 'adult', 6400);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `address`, `profile`) VALUES
(1, 'VaibhaviD', '9284552192', 'Sangali', '726387059_ALIBAG.jpg'),
(2, 'Sayali', '8767431102', 'Thane', '626145968_LAVASA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `viewdetails`
--

CREATE TABLE `viewdetails` (
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
-- Dumping data for table `viewdetails`
--

INSERT INTO `viewdetails` (`id`, `packageId`, `location`, `description`, `photoone`, `phototwo`, `photthree`, `photofour`, `link`) VALUES
(1, 2, 'japan', 'idk', '712144922_download (3).jpg', '919435937_download (1).jpg', '507743692_Goa-Beach-Hollant.jpg', '491869502_download (9).jpg', 'https://www.youtube.com/watch?v=OKAYqzOfLjY'),
(2, 3, 'Pune', 'tirupati', '225703541_download (1).jpg', '524502061_download (1).jpg', '524796940_download (1).jpg', '270563364_download%2520(1).jpg', 'https://www.youtube.com/watch?v=i1PRlMkpUgM');

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
-- Indexes for table `bookonline`
--
ALTER TABLE `bookonline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `query`
--
ALTER TABLE `query`
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
-- Indexes for table `viewdetails`
--
ALTER TABLE `viewdetails`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookonline`
--
ALTER TABLE `bookonline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tourmembers`
--
ALTER TABLE `tourmembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `viewdetails`
--
ALTER TABLE `viewdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

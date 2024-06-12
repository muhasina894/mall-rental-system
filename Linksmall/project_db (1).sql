-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 10:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bank_tb`
--

CREATE TABLE `bank_tb` (
  `id` int(11) NOT NULL,
  `acc_no` varchar(11) NOT NULL,
  `acc_name` varchar(50) NOT NULL,
  `balance` int(11) NOT NULL,
  `card_no` varchar(16) NOT NULL,
  `expiry` date NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_tb`
--

INSERT INTO `bank_tb` (`id`, `acc_no`, `acc_name`, `balance`, `card_no`, `expiry`, `cvv`) VALUES
(1, '12345678901', 'afra', 499000, '1234567890123456', '2022-12-21', 234),
(2, '24681012141', 'muhasina', 70000, '0987654321098765', '2023-03-15', 894);

-- --------------------------------------------------------

--
-- Table structure for table `complaint_tb`
--

CREATE TABLE `complaint_tb` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `reply` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `photo` varchar(170) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint_tb`
--

INSERT INTO `complaint_tb` (`id`, `user_id`, `room_id`, `reply`, `title`, `description`, `photo`) VALUES
(1, 4, 5, 'ssry', 'degh', 'ghj', '#aesthetic #sparkle.jpg'),
(2, 4, 5, '', 'dfghh', 'gfdd', 'Dreams.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tb`
--

CREATE TABLE `feedback_tb` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `feedback` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_tb`
--

INSERT INTO `feedback_tb` (`id`, `user_id`, `room_id`, `feedback`) VALUES
(1, 1, 1, 'good'),
(2, 4, 5, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `notify_tb`
--

CREATE TABLE `notify_tb` (
  `id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `notify` text NOT NULL,
  `nrply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notify_tb`
--

INSERT INTO `notify_tb` (`id`, `request_id`, `notify`, `nrply`) VALUES
(1, 5, 'to be cancelled', 'dfg'),
(2, 5, 'cacelled', ''),
(3, 8, 'cacell', ''),
(4, 11, 'ffddsssfgjkk', 'duio');

-- --------------------------------------------------------

--
-- Table structure for table `payment_tb`
--

CREATE TABLE `payment_tb` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_tb`
--

INSERT INTO `payment_tb` (`id`, `rid`, `bank_id`, `amount`) VALUES
(1, 1, 1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `renewal_tb`
--

CREATE TABLE `renewal_tb` (
  `id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `leasedate` date NOT NULL,
  `renewaldate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `renewal_tb`
--

INSERT INTO `renewal_tb` (`id`, `request_id`, `leasedate`, `renewaldate`) VALUES
(1, 1, '2023-01-14', '2023-12-14'),
(2, 3, '2023-01-14', '2023-12-14'),
(3, 4, '2023-01-14', '2023-12-14'),
(4, 6, '2023-01-14', '2023-12-14'),
(5, 6, '2023-01-14', '2023-12-14'),
(6, 8, '2023-01-20', '2023-12-20'),
(7, 11, '2023-01-20', '2023-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `request_tb`
--

CREATE TABLE `request_tb` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `pstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_tb`
--

INSERT INTO `request_tb` (`id`, `room_id`, `user_id`, `date`, `status`, `pstatus`) VALUES
(1, 2, 1, '2023-01-14', 'delete', 'pending'),
(2, 3, 3, '2023-01-14', 'reqapproved', 'pending'),
(3, 3, 3, '2023-01-14', 'delete', 'pending'),
(4, 6, 4, '2023-01-14', 'delete', 'pending'),
(5, 5, 4, '2023-01-14', 'reqapproved', 'pending'),
(6, 1, 1, '2023-01-14', 'delete', 'pending'),
(7, 1, 3, '2023-01-20', 'reqrejected', 'pending'),
(8, 1, 3, '2023-01-20', 'reqapproved', 'pending'),
(9, 2, 3, '2023-01-20', 'pending', 'pending'),
(10, 4, 3, '2023-01-20', 'pending', 'pending'),
(11, 4, 1, '2023-01-20', 'reqapproved', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `room_tb`
--

CREATE TABLE `room_tb` (
  `id` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `photo` varchar(40) NOT NULL,
  `squarfeet` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `deposit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_tb`
--

INSERT INTO `room_tb` (`id`, `floor`, `photo`, `squarfeet`, `roomno`, `rate`, `description`, `deposit`) VALUES
(1, 1, 'images.jfif', 3, 1, 30000, 'in 1st floor', 1000),
(2, 1, 'flatten.jfif', 7, 2, 30000, '            in 1st floor', 1000),
(3, 1, 'images (1).jfif', 4, 3, 30000, 'not furnitured', 1000),
(4, 1, 'Dreams.jpg', 3, 4, 30000, '            fully furnitured', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `upload_tb`
--

CREATE TABLE `upload_tb` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_tb`
--

INSERT INTO `upload_tb` (`id`, `user_id`, `photo`, `type`, `status`) VALUES
(1, 1, 'MacBook Wallpaper.jpg', 'aadhar', 'approved'),
(2, 1, 'Dreams.jpg', 'aadhar', 'approved'),
(8, 3, '#aesthetic #sparkle.jpg', 'aadhar', 'approved'),
(9, 4, 'Dreams.jpg', 'aadhar', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id`, `username`, `name`, `email`, `phno`, `password`, `address`, `status`) VALUES
(1, 'afra', 'afra vp', 'afra@gmail.cm', '9539239769', '123', 'kasrul aliya', 'registered'),
(3, 'harsha ', 'harsha mk', 'harsha@gmail.com', '0987654321', '123', 'chavassery', 'unregistered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_tb`
--
ALTER TABLE `bank_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint_tb`
--
ALTER TABLE `complaint_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify_tb`
--
ALTER TABLE `notify_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_tb`
--
ALTER TABLE `payment_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renewal_tb`
--
ALTER TABLE `renewal_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_tb`
--
ALTER TABLE `request_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_tb`
--
ALTER TABLE `room_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_tb`
--
ALTER TABLE `upload_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_tb`
--
ALTER TABLE `bank_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaint_tb`
--
ALTER TABLE `complaint_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notify_tb`
--
ALTER TABLE `notify_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_tb`
--
ALTER TABLE `payment_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `renewal_tb`
--
ALTER TABLE `renewal_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request_tb`
--
ALTER TABLE `request_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `room_tb`
--
ALTER TABLE `room_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upload_tb`
--
ALTER TABLE `upload_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

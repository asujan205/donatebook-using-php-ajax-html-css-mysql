-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 07:46 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookstore`
--

CREATE TABLE `bookstore` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_publisher` varchar(100) NOT NULL,
  `book_writer` varchar(100) NOT NULL,
  `book_rent_price` varchar(100) NOT NULL,
  `book_price` varchar(100) NOT NULL,
  `Image1` varchar(100) NOT NULL,
  `Image2` varchar(100) NOT NULL,
  `SrtDesc` varchar(500) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookstore`
--

INSERT INTO `bookstore` (`book_id`, `book_name`, `book_publisher`, `book_writer`, `book_rent_price`, `book_price`, `Image1`, `Image2`, `SrtDesc`, `status`) VALUES
(1, 'sentacrushHHHHHHHHHH', 'sujan', 'sujan adhikari', '100', '1000', 'image1.jpg', 'image1.jpg', 'Hello,k xa,mero naam Rishab ho.Ma Nepal ma basxu.Yeti vaye talai pugnu parne. dfshdfh sdf sdfsd fdsf sdf dsf sdf sdf sdf sdf sdf sdf sdf sd fsd fsd fsd fsd fsd fsd fsd f sdf sdf sd fsd fsd fsd f sdf sd fsd fsd fsd fs df sdf sd fsd fds f sdf sdf sdf sd fsd fsd fsd fsd f sdf sd fsd f sdf sdf dsf ds fsd fsd f sdf sdf sdf ds fsd fds f sdf sdf sdf sdf sdf sdf ds fsd fsd fsd f sdf ', 1),
(2, 'candycHrusHhHHjdhfsjdfjh', 'candypublication', 'santosh', '200', '670', 'image1.jpg', 'image1.jpg', 'Hello,k xa,mero naam Rishab ho.Ma Nepal ma basxu.Yeti vaye talai pugnu parne. dfshdfh sdf sdfsd fdsf sdf dsf sdf sdf sdf sdf sdf sdf sdf sd fsd fsd fsd fsd fsd fsd fsd f sdf sdf sd fsd fsd fsd f sdf sd fsd fsd fsd fs df sdf sd fsd fds f sdf sdf sdf sd fsd fsd fsd fsd f sdf sd fsd f sdf sdf dsf ds fsd fsd f sdf sdf sdf ds fsd fds f sdf sdf sdf sdf sdf sdf ds fsd fsd fsd f sdf ', 1),
(3, 'mysex', 'sexial', 'thomas ', '310', '1000', 'image1.jpg', 'image1.jpg', 'Hello,k xa,mero naam Rishab ho.Ma Nepal ma basxu.Yeti vaye talai pugnu parne. dfshdfh sdf sdfsd fdsf sdf dsf sdf sdf sdf sdf sdf sdf sdf sd fsd fsd fsd fsd fsd fsd fsd f sdf sdf sd fsd fsd fsd f sdf sd fsd fsd fsd fs df sdf sd fsd fds f sdf sdf sdf sd fsd fsd fsd fsd f sdf sd fsd f sdf sdf dsf ds fsd fsd f sdf sdf sdf ds fsd fds f sdf sdf sdf sdf sdf sdf ds fsd fsd fsd f sdf ', 1),
(4, 'rich dad poor dad', 'Robert Kiyosaki', 'Robert Kiyosaki', '300', '1500', 'image1.jpg', 'image1.jpg', 'robert aksdjf dfahf dfkhdsfh df df df df d dfd fd fdf df df dfdf dfdsfdf dsfsdf sdfsdfsd sdfdsf dfdf dfdsfd dfsdf sdfsdf dfdfd sdfsfd sdfdf sdf sd fsdfsdf sdfsdf sdfsdf sdfsdf \r\n', 1),
(33, 'something', 'someone', 'someone special', 'something', '8888', 'image1.jpg', 'image1.jpg', 'kajdfkajK djsf kdsjf sdkfj skdfj sdkf sdfks dfksd kfsdkfj sdkjf dskjf dfjskdf jskdfj lskdjf skdjf skdfj sdkfj sdkfjs dkfjlskd fjskldjf skdfj skldfj slkdfj skdfj skdlfj sdkjfsld kfsdkf sldkfjslkdjf sdlkf sdlkfj sdlfk j ', 1),
(75, 'rame', 'Ram', 'Ram', '1500', '1500', 'image1.jpg', 'image1.jpg', 'sdfk dsf dsf ds s dg a dg a dg fa sdfs df sdf sdf sd fsd fds f sdf sdf sd fs df sdf sd fs df sdf sd fs df sdf sd f sdf sd f', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `id` int(11) NOT NULL,
  `donated_items_name` varchar(100) NOT NULL,
  `donated_items_numbers` int(11) NOT NULL,
  `donar_name` varchar(100) NOT NULL,
  `donar_address` varchar(100) NOT NULL,
  `doner_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`id`, `donated_items_name`, `donated_items_numbers`, `donar_name`, `donar_address`, `doner_phone`) VALUES
(1, 'damak', 45, 'sujan', 'damak', '876565'),
(2, '', 0, '', '', ''),
(3, '', 0, '', '', ''),
(4, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_renter_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `id_varification` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `id_verification_type` varchar(100) NOT NULL,
  `id_verification` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`user_id`, `user_name`, `user_password`, `id_verification_type`, `id_verification`, `email`) VALUES
(1, 'santosh', 'santoshi1', 'citizenchip', '009874356246', 'sontosh@gmail.com'),
(2, 'yushub', 'yushub1', 'passport', '255366772', 'yushub@gmail.com'),
(3, 'rishab', 'rishab1', 'school identification', '2356365563', 'rishu@gmail.com'),
(4, 'sujan', 'gjhhhjjhjh', '', '245435356', 'asujan@gmail.com'),
(5, 'sujan', '16363637', '', '12355222', 'asujan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookstore`
--
ALTER TABLE `bookstore`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `doner`
--
ALTER TABLE `doner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renter`
--
ALTER TABLE `renter`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doner`
--
ALTER TABLE `doner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

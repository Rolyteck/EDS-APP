-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 12:08 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `read_sign`
--

-- --------------------------------------------------------

--
-- Table structure for table `signer`
--

CREATE TABLE `signer` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signer`
--

INSERT INTO `signer` (`id`, `Fname`, `Lname`, `email`, `pass`) VALUES
(1, 'chidi', 'chuk', 'jollydosky@gmail.com', '$2y$10$T8Z43ReOAQIhFEQrILqF/OtJ/1TB9JUhnJrmkqL10D7fXU0plM3jK'),
(2, 'hannah', 'arira', 'hanan@gmail.com', '$2y$10$KaSIn95wivAAHw9d41uiBeTmS6F5r0K/EtS627wZhTwPQU7lnZja.'),
(3, 'jovial', 'jovial', 'jovial@gmail.com', '$2y$10$eJ9XQcKHZ9fVOOB0/.hMkO.yBaQy3m0whedzwtQgc1v7pP5eh2GD6'),
(4, 'e', 'e', 'jollydosky@gmnail.com', '$2y$10$1Z2WhStDNGScwMhYFHKWROguS77v//8lmVdG2tnztWEnUtyKNtl7m'),
(5, 'ffffffffffffffffff', 'fffffffffffffffffffffffff', 'jollydosky@gmail.com', '$2y$10$BUZFu7Nqg5pxf5O7m8vpBudTK7vbJC5LmoybFSAaNtS9uGc9sT8nq'),
(6, 'jovial', 'eeeeeeeeeeeeeee', 'jollydosky@gmail.com', '$2y$10$8EdQfiDF.SPxjCbltfddmuZPb8CVHNUrhNj6DTMrN/Re3gMrhhrsC'),
(7, 'jovial', 'eeeeeeeeeeeeeee', 'jollydosky@gmail.com', '$2y$10$VXiHYiTsWDm3cSZNeXnX5OIH3BapjCzLBhg6U1lw4lIqEZlrKNBPK'),
(8, 'jovial', 'eeeeeeeeeeeeeee', 'jollydosky@gmail.com', '$2y$10$1abBlmU5p1GRIJjJ5MowtOadGBaAffbBenWolw/asfMGaR93zKxbm'),
(9, 'jovial', 'jodj', 'jollydosky@gmail.com', '$2y$10$r.q0PR/ULtyyLcQbX2seh.kJ7bXSGFsbLlCNxTuPrt.5M3Sqo00zW'),
(10, 'jovial', 'xxx', 'jollydosky@gmail.com', '$2y$10$vtMRFFj5QrgomebNMB43Ye/Q8LiF9Ppv1j.jM8bo5jQSpi3fumXly'),
(11, 'joviallll', 'j', 'jollydosky@gmail.com', '$2y$10$bNUysFqDbidtxCETtfbC..rPuq2YEbLu0hJMI8yoaDOA0c72RO3o.'),
(12, 'wwwwwwwwwwwwwwwww', 'wwwwwwwwwwww', 'jollydosky@gmail.com', '$2y$10$pBKgPEQMJO3lwb010xa/UOJzdnD91BC4xLtaaoYDG9XzSvlhruWxu'),
(13, 'david', 'anyatonuwu', 'david@gmail.com', '$2y$10$mNA92CJ21idmiv2sHZguEOPCb2v3Y/WLpz9MdpPo0GBK7asW6N35K'),
(14, 'jovial', 'j', 'jollydosky@gmail.com', '$2y$10$DN4khy0xSHyusrh1CYCCGeDJm9XeQe5dlfc.2MS4SyRPiKYl8w4wi'),
(15, 'jovial', 'j', 'jollydosky@gmail.com', '$2y$10$4xzXVYHDouY9DKr0biA7AeUnHxDupeQwuDC00X30aGmb1BJNbFEnS'),
(16, 'jovial', 'j', 'jollydosky@gmail.com', '$2y$10$8nxkUqGk6OGdI.3cNIQGy.uT10w3SiviL6KqhcXIdu6Fltv8YmfJW'),
(17, 'jovial', 'j', 'jollydosky@fgmail.com', '$2y$10$BRgoHXvoEORPQ43vTw4IROwQ8ZFbOiKhPBfRbjFVXU5PrtTn6DMAe'),
(18, 'david', 'dave', 'rexdavidanyatonwu@gmail.com', '$2y$10$gXkCV4WlpraYyuKSSbxSiuxifahYZeKniDdZg1cajcEQrqDvdpaCK'),
(19, 'jbjlbl', 'nkknlnn', 'chidijovial@gmail.com', '$2y$10$F4JFpqJo4dQVYRoOn1A3neULOCSDJGXtaLJztW/KNo6mQiD9WM0Q.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signer`
--
ALTER TABLE `signer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signer`
--
ALTER TABLE `signer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

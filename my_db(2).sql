-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2015 at 04:47 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
  `d_id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`d_id`, `designation`) VALUES
(1, 'teacher'),
(2, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `body` text NOT NULL,
  `date_added` date NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `user_posted_to` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `date_added`, `added_by`, `user_posted_to`) VALUES
(89, 'which are the recommended books for this sem ??', '2014-10-08', 'vinay', 'vinay'),
(90, 'can anyone explain about databases ???', '2014-10-08', 'ankit', 'Ankit'),
(91, 'hello', '2014-10-08', 'ankit', 'Ankit'),
(92, 'hello how r u?', '2014-10-08', 'ankit', 'Naved'),
(93, 'hell world', '2014-10-11', 'rahul', 'rahul'),
(94, 'whats the capital', '2014-10-15', 'ankit', 'Ankit'),
(95, 'i have a query in java', '2014-10-18', 'ankit', 'Ankit'),
(96, 'corrected the search form !!!', '2014-10-20', 'ankit', 'Ankit'),
(97, 'hello !!', '2014-10-20', 'david', 'Ankit'),
(98, 'questions show here', '2014-11-11', 'rahul', 'rahul'),
(99, 'hi', '2014-11-11', 'ankit', 'Ankit'),
(100, '  ', '2014-11-11', 'ankit', 'Ankit'),
(101, 'hello', '2014-11-11', 'ankit1', 'Ankit1');

-- --------------------------------------------------------

--
-- Table structure for table `post_ans`
--

CREATE TABLE IF NOT EXISTS `post_ans` (
`id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `posted_to` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `remove` tinyint(1) NOT NULL DEFAULT '0',
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `post_ans`
--

INSERT INTO `post_ans` (`id`, `answer`, `posted_to`, `added_by`, `remove`, `post_id`) VALUES
(22, 'hii', 'David', 'david', 0, 87),
(23, 'hii', 'David', 'vinay', 0, 87),
(24, 'washington DC', 'David', 'vinay', 0, 88),
(25, 'heeeeee', 'David', 'vinay', 0, 79),
(26, 'please tell ', 'David', 'vinay', 0, 89),
(27, 'check out the SIM provided by clg', 'David', 'david', 0, 89),
(28, 'html foundation !!!! ', 'David', 'ankit', 0, 89),
(29, 'organising data in form of columns and rows', 'David', 'david', 0, 90),
(30, 'thanks', 'David', 'ankit', 0, 90),
(31, 'whats a RDBMS ?', 'David', 'ankit', 0, 90),
(32, 'wdhddjqdij', 'David', 'ankit', 0, 90),
(33, 'yess', 'David', 'naved', 0, 90),
(34, 'good', 'David', 'ankit', 0, 92),
(35, 'delhi', 'David', 'vinay', 0, 94),
(36, 'the get request ', 'David', 'david', 0, 96),
(37, 'ohkk', 'David', 'david', 0, 98),
(38, '', 'David', 'ankit', 0, 101),
(39, 'ohkkk', 'David', 'david', 0, 101),
(40, '', 'David', 'david', 0, 98),
(41, '', 'David', 'david', 0, 95);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`Id` int(10) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `category`) VALUES
(1, 'Electronics'),
(2, 'Cars'),
(3, 'Baby'),
(4, 'Furniture'),
(5, 'Books'),
(6, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `product_update`
--

CREATE TABLE IF NOT EXISTS `product_update` (
`Id` int(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Category` int(10) NOT NULL,
  `Rate` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `product_update`
--

INSERT INTO `product_update` (`Id`, `Title`, `Category`, `Rate`, `Name`, `Email`, `Phone`, `Image`) VALUES
(59, 'game of thrones', 5, '123', 'Vinay Kandpal', 'vinay@gmail.com', '1234456677', 'uploads/111111.jpg'),
(60, 'audi', 2, '12311111', 'Vinay Kandpal', 'vinay@gmail.com', '1234456677', 'uploads/car.png'),
(61, 'bmw i8', 2, '12311111', 'Ankit Singh', 'ankit@gmail.com', '1234456677', 'uploads/bmw-i8-front-left-view.jpg'),
(62, 'moto g', 6, '12345', 'rahul', 'rahu@gmail.com', '1234456677', 'uploads/2014-05-13-10.10.51.jpg'),
(63, 'videocon tv', 1, '1234', 'Ankit', 'ankit@mit.edu', '122233', 'uploads/lcd-screen.jpg'),
(64, 'classics', 5, '300', 'David', 'david@yahoo.com', '120000066', 'uploads/images.jpg'),
(65, 'bravia 2yrs old', 1, '1200', 'david', 'david@mit.com', '1234556788', ''),
(66, 'charles dickens', 5, '120', 'david', 'david@gmail.com', '12345555', 'uploads/85-8.jpg'),
(67, 'sony bravia', 1, '1234', 'david', 'david@gmail.com', '12344', 'uploads/lcd-screen.jpg'),
(68, 'asus zenfone', 6, '12345', 'Ankit', 'ankitsingh@gmail.com', '978782722', 'uploads/ASUS-Zenfone-5-1.jpg'),
(69, 'bravia', 1, '12333', 'Don Corleone', 'corleone@gmail.com', '456788', 'uploads/lcd-screen.jpg'),
(70, 'samsung s6', 6, '14000', 'anil', 'anil@gmail.com', '889898989', 'uploads/galaxy6_render_t04021530.jpg'),
(71, 'baby pram', 3, '1500', 'Aloknath', 'aloknath@yahoo.com', '980998900', 'uploads/baby-pram.jpg'),
(72, 'i watch', 1, '12000', 'Ankit', 'Ankitsingh1492@gmail.com', '9560878878', 'uploads/yeahP9090002.jpg'),
(73, 'windows phone', 6, '6500', 'mr vinay', 'vinay@gmail.com', '9786757588', 'uploads/6471117_orig.jpg'),
(74, 'Santro', 2, '100000', 'Ankit', 'ankit@miqt.edu', '909809892', 'uploads/hyundai-santro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`user_id` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `Username`, `Email`, `password`) VALUES
(7, 'David', 'davidjmalan@harvard.edu', '172522ec1028ab781d9dfd17eaca4427'),
(10, 'Ankit', 'ankitsingh1492@gmail.com', '447d2c8dc25efbc493788a322f1a00e7');

-- --------------------------------------------------------

--
-- Table structure for table `site_user`
--

CREATE TABLE IF NOT EXISTS `site_user` (
`user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(41) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12225 ;

--
-- Dumping data for table `site_user`
--

INSERT INTO `site_user` (`user_id`, `username`, `password`) VALUES
(1, 'Griffin', '*14E65567ABDB5135D0CFD9A70B3032C179A49EE7'),
(2, 'John', '*2470C0C06DEE42FD1618BB99005ADCA2EC9D1E19'),
(4, 'Ankit', 'ankit'),
(6, 'rahul', 'rahul'),
(7, 'david', 'malan'),
(89, 'ankit singh', 'hello'),
(133, 'ankit', 'cool'),
(134, 'ankit singh', ''),
(135, '', ''),
(136, '', ''),
(12222, 'ded', 'phph'),
(12223, 'dwd', 'SD'),
(12224, 'dwd', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE IF NOT EXISTS `stud` (
  `id` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `COURSE` char(41) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`id`, `username`, `COURSE`, `d_id`) VALUES
('S001', 'DAVID', 'BCA', 2),
('S002', 'ANKIT', 'BCA', 2),
('S003', 'RAHUL', 'BCA', 2),
('S004', 'VINAY', 'BCA', 2),
('S005', 'Naved', 'Mass_Comm', 2),
('S006', 'XYZ', 'BCA', 2),
('S007', 'akanksha', 'BCA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `system_db`
--

CREATE TABLE IF NOT EXISTS `system_db` (
`user_id` int(11) NOT NULL,
  `id` varchar(30) NOT NULL,
  `d_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(41) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `system_db`
--

INSERT INTO `system_db` (`user_id`, `id`, `d_id`, `fname`, `lname`, `username`, `password`, `email`, `bio`) VALUES
(11, 'T002', 1, 'Ankit', 'Singh', 'Ankit', '18821c95839b9e2667aed54091f69223', 'ankitsingh14922gmail.com', 'hello world '),
(12, 'S002', 2, 'Ankit', 'Singh', 'Ankit1', '4527ac5a0774a3607e95ae15ad1a3740', 'ankitsingh1492@gmail.com', 'if you see this it is working'),
(13, 'T001', 1, 'David', 'Malan', 'David', '172522ec1028ab781d9dfd17eaca4427', 'david@example.com', 'hello world'),
(14, 'T003', 1, 'Rahul', 'Sharma', 'rahul', '439ed537979d8e831561964dbbbd7413', 'rahulsharma@gmail.com', 'hello world this is to test the bio div works properly and wraps the test around'),
(15, 'T003', 1, 'rahul', 'sharma', 'rahul1', '439ed537979d8e831561964dbbbd7413', 'rahul@gmail.com', 'if you see this it is working'),
(16, 'T004', 1, 'vinay', 'kandpal', 'vinay', '5a8eaa3e637f51ba3f9df03355d7bc08', 'vinay@gmail.com', 'just updated my profile'),
(17, 'S004', 2, 'vinay', 'kandpal', 'vinay1', 'f6ab0c1c0f357b124fdc09ca289c6c24', 'vinay@gmail.com', 'if you see this it is working'),
(18, 'S005', 2, 'Naved', 'Ali', 'Naved', '899d14a6fc39e8980f9eca35c324d790', 'navedali@gmail.com', 'hii friends'),
(19, 'S006', 2, 'test', 'singh', 'xyz', '827ccb0eea8a706c4c34a16891f84e7b', 'xyz@test.com', ''),
(20, 'S007', 2, 'akanksha', 'singh', 'manohar', '2754358ffd305c828a4d796003052c56', 'akankshasingh127@gmail.com', 'hello... I am MANOHAR\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE IF NOT EXISTS `teach` (
  `id` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `course` char(41) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach`
--

INSERT INTO `teach` (`id`, `username`, `course`, `d_id`) VALUES
('T001', 'david', 'BCA', 1),
('T002', 'Ankit', 'BCA', 1),
('T003', 'Rahul', 'BCA', 1),
('T004', 'Vinay', 'BCA', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
 ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_ans`
--
ALTER TABLE `post_ans`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product_update`
--
ALTER TABLE `product_update`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `site_user`
--
ALTER TABLE `site_user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
 ADD PRIMARY KEY (`id`), ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `system_db`
--
ALTER TABLE `system_db`
 ADD PRIMARY KEY (`user_id`), ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `teach`
--
ALTER TABLE `teach`
 ADD PRIMARY KEY (`id`), ADD KEY `d_id` (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `post_ans`
--
ALTER TABLE `post_ans`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_update`
--
ALTER TABLE `product_update`
MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `site_user`
--
ALTER TABLE `site_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12225;
--
-- AUTO_INCREMENT for table `system_db`
--
ALTER TABLE `system_db`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `stud`
--
ALTER TABLE `stud`
ADD CONSTRAINT `stud_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `designation` (`d_id`);

--
-- Constraints for table `system_db`
--
ALTER TABLE `system_db`
ADD CONSTRAINT `system_db_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `designation` (`d_id`);

--
-- Constraints for table `teach`
--
ALTER TABLE `teach`
ADD CONSTRAINT `teach_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `designation` (`d_id`),
ADD CONSTRAINT `teach_ibfk_2` FOREIGN KEY (`d_id`) REFERENCES `designation` (`d_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

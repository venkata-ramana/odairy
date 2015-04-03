-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2015 at 06:01 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `odairy`
--

-- --------------------------------------------------------

--
-- Table structure for table `design_register`
--

CREATE TABLE IF NOT EXISTS `design_register` (
`u_uid` int(11) NOT NULL,
  `u_uname` varchar(100) NOT NULL,
  `u_design_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `design_register`
--

INSERT INTO `design_register` (`u_uid`, `u_uname`, `u_design_id`) VALUES
(2, '21232f297a57a5a743894a0e4a801fc3', 1),
(5, '1f20383838dc8688fbd142e7ec81f123', 2),
(6, '2ebb15f171339fbb56fc3f21d1842c9c', 2),
(7, 'd980d660b929617480ed96fd19f128ee', 2),
(8, '65c4cb08bb5da440ca21cd13d6156b6c', 1),
(9, 'd77d2953c546cb33e2d0bff4989f6aa2', 2),
(10, 'bf0760f552eeaf6064cf7e7e33e25201', 1),
(11, '4de04266bdd87410de698cfc33c55d68', 2);

-- --------------------------------------------------------

--
-- Table structure for table `insert_note`
--

CREATE TABLE IF NOT EXISTS `insert_note` (
`note_id` int(11) NOT NULL,
  `note_title` text NOT NULL,
  `note_date` text NOT NULL,
  `note_desc` text NOT NULL,
  `note_holder` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=136 ;

--
-- Dumping data for table `insert_note`
--

INSERT INTO `insert_note` (`note_id`, `note_title`, `note_date`, `note_desc`, `note_holder`) VALUES
(118, 'hai', '2015-02-09 03:19:46', 'hello', '21232f297a57a5a743894a0e4a801fc3'),
(119, 'helloadasda', '2015-02-09 03:25:06', 'sdasdasjn', '21232f297a57a5a743894a0e4a801fc3'),
(120, 'a', '2015-02-09 03:56:39', 'a', '21232f297a57a5a743894a0e4a801fc3'),
(121, 'b', '2015-02-09 03:58:35', 'b', '21232f297a57a5a743894a0e4a801fc3'),
(122, 'casd', '2015-02-09 03:58:44', 'asdas', '21232f297a57a5a743894a0e4a801fc3'),
(123, 'adsas', '2015-02-09 03:58:52', 'adksjahdksaj', '21232f297a57a5a743894a0e4a801fc3'),
(124, 'sdfhsdkjfhdj', '2015-02-09 03:58:58', 'sjfhdjsf', '21232f297a57a5a743894a0e4a801fc3'),
(125, 'asdjs', '2015-02-09 03:59:03', 'zjdhsakjd', '21232f297a57a5a743894a0e4a801fc3'),
(126, 'asda', '2015-02-09 03:59:09', 'akjsdhkjas', '21232f297a57a5a743894a0e4a801fc3'),
(127, 'Hello World', '2015-02-09 03:59:27', 'Hell......................', '21232f297a57a5a743894a0e4a801fc3'),
(128, 'ahsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2015-02-09 04:27:00', 'hai', '21232f297a57a5a743894a0e4a801fc3'),
(129, 'I am in Class room', '2015-02-10 06:21:16', 'Class is very boaring.........', '21232f297a57a5a743894a0e4a801fc3'),
(130, 'Hai', '2015-02-10 06:27:40', 'jhajkhdskjsahkjdka', '2ebb15f171339fbb56fc3f21d1842c9c'),
(131, 'I am Going to college..', '2015-02-11 04:08:17', 'I am in Bus with venkat and Mr.Rao Garu.', 'd980d660b929617480ed96fd19f128ee'),
(132, 'I am Rao', '2015-02-11 04:15:22', 'Mr. Rao in Busssssssssssssssssssss............zzzzz', '65c4cb08bb5da440ca21cd13d6156b6c'),
(133, 'my day', '2015-02-12 09:02:54', 'fine', 'd77d2953c546cb33e2d0bff4989f6aa2'),
(134, 'i am in college', '2015-02-14 05:18:54', 'having fun with dairy....', 'bf0760f552eeaf6064cf7e7e33e25201'),
(135, 'hey there', '2015-03-14 08:31:28', 'hey i typed hey there in this page.', '4de04266bdd87410de698cfc33c55d68');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`u_id` int(10) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_pwd` text NOT NULL,
  `u_fname` varchar(20) NOT NULL,
  `u_lname` text NOT NULL,
  `u_gen` varchar(6) NOT NULL,
  `u_birth` text NOT NULL,
  `u_bio` text NOT NULL,
  `u_pno` int(11) NOT NULL,
  `u_street` varchar(30) NOT NULL,
  `u_city` varchar(20) NOT NULL,
  `u_email` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`u_id`, `u_name`, `u_pwd`, `u_fname`, `u_lname`, `u_gen`, `u_birth`, `u_bio`, `u_pno`, `u_street`, `u_city`, `u_email`) VALUES
(5, '1f20383838dc8688fbd142e7ec81f123', '847c48fd2357ca258855f3fc5a7ea61a', 'venkat', 'ramana', 'male', '1994/10/10', 'hai', 2147483647, '', '', 'vramana98@gmail.com'),
(2, '21232f297a57a5a743894a0e4a801fc3', '8ed3762b6c444bbe01cd35e0e72cadd1', 'Venkat', 'Ramana', 'male', '1994/10/22', 'Developer-india', 2147483647, 'kakinada', 'kakinada', 'vramana98@gmail.com'),
(6, '2ebb15f171339fbb56fc3f21d1842c9c', '2e3744bc1fde80a16dd08fe0c2cb4d15', 'Charan', 'Tsalla', 'male', '1994/12/18', 'brother of bommali', 2147483647, 'rajahmandy', 'rjy', 'tsallasaicharan@gmail.com'),
(11, '4de04266bdd87410de698cfc33c55d68', '1b67b8ec80819688d7d2f60b8a8b2b36', 'venkatesh', 'geddam', 'male', '1993/05/19', 'pedhanna is fuck ', 2147483647, '', '', 'xyz@goodcs.com'),
(8, '65c4cb08bb5da440ca21cd13d6156b6c', 'd6e08cbc6e2cae357bf78b1b4b3f51eb', 'Rao', 'Garu', 'male', '1993/05/19', 'mr.rao garu is very cute little boy', 2147483647, 'Ambedkar Nagar', 'Yanam', 'pwa.venat@gmail.com'),
(10, 'bf0760f552eeaf6064cf7e7e33e25201', 'c44a471bd78cc6c2fea32b9fe028d30a', 'Sriram ', 'Veera', 'male', '1994/09/05', 'fgdgfdfg', 2147483647, '', '', 'veeraghanta.sriram@gmail.com'),
(9, 'd77d2953c546cb33e2d0bff4989f6aa2', '45ac8b35ebbcb1f98982669a61de2a21', 'anurag', 'alla', 'male', '1998/1/1', 'dfg', 2147483647, '', '', 'anuragalla@gmail.com'),
(7, 'd980d660b929617480ed96fd19f128ee', '3cbd1da4fea648cc8a4e3a336e6a2ea1', 'Sudheer', 'Kumar', 'male', '1994/01/16', 'having fun with venkat', 2147483647, 'mainroad', 'Yanam', 'ce.sudheer44@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `design_register`
--
ALTER TABLE `design_register`
 ADD PRIMARY KEY (`u_uid`);

--
-- Indexes for table `insert_note`
--
ALTER TABLE `insert_note`
 ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`u_name`), ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `design_register`
--
ALTER TABLE `design_register`
MODIFY `u_uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `insert_note`
--
ALTER TABLE `insert_note`
MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

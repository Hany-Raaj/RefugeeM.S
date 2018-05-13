-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 02:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `id` int(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `a1` varchar(1000) NOT NULL,
  `a2` varchar(1000) NOT NULL,
  `a3` varchar(1000) NOT NULL,
  `a4` varchar(1000) NOT NULL,
  `a5` varchar(1000) NOT NULL,
  `a6` varchar(1000) NOT NULL,
  `a7` varchar(1000) NOT NULL,
  `a8` varchar(1000) NOT NULL,
  `a9` varchar(1000) NOT NULL,
  `a10` varchar(1000) NOT NULL,
  `a11` varchar(1000) NOT NULL,
  `a12` varchar(1000) NOT NULL,
  `a13` varchar(1000) NOT NULL,
  `a14` varchar(1000) NOT NULL,
  `a15` varchar(1000) NOT NULL,
  `a16` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`id`, `date`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`) VALUES
(1, '2018-05-02 11:31:33', '<div class=\"col-md-6 col-sm-6\">\r\n                    <div class=\"cause\">\r\n                        <img src=\"upload/', '1.jpg', '\" alt=\"\" class=\"cause-img\">\r\n                        <h4 class=\"cause-title\"><a  >', 'FOODS & WATER', '</a></h4>\r\n                        <div class=\"cause-details\">', '                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.\r\n', '</div>\r\n                        <div class=\"btn-holder text-center\">\r\n                          <a href=\"donation.php\" class=\"btn btn-primary\"   > DONATE NOW</a>                       \r\n                        </div>\r\n                    </div> <!-- /.cause -->\r\n                </div> ', '', '', '', '', '', '', '', '', ''),
(2, '2018-05-02 11:45:35', '', '1.jpg', '', 'dsfdsfdsfggs', '', 'dfdsssssssssssssssssssssfdfgdgdg', '', '', '', '', '', '', '', '', '', ''),
(3, '2018-05-02 11:46:21', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '2018-05-02 11:46:37', '', '1.jpg', '', 'dsfdsfdsfggs', '', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhggggggggggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhggggggggggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhggggggggggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhggggggggggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhggggggggggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhggggggggggg', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(250) NOT NULL,
  `a1` varchar(1000) NOT NULL,
  `a2` varchar(1000) NOT NULL,
  `a3` varchar(2000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `a1`, `a2`, `a3`, `date`) VALUES
(6, 'tusar8145@gmail.com', 'info', 'cxzc', '2018-05-02 09:52:03'),
(7, 'tusar8145@gmail.com', 'gfdg', 'gggg', '2018-05-02 09:52:14'),
(12, 'tusar8145@gmail.com', 'ddd', 'ddd', '2018-05-02 09:57:19'),
(13, 'tusar8145@gmail.com', 'dd', 'dd', '2018-05-02 09:57:25'),
(14, 'tusar8145@gmail.com', 'info', 'g', '2018-05-02 10:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `a1` varchar(1000) NOT NULL,
  `a2` varchar(1000) NOT NULL,
  `a3` varchar(1000) NOT NULL,
  `a4` varchar(1000) NOT NULL,
  `a5` varchar(1000) NOT NULL,
  `a6` varchar(1000) NOT NULL,
  `a7` varchar(1000) NOT NULL,
  `a8` varchar(1000) NOT NULL,
  `a9` varchar(1000) NOT NULL,
  `a10` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `date`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`) VALUES
(2, '2018-05-02 10:57:47', '500', 'Ahmed', 'Dhaka', 'g@g.com', 'g@g.com', 'g@g.com', 'dsjfhsgfydsfc', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `id` int(250) NOT NULL,
  `s1` varchar(1000) NOT NULL,
  `s2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`id`, `s1`, `s2`) VALUES
(5, ' Bootstrap 3 Tutorial - W3Schools', 'At W3Schools you will find a complete Bootstrap reference of all CSS classes, Components, and JavaScript plugins - all with \"Try it Yourself\" examples: Complete List of ... Bootstrap Themes / Templates. We have made some Bootstrap Templates you can play around with. They are completely free to use: Theme Company.At W3Schools you will find a complete Bootstrap reference of all CSS classes, Components, and JavaScript plugins - all with \"Try it Yourself\" examples: Complete List of ... Bootstrap Themes / Templates. We have made some Bootstrap Templates you can play around with. They are completely free to use: Theme Company.'),
(6, ' Bootstrap 3 Tutorial - W3Schools', 'At W3Schools you will find a complete Bootstrap reference of all CSS classes, Components, and JavaScript plugins - all with \"Try it Yourself\" examples: Complete List of ... Bootstrap Themes / Templates. We have made some Bootstrap Templates you can play around with. They are completely free to use: Theme Company.At W3Schools you will find a complete Bootstrap reference of all CSS classes, Components, and JavaScript plugins - all with \"Try it Yourself\" examples: Complete List of ... Bootstrap Themes / Templates. We have made some Bootstrap Templates you can play around with. They are completely free to use: Theme Company.'),
(7, ' Bootstrap Theme \"Company\" - W3Schools', 'Tag Archives: Bootstrap Templates Free Mobile Templates. Marry Off Wedding Category Bootstrap Responsive Web Template Mobile website template Free. Marry Off Â· Indus Fact Industrial Category Bootstrap Responsive Web Template Mobile website template Free. Indus Fact Â· Baked Hotel Category Bootstrap ...Tag Archives: Bootstrap Templates Free Mobile Templates. Marry Off Wedding Category Bootstrap Responsive Web Template Mobile website template Free. Marry Off Â· Indus Fact Industrial Category Bootstrap Responsive Web Template Mobile website template Free. Indus Fact Â· Baked Hotel Category Bootstrap ...'),
(8, ' How can we download templates from W3Schools to build our own ...', 'Hi , It is easy to download the templates from w3 schools -In w3 schools we have templates available in different categories like follow -you need to decide which tempate you want to download it means( bootstrap or w3css template) -For example you have decided to downlaod bootstrap template then click on particular ...Hi , It is easy to download the templates from w3 schools -In w3 schools we have templates available in different categories like follow -you need to decide which tempate you want to download it means( bootstrap or w3css template) -For example you have decided to downlaod bootstrap template then click on particular ...Hi , It is easy to download the templates from w3 schools -In w3 schools we have templates available in different categories like follow -you need to decide which tempate you want to download it means( bootstrap or w3css template) -For example you have decided to downlaod bootstrap template then click on particular ...'),
(9, '  Where is Papua New Guinea?', 'Freepik Selection are all the exclusive content designed by our team. Additionally, if you are subscribed to our Premium account, when using this vector, you can avoid crediting the image to Freepik.Freepik Selection are all the exclusive content designed by our team. Additionally, if you are subscribed to our Premium account, when using this vector, you can avoid crediting the image to Freepik.Freepik Selection are all the exclusive content designed by our team. Additionally, if you are subscribed to our Premium account, when using this vector, you can avoid crediting the image to Freepik.Freepik Selection are all the exclusive content designed by our team. Additionally, if you are subscribed to our Premium account, when using this vector, you can avoid crediting the image to Freepik.'),
(10, ' Vast tracts of the country are wild and undeveloped, with mag', 'Freepik Selection are all the exclusive content designed by our team. Additionally, if you are subscribed to our Premium account, when using this vector, you can avoid crediting the image to FreepikFreepik Selection are all the exclusive content designed by our team. Additionally, if you are subscribed to our Premium account, when using this vector, you can avoid crediting the image to Freepik'),
(11, ' Freepik Selection are all the exclusive', 'Freepik Selection are all the exclusive content designed by our team. Additionally, if you are subscribed to our Premium account, when using this vector, you can avoid crediting the image to FrFreepik Selection are all the exclusive content designed by our team. Additionally, if you are subscribed to our Premium account, when using this vector, you can avoid crediting the image to Fr');

-- --------------------------------------------------------

--
-- Table structure for table `news_feed`
--

CREATE TABLE `news_feed` (
  `news_id` int(10) NOT NULL,
  `news_title` text NOT NULL,
  `news_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_feed`
--

INSERT INTO `news_feed` (`news_id`, `news_title`, `news_description`) VALUES
(1, 'News Title 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus tincidunt risus, at ullamcorper orci lobortis et. Duis dignissim augue tellus, nec suscipit enim vestibulum eget. Vivamus vehicula arcu non purus placerat, ac congue leo condimentum.'),
(2, 'News Title 2', 'Cras tempus tempus enim vel bibendum. Sed dignissim, est ut varius posuere, nunc purus tincidunt mauris, ac vulputate mauris turpis consectetur dolor. Phasellus non volutpat libero. Maecenas nec ipsum eget sem porttitor congue at at orci. Nunc id accumsan tortor. '),
(3, 'News Title 3', 'Vivamus placerat placerat sapien, quis congue libero ornare vel. Sed consectetur mi sit amet augue porta, sed eleifend velit eleifend. Vivamus at mauris faucibus, aliquet tortor suscipit, facilisis orci. Duis consectetur ac turpis a blandit. In hac habitasse platea dictumst. Morbi et metus arcu.'),
(4, 'News Title 4', 'Maecenas a erat et purus luctus sagittis. In pretium mauris diam, eget condimentum mauris consectetur sagittis. Aliquam sagittis lectus eget bibendum tempor. '),
(5, 'News Title 5', 'Vivamus placerat placerat sapien, quis congue libero ornare vel. Sed consectetur mi sit amet augue porta, sed eleifend velit eleifend. Vivamus at mauris faucibus, aliquet tortor suscipit, facilisis orci. Duis consectetur ac turpis a blandit. In hac habitasse platea dictumst. Morbi et metus arcu.'),
(6, 'News Title 6', 'Maecenas a erat et purus luctus sagittis. In pretium mauris diam, eget condimentum mauris consectetur sagittis. Aliquam sagittis lectus eget bibendum tempor. '),
(7, 'News Title 7', 'Cras mattis lacus eu erat tempus porta quis quis augue. Aenean eget elementum turpis. Vivamus vel mollis elit, pharetra viverra nunc. Praesent sit amet auctor risus, at aliquam dui. Praesent in sem eu odio cursus lobortis eu tempor ipsum. '),
(8, 'News Title 8', 'Nullam luctus in urna non ultrices. Nam vel tristique justo, nec volutpat justo. Suspendisse egestas, sapien ut porttitor elementum, velit risus auctor ante, nec tincidunt libero arcu in urna. Aliquam varius fringilla orci nec rutrum.'),
(9, 'News Title 9', 'Morbi ut mattis nibh, quis egestas nisl. Donec at arcu ut urna vehicula gravida et eget nibh. Nam bibendum libero non nibh imperdiet, sit amet sodales sem suscipit. '),
(10, 'News Title 10', 'Nullam cursus sit amet erat quis sodales. Morbi porta nulla velit, placerat adipiscing leo convallis nec. Aenean porta porttitor nisl, sed congue justo hendrerit vel.'),
(11, 'News Title 11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus tincidunt risus, at ullamcorper orci lobortis et. Duis dignissim augue tellus, nec suscipit enim vestibulum eget. Vivamus vehicula arcu non purus placerat, ac congue leo condimentum.'),
(12, 'News Title 12', 'Cras tempus tempus enim vel bibendum. Sed dignissim, est ut varius posuere, nunc purus tincidunt mauris, ac vulputate mauris turpis consectetur dolor. Phasellus non volutpat libero. Maecenas nec ipsum eget sem porttitor congue at at orci. Nunc id accumsan tortor. '),
(13, 'News Title 13', 'Vivamus placerat placerat sapien, quis congue libero ornare vel. Sed consectetur mi sit amet augue porta, sed eleifend velit eleifend. Vivamus at mauris faucibus, aliquet tortor suscipit, facilisis orci. Duis consectetur ac turpis a blandit. In hac habitasse platea dictumst. Morbi et metus arcu.'),
(14, 'News Title 14', 'Maecenas a erat et purus luctus sagittis. In pretium mauris diam, eget condimentum mauris consectetur sagittis. Aliquam sagittis lectus eget bibendum tempor. '),
(15, 'News Title 15', 'Vivamus placerat placerat sapien, quis congue libero ornare vel. Sed consectetur mi sit amet augue porta, sed eleifend velit eleifend. Vivamus at mauris faucibus, aliquet tortor suscipit, facilisis orci. Duis consectetur ac turpis a blandit. In hac habitasse platea dictumst. Morbi et metus arcu.'),
(16, 'News Title 16', 'Maecenas a erat et purus luctus sagittis. In pretium mauris diam, eget condimentum mauris consectetur sagittis. Aliquam sagittis lectus eget bibendum tempor. '),
(17, 'News Title 17', 'Cras mattis lacus eu erat tempus porta quis quis augue. Aenean eget elementum turpis. Vivamus vel mollis elit, pharetra viverra nunc. Praesent sit amet auctor risus, at aliquam dui. Praesent in sem eu odio cursus lobortis eu tempor ipsum. '),
(18, 'News Title 18', 'Nullam luctus in urna non ultrices. Nam vel tristique justo, nec volutpat justo. Suspendisse egestas, sapien ut porttitor elementum, velit risus auctor ante, nec tincidunt libero arcu in urna. Aliquam varius fringilla orci nec rutrum.'),
(19, 'News Title 19', 'Morbi ut mattis nibh, quis egestas nisl. Donec at arcu ut urna vehicula gravida et eget nibh. Nam bibendum libero non nibh imperdiet, sit amet sodales sem suscipit. '),
(20, 'News Title 20', 'Nullam cursus sit amet erat quis sodales. Morbi porta nulla velit, placerat adipiscing leo convallis nec. Aenean porta porttitor nisl, sed congue justo hendrerit vel.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_feed`
--
ALTER TABLE `news_feed`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `example`
--
ALTER TABLE `example`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `news_feed`
--
ALTER TABLE `news_feed`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

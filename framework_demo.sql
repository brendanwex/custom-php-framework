-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2017 at 04:44 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `framework_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_slug` text NOT NULL,
  `post_content` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_slug`, `post_content`, `post_date`) VALUES
(1, 'Welcome to Simple PHP Framework', 'welcome-to-simple-php-framework', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget ipsum vel purus maximus mollis. Vestibulum sit amet viverra neque. Nulla facilisi. Vivamus aliquam, ex vulputate viverra porta, leo mauris efficitur ante, et porta odio odio sed metus. Vivamus tempor quam velit, non aliquet turpis feugiat in. Etiam pretium a lacus et luctus. Ut nec metus ut dui dapibus tristique ut ac sem. Quisque sed facilisis odio, ac cursus elit. Curabitur in fermentum dolor. Curabitur mattis dignissim faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras mattis ut tortor eu euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In aliquet, orci in gravida congue, neque tortor feugiat sapien, non porttitor justo risus vitae velit. Morbi nec leo at augue tempor fringilla.\r\n\r\nVestibulum quam purus, faucibus sed elit non, aliquam lacinia mauris. Nulla faucibus ex id elit ultrices venenatis. Quisque neque dui, ullamcorper vitae volutpat eu, fermentum vitae nulla. Sed fermentum euismod turpis, nec vestibulum risus eleifend nec. Integer efficitur at lacus vel pharetra. Ut purus metus, convallis ut placerat ornare, finibus in ligula. Duis rhoncus malesuada mollis. Nam vitae odio neque. Sed rhoncus mi at sem placerat, quis fermentum orci hendrerit. Suspendisse quis orci finibus, luctus nunc in, volutpat velit. Mauris mattis urna vitae dapibus semper. Praesent nec leo tellus. Maecenas maximus sollicitudin convallis. Sed condimentum tincidunt ligula, ac blandit mi interdum id. Etiam consequat massa quam, quis aliquet velit blandit at.\r\n\r\nPellentesque accumsan nunc at posuere semper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tincidunt facilisis risus, eget dictum nunc ultricies sit amet. Nulla egestas risus vel ornare ultricies. Nullam quis lobortis neque. Nam eu dui sit amet tortor gravida porta at eget risus. Phasellus et augue nec mauris bibendum iaculis. Nulla sed mi augue. Quisque vel ipsum sed nisi tempor tincidunt.\r\n\r\nVestibulum consectetur velit at purus mollis varius. Praesent sit amet vehicula odio. Curabitur vehicula pharetra semper. Duis mollis ante nulla. Nullam pharetra mauris laoreet ex lacinia, sagittis malesuada eros lacinia. Proin maximus eget nisi vitae scelerisque. Duis pretium maximus risus. Nunc tellus justo, dignissim et bibendum id, bibendum a leo. In mattis felis leo, eu accumsan ex dapibus quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sodales sagittis massa et rhoncus.\r\n\r\nMorbi nibh quam, auctor vitae luctus nec, suscipit sed lacus. Vestibulum eget ipsum ac metus auctor tincidunt. Pellentesque vel orci urna. Nunc ullamcorper erat magna, et suscipit sem venenatis a. Etiam a turpis vel nisl ultricies finibus. Nulla ut vestibulum leo, quis lacinia leo. Integer interdum urna ut nibh hendrerit viverra. Maecenas nec sollicitudin odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. ', '2017-06-23 14:17:52'),
(2, 'Another Post', 'another-post', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget ipsum vel purus maximus mollis. Vestibulum sit amet viverra neque. Nulla facilisi. Vivamus aliquam, ex vulputate viverra porta, leo mauris efficitur ante, et porta odio odio sed metus. Vivamus tempor quam velit, non aliquet turpis feugiat in. Etiam pretium a lacus et luctus. Ut nec metus ut dui dapibus tristique ut ac sem. Quisque sed facilisis odio, ac cursus elit. Curabitur in fermentum dolor. Curabitur mattis dignissim faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras mattis ut tortor eu euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In aliquet, orci in gravida congue, neque tortor feugiat sapien, non porttitor justo risus vitae velit. Morbi nec leo at augue tempor fringilla.\r\n\r\nVestibulum quam purus, faucibus sed elit non, aliquam lacinia mauris. Nulla faucibus ex id elit ultrices venenatis. Quisque neque dui, ullamcorper vitae volutpat eu, fermentum vitae nulla. Sed fermentum euismod turpis, nec vestibulum risus eleifend nec. Integer efficitur at lacus vel pharetra. Ut purus metus, convallis ut placerat ornare, finibus in ligula. Duis rhoncus malesuada mollis. Nam vitae odio neque. Sed rhoncus mi at sem placerat, quis fermentum orci hendrerit. Suspendisse quis orci finibus, luctus nunc in, volutpat velit. Mauris mattis urna vitae dapibus semper. Praesent nec leo tellus. Maecenas maximus sollicitudin convallis. Sed condimentum tincidunt ligula, ac blandit mi interdum id. Etiam consequat massa quam, quis aliquet velit blandit at.\r\n\r\nPellentesque accumsan nunc at posuere semper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tincidunt facilisis risus, eget dictum nunc ultricies sit amet. Nulla egestas risus vel ornare ultricies. Nullam quis lobortis neque. Nam eu dui sit amet tortor gravida porta at eget risus. Phasellus et augue nec mauris bibendum iaculis. Nulla sed mi augue. Quisque vel ipsum sed nisi tempor tincidunt.\r\n\r\nVestibulum consectetur velit at purus mollis varius. Praesent sit amet vehicula odio. Curabitur vehicula pharetra semper. Duis mollis ante nulla. Nullam pharetra mauris laoreet ex lacinia, sagittis malesuada eros lacinia. Proin maximus eget nisi vitae scelerisque. Duis pretium maximus risus. Nunc tellus justo, dignissim et bibendum id, bibendum a leo. In mattis felis leo, eu accumsan ex dapibus quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sodales sagittis massa et rhoncus.\r\n\r\nMorbi nibh quam, auctor vitae luctus nec, suscipit sed lacus. Vestibulum eget ipsum ac metus auctor tincidunt. Pellentesque vel orci urna. Nunc ullamcorper erat magna, et suscipit sem venenatis a. Etiam a turpis vel nisl ultricies finibus. Nulla ut vestibulum leo, quis lacinia leo. Integer interdum urna ut nibh hendrerit viverra. Maecenas nec sollicitudin odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. ', '2017-06-23 14:17:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2013 at 07:17 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `time_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `password` varchar(355) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `password`) VALUES
(1, 'sheir', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `about_event` text NOT NULL,
  `event_logo` varchar(255) NOT NULL,
  `facebook_url` varchar(255) NOT NULL,
  `twitter_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_date`, `about_event`, `event_logo`, `facebook_url`, `twitter_url`) VALUES
(15, 'Peace', '2013-05-02', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.', 'vodafone-world-of-difference-day1.jpg', 'https://www.facebook.com/engmohsamy', 'https://twitter.com/Mohamed___Samy'),
(16, 'Fun', '2013-04-26', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.', 'MG_0062-e1313525952108.jpg', 'https://www.facebook.com/engmohsamy', 'www.twitter.com/Mohamed___Samy'),
(17, 'Talend', '2013-05-04', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.', 'FreeGreatPicture.com-22332-bing-bing-wallpaper_.jpg', 'https://www.facebook.com/engmohsamy', 'www.twitter.com/Mohamed___Samy');

-- --------------------------------------------------------

--
-- Table structure for table `event_comments`
--

CREATE TABLE IF NOT EXISTS `event_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `comment` varchar(550) CHARACTER SET utf32 NOT NULL,
  `comment_date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `event_comments`
--

INSERT INTO `event_comments` (`id`, `user_id`, `event_id`, `comment`, `comment_date`) VALUES
(12, 5, 15, 'test', 'Apr 18, 2013, Thu 6:48 pm'),
(13, 1, 15, 'al-event da gamd bas :)', 'Apr 18, 2013, Thu 6:58 pm');

-- --------------------------------------------------------

--
-- Table structure for table `pic_dept`
--

CREATE TABLE IF NOT EXISTS `pic_dept` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(450) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pic_sub_dept`
--

CREATE TABLE IF NOT EXISTS `pic_sub_dept` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dept_id` int(10) unsigned NOT NULL,
  `name` varchar(450) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_sub_dept_1` (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_users`
--

CREATE TABLE IF NOT EXISTS `temp_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(450) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `birthdate` varchar(450) NOT NULL,
  `prof` varchar(450) NOT NULL,
  `job` varchar(450) NOT NULL,
  `city` varchar(450) NOT NULL,
  `travel` varchar(45) DEFAULT NULL,
  `faculty` varchar(450) DEFAULT NULL,
  `hobbit` varchar(500) NOT NULL,
  `about` varchar(500) DEFAULT NULL,
  `regist_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `key` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `temp_users`
--

INSERT INTO `temp_users` (`id`, `name`, `password`, `email`, `phone`, `mobile`, `birthdate`, `prof`, `job`, `city`, `travel`, `faculty`, `hobbit`, `about`, `regist_date`, `key`) VALUES
(7, 'hawata', 'e10adc3949ba59abbe56e057f20f883e', 'hawata@yahoo.com', '01000000000', '01000000000', '1-1-1992', 'teamaker', 'teamaker', 'shouhda', 'no', 'fci', 'football', 'nothing', '2013-04-11 06:07:42', '010101010100');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(450) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `birthdate` varchar(450) NOT NULL,
  `prof` varchar(450) NOT NULL,
  `job` varchar(450) NOT NULL,
  `city` varchar(450) NOT NULL,
  `time` varchar(45) NOT NULL,
  `travel` varchar(45) DEFAULT NULL,
  `faculty` varchar(450) DEFAULT NULL,
  `hobbit` varchar(500) NOT NULL,
  `about` varchar(500) DEFAULT NULL,
  `pic` varchar(500) NOT NULL DEFAULT 'default_pic.jpg',
  `rate` varchar(45) DEFAULT NULL,
  `regist_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `video` varchar(500) DEFAULT NULL,
  `confirm` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `phone`, `mobile`, `birthdate`, `prof`, `job`, `city`, `time`, `travel`, `faculty`, `hobbit`, `about`, `pic`, `rate`, `regist_date`, `video`, `confirm`) VALUES
(1, 'temraz', '3c4b00d8fa41a8ccf28344a99c8c4ae2', 'temraz@yahoo.com', '123', '123323', '0', '0', 'qwweqe', 'qwe', '8', 'yes', 'yes', 'qedad', 'many', 'default_pic.jpg', NULL, '2013-04-18 18:58:20', NULL, 1),
(2, 'محمد', '202cb962ac59075b964b07152d234b70', 'y@yahoo.com', '1123', '123123', '0', '0', '???', '???', '', NULL, NULL, '?????', NULL, 'default_pic.jpg', NULL, '2013-04-17 15:51:30', NULL, 1),
(3, 'temraz12', '202cb962ac59075b964b07152d234b70', 'temraz12@yahoo.com', '12', '12', '0', '0', '12432`', 'hjb', '', NULL, NULL, 'jb', NULL, 'default_pic.jpg', NULL, '2013-04-11 12:33:19', NULL, 0),
(4, 'temraz', '81dc9bdb52d04dc20036dbd8313ed055', 'mohamed@yahoo.com', '4343', '4343', '0', '0', 'تاتا', 'تا', '', NULL, NULL, 'تا', NULL, 'default_pic.jpg', NULL, '2013-04-09 05:00:04', NULL, 0),
(5, 'sheir', 'e10adc3949ba59abbe56e057f20f883e', 'mohamed_sheir@yahoo.com', '2743604', '01024791324', '0', '0', 'web', 'Monufia', '5', 'yes', 'yes', 'nothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothingnothing', 'web develop', 'DSCF7144n2small1.jpg', NULL, '2013-04-18 18:56:24', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_events`
--

CREATE TABLE IF NOT EXISTS `user_events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `event_id` int(10) unsigned NOT NULL,
  `wait` int(1) NOT NULL DEFAULT '0',
  `confirm` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_user_events_1` (`user_id`),
  KEY `FK_user_events_2` (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_events`
--

INSERT INTO `user_events` (`id`, `user_id`, `event_id`, `wait`, `confirm`) VALUES
(6, 5, 15, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE IF NOT EXISTS `user_messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(450) NOT NULL,
  `content` text NOT NULL,
  `confirm` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_user_messages_1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_pic`
--

CREATE TABLE IF NOT EXISTS `user_pic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_pic_1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE IF NOT EXISTS `user_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` varchar(450) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_posts_1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vedios`
--

CREATE TABLE IF NOT EXISTS `vedios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `details` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `video_dept`
--

CREATE TABLE IF NOT EXISTS `video_dept` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(450) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `video_sup_dept`
--

CREATE TABLE IF NOT EXISTS `video_sup_dept` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dept_id` int(10) unsigned NOT NULL,
  `name` varchar(450) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_video_sup_dept_1` (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pic_sub_dept`
--
ALTER TABLE `pic_sub_dept`
  ADD CONSTRAINT `FK_sub_dept_1` FOREIGN KEY (`dept_id`) REFERENCES `pic_dept` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_events`
--
ALTER TABLE `user_events`
  ADD CONSTRAINT `FK_user_events_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD CONSTRAINT `FK_user_messages_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD CONSTRAINT `FK_user_posts_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

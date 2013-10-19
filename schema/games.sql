-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2013 at 11:49 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `games`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headline` text NOT NULL,
  `news` text NOT NULL,
  `date` date NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `headline`, `news`, `date`, `pic`) VALUES
(2, 'Test headline for news', 'dlkfjdlj dfljd kfjdklfj dlk jdlkfj dlkj dlfj dlkfj dlkfj dlkfj dlfkj dlkfj kdlfj dlf jdljf dlfkjlfjljowiueroiwuroj ereoiuroeuroiuroi oiuroieu iou uoireuoe uoieur ourouroeuroeuro roiu eoruo ovucouvoiuouououobuou  obucobuoub o boviuboubou ob cou buo ocub u cvbcv  bcvbcc  bcvbc  ', '2013-10-19', '1382171335.jpg'),
(4, 'news headline ', 'kdflkdjlfkdj dlkfj dlfjd lfj dlfj dlkfjd fljdkfj dklkfj dlfdkk fdljfdlkfj dklfj dlfjk dlkfj kdlfj dlkfj kdlfj dlkfj dklfj dlfj dlkfj dlfjld fjdl fdlfj dlfj dlfkj dlfj dlf dlfj ldfj dlfj ldfj ldfj dl', '2013-10-19', '1382175045.jpg'),
(5, 'Another test for news news news', 'This is a test news.  This is a test news.  This is a test news.  This is a test news.  \nThis is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  This is a test news.  ', '2013-10-19', '1382175674.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_id` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `pic_id`, `date`) VALUES
(1, '1382180443.jpg', '2013-10-19'),
(2, '1382180469.jpg', '2013-10-19'),
(3, '1382180477.jpg', '2013-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_id`, `date`) VALUES
(4, 'Mk6BBoTnsuE', '2013-10-19'),
(5, 'W9qQRoew2do', '2013-10-19'),
(3, '0FqaCN2aiD0', '2013-10-19'),
(6, 'csA9Ie5nXoQ', '2013-10-19'),
(8, 'QqDWx8kfoXo', '2013-10-19');

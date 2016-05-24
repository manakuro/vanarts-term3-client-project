# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.29)
# Database: wwm
# Generation Time: 2016-05-24 05:04:02 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table dt_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dt_categories`;

CREATE TABLE `dt_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `del_flg` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `dt_categories` WRITE;
/*!40000 ALTER TABLE `dt_categories` DISABLE KEYS */;

INSERT INTO `dt_categories` (`id`, `name`, `created_at`, `updated_at`, `del_flg`)
VALUES
	(1,'hiphop','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(2,'r&b','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(3,'pop','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(4,'rock','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(5,'punk','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(6,'reggae','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(7,'dance','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(8,'reviews','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(9,'news','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(10,'videos','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(11,'interviews','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(12,'events','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(13,'features','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(14,'charts','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(15,'hot songs','2016-04-01 00:00:00','2016-04-01 00:00:00',0);

/*!40000 ALTER TABLE `dt_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table dt_charts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dt_charts`;

CREATE TABLE `dt_charts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `singer` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `del_flg` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `dt_charts` WRITE;
/*!40000 ALTER TABLE `dt_charts` DISABLE KEYS */;

INSERT INTO `dt_charts` (`id`, `title`, `singer`, `img`, `src`, `post_date`, `created_at`, `updated_at`, `del_flg`)
VALUES
	(1,'Come and See Me (feat. Drake)','partyomo','img/home/chart_1.jpg',NULL,'2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(2,'Work (feat. Drake)','Rihanna','img/home/chart_2.jpg',NULL,'2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(3,'Pillowtalk','Zayn','img/home/chart_3.jpg',NULL,'2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(4,'Love Yourself','Justin Bieber','img/home/chart_4.jpg',NULL,'2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(5,'7 Years','Lukas Graham','img/home/chart_5.jpg',NULL,'2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0);

/*!40000 ALTER TABLE `dt_charts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table dt_features
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dt_features`;

CREATE TABLE `dt_features` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `img` varchar(255) DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `del_flg` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `dt_features` WRITE;
/*!40000 ALTER TABLE `dt_features` DISABLE KEYS */;

INSERT INTO `dt_features` (`id`, `title`, `content`, `img`, `post_date`, `created_at`, `updated_at`, `del_flg`)
VALUES
	(1,'Death & Ballads: What Makes An Ideal ACM Song Of The Year Nominee?\r','Death & Ballads: What Makes An Ideal ACM Song Of The Year Nominee?\r','img/home/feature_1.jpg','2016-04-03 00:00:00','2016-04-03 00:00:00','2016-04-03 00:00:00',0),
	(2,'Watch the full video for MIA\'s new track \'Rewear It\'\r','Watch the full video for MIA\'s new track \'Rewear It\'\r','img/home/feature_2.jpg','2016-04-03 00:00:00','2016-04-03 00:00:00','2016-04-03 00:00:00',0),
	(3,'Janet Jackson will reschedule postponed live shows for 2017\r','Janet Jackson will reschedule postponed live shows for 2017\r','img/home/feature_3.jpg','2016-04-03 00:00:00','2016-04-03 00:00:00','2016-04-03 00:00:00',0),
	(4,'The week’s best videos: Chance The Rapper, faceless gangsters Kingdom and more','The week’s best videos: Chance The Rapper, faceless gangsters Kingdom and more','img/home/feature_4.jpg','2016-04-03 00:00:00','2016-04-03 00:00:00','2016-04-03 00:00:00',0),
	(5,'The week’s best mixes: Hardcore classics, gristly techno and Copenhagen’s freshest crew','The week’s best mixes: Hardcore classics, gristly techno and Copenhagen’s freshest crew','img/home/feature_5.jpg','2016-04-03 00:00:00','2016-04-03 00:00:00','2016-04-03 00:00:00',0),
	(6,'10 Unforgettable Moments From Rock and Roll Hall of Fame 2016 Induction Ceremony','10 Unforgettable Moments From Rock and Roll Hall of Fame 2016 Induction Ceremony\r','img/home/feature_6.jpg','2016-04-03 00:00:00','2016-04-03 00:00:00','2016-04-03 00:00:00',0),
	(7,'Death & Ballads: What Makes An Ideal ACM Song Of The Year Nominee?\r','Death & Ballads: What Makes An Ideal ACM Song Of The Year Nominee?\r','img/home/feature_1.jpg','2016-04-03 00:00:00','2016-04-03 00:00:00','2016-04-03 00:00:00',0);

/*!40000 ALTER TABLE `dt_features` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table dt_news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dt_news`;

CREATE TABLE `dt_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT '',
  `content` text,
  `img` varchar(255) DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `del_flg` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `dt_news` WRITE;
/*!40000 ALTER TABLE `dt_news` DISABLE KEYS */;

INSERT INTO `dt_news` (`id`, `title`, `content`, `img`, `post_date`, `created_at`, `updated_at`, `del_flg`)
VALUES
	(1,'15 Times Adele Was Truly Hilarious','15 Times Adele Was Truly Hilarious','img/home/news_top.jpg','2016-04-03 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(3,'Jennifer Lopez Teases Her New Song \'Ain\'t Your Mama\'','Jennifer Lopez Teases Her New Song \'Ain\'t Your Mama\'','img/home/news_1.jpg','2016-04-02 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(4,'Taylor Swift to Receive First-Ever Taylor Swift Award From BMI','Taylor Swift to Receive First-Ever Taylor Swift Award From BMI','img/home/news_2.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(5,'Drake and Pimp C \rcollaborate on ‘Faithful’','Drake and Pimp C collaborate on ‘Faithful’','img/home/news_3.jpg','2016-03-30 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0);

/*!40000 ALTER TABLE `dt_news` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table dt_popular
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dt_popular`;

CREATE TABLE `dt_popular` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `img` varchar(255) DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `del_flg` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `dt_popular` WRITE;
/*!40000 ALTER TABLE `dt_popular` DISABLE KEYS */;

INSERT INTO `dt_popular` (`id`, `category_id`, `title`, `content`, `img`, `post_date`, `created_at`, `updated_at`, `del_flg`)
VALUES
	(1,9,'Death & Ballads: What Makes An Ideal ACM Song Of The Year Nominee?',NULL,'img/home/popular_1.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(2,8,'The Last Shadow Puppets - \r\'Everything You’ve Come To Expect\' ',NULL,'img/home/popular_2.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(3,9,'Kehlani hospitalised after suicide attempt',NULL,'img/home/popular_3.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(4,9,'Johnny Gill Says New Edition May Reunite for New Album to Accompany Biopic Release',NULL,'img/home/popular_4.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(5,10,'Iggy Azalea Shares Update on Relationship With Nick Young, Brushes Off Internet \'Trolls\' ',NULL,'img/home/popular_5.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0);

/*!40000 ALTER TABLE `dt_popular` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table dt_videos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dt_videos`;

CREATE TABLE `dt_videos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `del_flg` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `dt_videos` WRITE;
/*!40000 ALTER TABLE `dt_videos` DISABLE KEYS */;

INSERT INTO `dt_videos` (`id`, `title`, `src`, `img`, `post_date`, `created_at`, `updated_at`, `del_flg`)
VALUES
	(1,'Taylor Swift raps Drank and Future’s ‘Jumpman',NULL,'img/home/video_list_1.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(4,'Dierks Bentley Performs \'Somewhere On A Beach\' at the 2016 ACM Awards..',NULL,'img/home/video_list_3.jpg','2016-03-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(5,'Charles Kelley Performs \'Lonely Girl\' at the 2016 ...',NULL,'img/home/video_list_2.jpg','2016-02-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(6,'Charles Kelley Performs \'Lonely Girl\' at the 2016 ...',NULL,'img/home/video_list_2.jpg','2016-02-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(7,'Charles Kelley Performs \'Lonely Girl\' at the 2016 ...',NULL,'img/home/video_list_2.jpg','2016-02-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(8,'Dierks Bentley Performs \'Somewhere On A Beach\' at the 2016 ACM Awards..',NULL,'img/home/video_list_3.jpg','2016-03-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(9,'Taylor Swift raps Drank and Future’s ‘Jumpman',NULL,'img/home/video_list_1.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0);

/*!40000 ALTER TABLE `dt_videos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

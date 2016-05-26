# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.29)
# Database: wwm
# Generation Time: 2016-05-26 20:17:45 +0000
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
  `music_genre` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `del_flg` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `dt_categories` WRITE;
/*!40000 ALTER TABLE `dt_categories` DISABLE KEYS */;

INSERT INTO `dt_categories` (`id`, `name`, `music_genre`, `created_at`, `updated_at`, `del_flg`)
VALUES
	(1,'hiphop',1,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(2,'r&b',1,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(3,'pop',1,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(4,'rock',1,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(5,'punk',1,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(6,'reggae',1,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(7,'dance',1,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(8,'reviews',0,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(9,'news',0,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(10,'videos',0,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(11,'interviews',0,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(12,'events',0,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(13,'features',0,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(14,'charts',0,'2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(15,'hot songs',0,'2016-04-01 00:00:00','2016-04-01 00:00:00',0);

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


# Dump of table dt_events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dt_events`;

CREATE TABLE `dt_events` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `singer` varchar(255) DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `event_time_start` time DEFAULT NULL,
  `event_time_end` time DEFAULT NULL,
  `event_place` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `del_flg` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `dt_events` WRITE;
/*!40000 ALTER TABLE `dt_events` DISABLE KEYS */;

INSERT INTO `dt_events` (`id`, `title`, `singer`, `event_date`, `event_time_start`, `event_time_end`, `event_place`, `img`, `thumb`, `post_date`, `created_at`, `updated_at`, `del_flg`)
VALUES
	(1,'Summer Sixteen Tour','Drake','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_1.jpg','img/events/thumb/events_thumb_1.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(2,'Happy Ending Fridays','Louis The Child','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_2.jpg','img/events/thumb/events_thumb_2.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(3,'Celebrities & Heineken','Presented by Blueprint','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_3.jpg','img/events/thumb/events_thumb_3.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(4,'Presented by Fortune Sound & Live','ZION I ','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_4.jpg','img/events/thumb/events_thumb_4.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(5,'Presented by BlueprintLIVE','GANG SIGNS','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_5.jpg','img/events/thumb/events_thumb_5.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(6,'KT Tunstall BEST Tour','KT Tunstall','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_6.jpg','img/events/thumb/events_thumb_6.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(7,'Happy Ending Fridays','Louis The Child','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_2.jpg','img/events/thumb/events_thumb_2.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(8,'Presented by BlueprintLIVE','GANG SIGNS','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_5.jpg','img/events/thumb/events_thumb_5.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(9,'Presented by Fortune Sound & Live','ZION I ','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_4.jpg','img/events/thumb/events_thumb_4.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(10,'Happy Ending Fridays','Louis The Child','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_2.jpg','img/events/thumb/events_thumb_2.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(11,'Presented by BlueprintLIVE','GANG SIGNS','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_5.jpg','img/events/thumb/events_thumb_5.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(12,'Celebrities & Heineken','Presented by Blueprint','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_3.jpg','img/events/thumb/events_thumb_3.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(13,'Presented by BlueprintLIVE','GANG SIGNS','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_5.jpg','img/events/thumb/events_thumb_5.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(14,'Presented by BlueprintLIVE','GANG SIGNS','2016-09-01 00:00:00','10:00:00','17:00:00','at Fortune','img/events/events_5.jpg','img/events/thumb/events_thumb_5.jpg','2016-04-01 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0);

/*!40000 ALTER TABLE `dt_events` ENABLE KEYS */;
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
  `thumb` varchar(255) DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `del_flg` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `dt_news` WRITE;
/*!40000 ALTER TABLE `dt_news` DISABLE KEYS */;

INSERT INTO `dt_news` (`id`, `title`, `content`, `img`, `thumb`, `post_date`, `created_at`, `updated_at`, `del_flg`)
VALUES
	(1,'15 Times Adele Was Truly Hilarious','<p>Adele shocked everyone when she took part in James Corden\'s Carpool Karaoke series. Her funny, word-perfect rendition of Nicki Minaj\'s guest verse from Kanye West\'s huge collab track \'Monster\' took the internet by storm and showed the keen sense of humour lacking in her knitted-by-nana music – but it\'s not the first time Adele\'s shown us her comedy chops. Here\'s 15 of her funniest moments.</p>\n\n<h3>1. When she high-fived Daniel Craig</h3>\n\n\n<p>This was at the Golden Globes 2013, when Adele\'s theme tune for \'Skyfall\' – also called \'Skyfall\', of course – nabbed the award for Best Original Song from under Taylor Swift\'s nose. Adele, who was sitting two places away from Bond actor Daniel Craig, took the opportunity to give him a cheeky high-five. Later, when she accepts the award, she tells the huge crowd of big-name actors that she and her friend Ida, both new mums, had just come for a night out. \"We\'ve been pissing ourselves laughing at all of you.\" \n<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/M5xlM88kVLE?start=120\" frameborder=\"0\" allowfullscreen=\"\"></iframe>\n</p>\n\n<h3>2. When she mistook the man who signed her for a pervert</h3>\n\n<p>When she was trying to get signed, Adele got a series of emails from a man at a record label, and assumed they were from a pervert. It wasn\'t until she read them properly that she realised he was trying to give her a record deal.\n<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/TVk_B3uJT68\" frameborder=\"0\" allowfullscreen=\"\"></iframe>\n</p>\n\n\n<h3>3.When she went mad with power over Graham Norton’s chair</h3>\n\n<p>\nPut Adele on a red sofa with a glass of wine and a handle, and she will pull that handle. All this guy had said was that he had been in Germany, and she chucked him off.\n<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/Wfr2MHYgHpw\" frameborder=\"0\" allowfullscreen=\"\"></iframe>\n<p>\n\n<h3>4. When she made this face after performing on SNL</h3>\n\n<p>\"With my stage fright,\" Adele has said, \"I just don\'t want to let people down. I get so nervous on stage that I don\'t have the guts to improvise or anything like that.\" After her performance on SNL late last year, she made this face to express her relief. \n<iframe src=\"https://vine.co/v/izWvTuddb60/embed/simple\" width=\"100%\" height=\"600\" frameborder=\"0\" class=\" pinged loaded in-view\"></iframe>\n</p>\n\n<h3>5. When she pranked her own impersonators</h3>\n\n<p>Schmaltzy though it may be, this clip is also pretty funny. In it, Adele dons a prosthetic nose and takes part in an Adele-impersonating competition to prank her tribute acts. The best bits are her thoughts.\n<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/OHXjxWaQs9o\" frameborder=\"0\" allowfullscreen=\"\"></iframe>\n</p>\n\n<h3>6. When she told this story about flashing a bus stop full of people</h3>\n\n<p>It involves her going out early in the morning wearing a poncho and no pants. It was windy.\n<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/C50OmfetUBA\" frameborder=\"0\" allowfullscreen=\"\"></iframe>\n</p>\n','img/news/news_1.jpg','img/news/news_1.jpg','2017-04-03 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(3,'Jennifer Lopez Teases Her New Song \'Ain\'t Your Mama\'','<p>She\'ll perform the new single on Thursday\'s \"American Idol\" series finale.</p>\n\n<p>Another reason not to miss the American Idol series finale on Thursday? Jennifer Lopez will debut her new song \"Ain\'t Your Mama\" during her performance on Idol\'s two-hour episode.</p>\n\n<p>In a Facebook live chat, the Idol judge not only announced the exciting news, but also gave a little preview of what her track sounds like. Listen below:</p>\n\n<p>\"Ain\'t Your Mama\" will be available on iTunes following the finale, which will crown this season\'s winner. The three-part finale starts Tuesday night (April 5) with the 90-minute special American Idol: American Dream hosted by Ryan Seacrest. American Idol airs live at 8 p.m. April 6 and 7 on Fox. Former Idols including Jennifer Hudson, Carrie Underwood and Kelly Clarkson are scheduled to appear on the season finale.</p>\n\n<p>Check out the rest of her chat, where she dishes on what her favorite part about being a judge is and what to expect when she returns to her residency show in Las Vegas.</p>','img/news/news_2.jpg','img/news/thumb/news_thumb_2.jpg','2016-04-02 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(4,'Taylor Swift to Receive First-Ever Taylor Swift Award From BMI','<p>As part of the 64th annual BMI Pop Awards, Taylor Swift will receive a very special honor: the Taylor Swift Award. This is the second time BMI has given an award in someone’s name; the only time before was in 1990 for Michael Jackson.</p>\r\r<p>Hosted by BMI President and CEO Mike O’Neill and Vice \rPresident of Writer/Publisher Relations Barbara Cane, the event will also be honoring Barry Mann and Cynthia Weil with the BMI Icon Award for their \rsongwriting workmanship. </p>\r\r<p>Taylor Swift Wins Best Tour at iHeartRadio Music Awards 2016 With Jokey Intro From Justin Timberlake, Thanks Boyfriend Calvin Harris</p>\r\r<p>“This evening is a true celebration of music and a tribute to the artistry of songwriting that spans generations as defined by three of the most prolific and influential music creators in the industry: Taylor Swift, Barry Mann and Cynthia Weil,” O’Neill stated in a press release.</p>\r\r<p>The BMI Pop Awards will take place May 10 in Beverly Hills, \rCalfornia.</p>\n\n<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/73542870&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','img/news/news_3.jpg','img/news/thumb/news_thumb_3.jpg','2016-04-02 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(5,'Drake and Pimp C \rcollaborate on ‘Faithful’','<p>It’s officially April, which means Drake‘s long-awaited Views From The 6 album is dropping this month, and that’s no April Fool’s joke. The Toronto superstar announced back in January after dropping his “Summer Sixteen” single that April would be the month VFT6 finally releases, and he and his sonic architect, Noah “40” Shebib, have spent the last few weeks teasing at the album’s completion and impending release.</p>\n\n<p>As we draw nearer to the yet-to-be-revealed release date, it’s not surprising that Drizzy songs are leaking left and right. Earlier this week, a cover of Nico and Jackson Browne‘s “These Days”—which was eventually officially released as a duet with Babeo Baggins—and a “Work”-esque collaboration with dancehall star Popcaan, “Controlla,” hit the internet unofficially.</p>\n\n<p>Today, another track has surfaced, in the form of “Faithful,” a collaboration between Drake and late UGK rapper Pimp C. For many years Drake has credited UGK with being major inspirations in his life and career, and featured Bun B on his breakthrough mixtape, So Far Gone, as well as named a song on his Take Care album, “Underground Kings,” under the landmark Texas rap duo.</p>\n\n<p>Stream “Faithful” here. It’s not crazy to think a more polished version of this finds its home on VFT6, especially considering Drizzy’s UGK fanhood.</p>','img/news/news_4.jpg','img/news/thumb/news_thumb_4.jpg','2016-04-02 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(6,'Jennifer Lopez Teases Her New Song \'Ain\'t Your Mama\'','<p>She\'ll perform the new single on Thursday\'s \"American Idol\" series finale.</p>\n\n<p>Another reason not to miss the American Idol series finale on Thursday? Jennifer Lopez will debut her new song \"Ain\'t Your Mama\" during her performance on Idol\'s two-hour episode.</p>\n\n<p>In a Facebook live chat, the Idol judge not only announced the exciting news, but also gave a little preview of what her track sounds like. Listen below:</p>\n\n<p>\"Ain\'t Your Mama\" will be available on iTunes following the finale, which will crown this season\'s winner. The three-part finale starts Tuesday night (April 5) with the 90-minute special American Idol: American Dream hosted by Ryan Seacrest. American Idol airs live at 8 p.m. April 6 and 7 on Fox. Former Idols including Jennifer Hudson, Carrie Underwood and Kelly Clarkson are scheduled to appear on the season finale.</p>\n\n<p>Check out the rest of her chat, where she dishes on what her favorite part about being a judge is and what to expect when she returns to her residency show in Las Vegas.</p>','img/news/news_2.jpg','img/news/thumb/news_thumb_2.jpg','2016-04-02 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(7,'Jennifer Lopez Teases Her New Song \'Ain\'t Your Mama\'','<p>She\'ll perform the new single on Thursday\'s \"American Idol\" series finale.</p>\n\n<p>Another reason not to miss the American Idol series finale on Thursday? Jennifer Lopez will debut her new song \"Ain\'t Your Mama\" during her performance on Idol\'s two-hour episode.</p>\n\n<p>In a Facebook live chat, the Idol judge not only announced the exciting news, but also gave a little preview of what her track sounds like. Listen below:</p>\n\n<p>\"Ain\'t Your Mama\" will be available on iTunes following the finale, which will crown this season\'s winner. The three-part finale starts Tuesday night (April 5) with the 90-minute special American Idol: American Dream hosted by Ryan Seacrest. American Idol airs live at 8 p.m. April 6 and 7 on Fox. Former Idols including Jennifer Hudson, Carrie Underwood and Kelly Clarkson are scheduled to appear on the season finale.</p>\n\n<p>Check out the rest of her chat, where she dishes on what her favorite part about being a judge is and what to expect when she returns to her residency show in Las Vegas.</p>','img/news/news_2.jpg','img/news/thumb/news_thumb_2.jpg','2016-04-02 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(8,'Jennifer Lopez Teases Her New Song \'Ain\'t Your Mama\'','<p>She\'ll perform the new single on Thursday\'s \"American Idol\" series finale.</p>\n\n<p>Another reason not to miss the American Idol series finale on Thursday? Jennifer Lopez will debut her new song \"Ain\'t Your Mama\" during her performance on Idol\'s two-hour episode.</p>\n\n<p>In a Facebook live chat, the Idol judge not only announced the exciting news, but also gave a little preview of what her track sounds like. Listen below:</p>\n\n<p>\"Ain\'t Your Mama\" will be available on iTunes following the finale, which will crown this season\'s winner. The three-part finale starts Tuesday night (April 5) with the 90-minute special American Idol: American Dream hosted by Ryan Seacrest. American Idol airs live at 8 p.m. April 6 and 7 on Fox. Former Idols including Jennifer Hudson, Carrie Underwood and Kelly Clarkson are scheduled to appear on the season finale.</p>\n\n<p>Check out the rest of her chat, where she dishes on what her favorite part about being a judge is and what to expect when she returns to her residency show in Las Vegas.</p>','img/news/news_2.jpg','img/news/thumb/news_thumb_2.jpg','2016-04-02 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(9,'Drake and Pimp C \rcollaborate on ‘Faithful’','<p>It’s officially April, which means Drake‘s long-awaited Views From The 6 album is dropping this month, and that’s no April Fool’s joke. The Toronto superstar announced back in January after dropping his “Summer Sixteen” single that April would be the month VFT6 finally releases, and he and his sonic architect, Noah “40” Shebib, have spent the last few weeks teasing at the album’s completion and impending release.</p>\n\n<p>As we draw nearer to the yet-to-be-revealed release date, it’s not surprising that Drizzy songs are leaking left and right. Earlier this week, a cover of Nico and Jackson Browne‘s “These Days”—which was eventually officially released as a duet with Babeo Baggins—and a “Work”-esque collaboration with dancehall star Popcaan, “Controlla,” hit the internet unofficially.</p>\n\n<p>Today, another track has surfaced, in the form of “Faithful,” a collaboration between Drake and late UGK rapper Pimp C. For many years Drake has credited UGK with being major inspirations in his life and career, and featured Bun B on his breakthrough mixtape, So Far Gone, as well as named a song on his Take Care album, “Underground Kings,” under the landmark Texas rap duo.</p>\n\n<p>Stream “Faithful” here. It’s not crazy to think a more polished version of this finds its home on VFT6, especially considering Drizzy’s UGK fanhood.</p>','img/news/news_4.jpg','img/news/thumb/news_thumb_4.jpg','2016-04-02 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(10,'Taylor Swift to Receive First-Ever Taylor Swift Award From BMI','<p>As part of the 64th annual BMI Pop Awards, Taylor Swift will receive a very special honor: the Taylor Swift Award. This is the second time BMI has given an award in someone’s name; the only time before was in 1990 for Michael Jackson.</p>\r\r<p>Hosted by BMI President and CEO Mike O’Neill and Vice \rPresident of Writer/Publisher Relations Barbara Cane, the event will also be honoring Barry Mann and Cynthia Weil with the BMI Icon Award for their \rsongwriting workmanship. </p>\r\r<p>Taylor Swift Wins Best Tour at iHeartRadio Music Awards 2016 With Jokey Intro From Justin Timberlake, Thanks Boyfriend Calvin Harris</p>\r\r<p>“This evening is a true celebration of music and a tribute to the artistry of songwriting that spans generations as defined by three of the most prolific and influential music creators in the industry: Taylor Swift, Barry Mann and Cynthia Weil,” O’Neill stated in a press release.</p>\r\r<p>The BMI Pop Awards will take place May 10 in Beverly Hills, \rCalfornia.</p>\n\n<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/73542870&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','img/news/news_3.jpg','img/news/thumb/news_thumb_3.jpg','2016-04-02 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(11,'Taylor Swift to Receive First-Ever Taylor Swift Award From BMI','<p>As part of the 64th annual BMI Pop Awards, Taylor Swift will receive a very special honor: the Taylor Swift Award. This is the second time BMI has given an award in someone’s name; the only time before was in 1990 for Michael Jackson.</p>\r\r<p>Hosted by BMI President and CEO Mike O’Neill and Vice \rPresident of Writer/Publisher Relations Barbara Cane, the event will also be honoring Barry Mann and Cynthia Weil with the BMI Icon Award for their \rsongwriting workmanship. </p>\r\r<p>Taylor Swift Wins Best Tour at iHeartRadio Music Awards 2016 With Jokey Intro From Justin Timberlake, Thanks Boyfriend Calvin Harris</p>\r\r<p>“This evening is a true celebration of music and a tribute to the artistry of songwriting that spans generations as defined by three of the most prolific and influential music creators in the industry: Taylor Swift, Barry Mann and Cynthia Weil,” O’Neill stated in a press release.</p>\r\r<p>The BMI Pop Awards will take place May 10 in Beverly Hills, \rCalfornia.</p>\n\n<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/73542870&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','img/news/news_3.jpg','img/news/thumb/news_thumb_3.jpg','2016-04-02 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(12,'Jennifer Lopez Teases Her New Song \'Ain\'t Your Mama\'','<p>She\'ll perform the new single on Thursday\'s \"American Idol\" series finale.</p>\n\n<p>Another reason not to miss the American Idol series finale on Thursday? Jennifer Lopez will debut her new song \"Ain\'t Your Mama\" during her performance on Idol\'s two-hour episode.</p>\n\n<p>In a Facebook live chat, the Idol judge not only announced the exciting news, but also gave a little preview of what her track sounds like. Listen below:</p>\n\n<p>\"Ain\'t Your Mama\" will be available on iTunes following the finale, which will crown this season\'s winner. The three-part finale starts Tuesday night (April 5) with the 90-minute special American Idol: American Dream hosted by Ryan Seacrest. American Idol airs live at 8 p.m. April 6 and 7 on Fox. Former Idols including Jennifer Hudson, Carrie Underwood and Kelly Clarkson are scheduled to appear on the season finale.</p>\n\n<p>Check out the rest of her chat, where she dishes on what her favorite part about being a judge is and what to expect when she returns to her residency show in Las Vegas.</p>','img/news/news_2.jpg','img/news/thumb/news_thumb_2.jpg','2016-04-02 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0),
	(13,'Taylor Swift to Receive First-Ever Taylor Swift Award From BMI','<p>As part of the 64th annual BMI Pop Awards, Taylor Swift will receive a very special honor: the Taylor Swift Award. This is the second time BMI has given an award in someone’s name; the only time before was in 1990 for Michael Jackson.</p>\r\r<p>Hosted by BMI President and CEO Mike O’Neill and Vice \rPresident of Writer/Publisher Relations Barbara Cane, the event will also be honoring Barry Mann and Cynthia Weil with the BMI Icon Award for their \rsongwriting workmanship. </p>\r\r<p>Taylor Swift Wins Best Tour at iHeartRadio Music Awards 2016 With Jokey Intro From Justin Timberlake, Thanks Boyfriend Calvin Harris</p>\r\r<p>“This evening is a true celebration of music and a tribute to the artistry of songwriting that spans generations as defined by three of the most prolific and influential music creators in the industry: Taylor Swift, Barry Mann and Cynthia Weil,” O’Neill stated in a press release.</p>\r\r<p>The BMI Pop Awards will take place May 10 in Beverly Hills, \rCalfornia.</p>\n\n<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/73542870&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','img/news/news_3.jpg','img/news/thumb/news_thumb_3.jpg','2016-04-02 00:00:00','2016-04-01 00:00:00','2016-04-01 00:00:00',0);

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

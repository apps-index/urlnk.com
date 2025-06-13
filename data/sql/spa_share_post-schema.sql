-- Adminer 4.17.1 MySQL 5.7.36-log dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `spa_share_post`;
CREATE TABLE `spa_share_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `request_time_float` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `content` mediumtext,
  `md5` char(32) DEFAULT NULL,
  `hash` char(8) DEFAULT NULL,
  `ip` varchar(250) DEFAULT NULL,
  `ua` varchar(250) DEFAULT NULL,
  `init` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `md5` (`md5`),
  FULLTEXT KEY `content` (`content`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


-- 2025-04-08 14:05:50

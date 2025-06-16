-- Adminer 5.3.0 MySQL 5.7.36-log dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `term`;
CREATE TABLE `term` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` double DEFAULT '0',
  `day` float DEFAULT '0',
  `week` decimal(10,0) DEFAULT '0',
  `month` mediumint(9) DEFAULT '0',
  `year` bigint(20) DEFAULT '0',
  `type` tinyint(4) DEFAULT NULL,
  `size` smallint(6) DEFAULT NULL,
  `created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'comment',
  `modified` datetime DEFAULT NULL,
  `updated` datetime DEFAULT CURRENT_TIMESTAMP,
  `accessed` datetime DEFAULT NULL,
  `archived` datetime DEFAULT NULL,
  `completed` year(4) DEFAULT NULL,
  `saved` datetime DEFAULT NULL,
  `received` time DEFAULT NULL,
  `released` timestamp NULL DEFAULT NULL,
  `sent` datetime DEFAULT NULL,
  `taken` date DEFAULT NULL,
  `visited` datetime DEFAULT NULL,
  `query` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `md5` char(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hash` char(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiny` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `medium` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `json` json DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `md5` (`md5`),
  FULLTEXT KEY `ft_query` (`query`)
) ENGINE=MyISAM DEFAULT CHARSET=ascii COMMENT='com';


-- 2025-06-16 08:25:30 UTC

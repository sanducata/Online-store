-- Adminer 4.5.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `cos`;
CREATE TABLE `cos` (
  `ID` int(5) NOT NULL auto_increment,
  `Nume` varchar(30) collate utf8_unicode_ci NOT NULL,
  `Culoare` varchar(30) collate utf8_unicode_ci NOT NULL,
  `Pret` int(5) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `cos` (`ID`, `Nume`, `Culoare`, `Pret`) VALUES
(171,	'',	'',	0);

DROP TABLE IF EXISTS `produse`;
CREATE TABLE `produse` (
  `ID` int(5) NOT NULL auto_increment,
  `Nume` varchar(30) collate utf8_unicode_ci NOT NULL,
  `Culoare` varchar(30) collate utf8_unicode_ci NOT NULL,
  `Pret` int(5) NOT NULL,
  `Bucati` int(255) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `Register`;
CREATE TABLE `Register` (
  `ID` int(5) NOT NULL auto_increment,
  `Nume` varchar(30) collate utf8_unicode_ci NOT NULL default '',
  `Email` varchar(30) collate utf8_unicode_ci NOT NULL,
  `Parola` varchar(100) collate utf8_unicode_ci NOT NULL default '',
  `Adresa` varchar(50) collate utf8_unicode_ci NOT NULL,
  `Telefon` bigint(10) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- 2020-06-02 16:05:58

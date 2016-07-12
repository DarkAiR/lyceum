DROP TABLE IF EXISTS `#__form`;

CREATE TABLE `jos_form` (
  `id` int(11) NOT NULL auto_increment,
  `question` varchar(1024) NOT NULL,
  `answer` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
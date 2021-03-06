<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_article`;");
E_C("CREATE TABLE `ecs_article` (
  `article_id` mediumint(8) unsigned NOT NULL auto_increment,
  `cat_id` smallint(5) NOT NULL default '0',
  `title` varchar(150) NOT NULL default '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL default '',
  `author_email` varchar(60) NOT NULL default '',
  `keywords` varchar(255) NOT NULL default '',
  `article_type` tinyint(1) unsigned NOT NULL default '2',
  `is_open` tinyint(1) unsigned NOT NULL default '1',
  `add_time` int(10) unsigned NOT NULL default '0',
  `file_url` varchar(255) NOT NULL default '',
  `open_type` tinyint(1) unsigned NOT NULL default '0',
  `link` varchar(255) NOT NULL default '',
  `description` varchar(255) default NULL,
  PRIMARY KEY  (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_article` values('1','2','免责条款','','','','','0','1','1447726948','','0','',NULL);");
E_D("replace into `ecs_article` values('2','2','隐私保护','','','','','0','1','1447726948','','0','',NULL);");
E_D("replace into `ecs_article` values('3','2','咨询热点','','','','','0','1','1447726948','','0','',NULL);");
E_D("replace into `ecs_article` values('4','2','联系我们','','','','','0','1','1447726948','','0','',NULL);");
E_D("replace into `ecs_article` values('5','2','公司简介','','','','','0','1','1447726948','','0','',NULL);");
E_D("replace into `ecs_article` values('6','-1','用户协议','','','','','0','1','1447726948','','0','',NULL);");

require("../../inc/footer.php");
?>
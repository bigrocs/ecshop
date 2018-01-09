<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad`;");
E_C("CREATE TABLE `ecs_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad` values('27','11','0','众','','1515369851351333190.png','1515312000','1517904000','','','','0','1');");
E_D("replace into `ecs_ad` values('25','11','0','kjhgjk','http://zy.jianzhanzhuanjia.net/','1515369180853152350.png','1515312000','1517904000','','','','0','1');");
E_D("replace into `ecs_ad` values('26','14','0','首页_生鲜食品_分类商品广告','','1515369676018203613.png','1515312000','1517904000','','','','0','1');");
E_D("replace into `ecs_ad` values('23','10','0','首页生鲜食品广告位','http://zy.jianzhanzhuanjia.net/','1515369263442640185.png','1515139200','1517731200','','','','0','1');");
E_D("replace into `ecs_ad` values('10','6','0','网站最顶部横幅广','','1460440720430642585.jpg','1460361600','1557561600','','','','3','1');");
E_D("replace into `ecs_ad` values('11','7','0','天天惊喜右侧广告','','1460440755137550779.jpg','1460361600','1557561600','','','','0','1');");
E_D("replace into `ecs_ad` values('22','8','0','新鲜出炉左侧广告','','1515190840662257309.png','1515139200','1517731200','','','','1','1');");

require("../../inc/footer.php");
?>
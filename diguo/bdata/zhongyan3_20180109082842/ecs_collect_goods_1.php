<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_collect_goods`;");
E_C("CREATE TABLE `ecs_collect_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  `is_attention` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`),
  KEY `is_attention` (`is_attention`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_collect_goods` values('1','22','204','1514568810','0');");
E_D("replace into `ecs_collect_goods` values('2','35','202','1514919384','0');");
E_D("replace into `ecs_collect_goods` values('3','49','14','1514920905','0');");
E_D("replace into `ecs_collect_goods` values('4','49','11','1514921083','0');");
E_D("replace into `ecs_collect_goods` values('5','49','34','1514921112','0');");
E_D("replace into `ecs_collect_goods` values('6','35','196','1514935296','0');");
E_D("replace into `ecs_collect_goods` values('7','72','289','1515351465','0');");
E_D("replace into `ecs_collect_goods` values('8','73','7','1515358278','0');");

require("../../inc/footer.php");
?>
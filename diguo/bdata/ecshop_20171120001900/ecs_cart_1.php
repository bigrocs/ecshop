<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cart`;");
E_C("CREATE TABLE `ecs_cart` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `session_id` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_id` varchar(255) NOT NULL,
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `market_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr` text NOT NULL,
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rec_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_shipping` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `can_handsel` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  `fencheng` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`rec_id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=234 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cart` values('233','12','018f9d75dfa1e15e82500b1339ba6288','22','ECS000022','0','','芝华士12年 苏格兰威士忌700ml','70.80','59.00','1','','1','','0','0','0','0','0','','0');");
E_D("replace into `ecs_cart` values('231','0','92e301634aac557534f7d6a550a18f78','51','ECS000051','0','','人头马CLUB特优香槟干邑350ml','31.20','26.00','12','','1','','0','0','0','1','0','','20');");
E_D("replace into `ecs_cart` values('230','0','61eee5a0da03ede7d429cc4af3a6b288','51','ECS000051','0','','人头马CLUB特优香槟干邑350ml','31.20','26.00','2','','1','','0','0','0','1','0','','20');");
E_D("replace into `ecs_cart` values('229','0','61eee5a0da03ede7d429cc4af3a6b288','1','ECS000000','4','','新鲜水果甜蜜香脆单果约800克','231.60','156.00','7','重量:500克 \n外观:红色 \n款式:时尚款 \n','1','','0','0','0','0','0','4,7,1','0');");
E_D("replace into `ecs_cart` values('227','12','6f880301048c1346cb7da2a1a0db2bad','47','ECS000047','0','','日本蒜蓉粉丝扇贝270克6只装','156.00','108.00','1','','1','','0','0','0','1','0','','0');");
E_D("replace into `ecs_cart` values('228','12','6f880301048c1346cb7da2a1a0db2bad','29','ECS000029','0','','融氏纯玉米胚芽油5l桶','14.39','12.00','1','','1','','0','0','0','0','0','','0');");

require("../../inc/footer.php");
?>
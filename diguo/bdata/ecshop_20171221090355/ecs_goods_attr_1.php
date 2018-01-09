<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  `hex_color` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('1','1','211','500克','0','','','','');");
E_D("replace into `ecs_goods_attr` values('2','1','211','1000克','50','','','','');");
E_D("replace into `ecs_goods_attr` values('3','1','211','2000克','100','','','','');");
E_D("replace into `ecs_goods_attr` values('4','1','214','红色','','','','','FFCE6B');");
E_D("replace into `ecs_goods_attr` values('5','1','214','蓝色','','','','','9661FF');");
E_D("replace into `ecs_goods_attr` values('6','1','214','绿色','','','','','6B9621');");
E_D("replace into `ecs_goods_attr` values('7','1','215','时尚款','','images/201512/thumb_img/1_thumb_G_1449025104251.jpg','','','');");
E_D("replace into `ecs_goods_attr` values('8','1','215','经典款','','images/201512/thumb_img/1_thumb_G_1449025115783.jpg','','','');");
E_D("replace into `ecs_goods_attr` values('9','1','215','出众款','','images/201512/thumb_img/1_thumb_G_1449025126133.jpg','','','');");
E_D("replace into `ecs_goods_attr` values('34','187','216','3L','','','','','');");
E_D("replace into `ecs_goods_attr` values('33','188','216','3L*2','118','','','','');");
E_D("replace into `ecs_goods_attr` values('32','188','216','1.8L','18','','','','');");
E_D("replace into `ecs_goods_attr` values('31','188','216','5L','96.1','','','','');");
E_D("replace into `ecs_goods_attr` values('30','188','216','1.8L*2','61.1','','','','');");
E_D("replace into `ecs_goods_attr` values('29','188','216','3L','38','','','','');");
E_D("replace into `ecs_goods_attr` values('28','188','216','900ML','','','','','');");
E_D("replace into `ecs_goods_attr` values('35','187','216','5L','48.1','','','','');");
E_D("replace into `ecs_goods_attr` values('45','182','218','5L','60','','','','');");
E_D("replace into `ecs_goods_attr` values('44','182','218','1.8L*2','50','','','','');");
E_D("replace into `ecs_goods_attr` values('43','182','218','4L','40','','','','');");
E_D("replace into `ecs_goods_attr` values('42','182','218','1.8L','30','','','','');");
E_D("replace into `ecs_goods_attr` values('41','182','218','1L','','','','','');");
E_D("replace into `ecs_goods_attr` values('46','171','220','1L','','','','','');");
E_D("replace into `ecs_goods_attr` values('47','171','220','1.8L','20','','','','');");
E_D("replace into `ecs_goods_attr` values('48','171','220','2.5L','32','','','','');");
E_D("replace into `ecs_goods_attr` values('49','171','220','4L','40','','','','');");
E_D("replace into `ecs_goods_attr` values('50','171','220','4.5L','46','','','','');");
E_D("replace into `ecs_goods_attr` values('51','171','220','1.8L*2','50','','','','');");
E_D("replace into `ecs_goods_attr` values('52','171','220','5L','60','','','','');");
E_D("replace into `ecs_goods_attr` values('53','171','220','2.5L*2','66','','','','');");
E_D("replace into `ecs_goods_attr` values('54','171','220','6.18L','79','','','','');");

require("../../inc/footer.php");
?>
<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_address`;");
E_C("CREATE TABLE `ecs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `address_name` varchar(50) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) NOT NULL DEFAULT '0',
  `province` smallint(5) NOT NULL DEFAULT '0',
  `city` smallint(5) NOT NULL DEFAULT '0',
  `district` smallint(5) NOT NULL DEFAULT '0',
  `address` varchar(120) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_address` values('1','','1','张三','asdf@asd.com','1','2','52','500','详细地址详细地址','','010-12345678','13981750562','','');");
E_D("replace into `ecs_user_address` values('5','','3','张三','75283535@qq.com','1','26','322','2739','详细地址详细地址','','','18113131306','','');");
E_D("replace into `ecs_user_address` values('6','','5','张三','','1','2','52','500','详细地址详细地址','','010-12345678','','','');");
E_D("replace into `ecs_user_address` values('7','','9','开口','','1','5','65','629','uiyuhuiuighjk','','1332552695','','','');");
E_D("replace into `ecs_user_address` values('8','','10','杨彪','123123@qq.com','1','3','41','435','底商0212312','','','18909876543','','');");
E_D("replace into `ecs_user_address` values('9','','12','孙杰','','1','22','299','2465','柳泉路','','18653317111','','','');");
E_D("replace into `ecs_user_address` values('16','','18','郭','','1','22','299','2465','齐鲁电商谷','','15666039876','','','');");
E_D("replace into `ecs_user_address` values('10','','12','安徽','123456@qq.com','1','3','36','401','1212312','','','13765411234','','');");
E_D("replace into `ecs_user_address` values('11','','12','213123','22112@qq.com','1','2','52','500','12121231233','','','13765411234','','');");
E_D("replace into `ecs_user_address` values('12','','13','测试','123456123@qq.com','1','22','299','2465','测试地区','','','13912341234','','');");
E_D("replace into `ecs_user_address` values('13','','15','ceshi','123456123@qq.comq','1','3','36','398','ceshiceshiceshiceshi','','','13954386521','','');");
E_D("replace into `ecs_user_address` values('14','','16','ceshi','','1','22','299','2465','ceshiceshiceshiceshi','','13954386521','','','');");
E_D("replace into `ecs_user_address` values('15','','17','丁','865608920@qq.com','1','22','299','2465','加快地方看见恢复健康疯狂大家看法 ','','8636200','15505330286','','');");
E_D("replace into `ecs_user_address` values('17','','19','张晓兵','','1','22','299','2470','桓台县鸿嘉星城西湖兰庭','','15853348111','','','');");
E_D("replace into `ecs_user_address` values('18','','12','孙杰','','1','22','299','2465','家','','18653317111','','','');");
E_D("replace into `ecs_user_address` values('19','','22','qq','123@qq.com','1','22','299','2465','qqq','','1213','15866654789','','');");
E_D("replace into `ecs_user_address` values('20','','23','淄博','','1','22','299','2470','果里','','12345567455','','','');");
E_D("replace into `ecs_user_address` values('21','','24','pp','','1','22','299','2470','桓台','','18678122681','','','');");
E_D("replace into `ecs_user_address` values('22','','26','李嘿嘿','','1','22','299','2465','暑假集训班南山南','','15866423552','','','');");
E_D("replace into `ecs_user_address` values('23','','27','王艳','','1','22','299','2470','235146878','','111111111111','','','');");
E_D("replace into `ecs_user_address` values('24','','25','meng','','1','22','299','2465','咯待遇','','123','','','');");
E_D("replace into `ecs_user_address` values('25','','28','孙杰','','1','22','299','2465','柳泉路','','18653317111','','','');");
E_D("replace into `ecs_user_address` values('26','','33','王克涛','','1','4','57','558','我现在','','13864474431','','','');");
E_D("replace into `ecs_user_address` values('27','','35','张娜','','1','2','52','503','外环','','123','','','');");
E_D("replace into `ecs_user_address` values('28','','38','魏','','1','22','299','2470','汇丰石化','','13754776868','','','');");
E_D("replace into `ecs_user_address` values('29','','36','丁铭','','1','22','299','2465','阳光花园南区','','13953368676','','','');");
E_D("replace into `ecs_user_address` values('30','','40','12312','','1','2','52','500','sadfdsfds','','13954386521','','','');");
E_D("replace into `ecs_user_address` values('31','','39','史海涛','','1','22','299','2465','中德奥林新城小区','','13515333292','','','');");
E_D("replace into `ecs_user_address` values('32','','41','周焕勇','','1','22','299','2470','山东汇丰石化集团销售有限公司','','18560288499','','','');");
E_D("replace into `ecs_user_address` values('33','','56','杨鹏','','1','22','299','2470','桓台县果里镇石化南路','','15266750691','','','');");
E_D("replace into `ecs_user_address` values('34','','44','大自然','','1','22','299','2470','汇丰石化','','13606438744','','','');");
E_D("replace into `ecs_user_address` values('35','','48','嘎嘣','','1','22','299','2470','汇丰石化','','15315229123','','','');");
E_D("replace into `ecs_user_address` values('36','','49','艾迪','','1','22','299','2470','紫悦城54#-1-1202','','15264341202','','','');");
E_D("replace into `ecs_user_address` values('37','','43','秦建伟','','1','22','299','2465','高新区赵庄','','15269359210','','','');");
E_D("replace into `ecs_user_address` values('38','','37','郜业鹏','','1','22','299','2470','果里镇石化南路','','13002700102','','','');");
E_D("replace into `ecs_user_address` values('39','','42','付光玉','','1','22','299','2470','果里镇','','13287034340','','','');");
E_D("replace into `ecs_user_address` values('40','','46','李总','','1','22','299','2465','柳泉路','','12585369358','','','');");
E_D("replace into `ecs_user_address` values('41','','55','赵海广','','1','22','299','2470','汇丰石化销售公司','','15965338845','','','');");
E_D("replace into `ecs_user_address` values('42','','51','刘大学','','1','22','299','2465','俪园小区','','18653318463','','','');");
E_D("replace into `ecs_user_address` values('43','','54','张科','','1','22','299','2470','桓台县','','13864398850','','','');");
E_D("replace into `ecs_user_address` values('44','','45','果里镇山东汇丰石化集团销售有限公司','','1','22','299','2470','果里镇山东汇丰石化集团销售有限公司','','18560378456','','','');");
E_D("replace into `ecs_user_address` values('45','','34','呃呃','','1','4','55','540','啊啊啊','','4563','','','');");
E_D("replace into `ecs_user_address` values('46','','59','www','ddd@qq.com','1','5','64','618','33333','','123456789098','15858585858','','');");
E_D("replace into `ecs_user_address` values('47','','49','啊','122','0','0','0','0','1111','','15264341285','','','');");
E_D("replace into `ecs_user_address` values('48','','69','刘','','1','22','299','2465','自提','','15953316708','','','');");
E_D("replace into `ecs_user_address` values('49','','42','付光玉','','1','22','299','2470','果里镇付坡嘉苑','','1370343402','','','');");
E_D("replace into `ecs_user_address` values('50','','35','啊啊啊','','0','2','52','502','三环','','11333333333','','','');");
E_D("replace into `ecs_user_address` values('51','','74','qqq','0@qq.cm','1','22','299','2465','wwww','','','15858565757','','');");

require("../../inc/footer.php");
?>
<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_type`;");
E_C("CREATE TABLE `ecs_goods_type` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(60) NOT NULL DEFAULT '',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_group` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_type` values('1','书','1','');");
E_D("replace into `ecs_goods_type` values('2','音乐','1','');");
E_D("replace into `ecs_goods_type` values('3','电影','1','');");
E_D("replace into `ecs_goods_type` values('4','手机','1','');");
E_D("replace into `ecs_goods_type` values('5','笔记本电脑','1','');");
E_D("replace into `ecs_goods_type` values('6','数码相机','1','');");
E_D("replace into `ecs_goods_type` values('7','数码摄像机','1','');");
E_D("replace into `ecs_goods_type` values('8','化妆品','1','');");
E_D("replace into `ecs_goods_type` values('9','精品手机','1','');");
E_D("replace into `ecs_goods_type` values('10','宠物粮','1','');");
E_D("replace into `ecs_goods_type` values('12','食用油','1','');");
E_D("replace into `ecs_goods_type` values('13','西王玉米橄榄油','1','');");
E_D("replace into `ecs_goods_type` values('14','西王葵花籽油','1','');");
E_D("replace into `ecs_goods_type` values('15','西王鲜胚玉米胚芽油','1','');");
E_D("replace into `ecs_goods_type` values('16','西王玉米胚芽油','1','');");
E_D("replace into `ecs_goods_type` values('17','洗发水','1','');");
E_D("replace into `ecs_goods_type` values('21','100年润发水润丝滑洗发露N3','1','200g\r\n400g\r\n750g');");
E_D("replace into `ecs_goods_type` values('22','120g西丽香皂','1','');");
E_D("replace into `ecs_goods_type` values('23','100年润发深度修护洗发露N3','1','200g\r\n400g\r\n750g');");
E_D("replace into `ecs_goods_type` values('24','雕牌透明皂N1','1','');");
E_D("replace into `ecs_goods_type` values('25','100年润发魅黑闪亮洗发露N3','1','200g\r\n400g');");
E_D("replace into `ecs_goods_type` values('26','100年润发净萃控油洗发露N3','1','200g\r\n400g\r\n750g');");
E_D("replace into `ecs_goods_type` values('27','100年润发柔亮去屑洗发露N3','1','100年润发柔亮去屑洗发露N3');");
E_D("replace into `ecs_goods_type` values('19','纳爱斯香皂','1','');");
E_D("replace into `ecs_goods_type` values('20','100年润发强韧养发洗发露N3','1','7g\r\n200g\r\n400g\r\n750g');");
E_D("replace into `ecs_goods_type` values('28','100年润发清新去屑洗发露N3','1','100年润发清新去屑洗发露N3');");
E_D("replace into `ecs_goods_type` values('29','200g100年润发滋润去屑洗发露N3','1','200g100年润发滋润去屑洗发露N3');");
E_D("replace into `ecs_goods_type` values('30','100年润发沁凉去屑洗发露N3','1','100年润发沁凉去屑洗发露N3');");
E_D("replace into `ecs_goods_type` values('31','100年润发男士调理洗发露（美洲青柠控油）','1','100年润发男士调理洗发露（美洲青柠控油）');");
E_D("replace into `ecs_goods_type` values('32','100年润发男士调理洗发露（澳洲茶树去屑）','1','100年润发男士调理洗发露（澳洲茶树去屑）');");
E_D("replace into `ecs_goods_type` values('33','100年润发男士调理洗发露（竹炭净爽（酷凉））','1','100年润发男士调理洗发露（竹炭净爽（酷凉））');");
E_D("replace into `ecs_goods_type` values('34','100年润发男士调理洗发露（强根防掉发）','1','100年润发男士调理洗发露（强根防掉发）');");
E_D("replace into `ecs_goods_type` values('35','100年润发男士薄荷活力运动洗发露','1','100年润发男士薄荷活力运动洗发露');");
E_D("replace into `ecs_goods_type` values('36','雕牌增白皂N1','1','');");
E_D("replace into `ecs_goods_type` values('37','100年润发男士深海海藻水润洗发露','1','100年润发男士深海海藻水润洗发露');");
E_D("replace into `ecs_goods_type` values('38','100年润发男士北美雪松止痒洗发露','1','100年润发男士北美雪松止痒洗发露');");
E_D("replace into `ecs_goods_type` values('39','雕牌除菌洗衣皂','1','');");
E_D("replace into `ecs_goods_type` values('40','100年润发强韧养发精华素N3','1','100年润发强韧养发精华素N3');");
E_D("replace into `ecs_goods_type` values('41','100年润发水润丝滑精华素N3','1','100年润发水润丝滑精华素N3');");
E_D("replace into `ecs_goods_type` values('42','100年润发深度修护精华素N3','1','100年润发深度修护精华素N3');");
E_D("replace into `ecs_goods_type` values('43','100年润发柔亮去屑精华素N3','1','100年润发柔亮去屑精华素N3');");
E_D("replace into `ecs_goods_type` values('44','100年润发强韧养发发膜N3','1','100年润发强韧养发发膜N3');");
E_D("replace into `ecs_goods_type` values('45','100年润发水润丝滑发膜N3','1','100年润发水润丝滑发膜N3');");
E_D("replace into `ecs_goods_type` values('46','西亚斯浪漫邂逅香浴露','1','西亚斯浪漫邂逅香浴露');");
E_D("replace into `ecs_goods_type` values('47','西亚斯真我女王香浴露','1','西亚斯真我女王香浴露');");
E_D("replace into `ecs_goods_type` values('48','西亚斯花漾甜心香浴露','1','西亚斯花漾甜心香浴露');");
E_D("replace into `ecs_goods_type` values('49','西亚斯摩登魅香香浴露','1','西亚斯摩登魅香香浴露');");
E_D("replace into `ecs_goods_type` values('50','纳爱斯齿清海洋牙膏N1','1','纳爱斯齿清海洋牙膏N1');");
E_D("replace into `ecs_goods_type` values('51','超能柠檬草洗衣皂','1','');");
E_D("replace into `ecs_goods_type` values('52','纳爱斯防蛀修护牙膏N1','1','纳爱斯防蛀修护牙膏N1');");
E_D("replace into `ecs_goods_type` values('53','纳爱斯营养维E牙膏N1','1','纳爱斯营养维E牙膏N1');");
E_D("replace into `ecs_goods_type` values('54','纳爱斯营养维C鲜橙薄荷牙膏N1','1','纳爱斯营养维C鲜橙薄荷牙膏N1');");
E_D("replace into `ecs_goods_type` values('55','纳爱斯钻闪白牙膏N1','1','纳爱斯钻闪白牙膏N1');");
E_D("replace into `ecs_goods_type` values('56','超能椰果洗衣皂','1','');");
E_D("replace into `ecs_goods_type` values('57','纳爱斯去渍快白牙膏N1','1','纳爱斯去渍快白牙膏N1');");
E_D("replace into `ecs_goods_type` values('58','超能棕榈洗衣皂','1','');");
E_D("replace into `ecs_goods_type` values('59','超能内衣专用皂','1','');");
E_D("replace into `ecs_goods_type` values('60','雕牌超效加酶洗衣粉N3','1','');");
E_D("replace into `ecs_goods_type` values('61','雕牌速溶快洁无磷洗衣粉N3','1','');");
E_D("replace into `ecs_goods_type` values('62','雕牌除菌无磷洗衣粉','1','');");
E_D("replace into `ecs_goods_type` values('63','超能去渍365洗衣粉飘香(无磷)','1','');");
E_D("replace into `ecs_goods_type` values('64','雕牌天然皂粉(家庭装)','1','');");
E_D("replace into `ecs_goods_type` values('65','超能天然皂粉(馨香炫彩)','1','');");
E_D("replace into `ecs_goods_type` values('67','纳爱斯柠檬绿茶牙膏N1','1','纳爱斯柠檬绿茶牙膏N1');");
E_D("replace into `ecs_goods_type` values('68','超能天然皂粉(MES绿色活性去污)','1','');");
E_D("replace into `ecs_goods_type` values('69','超能浓缩天然皂粉','1','');");
E_D("replace into `ecs_goods_type` values('70','纳爱斯健齿清新牙膏N1','1','纳爱斯健齿清新牙膏N1');");
E_D("replace into `ecs_goods_type` values('71','雕牌高效洗洁精','1','');");
E_D("replace into `ecs_goods_type` values('72','纳爱斯齿乐脱敏牙膏N1','1','纳爱斯齿乐脱敏牙膏N1');");
E_D("replace into `ecs_goods_type` values('73','纳爱斯鲜浓果味牙膏N1','1','纳爱斯鲜浓果味牙膏N1');");
E_D("replace into `ecs_goods_type` values('74','雕牌生姜洗洁精','1','');");
E_D("replace into `ecs_goods_type` values('75','纳爱斯清凉菊花牙膏N1','1','纳爱斯清凉菊花牙膏N1');");
E_D("replace into `ecs_goods_type` values('76','纳爱斯天然盐牙膏N1','1','纳爱斯天然盐牙膏N1');");
E_D("replace into `ecs_goods_type` values('77','纳爱斯健爽白牙膏(专效防敏感)','1','纳爱斯健爽白牙膏(专效防敏感)');");
E_D("replace into `ecs_goods_type` values('78','纳爱斯健爽白牙膏(专效清新)','1','纳爱斯健爽白牙膏(专效清新)');");
E_D("replace into `ecs_goods_type` values('79','纳爱斯健爽白牙膏(专效美白)','1','纳爱斯健爽白牙膏(专效美白)');");

require("../../inc/footer.php");
?>
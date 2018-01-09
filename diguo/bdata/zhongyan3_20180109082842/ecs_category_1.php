<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_category`;");
E_C("CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  `is_top_style` int(3) unsigned NOT NULL DEFAULT '0',
  `is_top_show` int(3) unsigned NOT NULL DEFAULT '0',
  `cat_ico` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=189 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_category` values('1','酒水饮品','','','0','3','','','1','','1','0','','0','0','1449088848823694266.png');");
E_D("replace into `ecs_category` values('2','生鲜食品','','','0','1','','','1','','1','5','','0','0','1449088788518670880.png');");
E_D("replace into `ecs_category` values('5','粮油调味','','','2','2','','','1','','1','0','','0','0','1449088901458193225.png');");
E_D("replace into `ecs_category` values('7','茗茶','','','1','1','','','0','','1','0','','0','0','1449089358084135937.png');");
E_D("replace into `ecs_category` values('15','精品肉类','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('175','女装','','','173','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('176','男装','','','173','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('16','海鲜水产','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('169','果汁','','','146','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('18','瓜果蔬菜','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('132','美妆洗化','','','0','5','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('168','碳酸饮料','','','146','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('23','白酒','','','144','2','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('24','葡萄酒','','','144','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('173','时装鞋靴','','','0','11','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('26','啤酒','','','144','5','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('138','乌龙茶','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('139','口腔护理','','','132','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('30','食用油','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('31','米面杂粮','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('32','厨房调料','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('174','四季鲜果','','','18','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('34','方便速食','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('140','面部护理','','','132','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('141','衣物清洁','','','132','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('177','男鞋','','','173','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('178','女鞋','','','173','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('179','沐浴露','','','171','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('180','洗手液','','','171','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('181','柔顺剂','','','141','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('182','厨卫清洁','','','132','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('183','洗洁精','','','182','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('184','洁厕灵','','','182','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('61','白茶','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('62','红茶','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('63','绿茶','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('64','羊肉','','','15','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('65','禽类','','','15','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('66','猪肉','','','15','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('67','牛肉','','','15','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('68','参鲍','','','16','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('69','鱼','','','16','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('70','虾','','','16','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('71','蟹/贝','','','16','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('170','牛乳制品','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('77','时令鲜蔬','','','18','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('171','沐浴清洁','','','132','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('172','户外运动','','','0','10','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('83','五粮液','','','23','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('137','黑茶','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('85','茅台','','','23','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('134','箱包钟表','','','0','7','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('136','汽车用品','','','0','8','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('135','家用电器','','','0','9','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('167','矿泉水','','','146','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('133','家居家纺','','','0','6','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('166','咖啡豆','','','145','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('142','润滑油','','','136','50','','','1','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('143','直销产品','','','0','15','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('144','美酒','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('145','咖啡','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('146','饮料','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('147','牙膏','','','139','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('148','牙刷','','','139','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('149','漱口水','','','139','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('150','牙线','','','139','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('151','香皂','','','140','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('152','洁面乳','','','140','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('153','面膜','','','140','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('154','洗衣液','','','141','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('155','洗衣粉','','','141','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('156','内衣皂','','','141','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('157','天然皂粉','','','141','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('158','透明皂','','','141','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('159','洗发护发','','','132','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('160','洗发水','','','159','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('161','护发素','','','159','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('162','黄酒','','','144','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('163','保健酒','','','144','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('164','速溶咖啡','','','145','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('165','咖啡粉','','','145','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('131','临时分类','','','0','50','','','0','','0','0','','0','0','');");
E_D("replace into `ecs_category` values('186','洗衣皂','','','141','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('187','貂皮大衣','','','175','50','','','0','','1','0','0','0','0','');");
E_D("replace into `ecs_category` values('188','貂皮大衣','','','176','50','','','0','','1','0','0','0','0','');");

require("../../inc/footer.php");
?>
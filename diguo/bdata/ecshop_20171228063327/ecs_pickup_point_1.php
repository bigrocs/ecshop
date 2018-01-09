<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pickup_point`;");
E_C("CREATE TABLE `ecs_pickup_point` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `province_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `supplier_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '店铺标识',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pickup_point` values('1','云海超市','河北大街西段','15216766661','倪庆洋','10','145','1194','0');");
E_D("replace into `ecs_pickup_point` values('2','逸城超市','111','13211111111','李先生','10','145','1194','0');");
E_D("replace into `ecs_pickup_point` values('3','11111111','11111','123 ','1111111','10','145','1197','0');");
E_D("replace into `ecs_pickup_point` values('4','额发生大','的撒','大杀四方','大','10','145','1195','0');");
E_D("replace into `ecs_pickup_point` values('5','第三方','第三方','第三方','第三方','10','145','1195','0');");
E_D("replace into `ecs_pickup_point` values('6','第三方','圣达菲','圣达菲','圣达菲','10','145','1197','0');");
E_D("replace into `ecs_pickup_point` values('7','中国石化','黄河八路天启九路56号','15712341234','老王','22','299','2465','0');");
E_D("replace into `ecs_pickup_point` values('8','圣达菲asaas','圣达菲dizhi','圣达菲133','是的发ren','2','52','500','0');");
E_D("replace into `ecs_pickup_point` values('9','asdaasdasd','q e w q we q w q we','q we q we q w','q w q w w','2','52','500','0');");
E_D("replace into `ecs_pickup_point` values('10','测试店铺 ','地址海淀区北海路338号','13811001100','王女士','2','52','500','0');");
E_D("replace into `ecs_pickup_point` values('11','asdasdasdasasasadsda','21312','13954386521','312312','2','52','500','0');");
E_D("replace into `ecs_pickup_point` values('22','中国石化16路加油站','黄渤十八路七六号公寓','137054365418','王先生','22','299','2465','0');");
E_D("replace into `ecs_pickup_point` values('21','中国石化','a啊 dasd','12312312','1驱蚊器','3','37','0','0');");

require("../../inc/footer.php");
?>
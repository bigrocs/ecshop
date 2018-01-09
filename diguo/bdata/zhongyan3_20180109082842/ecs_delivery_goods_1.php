<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('2','2','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('3','3','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('4','4','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('5','5','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('6','6','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('7','7','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('8','8','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('9','9','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('10','10','48','0','','新疆巴尔鲁克生鲜牛排眼肉牛扒1200g','百利本能','ECS000048','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('12','12','1','4','ECS000000g_p4','新鲜水果甜蜜香脆单果约800克','艾尔Aier','ECS000000','1',NULL,'0','1','重量:500克 \n外观:红色 \n款式:时尚款 \n');");
E_D("replace into `ecs_delivery_goods` values('15','15','44','0','','蒙牛特仑苏有机奶250ml×12盒','发育宝Haipet','ECS000044','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('16','16','43','0','','休闲零食膨化食品焦糖/奶油/椒麻味','雷米高','ECS000043','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('17','17','1','22','ECS000000g_p22','新鲜水果甜蜜香脆单果约800克','艾尔Aier','ECS000000','1',NULL,'0','1','重量:2000克[200] \n外观:红色 \n款式:时尚款 \n');");
E_D("replace into `ecs_delivery_goods` values('18','18','202','0','','怀庄53-神秘茅台','怀庄','ECS000202','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('19','19','202','0','','怀庄53-神秘茅台','怀庄','ECS000202','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('20','20','198','0','','怀庄53-人赐福','怀庄','ECS000198','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('21','21','202','0','','怀庄53-神秘茅台','怀庄','ECS000202','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('22','22','197','0','','怀庄53-地赐福','怀庄','ECS000197','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('23','23','197','0','','怀庄53-地赐福','怀庄','ECS000197','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('24','24','11','0','','澳洲进口120天谷饲牛仔骨4份原味生鲜','维洛司','ECS000011','1',NULL,'0','5','');");
E_D("replace into `ecs_delivery_goods` values('25','25','202','0','','怀庄53-神秘茅台','怀庄','ECS000202','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('26','26','202','0','','怀庄53-神秘茅台','怀庄','ECS000202','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('27','27','202','0','','怀庄53-神秘茅台','怀庄','ECS000202','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('28','28','202','0','','怀庄53-神秘茅台','怀庄','ECS000202','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('29','29','7','0','','酣畅家庭菲力牛排10片澳洲生鲜牛肉团购套餐','森美','ECS000007','1',NULL,'0','5','');");
E_D("replace into `ecs_delivery_goods` values('30','30','11','0','','澳洲进口120天谷饲牛仔骨4份原味生鲜','维洛司','ECS000011','1',NULL,'0','10','');");
E_D("replace into `ecs_delivery_goods` values('31','31','202','0','','怀庄53-神秘茅台','怀庄','ECS000202','1',NULL,'0','7','');");
E_D("replace into `ecs_delivery_goods` values('32','32','196','0','','怀庄53-天赐福','怀庄','ECS000196','1',NULL,'0','100','');");
E_D("replace into `ecs_delivery_goods` values('33','33','196','0','','怀庄53-天赐福','怀庄','ECS000196','1',NULL,'0','300','');");
E_D("replace into `ecs_delivery_goods` values('34','34','7','0','','酣畅家庭菲力牛排10片澳洲生鲜牛肉团购套餐','森美','ECS000007','1',NULL,'0','4','');");
E_D("replace into `ecs_delivery_goods` values('35','35','34','0','','潍坊萝卜5斤/箱 礼盒','雷米高','ECS000034','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('36','36','202','0','','怀庄53-神秘茅台','怀庄','ECS000202','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('37','37','197','0','','怀庄53-地赐福','怀庄','ECS000197','1',NULL,'0','10','');");
E_D("replace into `ecs_delivery_goods` values('38','38','195','0','','西王花生油','西王','ECS000195','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('39','39','7','0','','酣畅家庭菲力牛排10片澳洲生鲜牛肉团购套餐','森美','ECS000007','1',NULL,'0','5','');");
E_D("replace into `ecs_delivery_goods` values('40','39','197','0','','怀庄53-地赐福','怀庄','ECS000197','1',NULL,'0','5','');");
E_D("replace into `ecs_delivery_goods` values('41','40','202','0','','怀庄53-神秘茅台','怀庄','ECS000202','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('42','41','47','0','','日本蒜蓉粉丝扇贝270克6只装','金赏','ECS000047','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('43','42','9','0','','爱食派内蒙古呼伦贝尔冷冻生鲜牛腱子肉1000g','雷米高','ECS000009','1',NULL,'0','10','');");
E_D("replace into `ecs_delivery_goods` values('44','43','2','0','','田然牛肉大黄瓜条生鲜牛肉冷冻真空黄牛','艾尔Aier','ECS000002','1',NULL,'0','5','');");
E_D("replace into `ecs_delivery_goods` values('45','43','202','0','','怀庄53-神秘茅台','怀庄','ECS000202','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('46','44','202','0','','怀庄53-神秘茅台','怀庄','ECS000202','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('47','45','7','0','','酣畅家庭菲力牛排10片澳洲生鲜牛肉团购套餐','森美','ECS000007','1',NULL,'0','2','');");

require("../../inc/footer.php");
?>
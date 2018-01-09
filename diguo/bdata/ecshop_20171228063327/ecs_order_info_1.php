<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_info`;");
E_C("CREATE TABLE `ecs_order_info` (
  `order_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(20) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) unsigned NOT NULL DEFAULT '0',
  `province` smallint(5) unsigned NOT NULL DEFAULT '0',
  `city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `district` smallint(5) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `postscript` varchar(255) NOT NULL DEFAULT '',
  `shipping_id` tinyint(3) NOT NULL DEFAULT '0',
  `shipping_name` varchar(120) NOT NULL DEFAULT '',
  `pay_id` tinyint(3) NOT NULL DEFAULT '0',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `how_oos` varchar(120) NOT NULL DEFAULT '',
  `how_surplus` varchar(120) NOT NULL DEFAULT '',
  `pack_name` varchar(120) NOT NULL DEFAULT '',
  `card_name` varchar(120) NOT NULL DEFAULT '',
  `card_message` varchar(255) NOT NULL DEFAULT '',
  `inv_payee` varchar(120) NOT NULL DEFAULT '',
  `inv_content` varchar(120) NOT NULL DEFAULT '',
  `goods_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shipping_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `insure_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pack_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `card_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `money_paid` decimal(10,2) NOT NULL DEFAULT '0.00',
  `surplus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `integral_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bonus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `order_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `confirm_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pack_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `card_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(255) NOT NULL DEFAULT '',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `extension_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `to_buyer` varchar(255) NOT NULL DEFAULT '',
  `pay_note` varchar(255) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `is_separate` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `discount` decimal(10,2) NOT NULL,
  `is_pickup` tinyint(1) NOT NULL,
  `fencheng` varchar(255) DEFAULT NULL,
  `pickup_point` int(11) NOT NULL,
  `jiubi_money` decimal(10,2) DEFAULT '0.00',
  `jiubi` decimal(10,2) DEFAULT '0.00',
  `vip_money` decimal(10,2) DEFAULT '0.00',
  `cost_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `spread_id` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `user_id` (`user_id`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`),
  KEY `shipping_id` (`shipping_id`),
  KEY `pay_id` (`pay_id`),
  KEY `extension_code` (`extension_code`,`extension_id`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=168 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_info` values('163','2017122660744','12','1','0','2','乔杉','1','22','299','2465','黄河八路天启九路科技商城','','13954386521','13954386521','nidie@qq.com','','','','5','门店自提','2','余额支付','等待所有商品备齐后再发','','','','','','','1231.00','15.00','0.00','0.00','0.00','0.00','0.00','845.00','0','0.00','0.00','0.00','0','pc站','1514246145','1514246145','1514246145','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','1','1231','7','401.00','401.00','0.00','0.00','12');");
E_D("replace into `ecs_order_info` values('164','2017122753763','12','1','0','2','乔杉','1','22','299','2465','黄河八路天启九路科技商城','','13954386521','13954386521','nidie@qq.com','','','','5','门店自提','2','余额支付','等待所有商品备齐后再发','','','','','','','1400.00','15.00','0.00','0.00','0.00','0.00','0.00','634.00','0','0.00','0.00','0.00','0','pc站','1514310965','1514310965','1514310965','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','1','588','7','781.00','781.00','0.00','0.00','0');");
E_D("replace into `ecs_order_info` values('165','2017122738412','12','1','0','2','乔杉','1','22','299','2465','黄河八路天启九路科技商城','','13954386521','13954386521','nidie@qq.com','','','','5','门店自提','2','余额支付','等待所有商品备齐后再发','','','','','','','3360.00','15.00','0.00','0.00','0.00','0.00','0.00','1631.00','0','0.00','0.00','0.00','0','pc站','1514311990','1514311990','1514311990','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','1','924','7','1744.00','1744.00','0.00','0.00','0');");
E_D("replace into `ecs_order_info` values('166','2017122758024','12','1','0','2','乔杉','1','22','299','2465','黄河八路天启九路科技商城','','13954386521','13954386521','nidie@qq.com','','','','5','门店自提','2','余额支付','等待所有商品备齐后再发','','','','','','','2380.00','15.00','0.00','0.00','0.00','0.00','0.00','1132.00','0','0.00','0.00','0.00','0','pc站','1514312149','1514312149','1514312149','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','1','756','7','1263.00','1263.00','0.00','200.00','0');");
E_D("replace into `ecs_order_info` values('167','2017122790695','12','1','0','2','乔杉','1','22','299','2465','黄河八路天启九路科技商城','','13954386521','13954386521','nidie@qq.com','','','','5','门店自提','8','余额支付','等待所有商品备齐后再发','','','','','','','2940.00','15.00','0.00','0.00','0.00','0.00','0.00','1511.00','0','0.00','0.00','0.00','0','wap站','1514312849','1514312849','1514312849','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','1','504','7','1444.00','1444.00','0.00','180.00','0');");

require("../../inc/footer.php");
?>
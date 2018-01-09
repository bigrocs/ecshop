<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_order`;");
E_C("CREATE TABLE `ecs_delivery_order` (
  `delivery_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(50) DEFAULT NULL,
  `add_time` int(10) unsigned DEFAULT '0',
  `shipping_id` tinyint(3) unsigned DEFAULT '0',
  `shipping_name` varchar(120) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT '0',
  `action_user` varchar(30) DEFAULT NULL,
  `consignee` varchar(60) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country` smallint(5) unsigned DEFAULT '0',
  `province` smallint(5) unsigned DEFAULT '0',
  `city` smallint(5) unsigned DEFAULT '0',
  `district` smallint(5) unsigned DEFAULT '0',
  `sign_building` varchar(120) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `zipcode` varchar(60) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `best_time` varchar(120) DEFAULT NULL,
  `postscript` varchar(255) DEFAULT NULL,
  `how_oos` varchar(120) DEFAULT NULL,
  `insure_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `shipping_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `update_time` int(10) unsigned DEFAULT '0',
  `suppliers_id` smallint(5) DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `agency_id` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`delivery_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_order` values('1','20151122195574808','2015112275252','27','805355128260','1448164300','1','上门取货','3','sclzz','张三','详细地址详细地址','1','26','322','2739','','75283535@qq.com','','','18113131306','','','等待所有商品备齐后再发','0.00','0.00','1448164506','0','0','0');");
E_D("replace into `ecs_delivery_order` values('2','20151122201803920','2015112265460','26','','1448164228','1','上门取货','3','sclzz','张三','详细地址详细地址','1','26','322','2739','','75283535@qq.com','','','18113131306','','','等待所有商品备齐后再发','0.00','0.00','1448165909','0','0','0');");
E_D("replace into `ecs_delivery_order` values('3','20151122203661061','2015112225818','31','','1448166779','1','上门取货','3','sclzz','张三','详细地址详细地址','1','26','322','2739','','75283535@qq.com','','','18113131306','','','等待所有商品备齐后再发','0.00','0.00','1448166998','0','0','0');");
E_D("replace into `ecs_delivery_order` values('4','20151123145511925','2015112356122','73','','1448232418','1','上门取货','5','sclzz','张三','详细地址详细地址','1','2','52','500','','','','010-12345678','','','','等待所有商品备齐后再发','0.00','0.00','1448232926','0','0','0');");
E_D("replace into `ecs_delivery_order` values('5','20151123173143089','2015112369856','97','','1448242105','1','上门取货','5','sclzz','张三','详细地址详细地址','1','2','52','500','','','','010-12345678','','','','等待所有商品备齐后再发','0.00','0.00','1448242314','0','0','0');");
E_D("replace into `ecs_delivery_order` values('6','20151123185888193','2015112314657','96','590716750039','1448242012','3','顺丰速运','5','sclzz','张三','详细地址详细地址','1','2','52','500','','','','010-12345678','','','','等待所有商品备齐后再发','0.00','15.00','1448247510','0','0','0');");
E_D("replace into `ecs_delivery_order` values('7','20151123194019515','2015112366532','95','','1448241849','1','上门取货','5','sclzz','张三','详细地址详细地址','1','2','52','500','','','','010-12345678','','','','等待所有商品备齐后再发','0.00','0.00','1448250050','0','0','0');");
E_D("replace into `ecs_delivery_order` values('8','20151125155707937','2015112344712','94','','1448241704','1','上门取货','5','sclzz','张三','详细地址详细地址','1','2','52','500','','','','010-12345678','','','','等待所有商品备齐后再发','0.00','0.00','1448409424','0','0','0');");
E_D("replace into `ecs_delivery_order` values('9','20151125160663779','2015112561257','100','','1448409894','1','上门取货','5','sclzz','张三','详细地址详细地址','1','2','52','500','','','','010-12345678','','','','等待所有商品备齐后再发','0.00','0.00','1448409967','0','0','0');");
E_D("replace into `ecs_delivery_order` values('10','20151202210163792','2015120242661','103','880828394688493096','1449032504','4','圆通速递','1','sclzz','张三','详细地址详细地址','1','2','52','500','','asdf@asd.com','','010-12345678','13981750562','','','等待所有商品备齐后再发','0.00','0.00','1449032516','0','0','0');");
E_D("replace into `ecs_delivery_order` values('12','20171115151646840','2017111563274','107','','1510680559','5','门店自提','12','admin','asdas','dsfafsaf','1','2','52','500','','123456@qq.com','','','13765411234','','','等待所有商品备齐后再发','0.00','15.00','1510701392','0','0','0');");
E_D("replace into `ecs_delivery_order` values('15','20171226114918400','2017122642901','161','','1514230349','5','门店自提','15','admin','ceshi','ceshiceshiceshiceshi','1','3','36','398','','123456123@qq.comq','','','13954386521','','','等待所有商品备齐后再发','0.00','15.00','1514231368','0','0','0');");
E_D("replace into `ecs_delivery_order` values('16','20171226115661537','2017122673957','162','','1514231676','5','门店自提','15','admin','ceshi','ceshiceshiceshiceshi','1','3','36','398','','123456123@qq.comq','','','13954386521','','','等待所有商品备齐后再发','0.00','0.00','1514231763','0','0','0');");
E_D("replace into `ecs_delivery_order` values('17','20171229105963833','2017122916837','168','','1514487483','5','门店自提','16','admin','ceshi','ceshiceshiceshiceshi','1','22','299','2465','','123456@qqqqq.com','','','13954386521','','','等待所有商品备齐后再发','0.00','15.00','1514487568','0','0','0');");
E_D("replace into `ecs_delivery_order` values('18','20171229142138410','2017122925674','172','','1514499146','1','上门取货','17','admin','丁','加快地方看见恢复健康疯狂大家看法','1','22','299','2465','','865608920@qq.com','','8636200','15505330286','','','等待所有商品备齐后再发','0.00','0.00','1514499660','0','0','0');");
E_D("replace into `ecs_delivery_order` values('19','20171229143274846','2017122904030','173','','1514500246','5','门店自提','12','zyshdxq','孙杰','柳泉路','1','22','299','2465','','','','18653317111','','','','等待所有商品备齐后再发','0.00','15.00','1514500345','0','0','0');");
E_D("replace into `ecs_delivery_order` values('20','20171229150142708','2017122988637','178','','1514502027','2','运费到付','19','admin','张晓兵','桓台县鸿嘉星城西湖兰庭','1','22','299','2470','','','','15853348111','','','','等待所有商品备齐后再发','0.00','0.00','1514502074','0','0','0');");
E_D("replace into `ecs_delivery_order` values('21','20171230100977725','2017123066263','210','','1514570901','1','上门取货','23','admin','淄博','果里','1','22','299','2470','','','','12345567455','','','','等待所有商品备齐后再发','0.00','0.00','1514570979','0','0','0');");
E_D("replace into `ecs_delivery_order` values('22','20171230101039506','2017123014979','211','','1514570932','2','运费到付','19','admin','张晓兵','桓台县鸿嘉星城西湖兰庭','1','22','299','2470','','','','15853348111','','','','等待所有商品备齐后再发','0.00','0.00','1514571020','0','1','0');");
E_D("replace into `ecs_delivery_order` values('23','20171230103483518','2017123040525','212','','1514572439','1','上门取货','28','admin','孙杰','柳泉路','1','22','299','2465','','','','18653317111','','','','等待所有商品备齐后再发','0.00','0.00','1514572471','0','0','0');");
E_D("replace into `ecs_delivery_order` values('24','20171230133977304','2017123014155','219','','1514573061','7','申通快递','28','dingdan','孙杰','柳泉路','1','22','299','2465','','','','18653317111','','','','等待所有商品备齐后再发','0.00','15.00','1514583566','0','0','0');");
E_D("replace into `ecs_delivery_order` values('25','20171230165379290','2017123081937','218',NULL,'1514573027','7','申通快递','28','dingdan','孙杰','柳泉路','1','22','299','2465','','','','18653317111','','','','等待所有商品备齐后再发','0.00','15.00','1514595212','0','2','0');");
E_D("replace into `ecs_delivery_order` values('26','20171230165568856','2017123061745','214',NULL,'1514572590','1','上门取货','23','dingdan','淄博','果里','1','22','299','2470','','','','12345567455','','','','等待所有商品备齐后再发','0.00','0.00','1514595316','0','2','0');");
E_D("replace into `ecs_delivery_order` values('27','20171231084922222','2017123198122','227','','1514652426','1','上门取货','33','dingdan','王克涛','我现在','1','4','57','558','','','','13864474431','','','','等待所有商品备齐后再发','0.00','0.00','1514652579','0','0','0');");
E_D("replace into `ecs_delivery_order` values('28','20171231085794096','2017123116950','228','','1514652935','1','上门取货','33','dingdan','王克涛','我现在','1','4','57','558','','','','13864474431','','','','等待所有商品备齐后再发','0.00','0.00','1514653051','0','0','0');");
E_D("replace into `ecs_delivery_order` values('29','20171231093590137','2017123148470','234','','1514654982','7','申通快递','35','dingdan','张娜','外环','1','2','52','503','','','','123','','','','等待所有商品备齐后再发','0.00','15.00','1514655311','0','0','0');");
E_D("replace into `ecs_delivery_order` values('30','20171231093573908','2017123136672','238','','1514655285','3','顺丰速运','38','dingdan','魏','汇丰石化','1','22','299','2470','','','','13754776868','','','','等待所有商品备齐后再发','0.00','15.00','1514655350','0','0','0');");
E_D("replace into `ecs_delivery_order` values('31','20171231100156254','2017123156143','239','','1514655354','3','顺丰速运','38','dingdan','魏','汇丰石化','1','22','299','2470','','','','13754776868','','','','等待所有商品备齐后再发','0.00','15.00','1514656883','0','0','0');");
E_D("replace into `ecs_delivery_order` values('32','20171231100699051','2017123142578','254','','1514657011','1','上门取货','26','dingdan','李嘿嘿','暑假集训班南山南','1','22','299','2465','','','','15866423552','','','','等待所有商品备齐后再发','0.00','0.00','1514657204','0','0','0');");
E_D("replace into `ecs_delivery_order` values('33','20171231100859156','2017123133740','255','','1514657091','1','上门取货','26','dingdan','李嘿嘿','暑假集训班南山南','1','22','299','2465','','','','15866423552','','','','等待所有商品备齐后再发','0.00','0.00','1514657335','0','0','0');");
E_D("replace into `ecs_delivery_order` values('34','20171231101007261','2017123157145','240','','1514655475','3','顺丰速运','36','dingdan','丁铭','阳光花园南区','1','22','299','2465','','','','13953368676','','','','等待所有商品备齐后再发','0.00','15.00','1514657401','0','0','0');");
E_D("replace into `ecs_delivery_order` values('35','20171231101014872','2017123104139','247','','1514655938','1','上门取货','35','dingdan','张娜','外环','1','2','52','503','','','','123','','','','等待所有商品备齐后再发','0.00','0.00','1514657442','0','0','0');");
E_D("replace into `ecs_delivery_order` values('36','20171231101515077','2017123151463','256','','1514657672','1','上门取货','33','dingdan','王克涛','我现在','1','4','57','558','','','','13864474431','','','','等待所有商品备齐后再发','0.00','0.00','1514657728','0','0','0');");
E_D("replace into `ecs_delivery_order` values('37','20171231101735842','2017123135708','251','','1514656934','1','上门取货','26','dingdan','李嘿嘿','暑假集训班南山南','1','22','299','2465','','','','15866423552','','','','等待所有商品备齐后再发','0.00','0.00','1514657853','0','0','0');");
E_D("replace into `ecs_delivery_order` values('38','20171231101934408','2017123124110','244','','1514655834','1','上门取货','35','dingdan','张娜','外环','1','2','52','503','','','','123','','','','等待所有商品备齐后再发','0.00','0.00','1514657945','0','0','0');");
E_D("replace into `ecs_delivery_order` values('39','20171231102099794','2017123157188','253',NULL,'1514656979','3','顺丰速运','38','dingdan','魏','汇丰石化','1','22','299','2470','','','','13754776868','','','','等待所有商品备齐后再发','0.00','15.00','1514658052','0','2','0');");
E_D("replace into `ecs_delivery_order` values('40','20171231102472653','2017123187079','259','','1514658239','1','上门取货','33','dingdan','王克涛','我现在','1','4','57','558','','','','13864474431','','','','等待所有商品备齐后再发','0.00','0.00','1514658285','0','0','0');");
E_D("replace into `ecs_delivery_order` values('41','20180101101718972','2018010187073','261','','1514744188','5','门店自提','40','admin','12312','sadfdsfds','1','2','52','500','','','','13954386521','','','','等待所有商品备齐后再发','0.00','0.00','1514744230','0','0','0');");
E_D("replace into `ecs_delivery_order` values('42','20180102085501503','2018010231733','328','','1514825653','1','上门取货','36','dingdan','丁铭','阳光花园南区','1','22','299','2465','','','','13953368676','','','','等待所有商品备齐后再发','0.00','0.00','1514825747','0','0','0');");
E_D("replace into `ecs_delivery_order` values('43','20180102085785098','2018010273346','331','','1514825685','1','上门取货','35','dingdan','张娜','外环','1','2','52','503','','','','123','','','','等待所有商品备齐后再发','0.00','0.00','1514825871','0','0','0');");
E_D("replace into `ecs_delivery_order` values('44','20180102091374264','2018010224070','355','','1514826799','1','上门取货','34','dingdan','呃呃','啊啊啊','1','4','55','540','','','','4563','','','','等待所有商品备齐后再发','0.00','0.00','1514826824','0','0','0');");
E_D("replace into `ecs_delivery_order` values('45','20180102092643116','2018010238353','356',NULL,'1514827117','1','上门取货','34','admin','呃呃','啊啊啊','1','4','55','540','','','','4563','','','','等待所有商品备齐后再发','0.00','0.00','1514827598','0','2','0');");

require("../../inc/footer.php");
?>
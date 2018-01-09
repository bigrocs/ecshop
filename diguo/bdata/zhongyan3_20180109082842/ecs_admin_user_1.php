<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_user`;");
E_C("CREATE TABLE `ecs_admin_user` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `ec_salt` varchar(10) DEFAULT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `nav_list` text NOT NULL,
  `lang_type` varchar(50) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `suppliers_id` smallint(5) unsigned DEFAULT '0',
  `todolist` longtext,
  `role_id` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_user` values('1','admin','763191200@qq.com','9fbdb39ced638d0f60b54ee9a08ce156','7424','1447698148','1515428802','58.59.120.50','all','商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list,会员列表|users.php?act=list,商店设置|shop_config.php?act=list_edit','','0','0',NULL,NULL);");
E_D("replace into `ecs_admin_user` values('7','sunaifen','18653317111@163.com','e7020f1973b0dca790e1f08653cedde3','420','1514830888','1514841781','27.195.245.169','order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view','商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list,会员列表|users.php?act=list,商店设置|shop_config.php?act=list_edit','','0','0',NULL,'0');");
E_D("replace into `ecs_admin_user` values('3','chanpin','chanping@qq.com','c031b72ae5f79c3ad2791b7e594b3e2f','5130','1514583252','1515100353','218.56.102.58','goods_manage,remove_back,cat_manage,cat_drop,attr_manage,brand_manage,goods_type,goods_auto','商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list,会员列表|users.php?act=list,商店设置|shop_config.php?act=list_edit','','0','0',NULL,'0');");
E_D("replace into `ecs_admin_user` values('4','dingdan','dingdan@qq.com','28d954e37a61643067dd3bd88b7d0502','4295','1514583337','1514826726','218.56.102.58','order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view','商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list,会员列表|users.php?act=list,商店设置|shop_config.php?act=list_edit','','0','0',NULL,'0');");
E_D("replace into `ecs_admin_user` values('5','caiwu','caiwu@qq.com','c51cd8e64b0aeb778364765013df9ebe',NULL,'1514583415','0','','','商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list,会员列表|users.php?act=list,商店设置|shop_config.php?act=list_edit','','0','0',NULL,'0');");
E_D("replace into `ecs_admin_user` values('6','chongzhi','cz@qq.com','e5adf6d028b0baafb53adaca8ea36f07','2093','1514583478','1514828971','218.56.102.58','surplus_manage,account_manage','商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list,会员列表|users.php?act=list,商店设置|shop_config.php?act=list_edit','','0','0',NULL,'0');");

require("../../inc/footer.php");
?>
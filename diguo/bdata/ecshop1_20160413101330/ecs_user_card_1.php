<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_card`;");
E_C("CREATE TABLE `ecs_user_card` (
  `id` int(20) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `ct_id` int(10) unsigned NOT NULL default '0',
  `card_level` varchar(60) NOT NULL default '',
  `card_no` varchar(60) NOT NULL default '',
  `card_pass` varchar(60) NOT NULL default '',
  `card_status` tinyint(1) unsigned NOT NULL default '0',
  `send_type` varchar(60) NOT NULL default '',
  `add_time` int(10) unsigned NOT NULL default '0',
  `bind_time` int(10) unsigned NOT NULL default '0',
  `user_money` decimal(10,2) NOT NULL default '0.00',
  `pay_points` int(10) unsigned NOT NULL default '0',
  `rank_points` int(10) unsigned NOT NULL default '0',
  `true_name` varchar(60) NOT NULL default '',
  `address` varchar(255) NOT NULL default '',
  `mobile` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `sex` varchar(10) NOT NULL default '',
  `is_show` int(1) unsigned NOT NULL default '0',
  `des` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `card_no` (`card_no`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2101 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>
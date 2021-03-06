<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_prize`;");
E_C("CREATE TABLE `ecs_weixin_prize` (
  `pid` int(4) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `fun` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `num` int(2) unsigned NOT NULL,
  `count` int(8) NOT NULL,
  `loop` int(3) NOT NULL,
  `starttime` int(10) NOT NULL,
  `endtime` int(10) NOT NULL,
  `dateline` int(10) NOT NULL,
  `point` int(10) default NULL,
  PRIMARY KEY  (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_prize` values('1','正在测试的','egg','1','1','210','1','1394899200','1460649600','1420996251','10');");
E_D("replace into `ecs_weixin_prize` values('2','大转盘','dzp','1','10','477','1','1420732800','1486742400','1429164887','3');");

require("../../inc/footer.php");
?>
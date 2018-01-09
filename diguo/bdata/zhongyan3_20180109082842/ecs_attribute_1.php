<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_attribute`;");
E_C("CREATE TABLE `ecs_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_input_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_values` text NOT NULL,
  `attr_index` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_linked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_group` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`attr_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=283 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_attribute` values('1','1','作者','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('2','1','出版社','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('3','1','图书书号/ISBN','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('4','1','出版日期','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('5','1','开本','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('6','1','图书页数','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('7','1','图书装订','1','0','平装\r\n黑白','0','0','0','0');");
E_D("replace into `ecs_attribute` values('8','1','图书规格','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('9','1','版次','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('10','1','印张','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('11','1','字数','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('12','1','所属分类','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('13','2','中文片名','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('14','2','英文片名','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('15','2','商品别名','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('16','2','介质/格式','1','0','HDCD\r\nDTS\r\nDVD\r\nDVD9\r\nVCD\r\nCD\r\nTAPE\r\nLP','0','0','0','0');");
E_D("replace into `ecs_attribute` values('17','2','片装数','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('18','2','国家地区','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('19','2','语种','1','0','中文\r\n英文\r\n法文\r\n西班牙文','0','0','0','0');");
E_D("replace into `ecs_attribute` values('20','2','导演/指挥','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('21','2','主唱','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('22','2','所属类别','1','0','古典\r\n流行\r\n摇滚\r\n乡村\r\n民谣\r\n爵士\r\n蓝调\r\n电子\r\n舞曲\r\n国乐\r\n民族\r\n怀旧\r\n经典\r\n人声\r\n合唱\r\n发烧\r\n试音\r\n儿童\r\n胎教\r\n轻音乐\r\n世界音乐\r\n庆典音乐\r\n影视音乐\r\n新世纪音乐\r\n大自然音乐','0','0','0','0');");
E_D("replace into `ecs_attribute` values('23','2','长度','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('24','2','歌词','1','0','有\r\n无','0','0','0','0');");
E_D("replace into `ecs_attribute` values('25','2','碟片代码','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('26','2','ISRC码','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('27','2','发行公司','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('28','2','出版','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('29','2','出版号','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('30','2','引进号','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('31','2','版权号','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('32','3','中文片名','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('33','3','英文片名','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('34','3','商品别名','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('35','3','介质/格式','1','0','HDCD\r\nDTS\r\nDVD\r\nDVD9\r\nVCD','0','0','0','0');");
E_D("replace into `ecs_attribute` values('36','3','碟片类型','1','0','单面\r\n双层','0','0','0','0');");
E_D("replace into `ecs_attribute` values('37','3','片装数','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('38','3','国家地区','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('39','3','语种/配音','1','0','中文\r\n英文\r\n法文\r\n西班牙文','0','0','0','0');");
E_D("replace into `ecs_attribute` values('40','3','字幕','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('41','3','色彩','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('42','3','中文字幕','1','0','有\r\n无','0','0','0','0');");
E_D("replace into `ecs_attribute` values('43','3','导演','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('44','3','表演者','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('45','3','所属类别','1','0','爱情\r\n偶像\r\n生活\r\n社会\r\n科幻\r\n神话\r\n武侠\r\n动作\r\n惊险\r\n恐怖\r\n传奇\r\n人物\r\n侦探\r\n警匪\r\n历史\r\n军事\r\n戏剧\r\n舞台\r\n经典\r\n名著\r\n喜剧\r\n情景\r\n动漫\r\n卡通\r\n儿童\r\n伦理激情','0','0','0','0');");
E_D("replace into `ecs_attribute` values('46','3','年份','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('47','3','音频格式','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('48','3','区码','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('49','3','碟片代码','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('50','3','ISRC码','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('51','3','发行公司','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('52','3','出版 ','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('53','3','出版号','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('54','3','引进号','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('55','3','版权号','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('56','4','网络制式','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('57','4','支持频率/网络频率','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('58','4','尺寸体积','1','0','   ','0','0','0','0');");
E_D("replace into `ecs_attribute` values('59','4','外观样式/手机类型','1','0','翻盖\r\n滑盖\r\n直板\r\n折叠\r\n手写','0','0','0','0');");
E_D("replace into `ecs_attribute` values('60','4','主屏参数/内屏参数','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('61','4','副屏参数/外屏参数','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('62','4','清晰度','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('63','4','色数/灰度','1','0','   ','0','0','0','0');");
E_D("replace into `ecs_attribute` values('64','4','长度','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('65','4','宽度','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('66','4','厚度','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('67','4','屏幕材质','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('68','4','内存容量','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('69','4','操作系统','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('70','4','通话时间','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('71','4','待机时间','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('72','4','标准配置','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('73','4','WAP上网','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('74','4','数据业务','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('75','4','天线位置','1','0','内置\r\n外置','0','0','0','0');");
E_D("replace into `ecs_attribute` values('76','4','随机配件','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('77','4','铃声','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('78','4','摄像头','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('79','4','彩信/彩e','1','0','支持\r\n不支持','0','0','0','0');");
E_D("replace into `ecs_attribute` values('80','4','红外/蓝牙','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('81','4','价格等级','1','0','高价机\r\n中价机\r\n低价机','0','0','0','0');");
E_D("replace into `ecs_attribute` values('82','5','型号','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('83','5','详细规格','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('84','5','笔记本尺寸','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('85','5','处理器类型','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('86','5','处理器最高主频','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('87','5','二级缓存','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('88','5','系统总线','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('89','5','主板芯片组','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('90','5','内存容量','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('91','5','内存类型','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('92','5','硬盘','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('93','5','屏幕尺寸','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('94','5','显示芯片','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('95','5','标称频率','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('96','5','显卡显存','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('97','5','显卡类型','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('98','5','光驱类型','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('99','5','电池容量','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('100','5','其他配置','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('101','6','类型','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('102','6','最大像素/总像素  ','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('103','6','有效像素','1','0','  ','0','0','0','0');");
E_D("replace into `ecs_attribute` values('104','6','光学变焦倍数','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('105','6','数字变焦倍数','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('106','6','操作模式','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('107','6','显示屏类型','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('108','6','显示屏尺寸','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('109','6','感光器件','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('110','6','感光器件尺寸','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('111','6','最高分辨率','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('112','6','图像分辨率','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('113','6','传感器类型','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('114','6','传感器尺寸','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('115','6','镜头','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('116','6','光圈','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('117','6','焦距','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('118','6','旋转液晶屏','1','0','支持\r\n不支持','0','0','0','0');");
E_D("replace into `ecs_attribute` values('119','6','存储介质','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('120','6','存储卡','1','0','  记录媒体\r\n存储卡容量','0','0','0','0');");
E_D("replace into `ecs_attribute` values('121','6','影像格式','1','0','    静像\r\n动画','0','0','0','0');");
E_D("replace into `ecs_attribute` values('122','6','曝光控制','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('123','6','曝光模式','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('124','6','曝光补偿','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('125','6','白平衡','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('126','6','连拍','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('127','6','快门速度','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('128','6','闪光灯','1','0','内置\r\n外置','0','0','0','0');");
E_D("replace into `ecs_attribute` values('129','6','拍摄范围','1','0','  ','0','0','0','0');");
E_D("replace into `ecs_attribute` values('130','6','自拍定时器','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('131','6','ISO感光度','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('132','6','测光模式','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('133','6','场景模式','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('134','6','短片拍摄','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('135','6','外接接口','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('136','6','电源','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('137','6','电池使用时间','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('138','6','外形尺寸','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('139','6','标配软件','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('140','6','标准配件','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('141','6','兼容操作系统','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('142','7','编号','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('143','7','类型','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('144','7','外型尺寸','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('145','7','最大像素数','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('146','7','光学变焦倍数','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('147','7','数字变焦倍数','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('148','7','显示屏尺寸及类型','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('149','7','感光器件','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('150','7','感光器件尺寸','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('151','7','感光器件数量','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('152','7','像素范围','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('153','7','传感器数量','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('154','7','传感器尺寸','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('155','7','水平清晰度','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('156','7','取景器','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('157','7','数码效果','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('158','7','镜头性能','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('159','7','对焦方式','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('160','7','曝光控制','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('161','7','其他接口','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('162','7','随机存储','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('163','7','电池类型','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('164','7','电池供电时间','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('165','8','产地','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('166','8','产品规格/容量','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('167','8','主要原料','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('168','8','所属类别','1','0','彩妆\r\n化妆工具\r\n护肤品\r\n香水','0','0','0','0');");
E_D("replace into `ecs_attribute` values('169','8','使用部位','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('170','8','适合肤质','1','0','油性\r\n中性\r\n干性','0','0','0','0');");
E_D("replace into `ecs_attribute` values('171','8','适用人群','1','0','女性\r\n男性','0','0','0','0');");
E_D("replace into `ecs_attribute` values('172','9','上市日期','1','0','2008年01月\r\n2008年02月\r\n2008年03月\r\n2008年04月\r\n2008年05月\r\n2008年06月\r\n2008年07月\r\n2008年08月\r\n2008年09月\r\n2008年10月\r\n2008年11月\r\n2008年12月\r\n2007年01月\r\n2007年02月\r\n2007年03月\r\n2007年04月\r\n2007年05月\r\n2007年06月\r\n2007年07月\r\n2007年08月\r\n2007年09月\r\n2007年10月\r\n2007年11月\r\n2007年12月','1','0','0','0');");
E_D("replace into `ecs_attribute` values('173','9','手机制式','1','0','GSM,850,900,1800,1900\r\nGSM,900,1800,1900,2100\r\nCDMA\r\n双模（GSM,900,1800,CDMA 1X）\r\n3G(GSM,900,1800,1900,TD-SCDMA )','1','1','1','0');");
E_D("replace into `ecs_attribute` values('174','9','理论通话时间','0','0','','0','2','0','0');");
E_D("replace into `ecs_attribute` values('175','9','理论待机时间','0','0','','0','3','0','0');");
E_D("replace into `ecs_attribute` values('176','9','铃声','0','0','','0','4','0','0');");
E_D("replace into `ecs_attribute` values('177','9','铃声格式','0','0','','0','5','0','0');");
E_D("replace into `ecs_attribute` values('178','9','外观样式','1','0','翻盖\r\n滑盖\r\n直板\r\n折叠','1','6','1','0');");
E_D("replace into `ecs_attribute` values('179','9','中文短消息','0','0','','0','7','0','0');");
E_D("replace into `ecs_attribute` values('180','9','存储卡格式','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('181','9','内存容量','0','0','','2','0','0','0');");
E_D("replace into `ecs_attribute` values('182','9','操作系统','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('183','9','K-JAVA','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('184','9','尺寸体积','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('185','9','颜色','1','1','黑色\r\n白色\r\n蓝色\r\n金色\r\n粉色\r\n银色\r\n灰色\r\n深李色\r\n黑红色\r\n黑蓝色\r\n白紫色','1','0','0','0');");
E_D("replace into `ecs_attribute` values('186','9','屏幕颜色','1','0','1600万\r\n262144万','1','0','1','1');");
E_D("replace into `ecs_attribute` values('187','9','屏幕材质','1','0','TFT','0','0','0','1');");
E_D("replace into `ecs_attribute` values('188','9','屏幕分辨率','1','0','320×240 像素\r\n240×400 像素\r\n240×320 像素\r\n176x220 像素','1','0','0','1');");
E_D("replace into `ecs_attribute` values('189','9','屏幕大小','0','0','','0','0','0','1');");
E_D("replace into `ecs_attribute` values('190','9','中文输入法','0','0','','0','0','0','2');");
E_D("replace into `ecs_attribute` values('191','9','情景模式','0','0','','0','0','0','2');");
E_D("replace into `ecs_attribute` values('192','9','网络链接','0','0','','0','0','0','2');");
E_D("replace into `ecs_attribute` values('193','9','蓝牙接口','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('194','9','数据线接口','0','0','','0','0','0','2');");
E_D("replace into `ecs_attribute` values('195','9','电子邮件','0','0','','0','0','0','2');");
E_D("replace into `ecs_attribute` values('196','9','闹钟','0','0','','0','35','0','4');");
E_D("replace into `ecs_attribute` values('197','9','办公功能','0','0','','0','0','0','4');");
E_D("replace into `ecs_attribute` values('198','9','数码相机','0','0','','1','0','0','3');");
E_D("replace into `ecs_attribute` values('199','9','像素','0','0','','0','0','0','3');");
E_D("replace into `ecs_attribute` values('200','9','传感器','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('201','9','变焦模式','0','0','','0','0','0','3');");
E_D("replace into `ecs_attribute` values('202','9','视频拍摄','0','0','','0','0','0','3');");
E_D("replace into `ecs_attribute` values('203','9','MP3播放器','0','0','','0','0','0','3');");
E_D("replace into `ecs_attribute` values('204','9','视频播放','0','0','','0','0','0','3');");
E_D("replace into `ecs_attribute` values('205','9','CPU频率','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('206','9','收音机','0','0','','0','0','0','3');");
E_D("replace into `ecs_attribute` values('207','9','耳机接口','0','0','','0','0','0','3');");
E_D("replace into `ecs_attribute` values('208','9','闪光灯','0','0','','0','0','0','3');");
E_D("replace into `ecs_attribute` values('209','9','浏览器','0','0','','0','0','0','2');");
E_D("replace into `ecs_attribute` values('210','9','配件','1','2','线控耳机\r\n蓝牙耳机\r\n数据线','0','0','0','0');");
E_D("replace into `ecs_attribute` values('211','10','重量','1','1','500克\r\n1000克\r\n2000克','0','0','0','0');");
E_D("replace into `ecs_attribute` values('213','10','口味','1','1','牛肉\r\n面粉\r\n鸡肉','0','0','0','0');");
E_D("replace into `ecs_attribute` values('214','10','外观','1','1','红色\r\n绿色\r\n蓝色','0','0','0','0');");
E_D("replace into `ecs_attribute` values('215','10','款式','1','1','时尚款\r\n经典款\r\n出众款','0','0','0','0');");
E_D("replace into `ecs_attribute` values('216','12','容量','1','1','900ML\r\n1L\r\n1.8L\r\n1.8L*2\r\n2.5L\r\n2.5L*2\r\n3L\r\n3L*2\r\n4L\r\n4.5L\r\n5L\r\n6.18L','0','0','0','0');");
E_D("replace into `ecs_attribute` values('217','13','容量','1','1','3L\r\n5L','0','0','0','0');");
E_D("replace into `ecs_attribute` values('218','14','容量','1','1','1L\r\n1.8L\r\n1.8L*2\r\n4L\r\n5L','0','0','0','0');");
E_D("replace into `ecs_attribute` values('219','15','容量','1','1','900ML\r\n1.8L\r\n1.8L*2\r\n3L\r\n3L*2\r\n5L','0','0','0','0');");
E_D("replace into `ecs_attribute` values('220','16','容量','1','1','1L\r\n2.5L\r\n2.5L*2\r\n1.8L\r\n1.8L*2\r\n4L\r\n4.5L\r\n5L\r\n6.18L','0','0','0','0');");
E_D("replace into `ecs_attribute` values('221','17','洗发水','1','1','100ML\r\n200ML\r\n300ML\r\n400ML','0','0','0','0');");
E_D("replace into `ecs_attribute` values('222','19','纳爱斯香皂','1','1','125g沁爽柠檬\r\n125g怡人清香\r\n125g健康益肤 洁白清香\r\n125g保湿润肤 舒爽留香\r\n125g珍珠香皂(蓝)\r\n125g珍珠香皂(绿)\r\n125g珍珠香皂(红)\r\n125g特惠3块装（沁爽柠檬）','0','0','0','0');");
E_D("replace into `ecs_attribute` values('223','17','100年润发强韧养发洗发露N3','1','1','7g\r\n200g\r\n400g\r\n750g\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('224','21','100年润发水润丝滑洗发露N3','1','1','200g\r\n400g\r\n750g\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('225','22','120g西丽柠檬香皂','1','1','牛奶杏仁味\r\n葡萄籽味\r\n锦葵熏衣草味\r\n柠檬味\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('226','23','100年润发深度修护洗发露N3','1','1','200g\r\n400g\r\n750g\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('227','23','100年润发深度修护洗发露','1','1','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('228','24','雕牌透明皂N1','1','1','102g\r\n176g\r\n202g\r\n228g\r\n242g\r\n102g*6\r\n202g*3\r\n228g*2','0','0','0','0');");
E_D("replace into `ecs_attribute` values('229','25','100年润发魅黑闪亮洗发露N3','1','1','200g\r\n400g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('230','26','100年润发净萃控油洗发露N3','1','1','200g\r\n400g\r\n750g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('231','27','100年润发柔亮去屑洗发露N3','1','1','7g\r\n200g\r\n400g\r\n750g\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('232','28','100年润发清新去屑洗发露N3','1','1','200g\r\n400g\r\n750g\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('233','29','200g100年润发滋润去屑洗发露N3','1','1','200g\r\n400g\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('234','30','100年润发沁凉去屑洗发露N3','1','1','200g\r\n400g\r\n750g\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('235','31','100年润发男士调理洗发露（美洲青柠控油）','1','1','200g\r\n400g\r\n750g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('236','32','100年润发男士调理洗发露（澳洲茶树去屑）','1','1','7g\r\n200g\r\n400g\r\n750g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('237','33','100年润发男士调理洗发露（竹炭净爽（酷凉））','1','1','200g\r\n400g\r\n750g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('238','34','100年润发男士调理洗发露（强根防掉发）','1','1','200g\r\n400g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('239','35','100年润发男士薄荷活力运动洗发露','1','1','200g\r\n400g\r\n750g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('240','36','雕牌增白皂','1','1','176g\r\n202g\r\n242g\r\n242g*2\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('241','37','100年润发男士深海海藻水润洗发露','1','1','200g\r\n400g\r\n750g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('242','38','100年润发男士北美雪松止痒洗发露','1','1','200g\r\n400g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('243','39','雕牌除菌洗衣皂','1','1','176g\r\n176g*2\r\n202g\r\n202g*2\r\n242g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('244','40','100年润发强韧养发精华素N3','1','1','200g\r\n400g\r\n750g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('245','41','100年润发水润丝滑精华素N3','1','1','200g\r\n400g\r\n750g\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('246','42','100年润发深度修护精华素N3','1','1','200g\r\n400g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('247','43','100年润发柔亮去屑精华素N3','1','1','200g\r\n400g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('248','44','100年润发强韧养发发膜N3','1','1','200g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('249','45','100年润发水润丝滑发膜N3','1','1','200g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('250','46','西亚斯浪漫邂逅香浴露','1','1','10g\r\n400g\r\n700g\r\n1kg','0','0','0','0');");
E_D("replace into `ecs_attribute` values('251','47','西亚斯真我女王香浴露','1','1','10g\r\n400g\r\n700g\r\n1kg','0','0','0','0');");
E_D("replace into `ecs_attribute` values('252','48','西亚斯花漾甜心香浴露','1','1','400g\r\n700g\r\n1kg','0','0','0','0');");
E_D("replace into `ecs_attribute` values('253','49','西亚斯摩登魅香香浴露','1','1','400g\r\n700g\r\n1kg','0','0','0','0');");
E_D("replace into `ecs_attribute` values('254','50','纳爱斯齿清海洋牙膏N1','1','1','100g\r\n165g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('255','51','超能柠檬草洗衣皂','1','1','150g\r\n260g\r\n200g\r\n226g\r\n226g*2','0','0','0','0');");
E_D("replace into `ecs_attribute` values('256','52','纳爱斯防蛀修护牙膏N1','1','1','105g\r\n160g\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('257','53','纳爱斯营养维E牙膏N1','1','1','95g\r\n160g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('258','54','纳爱斯营养维C鲜橙薄荷牙膏N1','1','1','95g\r\n160g\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('259','55','纳爱斯钻闪白牙膏N1','1','1','95g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('260','56','超能椰果洗衣皂','1','1','200g\r\n260g\r\n226g\r\n226g*2','0','0','0','0');");
E_D("replace into `ecs_attribute` values('261','57','纳爱斯去渍快白牙膏N1','1','1','95g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('262','58','超能棕榈','1','1','200g\r\n226g\r\n260g\r\n226g*2','0','0','0','0');");
E_D("replace into `ecs_attribute` values('263','59','超能内衣专用皂','1','1','162g\r\n222g\r\n202g*2','0','0','0','0');");
E_D("replace into `ecs_attribute` values('264','60','雕牌超效加酶洗衣粉N3','1','1','252g\r\n508g\r\n560g\r\n1.28kg\r\n1.638kg\r\n2.438kg\r\n2.438kg+200g\r\n2.68kg\r\n2.68kg+200g\r\n4kg','0','0','0','0');");
E_D("replace into `ecs_attribute` values('265','61','雕牌速溶快洁无磷洗衣粉N3','1','1','508g\r\n560g\r\n1.08kg\r\n1.8kg\r\n3kg','0','0','0','0');");
E_D("replace into `ecs_attribute` values('266','62','雕牌除菌无磷洗衣粉','1','1','508g\r\n1.03kg\r\n1.55kg\r\n2.08kg\r\n3kg','0','0','0','0');");
E_D("replace into `ecs_attribute` values('267','63','超能去渍365洗衣粉飘香(无磷)','1','1','320g\r\n600g\r\n1800g\r\n1.008kg','0','0','0','0');");
E_D("replace into `ecs_attribute` values('268','64','雕牌天然皂粉(家庭装)','1','1','358g\r\n628g\r\n1600g\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('269','65','超能天然皂粉(馨香炫彩)','1','1','360g\r\n680g\r\n1.5kg\r\n','0','0','0','0');");
E_D("replace into `ecs_attribute` values('270','67','纳爱斯柠檬绿茶牙膏N1','1','1','90g\r\n160g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('271','68','超能天然皂粉(MES绿色活性去污)','1','1','668g\r\n1.028g\r\n1.328g\r\n1.688g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('272','69','超能浓缩天然皂粉','1','1','500g\r\n800g\r\n1.5kg\r\n900g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('273','70','纳爱斯健齿清新牙膏N1','1','1','95g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('274','71','雕牌高效洗洁精','1','1','500g\r\n1618g\r\n2000g\r\n5000g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('275','72','纳爱斯齿乐脱敏牙膏N1','1','1','95g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('276','73','纳爱斯鲜浓果味牙膏N1','1','1','120g\r\n165g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('277','74','雕牌生姜洗洁精','1','1','500g\r\n1000g\r\n2000g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('278','75','纳爱斯清凉菊花牙膏N1','1','1','120g\r\n180g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('279','76','纳爱斯天然盐牙膏N1','1','1','110g\r\n160g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('280','77','纳爱斯健爽白牙膏(专效防敏感)','1','1','110g\r\n150g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('281','78','纳爱斯健爽白牙膏(专效清新)','1','1','120g\r\n160g','0','0','0','0');");
E_D("replace into `ecs_attribute` values('282','79','纳爱斯健爽白牙膏(专效美白)','1','1','120g\r\n160g','0','0','0','0');");

require("../../inc/footer.php");
?>
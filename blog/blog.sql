-- MySQL dump 10.13  Distrib 5.5.24, for Win32 (x86)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	5.5.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `art_tag`
--

DROP TABLE IF EXISTS `art_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `art_tag` (
  `a_id` int(10) unsigned DEFAULT NULL,
  `t_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `art_tag`
--

LOCK TABLES `art_tag` WRITE;
/*!40000 ALTER TABLE `art_tag` DISABLE KEYS */;
INSERT INTO `art_tag` VALUES (67,1),(67,2),(67,2),(68,2),(68,2),(68,2),(69,2),(69,2),(69,2),(70,2),(70,2),(70,2),(71,2),(71,2),(71,2);
/*!40000 ALTER TABLE `art_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `a_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `a_title` varchar(32) NOT NULL DEFAULT '' COMMENT '文章标题',
  `a_desc` varchar(128) NOT NULL DEFAULT '' COMMENT '文章描述',
  `a_content` text NOT NULL COMMENT '文章内容',
  `a_author` int(10) unsigned DEFAULT NULL COMMENT '文章作者',
  `a_time` int(10) unsigned DEFAULT NULL COMMENT '创建时间',
  `a_click` int(10) unsigned DEFAULT '0' COMMENT '浏览次数',
  `a_like` int(10) unsigned DEFAULT '0' COMMENT '点赞',
  `a_comment` int(10) unsigned DEFAULT '0' COMMENT '评论数',
  `c_id` int(10) unsigned DEFAULT NULL COMMENT '所属分类',
  `a_img` varchar(128) DEFAULT NULL COMMENT '图片',
  `a_thumber` varchar(128) DEFAULT NULL COMMENT '缩略图',
  `a_water` varchar(128) DEFAULT NULL COMMENT '水印图',
  `a_recommend` tinyint(3) unsigned DEFAULT '0',
  `tags` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (48,'第一篇','sdfgds','sfdgs',1,1542684701,119,0,0,1,'f:/code/blog/App/Upload/Original/20181120113141LoJbVS.jpg','thumb_20181120113141LoJbVS.jpg',NULL,1,NULL),(51,'犯错了怎么办','犯错了怎么办随便您怎么办被哈哈哈哈哈哈哈哈啊沙发沙发士大夫萨芬大家撒黑方框很快就进啊士大夫看见沙发那说明你的愤怒建安费警方喀什酱豆腐卡卡老师公交卡就是离开看来大家放开了健身卡官商勾结加快了大街附近ask来得及老咔叽度来讲艾弗森骷髅精灵','犯错了怎么办随便您怎么办被哈哈哈哈哈哈哈哈啊沙发沙发士大夫萨芬大家撒黑方框很快就进啊士大夫看见沙发那说明你的愤怒建安费警方喀什酱豆腐课件',1,1542700469,27,0,0,1,'f:/code/blog/App/Upload/Original/20181120155429jDBVzd.jpg','thumb_20181120155429jDBVzd.jpg',NULL,1,NULL),(52,'再见你好','再见你好','<p>再见你好<img src=\"/App/Upload/editor/20181120/1542703755.jpg\" title=\"1542703755.jpg\" alt=\"20181119165225qgPhYO.jpg\"/></p>',1,1542703765,19,0,0,1,'f:/code/blog/App/Upload/Original/20181120164925SoOeAh.jpg','thumb_20181120164925SoOeAh.jpg',NULL,1,NULL),(53,'年','年龄，年轻，千奇百怪','<p>年龄，年轻，千奇百怪</p>',1,1542704548,12,0,0,1,'f:/code/blog/App/Upload/Original/20181120170228mLxOHr.jpg','thumb_20181120170228mLxOHr.jpg',NULL,1,NULL),(69,'第一篇','ewqq','<p>qwrqe</p>',1,1542812081,10,0,0,1,'f:/code/blog/App/Upload/Original/20181121225441HGZTvl.jpg','thumb_20181121225441HGZTvl.jpg',NULL,0,'关键字,a,b'),(70,'第一篇','ewqq','<p>qwrqe</p>',1,1542812109,16,0,0,1,'f:/code/blog/App/Upload/Original/20181121225509HVHWAu.jpg','thumb_20181121225509HVHWAu.jpg',NULL,0,'关键字,a,b'),(71,'dsf','sdfgsd','<p>fsgsfs</p>',1,1542812143,11,0,0,1,'f:/code/blog/App/Upload/Original/20181121225543BBejii.jpeg','thumb_20181121225543BBejii.jpeg',NULL,1,'关键字,b,d');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `c_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `c_name` varchar(32) NOT NULL DEFAULT '' COMMENT '分类名',
  `c_desc` varchar(32) NOT NULL DEFAULT '' COMMENT '分类描述',
  `c_sort` tinyint(3) unsigned NOT NULL DEFAULT '50' COMMENT '排序',
  `c_time` int(10) unsigned DEFAULT NULL COMMENT '创建时间',
  `c_pid` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'生活纪实','好好生活',90,NULL,0),(2,'旅游','世界那么大,我想去看看',91,NULL,1),(3,'美食','舌尖中的中国',92,NULL,1),(4,'购物','买买买',93,NULL,1);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mat`
--

DROP TABLE IF EXISTS `mat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mat` (
  `matchID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hostTeamID` int(10) unsigned NOT NULL,
  `guestTeamID` int(10) unsigned NOT NULL,
  `matchResult` varchar(20) NOT NULL,
  `matchTime` date NOT NULL,
  PRIMARY KEY (`matchID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mat`
--

LOCK TABLES `mat` WRITE;
/*!40000 ALTER TABLE `mat` DISABLE KEYS */;
INSERT INTO `mat` VALUES (1,1,2,'3:1','2006-06-15'),(2,3,4,'2:2','2006-06-28'),(3,5,6,'0:2','2006-07-10'),(4,7,8,'5:3','2006-05-30');
/*!40000 ALTER TABLE `mat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reply` (
  `r_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `r_content` varchar(256) NOT NULL DEFAULT '' COMMENT '评论',
  `r_time` int(10) unsigned DEFAULT NULL COMMENT '评论时间',
  `u_id` int(10) unsigned DEFAULT NULL COMMENT '回复人',
  `a_id` int(10) unsigned DEFAULT NULL COMMENT '所评论的文章',
  `r_pid` int(10) unsigned DEFAULT NULL COMMENT '对评论的回复',
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reply`
--

LOCK TABLES `reply` WRITE;
/*!40000 ALTER TABLE `reply` DISABLE KEYS */;
INSERT INTO `reply` VALUES (4,'写的真好',1543063741,1,48,NULL),(5,'不错',1543063810,1,48,NULL),(6,'还行',1543063863,1,48,NULL),(7,'真不错',1543065246,1,48,NULL),(9,'我是第九楼',1543065275,1,48,NULL),(10,'我是第十楼',1543065284,1,48,NULL),(11,'我是第十一楼',1543065293,1,48,NULL),(12,'我是十二楼',1543065293,2,48,NULL),(13,'1543065293',1543065293,2,48,NULL),(14,'154306454',1543065293,2,48,NULL),(15,'1gdsfds',1543065293,3,48,NULL);
/*!40000 ALTER TABLE `reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_uni`
--

DROP TABLE IF EXISTS `t1_uni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t1_uni` (
  `id` char(1) DEFAULT NULL,
  `num` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_uni`
--

LOCK TABLES `t1_uni` WRITE;
/*!40000 ALTER TABLE `t1_uni` DISABLE KEYS */;
INSERT INTO `t1_uni` VALUES ('a',5),('b',10),('c',15),('d',10);
/*!40000 ALTER TABLE `t1_uni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t2_uni`
--

DROP TABLE IF EXISTS `t2_uni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t2_uni` (
  `id` char(1) DEFAULT NULL,
  `num` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t2_uni`
--

LOCK TABLES `t2_uni` WRITE;
/*!40000 ALTER TABLE `t2_uni` DISABLE KEYS */;
INSERT INTO `t2_uni` VALUES ('b',5),('c',15),('d',20),('e',99);
/*!40000 ALTER TABLE `t2_uni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `t_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `t_name` varchar(32) DEFAULT NULL,
  `flag` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`t_id`),
  UNIQUE KEY `t_name` (`t_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'$v',14);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `teamID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teamName` varchar(30) NOT NULL,
  PRIMARY KEY (`teamID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'拜仁'),(2,'不莱梅'),(3,'皇家马德里'),(4,'巴塞罗那'),(5,'切尔西'),(6,'曼联'),(7,'AC 米兰'),(8,'国际米兰');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `u_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `u_name` varchar(32) DEFAULT NULL COMMENT '登陆名',
  `u_pwd` varchar(128) NOT NULL COMMENT '密码',
  `u_avatar` varchar(128) NOT NULL DEFAULT '' COMMENT '头像',
  `last_time` int(10) unsigned DEFAULT '0',
  `last_ip` varchar(64) DEFAULT '127.0.0.1',
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `u_name` (`u_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'xuyuwen','$2y$10$zsBlViqsi41rH3dU6mQgRe8vNhmjel1V3TQEidhXapLPcWwq7Wl3a','',0,'127.0.0.1'),(2,'henman','$10$zsBlViqsi41rH3dU6mQgRe8vNhmjel1V3TQEidhXapLPcWwq7Wl3a','',0,'127.0.0.1'),(3,'say','$10$zsBlViqsi41rH3dU6mQgRe8vNhmjel1V3TQEidhXapLPcWwq7Wl3a','',0,'127.0.0.1');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-06 18:21:24

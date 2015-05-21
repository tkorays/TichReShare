-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2015 at 06:29 PM
-- Server version: 5.6.5-m8
-- PHP Version: 5.6.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) CHARACTER SET utf8 NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 NOT NULL,
  `nickname` varchar(16) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `nickname`) VALUES
(1, 'tkorays@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '管理员');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `case_name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `attach` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `course_id`, `case_name`, `content`, `date_time`, `attach`) VALUES
(6, 16, '这时一个案例', '合乎裸祭', '2015-03-21 09:07:07', 0),
(7, 16, '案例标题', '<h1>哈哈</h1>这里是案例尼日荣<br><hr>呵呵呵<br>', '2015-03-21 09:07:53', 57),
(8, 15, '宋词案例', '巴拉巴巴拉巴<br><br>哈哈哈<br>', '2015-03-21 09:14:09', 0),
(9, 15, 'zheshi anli', 'hehehhe<br><br>adsf<br>', '2015-03-22 11:44:24', 58),
(10, 17, 'anli', 'adsf <br>', '2015-03-24 07:02:05', 70),
(30, 34, '爱的色放', '<p>天津嘉<em>啊啊啊啊 啊</em></p><p><strong>爱的发 爱的色放</strong><br/></p><p><br/></p><p>爱的色放<br/></p>', '2015-05-08 02:57:03', 0),
(31, 34, '我是标题', '<p>我是案例标题</p><p><br/></p><p>我是案例内容</p><p><br/></p><p>我还可以插入图片<br/></p>', '2015-05-08 02:59:35', 0),
(32, 36, '我们可以在这里编写案例', '案例内容，abcdefg，啊啊啊就安静就爱爱家居<p><br/></p>', '2015-05-09 08:48:00', 0),
(33, 37, '这里是案例题目', '<p>案例内容！！</p><p><img src="http://gshare.tkorays.com./uploads/images/20150509/14311811786909.jpg" _src="http://gshare.tkorays.com./uploads/images/20150509/14311811786909.jpg" height="107" width="232"/></p>', '2015-05-09 10:19:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '课程id',
  `course_name` varchar(128) NOT NULL COMMENT '课程名称',
  `description` text,
  `image` varchar(128) DEFAULT NULL,
  `date_time` datetime NOT NULL COMMENT '创建时间',
  `cat_id` int(11) NOT NULL,
  `point_id` int(11) NOT NULL,
  `uid` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `description`, `image`, `date_time`, `cat_id`, `point_id`, `uid`) VALUES
(15, '宋词鉴赏', '宋词是中国古代文学皇冠上光辉夺目的一颗巨钻，在古代文学的阆苑里，她是一块芬芳绚丽的园圃。她以姹紫嫣红、千姿百态的丰神，与唐诗争奇，与元曲斗妍，历来与唐诗并称双绝，都代表一代文学之胜。远从《诗经》、《楚辞》及《汉魏六朝诗歌》里汲取营养，又为后来的明清对剧小说输送了有机成分。直到今天，她仍在陶冶着人们的情操，给我们带来很高的艺术享受。', '8f177dbcc1d084d5082c02803919c4b5.png', '2015-03-04 04:47:59', 1, 0, 1),
(16, 'Sqlite', 'SQLite，是一款轻型的数据库，是遵守ACID的关系型数据库管理系统，它包含在一个相对小的C库中。它是D.RichardHipp建立的公有领域项目。它的设计目标是嵌入式的，而且目前已经在很多嵌入式产品中使用了它，它占用资源非常的低，在嵌入式设备中，可能只需要几百K的内存就够了。', '63e229544cee68d1b1e68a3b6d700b3b.png', '2015-03-07 10:21:25', 2, 0, 1),
(17, '安卓应用设计与开发', 'Android是一种基于Linux的自由及开放源代码的操作系统，主要使用于移动设备，如智能手机和平板电脑，由Google公司和开放手机联盟领导及开发。尚未有统一中文名称，中国大陆地区较多人使用“安卓”或“安致”。', '9306dcdab267299629d6f9e796bf9e1a.png', '2015-03-07 11:22:52', 2, 0, 1),
(34, '数学文化', '数学', '', '2015-04-18 01:51:56', 4, 20, 1),
(35, '安卓应用开发', '本课程讲解了安卓应用程序的设计与开发', '', '2015-05-09 01:24:28', 2, 25, 1),
(36, '软件工程', '这是软件工程课程', '', '2015-05-09 08:46:52', 2, 29, 24),
(37, '算法导论', '这是算法导论课程', '', '2015-05-09 10:17:04', 2, 32, 25);

-- --------------------------------------------------------

--
-- Table structure for table `courses_info`
--

CREATE TABLE IF NOT EXISTS `courses_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL COMMENT '课程id',
  `jxdg_info` text COMMENT '教学大纲详情',
  `jxdg_attach` int(11) DEFAULT NULL COMMENT '教学大纲附件',
  `jxjh_info` text COMMENT '教学计划详情',
  `jxjh_attach` int(11) DEFAULT NULL COMMENT '教学计划附件',
  `syzd_info` text COMMENT '实验指导详情',
  `syzd_attach` int(11) DEFAULT NULL COMMENT '实验指导附件',
  `ckzl_info` text COMMENT '参考资料详情',
  `ckzl_attach` int(11) DEFAULT NULL COMMENT '参考资料附件',
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='课程详情表，需要教师完善的' AUTO_INCREMENT=27 ;

--
-- Dumping data for table `courses_info`
--

INSERT INTO `courses_info` (`id`, `course_id`, `jxdg_info`, `jxdg_attach`, `jxjh_info`, `jxjh_attach`, `syzd_info`, `syzd_attach`, `ckzl_info`, `ckzl_attach`) VALUES
(4, 15, '这里是教学大纲的介绍', 121, '', 65, '这里是介绍', 64, '参考资料介绍', 61),
(5, 16, '这里是介绍', 11, 'jiaoxue jihua', 11, '', 0, '这里是介绍', 13),
(6, 17, '这里是教学大纲的介绍文档，详细地说明了该课程的大纲。', 14, '', 0, 'Android操作系统最初由Andy Rubin开发，主要支持手机。2005年8月由Google收购注资。2007年11月，Google与84家硬件制造商、软件开发商及电信营运商组建开放手机联盟共同研发改良Android系统。随后Google以Apache开源许可证的授权方式，发布了Android的源代码。', 10, '这里是参考资料打包，包含了该课程课外需要阅读的资料。', 10),
(23, 34, '', 0, '', 0, '', 0, '', 0),
(24, 35, '', 0, '', 0, '', 0, '', 0),
(25, 36, '', 0, '', 0, '', 0, '', 0),
(26, 37, '', 0, '', 0, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `coursewares`
--

CREATE TABLE IF NOT EXISTS `coursewares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attach` int(11) NOT NULL COMMENT '课件附件',
  `course_id` int(11) NOT NULL COMMENT '所属课程id',
  `point_id` int(11) DEFAULT NULL COMMENT '知识点id',
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  KEY `point_id` (`point_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `coursewares`
--

INSERT INTO `coursewares` (`id`, `attach`, `course_id`, `point_id`) VALUES
(2, 10, 16, NULL),
(3, 8, 16, NULL),
(4, 14, 16, NULL),
(5, 12, 17, NULL),
(14, 60, 17, NULL),
(15, 60, 15, NULL),
(16, 60, 19, NULL),
(33, 118, 15, NULL),
(34, 121, 15, NULL),
(35, 120, 15, NULL),
(36, 63, 15, NULL),
(37, 64, 15, NULL),
(39, 121, 34, 24),
(41, 118, 34, 23),
(42, 124, 35, 28),
(43, 127, 36, 30),
(44, 129, 37, 33),
(45, 128, 37, 38);

-- --------------------------------------------------------

--
-- Table structure for table `course_cat`
--

CREATE TABLE IF NOT EXISTS `course_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '类别id',
  `cat_name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course_cat`
--

INSERT INTO `course_cat` (`id`, `cat_name`) VALUES
(1, '文学艺术'),
(2, '计算机软件设计'),
(3, '电子电工'),
(4, '其他');

-- --------------------------------------------------------

--
-- Table structure for table `pok`
--

CREATE TABLE IF NOT EXISTS `pok` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `node_name` varchar(32) CHARACTER SET utf8 NOT NULL COMMENT '节点名字',
  `node_description` text CHARACTER SET utf8 NOT NULL COMMENT '节点说明',
  `node_type` int(11) NOT NULL COMMENT '节点类型1:root节点,2:二级节点,3:三级节点',
  `father_id` int(11) NOT NULL COMMENT '父节点id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Points Of Knowledge' AUTO_INCREMENT=39 ;

--
-- Dumping data for table `pok`
--

INSERT INTO `pok` (`id`, `node_name`, `node_description`, `node_type`, `father_id`) VALUES
(20, '数学文化', '', 1, 0),
(21, '代数', '', 2, 20),
(22, '几何', '', 2, 20),
(23, '数论', '', 2, 20),
(24, '初等几何', '', 3, 22),
(25, '安卓应用开发', '', 1, 0),
(26, '安卓的渊源', '', 2, 25),
(27, 'linux', '', 3, 26),
(28, '界面设计', '', 2, 25),
(29, '软件工程', '', 1, 0),
(30, '设计', '', 2, 29),
(31, '界面设计', '', 3, 30),
(32, '算法导论', '', 1, 0),
(33, '算法分析', '', 2, 32),
(34, '算法设计', '', 2, 32),
(35, '贪心算法', '', 3, 34),
(36, '动态规划', '', 3, 34),
(38, '图算法', '', 3, 34);

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) unsigned NOT NULL COMMENT '用户id',
  `course_id` int(11) NOT NULL COMMENT '课程id',
  `point_id` int(11) DEFAULT NULL COMMENT '知识点id',
  `content` text NOT NULL COMMENT '题目内容',
  `answer_text` text NOT NULL COMMENT '简答题答案',
  `answer_gapfilling` varchar(64) NOT NULL COMMENT '填空题答案',
  `answer_single` varchar(12) NOT NULL COMMENT '单选题答案',
  `answer_multi` varchar(12) NOT NULL COMMENT '多选答案，按照顺序来写',
  `answer_judge` tinyint(4) NOT NULL COMMENT '1: T 0:F',
  `problem_type` tinyint(4) NOT NULL COMMENT '题目类型，1：单选，2：多选，3：填空，4：判断，5：简答',
  `level` tinyint(4) NOT NULL COMMENT '题目难度，1~5难度加大',
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  KEY `uid` (`uid`),
  KEY `point_id` (`point_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `uid`, `course_id`, `point_id`, `content`, `answer_text`, `answer_gapfilling`, `answer_single`, `answer_multi`, `answer_judge`, `problem_type`, `level`) VALUES
(36, 1, 34, 20, '<p>大法<br/></p>', '', '', 'a', '', 1, 1, 1),
(37, 1, 34, 20, '<p>阿斯蒂芬<br/></p>', '<p>算法<br/></p>', '', 'a', '', 1, 5, 4),
(48, 1, 34, 20, '<p>dcdsfd<br/></p>', '', '', 'a', 'bc', 1, 2, 1),
(50, 1, 35, 25, '<p>adsfsadfasdf<br/></p>', '', '', 'c', '', 1, 1, 4),
(51, 1, 35, 25, '<p>dsafadsfasdf<br/></p>', '', '', 'a', '', 1, 1, 1),
(52, 24, 36, 30, '<p>如何设计、》选A<br/></p>', '', '', 'a', '', 1, 1, 1),
(53, 24, 36, 29, '<p>爱的所发生的<br/></p>', '', '', 'f', '', 1, 1, 4),
(54, 25, 37, 38, '<p>这一题选A<br/></p>', '', '', 'a', '', 1, 1, 1),
(55, 25, 37, 36, '<p>这一题选择ACD<br/></p>', '', '', 'a', 'acd', 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `resfile`
--

CREATE TABLE IF NOT EXISTS `resfile` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文件id编号',
  `owner_id` int(11) unsigned NOT NULL COMMENT '所属用户',
  `orgname` varchar(128) NOT NULL COMMENT '文件原始名字',
  `md5name` varchar(128) NOT NULL COMMENT '文件md5名',
  `description` varchar(32) NOT NULL COMMENT '文件介绍',
  `ref` int(11) NOT NULL COMMENT '引用次数',
  `downloads` int(11) NOT NULL COMMENT '下载次数',
  PRIMARY KEY (`id`),
  KEY `owner_id` (`owner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `resfile`
--

INSERT INTO `resfile` (`id`, `owner_id`, `orgname`, `md5name`, `description`, `ref`, `downloads`) VALUES
(118, 1, 'caidang.html', 'aeaa4c980f035eb3a39d0f5b7ba9bd39.html', '奥神队飞', 0, 0),
(121, 1, 'api.md', '68b7aa841d4b2166f1a7695d3319f477.md', '大师傅', 0, 0),
(124, 1, '24点.pptx', '24a0e49c6e1b8621f090db19c6c42391', '这是一个课件', 1, 0),
(125, 24, 'problems.sql', '65b04a2611ce31ad0199472e7976441d', '', 0, 0),
(127, 24, 'c.vim-master.zip', 'c930266b968ee9afc13ebe390b35cf51', '又是一个课件', 0, 0),
(128, 25, 'c.vim-master.zip', '76d02e4786279e39c145c7a8d9a21fa6', '一个文件', 0, 0),
(129, 25, 'ufinder-0.1.0.zip', '8fafa9b3de4b865b817944dbb3c23af2', '这是第一章课件', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `email` varchar(128) NOT NULL COMMENT '用户邮箱',
  `password` varchar(64) NOT NULL COMMENT '密码，长度足够',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态，0不可用，1可用',
  `true_name` varchar(32) NOT NULL COMMENT '姓名',
  `image` varchar(128) NOT NULL COMMENT '个人图像',
  `school_id` int(11) NOT NULL DEFAULT '0' COMMENT '学校id',
  `reg_time` datetime NOT NULL COMMENT '注册时间',
  `last_login_time` datetime NOT NULL COMMENT '上次注册时间',
  `last_login_ip` varchar(16) NOT NULL COMMENT '上次登录ip',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `password`, `status`, `true_name`, `image`, `school_id`, `reg_time`, `last_login_time`, `last_login_ip`) VALUES
(1, 'tkorays@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '许剑', '72d7bff57f5b8849ae5e0a4bf6f4317a.jpg', 0, '2015-02-02 14:09:31', '2015-02-02 14:09:31', ''),
(11, 'test@126.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'test', '', 0, '2015-02-13 14:55:26', '2015-02-13 14:55:26', ''),
(20, 'waoooo@ff.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'woca', '', 0, '2015-04-11 14:09:32', '2015-04-11 14:09:32', ''),
(21, 'helper@fuck.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'helpme', '', 0, '2015-04-11 14:11:39', '2015-04-11 14:11:39', ''),
(22, 'adsfsd@ss.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'dasfasd', '', 0, '2015-04-11 14:14:54', '2015-04-11 14:14:54', ''),
(23, 'testss@126.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'happer', '', 0, '2015-04-11 14:49:34', '2015-04-11 14:49:34', ''),
(24, 'zs@126.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '张三', '', 0, '2015-05-09 20:45:22', '2015-05-09 20:45:22', ''),
(25, 'ls@126.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '李四', '', 0, '2015-05-09 22:15:34', '2015-05-09 22:15:34', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE IF NOT EXISTS `user_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(32) CHARACTER SET utf8 NOT NULL,
  `uid` int(11) NOT NULL,
  `usage` varchar(16) CHARACTER SET utf8 NOT NULL COMMENT 'token用途activate_user',
  `expire` int(11) NOT NULL COMMENT '过期时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_watch`
--

CREATE TABLE IF NOT EXISTS `user_watch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `watcher_id` int(11) NOT NULL,
  `watched_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_watch`
--

INSERT INTO `user_watch` (`id`, `watcher_id`, `watched_id`) VALUES
(1, 1, 23);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

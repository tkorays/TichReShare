

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户的id',
  `uid` int(11) NOT NULL COMMENT '自定义用户id，保留字段',
  `login_name` varchar(16) NOT NULL COMMENT '用户的登录名字',
  `show_name` varchar(16) NOT NULL COMMENT '用户显示的名字',
  `password` varchar(64) NOT NULL COMMENT '用户密码',
  `email` varchar(128) NOT NULL COMMENT '用户邮箱',
  `phone_number` varchar(16) NOT NULL COMMENT '用户手机号',
  `role_id` int(11) NOT NULL COMMENT '用户角色id',
  `create_time` datetime NOT NULL COMMENT '用户创建时间',
  `last_login_time` datetime NOT NULL COMMENT '上次登陆时间',
  `last_login_ip` varchar(16) NOT NULL COMMENT '上次登陆ip',
  PRIMARY KEY (`id`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


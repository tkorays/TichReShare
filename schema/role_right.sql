CREATE TABLE `user_manager`.`role_right` ( 
  `id` INT NOT NULL AUTO_INCREMENT COMMENT 'id' , 
  `role_id` INT NOT NULL COMMENT '角色id' , 
  `right_sign` VARCHAR(128) NOT NULL COMMENT '权限符号' , 
  `right_name` VARCHAR(32) NOT NULL COMMENT '权限名称' , 
  PRIMARY KEY (`id`) 
) ENGINE = InnoDB  DEFAULT CHARSET=utf8;

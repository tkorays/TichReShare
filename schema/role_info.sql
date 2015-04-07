CREATE TABLE `user_manager`.`role_info` (
	`id` INT NOT NULL AUTO_INCREMENT COMMENT '角色id' , 
	`role_name` VARCHAR(16) NOT NULL COMMENT '角色名字' , 
	PRIMARY KEY (`id`) 
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

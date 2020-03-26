CREATE TABLE `orwms`.`admin` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `user_name` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`user_name`)) ENGINE = InnoDB;


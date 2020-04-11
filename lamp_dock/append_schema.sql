CREATE TABLE `sample`.`orders` (
    `order_id` INT(11) NOT NULL AUTO_INCREMENT ,
    `user_id` INT(11) NOT NULL ,
    `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `updated` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    PRIMARY KEY (`order_id`)) ENGINE = InnoDB;

CREATE TABLE `sample`.`order_datails` ( 
    `order_detail_id` INT(11) NOT NULL AUTO_INCREMENT , 
    `order_id` INT(11) NOT NULL , 
    `item_id` INT(11) NOT NULL , 
    `price` INT(11) NOT NULL , 
    `amount` INT(11) NOT NULL ,
    `created` DATETIME NULL DEFAULT CURRENT_TIMESTAMP ,
    `updated` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    PRIMARY KEY (`order_detail_id`)) ENGINE = InnoDB;

CREATE TABLE `shopshop`.`orders` (
  `id_order` INT(8) NOT NULL AUTO_INCREMENT,
  `id_user` INT(8) NOT NULL,
  `amount` INT(6) NOT NULL,
  `total` FLOAT(12, 2) NOT NULL,
  `shipping` FLOAT(10, 2) NOT NULL,
  `status` INT(2) NOT NULL,
  `tracking_number` VARCHAR(50) NULL,
  `photo_bill` VARCHAR(255) NOT NULL,
  `order_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_order`)
) ENGINE = InnoDB;
ALTER TABLE `orders`
ADD CONSTRAINT `fk_order_user_id` FOREIGN KEY (`id_user`) REFERENCES `user`(`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;
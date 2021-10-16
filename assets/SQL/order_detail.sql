CREATE TABLE `shopshop`.`order_detail` (
  `id_detail` INT(8) NOT NULL AUTO_INCREMENT,
  `id_order` INT(8) NOT NULL,
  `id_product` INT(8) NOT NULL,
  `price` FLOAT(6, 2) NOT NULL,
  `quantity` INT(6) NOT NULL,
  `subtotal` FLOAT(6, 2) NOT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE = InnoDB;
ALTER TABLE `order_detail`
ADD CONSTRAINT `fk_order_detail_order_id` FOREIGN KEY (`id_order`) REFERENCES `orders`(`id_order`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `order_detail`
ADD CONSTRAINT `fk_order_detail_product_id` FOREIGN KEY (`id_product`) REFERENCES `product`(`id_product`) ON DELETE NO ACTION ON UPDATE CASCADE;
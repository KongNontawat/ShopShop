CREATE TABLE `shopshop`.`user` (
  `id_user` INT(8) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(120) NOT NULL,
  `email` VARCHAR(120) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `firstname` VARCHAR(150) NULL,
  `lastname` VARCHAR(150) NULL,
  `dob` DATE NULL,
  `gender` VARCHAR(20) NULL,
  `house` VARCHAR(50) NULL,
  `moo` VARCHAR(50) NULL,
  `road` VARCHAR(100) NULL,
  `lane` VARCHAR(60) NULL,
  `tambon` INT(5) NULL,
  `amphoe` INT(5) NULL,
  `province` INT(5) NULL,
  `postal_zip` INT(6) NULL,
  `phone` VARCHAR(13) NULL,
  `photo` VARCHAR(255) NULL,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE = InnoDB;

INSERT INTO `shopshop`.`user` (
  username,
  email,
  password,
  firstname,
  lastname
) VALUES (
  'kongzaa',
  'kongzaa15885@gmail.com',
  '123',
  'นนทวัฒน์',
  'แสงความสว่าง'
);

INSERT INTO `shopshop`.`user` (
  username,
  email,
  password,
  firstname,
  lastname
) VALUES (
  'user',
  'user123@gmail.com',
  '123',
  'User1',
  'JOEY'
);

INSERT INTO `shopshop`.`user` (
  username,
  email,
  password,
  firstname,
  lastname
) VALUES (
  'admin',
  'admin@gmail.com',
  '123',
  'Admin1',
  'CARRY'
);
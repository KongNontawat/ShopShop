CREATE TABLE `shopshop`.`category`(
  `id_category` INT(8) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `detail` TEXT NOT NULL,
  `created_at` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_category`)
) ENGINE = InnoDB;

INSERT INTO `shopshop`.`category` (
title,
detail
) VALUES (
'NoteBook',
"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy"
);

INSERT INTO `shopshop`.`category` (
title,
detail
) VALUES (
'Wireless Earbuds',
"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy"
);

INSERT INTO `shopshop`.`category` (
title,
detail
) VALUES (
'Smart watch',
"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy"
);

INSERT INTO `shopshop`.`category` (
title,
detail
) VALUES (
'Mobile',
"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy"
);

INSERT INTO `shopshop`.`category` (
title,
detail
) VALUES (
'gadget',
"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy"
);
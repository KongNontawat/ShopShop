CREATE TABLE `shopshop`.`product` (
  `id_product` INT(8) NOT NULL AUTO_INCREMENT,
  `id_category` INT(8) NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `detail` TEXT NOT NULL,
  `detail2` TEXT NULL,
  `price` FLOAT(12, 2) NOT NULL,
  `status` INT(2) NOT NULL,
  `stock` INT(6) NULL DEFAULT '0',
  `photo` VARCHAR(255) NOT NULL,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_product`)
) ENGINE = InnoDB;
ALTER TABLE `product`
ADD CONSTRAINT `fk_product_cat_id` FOREIGN KEY (`id_category`) REFERENCES `category`(`id_category`) ON DELETE NO ACTION ON UPDATE CASCADE;

INSERT INTO `shopshop`.`product` (
    id_category,
    title,
    detail,
    detail2,
    price,
    status,
    stock,
    photo
  )
VALUES (
    1,
    'MACBOOK PRO 16',
    `Where can I get some?
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet`,
`What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose injected humour and the like`,
    '55000.00',
    '1',
    '120',
    'default.png',
  );
INSERT INTO `shopshop`.`product` (
    id_category,
    title,
    detail,
    detail2,
    price,
    status,
    stock,
    photo
  )
VALUES (
    '1',
    'ACER Swift3',
    "Where can I get some?
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet",

"What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
",
    '21000.00',
    '1',
    '150',
    'default.png'
  );
INSERT INTO `shopshop`.`product` (
    id_category,
    title,
    detail,
    detail2,
    price,
    status,
    stock,
    photo
  )
VALUES (
    '3',
    'Apple Watch Series 6',
    'Apple Watch Series 6 ????????????????????????????????????????????????????????? Apple Watch ????????????????????????????????????????????? ???????????????????????????????????????????????????????????? Series 5 ??????????????????????????????????????????????????? ??? ???????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????? SpO2 ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????? Apple Watch Series 6 ????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???',
    '???????????????????????????????????????????????????????????? ??? ????????? Apple ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????? 18 ????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????? 90 ???????????? ??????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????? Apple Watch 6 ????????? ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????? WatchOS7 ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??? ?????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????? Apple Fitness Plus ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????',
    '12000',
    '1',
    '10',
    'default.png'
  );
INSERT INTO `shopshop`.`product` (
    id_category,
    title,
    detail,
    detail2,
    price,
    status,
    stock,
    photo
  )
VALUES (
    '3',
    'Samsung Galaxy Watch 3',
    '????????????: 41,45 ??????????????????????????? | ??????????????????????????????????????????????????????????????????: ??????????????????????????? 2 ????????? | GPS: ?????? | ??????????????????: ?????? | ?????????????????????????????????????????????????????????????????????????????????????????????????????????: ?????? | LTE: ?????????????????????????????????????????? | ???????????????????????????????????????????????????: Samsung Pay | ????????????????????????????????????????????????????????????: iOS, Android',
    'Samsung Galaxy Watch 3 ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????? 2 ???????????? ????????? 41 ????????? 45 ??????????????????????????? ???????????????????????????????????????????????? LTE ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? Samsung Galaxy 3 ????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????

???????????????????????????????????? Samsung Galaxy 3 ????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????? 2 ????????? ????????????????????????????????????????????????????????? Galaxy Watch ???????????? Original ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????? ???????????????????????????????????? ECG ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????

???????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????? Samsung Pay ????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? Samsung ???????????? ??????????????????????????????????????????????????????????????????????????? Apple ?????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? Tizen ????????????????????? ??? ?????????',
    '9000',
    '1',
    '50',
    'default.png'
  );
INSERT INTO `shopshop`.`product` (
    id_category,
    title,
    detail,
    detail2,
    price,
    status,
    stock,
    photo
  )
VALUES (
    '2',
    'Apple AirPods Pro',
    '????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????? In-Ear ?????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????',
    '"?????????????????????????????????" (Wireless Earbuds) ????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????? "?????????????????????????????????" ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????',
    '7000',
    '1',
    '20',
    'default.png'
  );
INSERT INTO `shopshop`.`product` (
    id_category,
    title,
    detail,
    detail2,
    price,
    status,
    stock,
    photo
  )
VALUES (
    '2',
    'Samsung Galaxy Buds Live',
    '????????????????????????????????? ?????????????????????????????????????????? Samsung ??????????????????????????????????????????????????? ??????, ?????????, ?????????????????? ??????????????????????????????????????????????????? "???????????????????????????????????????" ?????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????',
    '"?????????????????????????????????" (Wireless Earbuds) ????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????? "?????????????????????????????????" ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????',
    '4576',
    '1',
    '90',
    'default.png'
  );
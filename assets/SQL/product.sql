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
    'Apple Watch Series 6 ถูกเลื่องลือว่าเป็น Apple Watch รุ่นที่ดีที่สุด มันมีทุกอย่างที่รุ่น Series 5 รุ่นที่ครองใจหลาย ๆ คนมี ไม่ว่าจะเป็นระบบเซ็นเซอร์เพื่อให้คุณสามารถดูหน้าจอได้ตลอดเวลา และมีฟีเจอร์เพื่อสุขภาพมาอย่างครบครัน สิ่งที่เพิ่มขึ้นมาคือหน้าจอที่สว่างมากขึ้น สะดวกต่อการใช้งานมากขึ้น และการใส่มอนิเตอร์ SpO2 ที่ช่วยให้คุณทราบค่าออกซิเจนในกระแสเลือด นอกจากนี้ Apple Watch Series 6 รุ่นนี้ ยังเป็นสมาร์ทวอทช์รุ่นแรกที่คุณสามารถเลือกสีได้ตามต้องการ ขอแอบบอกว่าสีน้ำเงินและสีแดงถือเป็นสีที่สวยน่ามองมาก ๆ',
    'ทางเรายังหวังอยู่ลึก ๆ ว่า Apple จะพัฒนาอายุการใช้งานแบตเตอรี่ให้ใช้งานได้นานขึ้น อย่างน้อยถึง 18 ชั่วโมง แต่ก็ยังคาดหวังอะไรไม่ได้ในรุ่นนี้ สิ่งที่น่าจะทดแทนกันได้คือคุณสมบัติในการชาร์จแบตเตอรี่ที่รวดเร็ว โดยใช้เวลาเพียง 90 นาที ก็สามารถชาร์จแบตเตอรี่ได้เต็มแล้ว ซึ่งเป็นประโยชน์มากหากคุณใส่สมาร์ทวอทช์ขณะนอนหลับ และแน่นอนว่า Apple Watch 6 นี้ ก็มีฟังก์ชั่นการติดตามการนอนหลับด้วยเช่นเดียวกัน ต้องขอบคุณ​ WatchOS7 แอปพลิเคชันซอฟต์แวร์ที่อัดแน่นมาด้วยฟังก์ชั่นที่เป็นประโยชน์ ไม่ว่าจะเป็นฟังก์ชั่นการปรับแต่งคุณลักษณะและค่าต่าง ๆ ระบบเมทริกซ์ทางไกล ระบบแจ้งเตือนการล้างมืออัตโนมัติ และยังมี Apple Fitness Plus สำหรับผู้ที่ชื่นชอบการออกกำลังกายอีกด้วย',
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
    'ขนาด: 41,45 มิลลิเมตร | อายุการใช้งานแบตเตอรี่: มากสูงสุด 2 วัน | GPS: มี | กันน้ำ: มี | ฟังก์ชั่นติดตามอัตราการเต้นของหัวใจ: มี | LTE: ฟังก์ชั่นเสริม | ฟังก์ชั่นจ่ายเงิน: Samsung Pay | รองรับระบบปฏิบัติการ: iOS, Android',
    'Samsung Galaxy Watch 3 ถือเป็นนาฬิกาสมาร์ทวอทช์ที่มีดีไซน์สวยล้ำที่สุด และยังเป็นรุ่นที่ตอบโจทย์ทุกฟังก์ชั่นมากที่สุดอีกรุ่นหนึ่ง สมาร์ทวอทช์รุ่นนี้มีมาให้เลือก 2 ขนาด คือ 41 และ 45 มิลลิเมตร อีกทั้งยังมีระบบ LTE คุณจึงสามารถออกไปทำกิจกรรมสุดโปรดได้โดยที่คุณไม่ต้องพกสมาร์ทโฟนติดตัวไปด้วย Samsung Galaxy 3 รุ่นนี้ มาพร้อมกับฟังก์ชั่นขอบหน้าปัดแบบหมุนได้ ทำให้การนำทางอินเทอร์เฟซของนาฬิกาสมาร์ทวอทช์เป็นเรื่องง่าย ในขณะที่การเข้าถึงหน้าปัดนาฬิกานับพันรูปแบบ ช่วยให้คุณสามารถปรับแต่งหน้าจอการแสดงผลได้ตามสไตล์ที่คุณต้องการ

แต่ถึงแม้ว่า Samsung Galaxy 3 รุ่นนี้ จะมีอายุการใช้งานแบตเตอรี่น้อยกว่า 2 วัน เมื่อเปรียบเทียบกับ Galaxy Watch รุ่น Original แต่มันก็ยังมาพร้อมกับพื้นที่จัดเก็บเพลงที่มากกว่า การรับรองจากองค์การอาหารและยา การติดตามการเดินทาง และการติดตาม ECG ที่ช่วยให้ทุกการใช้งานมอบความสะดวกสบายมากยิ่งขึ้น

และแน่นอนว่าในสมาร์ทวอทช์รุ่นนี้ คุณยังคงสามารถใช้งาน Samsung Pay ได้ และคุณยังสามารถใช้งานโหมดฟิตเนสได้อีกด้วย แต่ข้อเสียที่เราพบคือร้านแอปพลิเคชันของทาง Samsung นั้น ยังไม่หลากหลายเท่ากับค่าย Apple มากนัก แต่ข่าวดีคือจะสามารถรองรับการใช้งาน Tizen ได้เร็ว ๆ นี้',
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
    'หูฟังไร้สายไอโฟนรุ่นยอดนิยม แม้ว่าราคาเปิดตัวจะค่อนข้างแรง แต่เมื่อเทียบกับคุณภาพก็ถือว่าคุ้มค่าอย่างมาก จุดเด่นอยู่ที่ความสามารถในการเก็บรายละเอียดเสียง และเป็นหูฟังแบบ In-Ear เกาะติดแน่นเมื่อสวมใส่ ไม่ต้องกังวลว่าจะหลุดร่วงขณะสวมวิ่งออกกำลังกาย พร้อมทั้งมีคุณสมบัติกันน้ำ เรียกว่าเป็นรุ่นคลาสสิกของสาวกแอปเปิลเลยทีเดียว',
    '"หูฟังไร้สาย" (Wireless Earbuds) เป็นไอเทมที่ขาดไม่ได้สำหรับคนยุคนี้ เชื่อมต่อด้วยบลูทูธ ทำให้บางครั้งเรียกว่า "หูฟังบลูทูธ" เทคโนโลยีที่เน้นความสะดวกสบายในการฟังเพลงและสื่อบันเทิงต่างๆ โดยไม่มีสายหูฟังมากวนใจ หมดปัญหาสายพันกันจนชำรุดเสียหาย ทำให้หูฟังไร้สายกลายเป็นไอเทมคู่สมาร์ทโฟน ที่คนยุคใหม่ให้ความนิยมอย่างมาก เพราะช่วยให้สามารถใส่หูฟังไร้สาย พร้อมกับทำกิจกรรมไลฟ์สไตล์ต่างๆ ในชีวิตประจำได้',
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
    'หูฟังไร้สาย ทรงเรียบหรูของ Samsung มาพร้อมสีโมเดิร์น ดำ, ขาว, บรอนซ์ ที่มักถูกเรียกว่า "หูฟังเม็ดถั่ว" เนื่องจากมีลักษณะคล้ายเม็ดถั่ว ซึ่งช่วยให้เข้ากับสรีระหูเมื่อสวมใส่ ลดปัญหาเจ็บหูเมื่อต้องใช้งานติดต่อกันนานๆ ความโดดเด่นของรุ่นนี้อยู่ที่ การตัดเสียงรบกวนจากภายนอก และคุณภาพเสียงที่ฟังได้ชัดเจน แม้จะใช้งานแค่ข้างเดียวก็ตาม',
    '"หูฟังไร้สาย" (Wireless Earbuds) เป็นไอเทมที่ขาดไม่ได้สำหรับคนยุคนี้ เชื่อมต่อด้วยบลูทูธ ทำให้บางครั้งเรียกว่า "หูฟังบลูทูธ" เทคโนโลยีที่เน้นความสะดวกสบายในการฟังเพลงและสื่อบันเทิงต่างๆ โดยไม่มีสายหูฟังมากวนใจ หมดปัญหาสายพันกันจนชำรุดเสียหาย ทำให้หูฟังไร้สายกลายเป็นไอเทมคู่สมาร์ทโฟน ที่คนยุคใหม่ให้ความนิยมอย่างมาก เพราะช่วยให้สามารถใส่หูฟังไร้สาย พร้อมกับทำกิจกรรมไลฟ์สไตล์ต่างๆ ในชีวิตประจำได้',
    '4576',
    '1',
    '90',
    'default.png'
  );
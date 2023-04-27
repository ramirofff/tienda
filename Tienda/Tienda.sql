DROP TABLE IF EXISTS compras;
DROP TABLE IF EXISTS productos;
DROP TABLE IF EXISTS usuarios;



CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario_UNIQUE` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;


INSERT INTO usuarios(nombre,email,usuario,contraseña)
VALUES ('lorena','lore19@gmail.com','lore19','38398937'),
       ('yuli','yuli93@gmail.com','yuli93','yuli93'),
       ('miriam','mimi1027@gmail.com','mimi1027','mimi1027'),
       ('hola','hola10@gmail','hola10','hola10');

select * from usuarios;


CREATE TABLE productos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  imagen VARCHAR(255) NOT NULL,
  nombre VARCHAR(255) NOT NULL,
  precio DECIMAL(10,2) NOT NULL,
  cantidad INT NOT NULL,
  stock INT NOT NULL,
  tipo VARCHAR(255) NOT NULL
);






INSERT INTO productos(imagen,nombre,precio,cantidad,stock,tipo)
VALUES ('https://d3ugyf2ht6aenh.cloudfront.net/stores/440/495/products/remeras-primavera-21-921d5a07e58069caf216007061698260-640-0.png','Remera mod 1','1000','0','10','remera'),
       ('https://d3ugyf2ht6aenh.cloudfront.net/stores/440/495/products/remeras-primavera-31-832819f3716ac6ce9716007062190849-640-0.png','Remera mod 2','1100','0','10','remera'),
       ('https://d3ugyf2ht6aenh.cloudfront.net/stores/440/495/products/tigre-albino1-ba157289c28a3fe88816048463794901-640-0.png','Remera Tigre Bengala','1200','0','10','remera'),
       ('https://d3ugyf2ht6aenh.cloudfront.net/stores/440/495/products/gato-blanco-mod-2-7db90cb7e2e532f08f16479089035866-640-0.png','Remera Gato Blanco','1300','0','10','remera'),
       ('https://d3ugyf2ht6aenh.cloudfront.net/stores/440/495/products/remeras-leon-con-corona1-f3fef1574aa2aef7c915987989224604-640-0.png','Remera Leon','1400','0','10','remera'),
       ('https://d3ugyf2ht6aenh.cloudfront.net/stores/440/495/products/siberian-husky1-dbd245bd4e155d690316046621136555-640-0.png','Remera Perro','1500','0','10','remera'),
       ('https://d3ugyf2ht6aenh.cloudfront.net/stores/440/495/products/remera-carpincho-mod-21-0640e59f4c06cfc39b16295627139102-640-0.webp','Remera Carpincho','1600','0','10','remera'),
       ('https://d3ugyf2ht6aenh.cloudfront.net/stores/440/495/products/hallowenn-111-b9ced3052b92e82f1716037479065683-640-0.webp','Remera Halloween','1700','0','10','remera'),
       
       ('https://imagizer.imageshack.com/img922/15/3zA1uc.png','Pantalón Faset','1000','0','10','pantalon'),
       ('https://imagizer.imageshack.com/img924/8826/QwrCgF.png','Pantalón Fillier','1100','0','10','pantalon'),
       ('https://imagizer.imageshack.com/img924/8601/0Cog6l.png','Pantalón Krim','1200','0','10','pantalon'),
       ('https://imagizer.imageshack.com/v2/500x500q90/924/ZH90CC.png','Pantalón Barshi','1300','0','10','pantalon'),
       ('https://imagizer.imageshack.com/img923/5400/9FztPg.png','Palazzo Walior','1400','0','10','pantalon'),
       ('https://imagizer.imageshack.com/img922/999/Ti50Pi.png','Mom Bowie','1500','0','10','pantalon'),
       ('https://imagizer.imageshack.com/img923/8816/dkDEFm.png','Pantalón Copernico','1600','0','10','pantalon'),
       ('https://imagizer.imageshack.com/v2/500x500q90/923/qGJUlF.png','Pantalón Sigma','1700','0','10','pantalon'),
       
       ('https://imagizer.imageshack.com/img922/2183/arhzYC.png','Buzo Argentino','1000','0','10','abrigo'),
       ('https://imagizer.imageshack.com/v2/500x500q90/924/qXzOuw.png','Buzo Hoodie','1100','0','10','abrigo'),
       ('https://imagizer.imageshack.com/img924/5708/798GKK.png','Sco Raman II','1200','0','10','abrigo'),
       ('https://imagizer.imageshack.com/img924/7536/Eux7wc.png','Buzo Strategy','1300','0','10','abrigo'),
       ('https://imagizer.imageshack.com/img923/112/QwktDJ.png','Campera Willy','1400','0','10','abrigo'),
       ('https://imagizer.imageshack.com/img923/2166/dvALzB.png','Campera Land','1500','0','10','abrigo'),
       ('https://imagizer.imageshack.com/img924/9756/L1FHEF.png','Buzo Vicarini','1600','0','10','abrigo'),
       ('https://imagizer.imageshack.com/v2/355x355q90/922/5A0FIG.png','Buzo Stadium','1700','0','10','abrigo'),
       
       ('https://imagizer.imageshack.com/img924/4596/yeLpEA.png','Zapatillas Jazmine','1000','0','10','calzado'),
       ('https://imagizer.imageshack.com/img922/3483/FZiRFo.png','Zapatillas John','1100','0','10','calzado'),
       ('https://imagizer.imageshack.com/img922/1664/CJ5jXs.png','Borcego Odessa','1200','0','10','calzado'),
       ('https://imagizer.imageshack.com/img922/4167/juXpTX.png','Botineta Denali','1300','0','10','calzado'),
       ('https://imagizer.imageshack.com/img923/8784/QHDVDC.png','Zapatillas con recorte','1400','0','10','calzado'),
       ('https://imagizer.imageshack.com/img922/5580/dEOH9G.png','Sandalias faja ancha','1500','0','10','calzado'),
       ('https://imagizer.imageshack.com/img923/8642/ifsIF6.png','Zapatillas sneaker','1600','0','10','calzado'),
       ('https://imagizer.imageshack.com/img923/2800/V5vfq7.png','Zapatillas urbana','1700','0','10','calzado');

select * from productos;

CREATE TABLE `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `nombre_producto` VARCHAR(255) NOT NULL,
    `precio` DECIMAL(10,2) NOT NULL,
   `cantidad` INT NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `producto_id` (`producto_id`),
  CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE)
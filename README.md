# Ejemplo MVC (PHP,MySQL)
modelo vista controlador
## Base de Datos

```MySQL
CREATE DATABASE `mvc` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `precio` decimal(7,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

```
#PHP v5.6
## javier Suarez
# XYZ
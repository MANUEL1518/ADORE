-- ---------------------------------------------------
-- --                                               --
-- -- ANTES CREA UNA BASE DE DATOS LLAMADA FLORERIA --
-- --                                               --
-- ---------------------------------------------------

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `ofertas` (
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `precios` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

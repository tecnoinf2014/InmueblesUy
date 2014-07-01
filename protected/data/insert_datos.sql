/********************************************************
Tipo Inmueble
********************************************************/

INSERT INTO `inmuebles_uy`.`tipo_inmueble` (`id`, `tipo`) VALUES (1, 'Casa');
INSERT INTO `inmuebles_uy`.`tipo_inmueble` (`id`, `tipo`) VALUES (2, 'Apto');
INSERT INTO `inmuebles_uy`.`tipo_inmueble` (`id`, `tipo`) VALUES (3, 'Terreno');
INSERT INTO `inmuebles_uy`.`tipo_inmueble` (`id`, `tipo`) VALUES (4, 'Campo');
INSERT INTO `inmuebles_uy`.`tipo_inmueble` (`id`, `tipo`) VALUES (5, 'Chacra');
INSERT INTO `inmuebles_uy`.`tipo_inmueble` (`id`, `tipo`) VALUES (6, 'Estancia');

/*********************************************************
Tipo Contrato
*********************************************************/

INSERT INTO `inmuebles_uy`.`tipo_contrato` (`id`, `nombre`) VALUES (1, 'Alquiler');
INSERT INTO `inmuebles_uy`.`tipo_contrato` (`id`, `nombre`) VALUES (2, 'Venta');
INSERT INTO `inmuebles_uy`.`tipo_contrato` (`id`, `nombre`) VALUES (3, 'Ambos');


/*********************************************************
Departamentos
*********************************************************/
INSERT INTO `departamento` VALUES(1, 'Artigas');
INSERT INTO `departamento` VALUES(2, 'Salto');
INSERT INTO `departamento` VALUES(3, 'Paysandu');
INSERT INTO `departamento` VALUES(4, 'Rio negro');
INSERT INTO `departamento` VALUES(5, 'Soriano');
INSERT INTO `departamento` VALUES(6, 'Colonia');
INSERT INTO `departamento` VALUES(7, 'Flores');
INSERT INTO `departamento` VALUES(8, 'San jose');
INSERT INTO `departamento` VALUES(9, 'Rivera');
INSERT INTO `departamento` VALUES(10, 'Tacuarembo');
INSERT INTO `departamento` VALUES(11, 'Durazon');
INSERT INTO `departamento` VALUES(12, 'Florida');
INSERT INTO `departamento` VALUES(13, 'Canelones');
INSERT INTO `departamento` VALUES(14, 'Montevideo');
INSERT INTO `departamento` VALUES(15, 'Cerro largo');
INSERT INTO `departamento` VALUES(16, 'Treinta y tres');
INSERT INTO `departamento` VALUES(17, 'Lavalleja');
INSERT INTO `departamento` VALUES(18, 'Maldonado');
INSERT INTO `departamento` VALUES(19, 'Rocha');

/*********************************************************
Direccion
*********************************************************/

INSERT INTO `direccion` VALUES(1, 'Prado', 'Luis A. Herera', 1212, 0, 0000000, 14);

/*********************************************************
Estado Inmueble
*********************************************************/

INSERT INTO `estado_inmueble` VALUES(1, 'Activo');
INSERT INTO `estado_inmueble` VALUES(2, 'Pendiente');
INSERT INTO `estado_inmueble` VALUES(3, 'Inactivo');
INSERT INTO `estado_inmueble` VALUES(4, 'Bloqueado');
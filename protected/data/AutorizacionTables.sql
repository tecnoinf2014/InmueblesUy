create table `AuthItem`
(
   `name`                 varchar(64) not null,
   `type`                 integer not null,
   `description`          text,
   `bizrule`              text,
   `data`                 text,
   primary key (`name`)
) engine InnoDB;


create table `AuthAssignment`
(
   `itemname`             varchar(64) not null,
   `userid`               varchar(64) not null,
   `bizrule`              text,
   `data`                 text,
   primary key (`itemname`,`userid`),
   foreign key (`itemname`) references `AuthItem` (`name`) on delete cascade on update cascade
) engine InnoDB;
create table `AuthItemChild`
(
   `parent`               varchar(64) not null,
   `child`                varchar(64) not null,
   primary key (`parent`,`child`),
   foreign key (`parent`) references `AuthItem` (`name`) on delete cascade on update cascade,
   foreign key (`child`) references `AuthItem` (`name`) on delete cascade on update cascade
) engine InnoDB;



INSERT INTO `inmuebles_uy`.`AuthItem` (
`name` ,
`type` ,
`description` ,
`bizrule` ,
`data`
)
VALUES (
'Administrativo', '2', NULL , NULL , NULL
);
INSERT INTO `inmuebles_uy`.`AuthItem` (
`name` ,
`type` ,
`description` ,
`bizrule` ,
`data`
)
VALUES (
'Agente', '2', NULL , NULL , NULL
);
INSERT INTO `inmuebles_uy`.`AuthItem` (
`name` ,
`type` ,
`description` ,
`bizrule` ,
`data`
)
VALUES (
'Director', '2', NULL , NULL , NULL
);
INSERT INTO `inmuebles_uy`.`AuthAssignment` (
`itemname` ,
`userid` ,
`bizrule` ,
`data`
)
VALUES (
'Director', 'director2@gmail.com', NULL , NULL
);
INSERT INTO `inmuebles_uy`.`AuthAssignment` (
`itemname` ,
`userid` ,
`bizrule` ,
`data`
)
VALUES (
'Administrativo', 'adminstrativo2@gmail.com', NULL , NULL
);
INSERT INTO `inmuebles_uy`.`AuthAssignment` (
`itemname` ,
`userid` ,
`bizrule` ,
`data`
)
VALUES (
'Agente', 'agente2@gmail.com', NULL , NULL
);
/*USUARIOS CON PODER*/
INSERT INTO `inmuebles_uy`.`usuario` (
`id` ,
`nombres` ,
`apellido` ,
`ci` ,
`email` ,
`password` ,
`telefono`
)
VALUES (
NULL , 'Administrador', 'Admin', '333333333', 'adminstrativo2@gmail.com', 'pass', '22222222222222'
);
INSERT INTO `inmuebles_uy`.`usuario` (`id`, `nombres`, `apellido`, `ci`, `email`, `password`, `telefono`) VALUES (NULL, 'Agente', 'Agente', '3332222222', 'agente2@gmail.com', 'pass', '222211111');
INSERT INTO `inmuebles_uy`.`usuario` (
`id` ,
`nombres` ,
`apellido` ,
`ci` ,
`email` ,
`password` ,
`telefono`
)
VALUES (
NULL , 'Director', 'Director', '1111111111', 'director2@gmail.com', 'pass', '11111222222'
);


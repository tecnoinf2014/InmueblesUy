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

/*USER:chrono
PASS:klausmariapaula
*/
/*Creacion de usuario*/
CREATE USER 'chronowork'@'localhost' 
IDENTIFIED VIA mysql_native_password USING '***';
GRANT ALL PRIVILEGES ON *.* TO 'chronowork'@'localhost'
REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;CREATE DATABASE IF NOT EXISTS `chronowork`;
GRANT ALL PRIVILEGES ON `chronowork`.* TO 'chronowork'@'localhost';

/*Creacion de tablas*/
CREATE TABLE `chronowork`.`Facultad` 
( 	`IDfacultad` INT NOT NULL , 
	`Nombrefacultad` VARCHAR(50) NOT NULL ,
	 PRIMARY KEY (`IDfacultad`)) ENGINE = InnoDB;

CREATE TABLE `chronowork`.`Curso` 
( 	`IDcurso` INT NOT NULL , 
	`Nombrecurso` VARCHAR(50) NOT NULL , 
	`IDfacultad` INT NOT NULL ,
	 PRIMARY KEY (`IDcurso`)) ENGINE = InnoDB;
ALTER TABLE curso add foreign key (IDfacultad)
    references facultad(IDfacultad);

 CREATE TABLE `chronowork`.`estudiante` 
 ( `IDestudiante` INT NOT NULL , 
 	`Nombreestudiante` VARCHAR(50) NOT NULL , 
 	`IDfacultad` INT NOT NULL , 
 	`Contrasenia` VARCHAR(50) NOT NULL DEFAULT 'password' , 
 	PRIMARY KEY (`IDestudiante`)) ENGINE = InnoDB;
ALTER TABLE estudiante add foreign key (IDfacultad)
    references facultad(IDfacultad);

 CREATE TABLE `chronowork`.`profesor` 
 ( `IDprofesor` INT NOT NULL , 
 	`Nombreprofesor` VARCHAR(50) NOT NULL , 
 	`IDfacultad` INT NOT NULL , 
 	`Contrasenia` VARCHAR(50) NOT NULL DEFAULT 'password' , 
 	PRIMARY KEY (`IDprofesor`)) ENGINE = InnoDB;
ALTER TABLE profesor add foreign key (IDfacultad)
    references facultad(IDfacultad);

CREATE TABLE `chronowork`.`tarea` 
(   `IDtarea` INT NOT NULL , 
	`IDcurso` INT NOT NULL , 
	`Detalletarea` VARCHAR(20) NOT NULL , 
	PRIMARY KEY (`IDtarea`)) ENGINE = InnoDB;
ALTER TABLE tarea add foreign key (IDcurso)
    references curso(IDcurso);

CREATE TABLE `chronowork`.`toma` 
(   `IDestudiante` INT NOT NULL , 
	`IDcurso` INT NOT NULL ) ENGINE = InnoDB;
ALTER TABLE toma add foreign key (IDestudiante)
    references estudiante(IDestudiante);
ALTER TABLE toma add foreign key (IDcurso)
    references curso(IDcurso);

 CREATE TABLE `chronowork`.`dicta` ( 
 	`IDprofesor` INT NOT NULL , 
 	`IDcurso` INT NOT NULL ) ENGINE = InnoDB;
 ALTER TABLE dicta add foreign key (IDcurso)
    references curso(IDcurso);
 ALTER TABLE dicta add foreign key (IDprofesor)
    references profesor(IDprofesor);


 CREATE TABLE `chronowork`.`notas` ( 
 	`IDnota` INT NOT NULL ,
  	`IDestudiante` INT NOT NULL , 
  	`IDtarea` INT NOT NULL , 
  	`Nota` INT NOT NULL , PRIMARY KEY (`IDnota`)) ENGINE = InnoDB;
 ALTER TABLE notas add foreign key (IDestudiante)
    references estudiante(IDestudiante);
 ALTER TABLE notas add foreign key (IDtarea)
    references tarea(IDtarea);

 CREATE TABLE `chronowork`.`definitivas` 
 ( `IDdefinitiva` INT NOT NULL , 
 	`IDestudiante` INT NOT NULL , 
 	`IDcurso` INT NOT NULL , 
 	`Definitiva` INT NOT NULL DEFAULT '0' , 
 	PRIMARY KEY (`IDdefinitiva`)) ENGINE = InnoDB;
 ALTER TABLE definitivas add foreign key (IDestudiante)
    references estudiante(IDestudiante);
 ALTER TABLE definitivas add foreign key (IDcurso)
    references curso(IDcurso);
    ALTER TABLE `definitivas` CHANGE `IDdefinitiva` `IDdefinitiva` INT(11) NOT NULL AUTO_INCREMENT;

 CREATE TABLE `chronowork`.`retroalimentacion` ( 
 	`IDnota` INT NOT NULL , 
 	`Ejecutante`  CHAR(2) NOT NULL , 
 	`Retroalimentacion` TEXT NOT NULL ) ENGINE = InnoDB;
 ALTER TABLE retroalimentacion add foreign key (IDnota)
    references notas(IDnota);






INSERT INTO `facultad`(`IDfacultad`, `Nombrefacultad`) VALUES (01,'Ciencias Basicas e Ingenieria');
INSERT INTO `estudiante`(`IDestudiante`, `Nombreestudiante`, `IDfacultad`, `Contrasenia`) VALUES (1686022,'Klaus Thelen',1,'basededatos');
INSERT INTO `estudiante`(`IDestudiante`, `Nombreestudiante`, `IDfacultad`, `Contrasenia`) VALUES (1686027,'Maria Sanchez',1,'rapconciencia');
INSERT INTO `estudiante`(`IDestudiante`, `Nombreestudiante`, `IDfacultad`, `Contrasenia`) VALUES (1686037,'Johan Franco',1,'vamoaprogramar');
INSERT INTO `profesor`(`IDprofesor`, `Nombreprofesor`, `IDfacultad`, `Contrasenia`) VALUES (2956019,'Laura Medina',1,'simplex');
INSERT INTO `profesor`(`IDprofesor`, `Nombreprofesor`, `IDfacultad`, `Contrasenia`) VALUES (2956023,'Olga Roa',1,'javaalmil');
INSERT INTO `profesor`(`IDprofesor`, `Nombreprofesor`, `IDfacultad`, `Contrasenia`) VALUES (2956051,'Alfonso Valencia',1,'SuP3R_ZeKuRePa2SsW00Rf');
INSERT INTO `curso`(`IDcurso`, `Nombrecurso`, `IDfacultad`) VALUES (4567123,'Programacion Lineal',1);
INSERT INTO `curso`(`IDcurso`, `Nombrecurso`, `IDfacultad`) VALUES (4567134,'Ingenieria de Software',1);
INSERT INTO `curso`(`IDcurso`, `Nombrecurso`, `IDfacultad`) VALUES (4567143,'Seguridad Informatica',1);
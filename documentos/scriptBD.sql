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
	`Nombrefacultad` VARCHAR(20) NOT NULL ,
	 PRIMARY KEY (`IDfacultad`)) ENGINE = InnoDB;

CREATE TABLE `chronowork`.`Curso` 
( 	`IDcurso` INT NOT NULL , 
	`Nombrecurso` VARCHAR(20) NOT NULL , 
	`IDfacultad` INT NOT NULL ,
	 PRIMARY KEY (`IDcurso`)) ENGINE = InnoDB;
ALTER TABLE curso add foreign key (IDfacultad)
    references facultad(IDfacultad);


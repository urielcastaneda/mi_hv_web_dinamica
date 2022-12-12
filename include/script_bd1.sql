-- Creación de la base de datos web_personal_APRENDIZ  incorporando el juego 
-- de caracteres   utf8_spanish_ci
-- En caso de ya tener creada la Base de datos, comentar la linea que incluye el comando CREATE DATABASE.
CREATE DATABASE web_personal_APRENDIZ CHARACTER SET utf8 COLLATE utf8_spanish_ci;

-- Seleccionamos la Nueva Base de datos
-- se posiciona el control sobre dicha base
USE web_personal_APRENDIZ;

-- Creación de la tabla ESTUDIOS
-- Primero borramos la tabla anterior en caso que esta exista.
DROP TABLE IF EXISTS estudios;

-- aquí creamos la tabla 
CREATE TABLE  estudios (
    id  			 int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    tipo_estudio	 varchar (25) NOT NULL,
    nombre_estudio	 varchar (60) NOT NULL,    
	institucion_educ varchar (60) NOT NULL,
	ciudad			 varchar (40),
	fecha_graduacion DATE,
	cantidad_horas   int )
ENGINE = InnoDB DEFAULT CHARSET = utf8  COLLATE utf8_spanish_ci;


-- Aquí insertamos todos los registros en la tabla estudios
INSERT INTO estudios (tipo_estudio, nombre_estudio, institucion_educ, ciudad, fecha_graduacion, cantidad_horas) VALUES 
('Posgrado', 'Especialización en Negocios en Internet', 'Universidad ICESI - Universidad de la Sabana','Chia','2004-10-04',null),
('Especialización técnica','Especialización en Gerencia de Proyectos', 'SENA','Villeta','2013-05-05',550),
('Profesional','Ingeniería de Sistemas', 'Universidad Católica de Colombia','Bogotá','1998-03-28',null),
('Tecnologia','Sistematización de Datos', 'Universidad Católica de Colombia','Bogotá','1991-06-30',null),
('Bachillerato técnico','Bachiller Técnico en Mecánica Industrial', 'Instituto técnico central - La Salle','Bogotá','1988-12-06',null),
('Diplomado', 'Gerencia de Proyectos bajo lineamintos PMI', 'Universidad Piloto','Bogotá','2016-12-10',null);

--  HASTA AQUÍ LA CREAción DE LA TABLA DE ESTUDIOS 




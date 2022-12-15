-- base de datos web_personal_APRENDIZ   

-- Seleccionamos la Base de datos
-- se posiciona el control sobre dicha base
USE web_personal_APRENDIZ;

-- Creación de la tabla EXPERIENCIA
-- Primero borramos la tabla anterior en caso que esta exista.
DROP TABLE IF EXISTS experiencia;

-- aquí creamos la tabla 
CREATE TABLE  experiencia (
    	id  			 int PRIMARY KEY NOT NULL AUTO_INCREMENT,
		nombre_empresa 		varchar (80) NOT NULL,
		dir_empresa			  varchar (80) NOT NULL,
    	ciudad_empresa    varchar (40) NOT NULL,
		tel_empresa       varchar (45) NOT NULL,
		fecha_inicial     DATE NOT NULL,
		fecha_final       DATE,
    	es_trabajo_actual char (1) NOT NULL,
		periodos_cantidad int NOT NULL,
		periodos_nombre   varchar (20) NOT NULL,    
		jefe_inmediato    varchar (50),
		nombre_cargo      varchar (80),
		departamento_empresa  varchar (80),
		detalle_actividades	  varchar (1000) )
ENGINE = InnoDB DEFAULT CHARSET = utf8  COLLATE utf8_spanish_ci;


-- Aquí insertamos todos los registros en la tabla estudios
INSERT INTO experiencia (nombre_empresa, dir_empresa, ciudad_empresa, tel_empresa, fecha_inicial, fecha_final,
 es_trabajo_actual, periodos_cantidad, periodos_nombre, jefe_inmediato, nombre_cargo, departamento_empresa, 
 detalle_actividades) VALUES 
('SENA – Centro de Desarrollo Agroindustrial  y Empresarial', 'Calle 2 # 13-03  Villeta', 'Villeta - Cundinamarca', '8446474  - 5461500 ext. 17351 y 1737', '2011-02-09', '2022-12-19', 
'S', 11, 'años', 'Alejandro Sierra, Hernando Martínez', 'Instructor Contratista', 'Área de Gestión Tecnológica en Informática, diseño y desarrollo de software', 
'Orientar el desarrollo de los programas de formación titulada en Análisis y Desarrollo de Software, Bases de datos, programación de Software, Formulación de Proyectos y en Diagnóstico y Consultoría Empresarial, diseñando y ejecutando las sesiones de clase y proyectos académicos orientando a los aprendices del SENA.'),

('Banco BBVA', 'Bogotá Cra 9 # 72-21', 'Bogotá', 'Tel 312121212', '1991-04-01', '2007-05-31', 
'N', 16, 'años', 'Adriana Herrera', 'Especialista de Productos Internet', 'Unidad de Marketing y Estrategia', 
'Diseño y Administración de productos y servicios Bancarios ofrecidos a través de los canales electrónicos de BBVA: BBVA net (Personas naturales) y BBVA net empresas (Personas jurídicas), Línea BBVA (Banca telefónica) y Cajeros automáticos. Partícipe del premio otorgado al Banco BBVA como mejor página WEB Transaccional del sector Bancario en el año 2005');

--  HASTA AQUÍ LA CREAción DE LA TABLA DE ESTUDIOS 


  



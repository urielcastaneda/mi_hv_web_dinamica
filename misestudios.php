<?php
  //  Archivo Componente:  miexperiencia.php
  //  Proyecto:  Página Web  Mi hoja de vida personal
  // --------------------------
  //  En este archivo se establace la estructura de la página WEB  del módulo 
  //  EXPERIENCIA LABORAL (página MiExperiencia) del sitio web. 
  //  En su orden, aquí se organizan los COMPONENTES que conforman la página:
  //  - Parámetros que configuran la página, Cabecera, Navegacón, cuerpo <main> y Pie de página  
 
  //  ------ en este espacio insertamos el código PHP  necesario para 
  //  iniciar y ejecutar procesos en el servidor al momento de construir la página  

   
?>
<!--   Parámetros de configuración de la página web  HTML -->
<!DOCTYPE html>
<html lang="es">
	<head>
	   <title>Mi hoja de vida</title>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	 
	   <link rel="icon" href="imagenes/icono_web1.png" type="image/png" sizes="20x20">
	   <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

  <!--  Aquí inicia la definición de la Estructura general o CUERPO de la página WEB -->
	<body>

<?php  
    // --- Importamos el componente <header> definido en el archivo cabecera.php 
    include("header.php");

    // --- Importamos el componente <nav> definido en el archivo menu.php 
    include("nav.php");   

    // --- Importamos los metodos de ayuda para seguimiento y otras herramientas de conversión de datos
    include("./include/herramientas.php");   	

    // --- Importamos los métodos encargados de la conexión y gestión con la base de datos  
    include("./include/conect.php");   	    
?>
    <!-- Módulo funcional:  INDEX  (Home page) -->
    <!-- Aquí inicia el código que estructura el CUERPO PRINCIPAL este MODULO del sistema -->

    <main>    <!-- definimos los contenidos agrupados en la etiqueta <main> -->

<?php
//  -- Lanzamos la conexión con la base de datos
//     para este ejemplo se asumirá que los datos están correctos, sin embargo
//     es necesario implementar una mejora posterior que controle los posibles errores de conexión
$LinkBD=Conectarse("localhost" , "root" , "root" , "web_personal_APRENDIZ");	

//  -- Ejecutamos el QUERY (consulta) para extraer la información requerida
$ScriptSQL = "SELECT * FROM estudios"; 

if ($DatosEstudio = mysqli_query($LinkBD, $ScriptSQL )) {

	// -- Iniciamos la publicación de los datos, mostrando la cabecera de la tabla.
	//    en este caso, un solo renglón con el título  "Estudios Realizados"
	echo "<table width='700' border='1' class='tabla' align='center'>";
	echo "<tr><td colspan='3' class='titulotabla'>Estudios Realizados</td></tr>";
	echo "<tr class='titulotabla'></tr></table>";
	echo "<br>";
  
	// -- inicio ciclo repetitivo que recorre la matriz de $DatosEstudio procesando línea por línea
	//    los datos serán distribuidos en las diferentes celdas de la tabla (plantilla prediseñada)
	while($fila = mysqli_fetch_array($DatosEstudio)){
		write_to_console($fila);
    // -- write_estado_var($fila); 
		// -- analizamos si el estudio a mostrar tiene horas reportadas. 
		//    esto para evaluar si se debe mostrar o no este campo en la tabla
		if (is_null($fila['cantidad_horas'])) {
			$Horas = 0;
			$HorasColspan = "colspan='2'";
		}
		else {
			$Horas = $fila['cantidad_horas'];
			$HorasColspan = "";
		}
    // -- A continuación renderizamos la plantilla de ESTUDIOS con la informacion de cada registro...

		echo "<table width='700' border='1' class='tabla' align='center' >";
		echo "<tr class='listado'>";
		echo "<td><div class='labelTab1'>Tipo de estudio cursado<br></div>" . $fila['tipo_estudio'] . "</td>";
		echo "<td colspan='2' ><div class='labelTab1'>Nombre<br></div>" . $fila['nombre_estudio'] . "</td>";
		echo "</tr>";	
		echo "<td colspan='3' ><div class='labelTab1'>Institución Educativa<br></div>" . $fila['institucion_educ'] . "</td>";
		echo "</tr>";	
		echo "<td $HorasColspan><div class='labelTab1'>Ciudad<br></div>" . $fila['ciudad'] . "</td>";
		echo "<td><div class='labelTab1'>Fecha de finalización<br></div>" . $fila['fecha_graduacion'] . "</td>";
		if ($Horas>0) echo "<td><div class='labelTab1'>Horas<br></div>$Horas</td>";
		echo "</tr>";
		echo "</table><br>";	
		}  // --- aquí finaliza el ciclo while
    // -- liberar el conjunto de resultados 
    mysqli_free_result($DatosEstudio);

  }
  else {
    printf("Hubo errores al leer los datos");
  }

  		//Cerrar la conexión con el servidor de bases de datos:
      mysqli_close($LinkBD);

?>
	</main>  <!-- Aquí termina la definición del cuerpo principal del módulo funcional -->

<?php  
    // --- Importamos el componente <footer> definido en el archivo cabecera.php 
    include("footer.php");
?>

	</body>
</html>
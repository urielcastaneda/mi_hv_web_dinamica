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
	  <PageMap>   
    		<DataObject type="thumbnail">
      		<Attribute name="src" value="http://urielcastanedasierra.infinityfreeapp.com/imagenes/foto_hv1.png"/>		
      		<Attribute name="width" value="100"/>
      		<Attribute name="height" value="100"/>
    		</DataObject>
  	</PageMap>	
	  <meta name="description" content="Hoja de vida de Uriel Castañeda Sierra. ingeniero de sistemas, especialista en negocios en Internet y gestión de proyectos de tecnología." />
	  <meta charset="utf-8">
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
$ScriptSQL = "SELECT * FROM experiencia"; 

if ($DatosExperiencia = mysqli_query($LinkBD, $ScriptSQL )) {

	// -- Iniciamos el SCRIPT que publicará la cabecera  del listado 
	//    en este caso, un solo renglón con el título  "Experiencia Laboral"
	$ScriptHTML = "<br><h2>Mi Experiencia Laboral</h2>";

	// -- inicio ciclo repetitivo que recorre la matriz de $DatosExperiencia y extrae cada registro
  //    los datos serán distribuidos en las diferentes celdas de la plantilla prediseñada.
  $ContadorItems=0;
	while($fila = mysqli_fetch_array($DatosExperiencia)){
		write_to_console($fila);
    // -- write_estado_var($fila); 

    $ContadorItems++;
    // -- validamos si es TRABAJO ACTUAL  para cambiar el contenido del campo fecha final por "Actual"
    if($fila['es_trabajo_actual'] = "S") $FechaFin = "Actual";
    else $FechaFinal = 'al ' . $fila['fecha_final'];

    // -- Identificamos la plantila a utilizar item PAR  o IMPAR
    if($ContadorItems%2==0)  $ClasePlantilla = 'ItemExperiencia1';
    else $ClasePlantilla = 'ItemExperiencia2';

    // -- write_estado_var($fila); 
    $NombreEmpresa = $fila['nombre_empresa'];
    $DirEmpresa = $fila['dir_empresa'];
    $TelEmpresa = $fila['tel_empresa'];
    $FechaInicial =  $fila['fecha_inicial'];
    $FechaFinal = $fila['fecha_final'];
    $PeriodosCantidad = $fila['periodos_cantidad'];
    $PeriodosNombre =  $fila['periodos_nombre'];
    $JefeInmediato =   $fila['jefe_inmediato'];
    $NombreCargo  =   $fila['nombre_cargo'];
    $DepartamentoEmpresa = $fila['departamento_empresa'];
    $DetalleActividades = $fila['detalle_actividades'];
    // Aquí se inicia el proceso para RENDERIZAR el componente que muestra los datos del registro
    // Construimos el Script con código HTML que será publicado


    $ScriptHTML =  $ScriptHTML . "<article class=$ClasePlantilla >" . 
          "<DIV class='NombreEmpresa'> " . $NombreEmpresa . "</DIV>
          <DIV class='DirEmpresa'> " . $DirEmpresa . "<br>Tel " . $TelEmpresa . "<br></DIV>";

    $ScriptHTML =  $ScriptHTML . "<DIV class='PeriodoTrabajado'>
              <DIV class='TituloLiteral'>Periodo de trabajo:</DIV> " .
                  $FechaInicial . "  "  . $FechaFinal . " (" . $PeriodosCantidad . " " . $PeriodosNombre . ")<br>
              <DIV class='TituloLiteral'>Jefe Inmediato: </DIV>" .
                  $JefeInmediato . " </DIV>";

    $ScriptHTML =  $ScriptHTML . "<DIV class='DescripcionCargo'>
              <i><u><h3>Cargo:</h3></u></i>  
              <p>$NombreCargo - $DepartamentoEmpresa</p>
              <i><h3>Actividades desarrolladas:</h3></i>
              <p>$DetalleActividades</p>						
           </DIV>";

    $ScriptHTML =  $ScriptHTML . "</article><br>";

    // finalizamos el script que configura la publicación de un bloque de datos (registro).
    // publicamos el Script con la plantilla del registro Renderizada.
    write_to_console($fila);
    write_to_console($ScriptHTML);
    //write_estado_var($ScriptHTML);
    echo $ScriptHTML;
    $ScriptHTML = "";   // blanqueamos el Script para Renderisar el siguiente

  }  // --- aquí finaliza el ciclo while
  // -- liberar el conjunto de resultados 
  mysqli_free_result($DatosExperiencia);

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
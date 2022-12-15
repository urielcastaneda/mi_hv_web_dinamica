<?php
  //  Archivo Componente:  conect.php
  //  Proyecto:  Página Web  Mi hoja de vida personal
  //  Este archivo contiene la librería de funciones mySQL para conectar con la base de datos 
  //  y para realizar operaciones sobre las diferentes tablas que la conforman.

// Configure aquí los parámetros para conexión LOCAL  y REMOTA
// DEJAR ACTIVA SOLO UNA según el caso.  
// Al subir al servidor remoto desactive (comentariar) la conexión local
// Al trabajar localmente desactivar (comentariar) la conexión remota 

// ----  CONEXION LOCAL ------
$SERVIDOR = "localhost";
$USUARIO = "root";
$CONTRASENA = "root";
$BASEDATOS = "web_personal_APRENDIZ";

// ----  CONEXION REMOTA --------------------------------------------------
    // *** IMPORTANTE *** A nivel LOCAL PROTEJA ESTA INFORMACIÓN
    //  --- preferiblemente deje estos datos en blanco o ENMASCARADOS
    //      Porque aquí usted está registrando los datos de HOST, USUARIO Y PASSWORD 
    //      y su sitio WEB será vulnerable si esta información es conocida por otras personas
    //   SOLAMENTE REEMPLACE ESTOS DATOS CUANDO EL CODIGO ESTÉ EN EL SERVIDOR
    //       
// $SERVIDOR = "ABCDEF.epizy.com";
// $USUARIO = "epiz_99999999";
// $CONTRASENA = "70707070707070";
// $BASEDATOS = "epiz_33445566_web_personal_APRENDIZ";
// -----------------------------------------------------------------------

function Conectarse( $servidor , $usuario , $contrasena , $basedatos  ) {
 
  // --- aquí se realiza el intento de conexión con los datos suministrados
  if (!($link = mysqli_connect($servidor, $usuario, $contrasena))) 	  
  {
    echo "Error al conectar con el servidor de base de datos.<br/>";
    //  --- En caso de error el proceso termina forzadamente.    
    exit();
  } 
  else 
  {
    //echo "Conexión a la base de datos satisfactoria.<br/>";
  }
  if (!mysqli_select_db($link, $basedatos)) 
  {
    echo "Error al conectar al servidor de BD, no existe la base de datos ($basedatos).<br/>";
    // --- En caso de error  el proceso termina forzadamente.    
    exit();
  } 
  else 
  {
    if (!mysqli_set_charset($link, "utf8")) 
    {
      printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($link));
      exit();
    }
  }
  return $link; 
}

?>
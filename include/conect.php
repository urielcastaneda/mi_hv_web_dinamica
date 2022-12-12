<?php
  //  Archivo Componente:  conect.php
  //  Proyecto:  Página Web  Mi hoja de vida personal
  //  Este archivo contiene la librería de funciones mySQL para conectar con la base de datos 
  //  y para realizar operaciones sobre las diferentes tablas que la conforman.

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
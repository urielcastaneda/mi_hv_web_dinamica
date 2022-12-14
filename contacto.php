<?php
  //  Archivo Componente:  contacto.php
  //  Proyecto:  Página Web  Mi hoja de vida personal
  // --------------------------
  //  En este archivo se establace la estructura de la página WEB  del módulo 
  //  CONTACTO (página Conntacto) del sitio web. 
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
     <meta name="keyworks" content="HTML, CSS, JavaScript, web, página, curriculum">

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
?>
    <!-- Módulo funcional:  INDEX  (Home page) -->
    <!-- Aquí inicia el código que estructura el CUERPO PRINCIPAL este MODULO del sistema -->

    <main>   <!-- definimos los contenidos agrupados en la etiqueta <main> -->

      <section id="section_contacto"> 
        <br><h2>Formulario de Contacto</h2>
        <!-- iniciamos definición del formulario con las celdas para ingreso de datos -->
        <p>Envíanos tus datos de contacto y tu consulta o inquietudes. Pronto nos comunicaremos contigo. Mil gracias por tu consulta.</p> 

        <form id='formulario_contacto' class='contacto'>
          <div><label>Tu Nombre:</label>
              <input type='text' value=''></div>
          <div><label>Tu Email:</label>
              <input type='text' value=''></div>
          <div><label>Asunto:</label>
              <input type='text' value=''></div>
          <div><label>Mensaje:</label>
              <textarea rows='6'></textarea></div>
          <div><input type='submit' value='Envía Mensaje'></div>
        </form>

        <figure>
          <img src="imagenes/construccion_web2.png"  alt="web en construcción..."  title="Estamos construyendo un mejor futuro..." height="150">
	    </figure>        

      </section>

    </main> <!--   Aquí termina la definición del cuerpo principal del módulo funcional -->

<?php  
    // --- Importamos el componente <footer> definido en el archivo cabecera.php 
    include("footer.php");
?>

	</body>
</html>
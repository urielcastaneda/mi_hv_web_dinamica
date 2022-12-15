<?php
  //  Archivo Componente:  index.php
  //  Proyecto:  Página Web  Mi hoja de vida personal
  // --------------------------
  //  En este archivo se establace la estructura de la página WEB  del módulo 
  //  INDEX (HOME PAGE  o Página principal) del sitio web. 
  //  En su orden, aquí se organizan los COMPONENTES que conforman la página:
  //  - Parámetros que configuran la página, tales como: 
  //     Versión de html e idioma de la página
  //     Título e ícono que se mostrará en la pestala del navegador
  //     Juego de caracteres compatibles con, en este caso UTF-8  para latinoamérica
  //     Archivo que contiene los estilos CSS
  //  - Cabecera, 
  //  - Navegacón, 
  //  - Cuerpo principal (<Main>) en este caso, el HOME PAGE   
  //  - Pie de página  
 
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
?>
    <!-- Módulo funcional:  INDEX  (Home page) -->
    <!-- Aquí inicia el código que estructura el CUERPO PRINCIPAL este MODULO del sistema -->

    <main>    <!-- definimos los contenidos agrupados en la etiqueta <main> -->
                   
      <section id="section_perfil"> <!-- definimos secciones de contenidos (LADO IZQUIERDO) -->
        <article id="article1"><p id="Tit_Articulo">Mi perfil profesional</p>
          <p>Como profesional en programación de software y
            diseñador web, poseo los conocimientos habilidades 
            para desempeñarme en diferentes cargos afines con mi
            profesión. Entre ellos:</p>    		
          <ul>
            <li>Analista de sistemas</li>
            <li>Desarrollador de software</li>
            <li>Administrador de bases de datos</li>        	
          </ul>		
        </article>              
        <article id="article2">
          <p>(aquí presento el texto de mi segundo artículo)</p>
          <ul>
            <li>....</li>
            <li>....</li>
          </ul>              		
        </article>
      </section>  <!-- Aquí termina la 1a. sección de contenidos (2 artículos) -->
        
      <aside>      <!-- definimos el bloque del LADO DERECHO -->
        <!-- Aquí mostramos el menú de redes sociales. Se incluyen los íconos y links cada red -->
        <img src="imagenes/arrow.png" alt="" id="arrow">
        <p>Conoce más a cerca de mí !</p>
        <p>consúltame en... </p>          
        <ul>
          <li><a href="http://www.facebook.com"> 
            <img src="imagenes/Facebook_icon.jpg" alt="ícono Facebook" title="mi perfil en Facebook"></a></li>

          <li><a href="http://www.twitter.com"> 
            <img src="imagenes/Twitter_Icon.jpg" alt="ícono Twitter" title="mi perfil en Twitter"></a></li>

          <li><a href="http://www.instagram.com"> 
            <img src="imagenes/Instagram_Icon.jpg" alt="ícono instagram" title="mi perfil en instagram"></a></li> 
                          
          <li><a href="http://www.youtube.com"> 
            <img src="imagenes/Youtube_icon.jpg" alt="ícono youtube" title="mi perfil en youtube"></a></li>  
        </ul>      	
      </aside> <!-- Aquí terminan los comonentes del sector lateral -->

      <section id="section_mi_proyecto"> <!-- Aquí definimos la segunda sección de contenidos -->
        <article>
          <p> Mi proyecto de vida... </p>
          <table border="1">
            <tr>
              <td>				
                <img id="ImgMiProyecto1" src="imagenes/miProyecto.jpg" alt="miProyecto.jpg" title="Mi Proyecto">
                <br>
              </td>
              <td><p>Graduarme como profesional en programación de software y desempeñarme
                  en actividades de investigación y desarrollo tecnológico.</p>
              </td>
            </tr>
          </table>
        </article>
      </section>

	  </main>  <!-- Aquí termina la definición del cuerpo principal del módulo funcional -->

<?php  
    // --- Importamos el componente <footer> definido en el archivo cabecera.php 
    include("footer.php");
?>

	</body>
</html>
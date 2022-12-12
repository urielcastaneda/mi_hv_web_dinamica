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

      <section>  <!-- definimos secciones de contenidos (LADO IZQUIERDO) -->
        <article id="article1">
          <p>aquí presento el texto de mi primer artículo</p>
        </article>

        <article id="article2">
          <p>aquí presento el texto de mi segundo artículo </p>
          <ul>
            <li>....</li>
            <li>....</li>
            <li>....</li>

          </ul>
        </article>

      </section>  <!-- Aquí termina la sección de artículos -->

      <aside>  <!-- definimos el bloque del LADO DERECHO -->
        <p> Aquí mostramos el menú de redes sociales</p>
        <p> incluiremos los íconos y links cada red</p>

      </aside> <!-- Aquí terminan los apartados o comentarios -->
        
      <section id="mi_proyecto"> <!-- Aquí definimos la segunda sección de contenidos -->
        <article>
          <p> En este artículo escribimos nuestro Proyecto de vida... </p>
          <table border="1">
            <tr>
              <td>				
                <img id="ImgMiProyecto1"   src="imagenes/miProyecto.jpg" alt="miProyecto.jpg"
                title="Mi Proyecto" ><br>
                .... </td><td><p>Graduarme como profesional en
                  programación de software y desempeñarme
                  en actividades de investigación y desarrollo
                  tecnológico.</p></td>
            </tr></table>
        </article>
      </section> <!-- Aquí termina la 2a sección de contenidos -->

	  </main>  <!-- Aquí termina la definición del cuerpo principal del módulo funcional -->

<?php  
    // --- Importamos el componente <footer> definido en el archivo cabecera.php 
    include("footer.php");
?>

	</body>
</html>
<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

include 'php/conexion_be.php';

$usuario = $_SESSION['usuario'];

$query = "SELECT nombre_completo FROM usuarios WHERE usuario = '$usuario'";

$resultado = mysqli_query($conexion, $query);

$row = mysqli_fetch_array($resultado);


mysqli_close($conexion);
?>

<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/homestyles.css">
    <link rel="stylesheet" href="css/code.css">
    <link rel="stylesheet" href="css/footer.css">
    <meta charset="UTF-8">
    <link rel="icon" href="logo/ico.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
		body {
			background-color: white;
			color: black;
		}
		
		body.dark-mode {
			background-color: black;
			color: white;
		}
	</style>
    </head>
<body>
<script>

var darkMode = localStorage.getItem('darkMode');

if (darkMode === 'enabled') {
  document.body.classList.add('dark-mode');
}
</script>
  <div class="sidebar">
    <div class="logo-details">
        <div class="image-text">
            <span class="image">
                <img  src="logo/ico.ico" type="logo">

            </span>
        </div>
        <div class="logo_name" id="btn">TechLearn</div>
    </div>
    <ul class="nav-list">

    <li>
        <a class="toolmg" href="home.php">
          <i class='bx bx-grid-alt'></i>
          <p><span class="links_name">Home</span></p>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
      <a class="toolmg" href="blog.php">
           <i class='bx bxs-chat' ></i>
             <span class="links_name">Blog</span>
           </a>
           <span class="tooltip">Blog</span>
         </li>
      <li>
       <a target="_blank" class="toolmg" href="https://github.com/Neosowo">
        <i class='bx bx-code'></i>
         <span class="links_name">Developer</span>
       </a>
       <span class="tooltip">Developer</span>
     </li>

<li class="deslog">
  <a class="toolmg" href="php/cerrar_sesion.php">
      <i class="bx bx-log-out icon"></i>
      <span class="links_name">Logout</span>
  </a>
  <span class="tooltip">Logout</span>
</li>


<li class="xd"onclick="toggleDarkMode()" >
  <a class="toolmg">
      <i class="" id="dark-mode-button"></i>
      <span class="links_name">Mode</span>
  </a>
  <span class="tooltip">Mode</span>
</li>


</ul>
  </div>

 
  <section class="home-section">
      <p><div class="text"><a href="home.php">Home</a><i class='bx bx-chevron-right bx-xs' ></i> Diseño Web  </p>
      </div>
      <section class="text-section">

      <h3>Diseño Web Responsivo</h3>
<p>El diseño web responsivo se ha convertido en una práctica esencial en la era de la tecnología moderna. Su origen se remonta a la necesidad de adaptar los sitios web a la creciente variedad de dispositivos y tamaños de pantalla utilizados para acceder a Internet. A medida que los teléfonos inteligentes y las tabletas ganaron popularidad, surgió la necesidad de crear sitios web que fueran amigables con estos dispositivos móviles.</p>
<p>En la actualidad, el diseño web responsivo se logra mediante el uso de CSS media queries y unidades de medida flexibles, permitiendo que los sitios web se adapten de manera dinámica al tamaño de la pantalla del usuario.</p>

<h3>Diseño de Interfaz de Usuario (UI)</h3>
<p>La Interfaz de Usuario, o UI, es la parte visible y tangible de un sitio web o aplicación que los usuarios interactúan directamente. Incluye la disposición de elementos como botones, menús, campos de entrada y elementos de navegación, así como la elección de colores, tipografía e imágenes.</p>
<p>El diseño de UI se enfoca en crear una experiencia atractiva y fácil de usar para los usuarios, colaborando estrechamente con los diseñadores de UX (Experiencia de Usuario) para garantizar la intuición y eficacia en la navegación del usuario.</p>

<h3>Diseño de Experiencia de Usuario (UX)</h3>
<p>El Diseño de Experiencia de Usuario, o UX, va más allá de la apariencia visual y se centra en la usabilidad, la navegación y la arquitectura de la información al interactuar con un sitio web o aplicación.</p>
<p>Los diseñadores de UX buscan comprender las necesidades y expectativas de los usuarios, diseñando el flujo de navegación de manera intuitiva y eficiente para aumentar la satisfacción del usuario, la retención y la conversión.</p>

<h3>Diseño Gráfico Web</h3>
<p>El Diseño Gráfico Web se centra en la creación de elementos gráficos para sitios web, como logotipos, iconos, ilustraciones y gráficos. Utilizando herramientas como Adobe Photoshop e Illustrator, los diseñadores gráficos web mejoran la estética y la identidad visual de un sitio.</p>
<p>Además de los aspectos estéticos, los diseñadores gráficos web deben considerar la legibilidad, la coherencia y la accesibilidad de los elementos gráficos en el contexto del diseño general del sitio web.</p>

<h3>Desarrollo Front-End</h3>
<p>El Desarrollo Front-End se refiere a la codificación y programación de la parte visible de un sitio web con la que los usuarios interactúan, utilizando HTML para la estructura, CSS para el estilo y JavaScript para la interactividad.</p>
<p>Los desarrolladores front-end trabajan en colaboración con los diseñadores para traducir el diseño visual en código funcional, asegurándose de que el sitio web se vea y funcione como se espera, con énfasis en la optimización de velocidad, compatibilidad entre navegadores y accesibilidad.</p>

<h3>Diseño de Comercio Electrónico</h3>
<p>El Diseño de Comercio Electrónico se centra en la creación de sitios web para la venta de productos o servicios en línea, incluyendo catálogos, carritos de compra y procesos de pago seguros.</p>
<p>El diseño de comercio electrónico busca fomentar la confianza del cliente, facilitar la búsqueda y la navegación de productos, y garantizar una experiencia de compra sin problemas, destacando imágenes de productos, descripciones detalladas y opciones de seguridad.</p>

<h3>Diseño de Blogs</h3>
<p>El Diseño de Blogs se enfoca en la presentación efectiva de contenido en formato de blog, organizando artículos, categorías, etiquetas y comentarios para mejorar la experiencia de lectura y navegación de los usuarios.</p>
<p>Utilizando plantillas y diseños que destacan las publicaciones más recientes y populares, el diseño de blogs prioriza la legibilidad y la facilidad de navegación para ayudar a los usuarios a consumir y explorar el contenido de manera eficiente.</p>

<h3>Diseño de Portafolios en Línea</h3>
<p>El Diseño de Portafolios en Línea se refiere a la creación de sitios web que muestran proyectos y trabajos de diseñadores, artistas y profesionales creativos. Estos portafolios en línea actúan como una vitrina de las habilidades y experiencias de los individuos.</p>
<p>El diseño se centra en presentar proyectos de manera atractiva, utilizando imágenes de alta calidad, descripciones detalladas y ejemplos visuales que destacan las capacidades del creador. Además, la navegación y la estructura del portafolio son críticas para permitir a los visitantes explorar y conocer mejor el trabajo presentado.</p>

      </div>
  
</section>
  </section>

<script>
  let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");
closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();
});
searchBtn.addEventListener("click", ()=>{ 
  sidebar.classList.toggle("open");
  menuBtnChange(); 
});

function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
 }
}


function toggleDarkMode() {
  var section = document.querySelector(".home-section");
  var button = document.querySelector("#dark-mode-button");
  var root = document.querySelector(":root");

  if (section.style.backgroundColor === "rgb(18, 18, 18)") {

    section.style.backgroundColor = "#fff";
    section.style.color = "#1d1b31"; 

    button.innerHTML = '<i class="bx bxs-toggle-right bx-sm"></i> ';
    localStorage.setItem("darkMode", "false"); 
  } else {
    section.style.backgroundColor = "rgb(18, 18, 18)";

    section.style.color = "#fff"; 
    button.innerHTML = '<i class="bx bxs-toggle-left bx-sm"></i>';
    localStorage.setItem("darkMode", "true"); 
  }
}


document.addEventListener("DOMContentLoaded", function() {
    var darkMode = localStorage.getItem("darkMode"); // Obtener preferencia del usuario
    var section = document.querySelector(".home-section");
    var button = document.querySelector("#dark-mode-button");
  
    if (darkMode === "true") {
      // Modo oscuro
      section.style.backgroundColor = "rgb(18, 18, 18)";
      section.style.color = "#fff";  // Cambia el color del texto
      button.innerHTML = '<i class="bx bxs-toggle-left bx-sm"></i>';
    } else {
      // Modo claro
      section.style.backgroundColor = "#fff";
      section.style.color = "#1d1b31";  // Cambia el color del texto, no blanco del todo
      button.innerHTML = '<i class="bx bxs-toggle-right bx-sm"></i> ';
    }
  });
  

</script>
  <script src="js/darkmode.js"></script>
  <script src="js/configuser.js"></script>

</body>
<footer style="background-color: #0b0b0b; color: #fff; padding: 1px 0;">

  <hr style="border-color: #fff;">
  <div class="row">
    <div style="display: flex; align-items: center; justify-content: center; ">
      <img src="logo/ico.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 10px;">
      <p id="note-animation">TechLearn</p>
    </div>
    <div style="display: flex; align-items: center; justify-content: center; ">
      <p id="credithome" style="font-size: 14px; margin-top: 5px; ">© 2023 Developed by Neos</p>
    </div>
  </div>
</div>
</footer>

</html>
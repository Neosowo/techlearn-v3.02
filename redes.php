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
    <title>Redes</title>
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
      <p><div class="text"><a href="home.php">Home</a><i class='bx bx-chevron-right bx-xs' ></i> Redes  </p>
 

      </div>
  
      <section class="text-section">
        
        <div class="section">
          <h2 style="text-align: center;">Redes propiamente dichas                                            </h2>
          <h3>Redes Definidas por Software o SDN</h3>
          <div class="content">
              <p>Las Redes Definidas por Software (SDN) son una innovadora arquitectura de red que ha revolucionado la forma en que las redes son gestionadas y configuradas. En lugar de depender de la configuración específica de hardware, SDN separa la capa de control de la capa de datos, lo que permite una gestión centralizada y programable de la red.</p>
              <p>Esta separación permite a los administradores de red controlar dinámicamente el tráfico, implementar políticas de seguridad y mejorar la escalabilidad de la red sin tener que realizar cambios físicos en los dispositivos.</p>
              <p>SDN se ha convertido en un elemento fundamental en la evolución de las redes, permitiendo una mayor flexibilidad y eficiencia en una amplia variedad de aplicaciones, desde centros de datos hasta redes empresariales y proveedores de servicios.</p>
          </div>
      </div>
  
      <div class="section">
          <h3>Redes de Área Amplia Definidas por Software o SD-WAN</h3>
          <div class="content">
              <p>Las Redes de Área Amplia Definidas por Software (SD-WAN) son una evolución natural de la tecnología SDN que se enfoca en la gestión de redes de área amplia, como las redes empresariales que abarcan múltiples ubicaciones geográficas.</p>
              <p>Con SD-WAN, las organizaciones pueden optimizar el rendimiento de sus redes al utilizar múltiples conexiones, como líneas de datos y VPN, de manera eficiente y segura. Esto se logra a través de la gestión inteligente del tráfico, la selección dinámica de rutas y la priorización de aplicaciones críticas.</p>
              <p>Además de mejorar el rendimiento, SD-WAN brinda mayor agilidad a las empresas, permitiéndoles adaptarse rápidamente a cambios en las necesidades de conectividad y reducir los costos asociados con las redes de área amplia tradicionales.</p>
              <img src="https://cdn.discordapp.com/attachments/996503150439706796/1153494492142374982/sdwan.png" alt="SD-WAN" class="responsiveimg">
          </div>
      </div>
  
      <div class="section">
          <h3>Internet de las cosas </h3>
          <div class="content">
              <p>Internet de las cosas (IoT) representa una revolución en la interconexión de dispositivos y objetos en todo el mundo. En el corazón de IoT se encuentra la capacidad de recopilar y compartir datos entre dispositivos y sistemas a través de Internet.</p>
              <p>Esto ha llevado a avances significativos en una amplia variedad de industrias, como la salud (dispositivos médicos conectados), la manufactura (automatización industrial), la agricultura (sensores agrícolas), y la domótica (hogares inteligentes).</p>
              <p>La promesa de IoT radica en su capacidad para mejorar la eficiencia, la toma de decisiones basadas en datos y la comodidad en la vida cotidiana. Sin embargo, también plantea desafíos importantes en términos de seguridad y privacidad de datos, que deben abordarse adecuadamente.</p>

          </div>
      </div>
  
      <div class="section">
          <h3>Seguridad en Redes</h3>
          <div class="content">
              <p>La seguridad en redes es una consideración crítica en la era digital en la que vivimos. Implica una serie de prácticas y medidas diseñadas para proteger sistemas, dispositivos y datos contra amenazas y ataques cibernéticos.</p>
              <p>Algunos de los pilares de la seguridad en redes incluyen la implementación de firewalls, la detección y prevención de intrusiones, la autenticación de usuarios, la encriptación de datos y la gestión de accesos. Estas medidas trabajan en conjunto para garantizar la integridad y la confidencialidad de la información.</p>
              <p>En un mundo cada vez más interconectado, la seguridad en redes es esencial para proteger datos sensibles, mantener la continuidad del negocio y preservar la confianza de los usuarios finales.</p>

          </div>
      </div>
        
      


    <div class="section">
        <h3>Optimización de Rendimiento de Redes</h3>
        <div class="content">
            <p>La optimización de rendimiento de redes implica el monitoreo y la mejora de la eficiencia y el rendimiento de una red. Esto se logra a través de la gestión del ancho de banda, la reducción de la latencia y la optimización del tráfico.</p>
            <img src="https://cdn.discordapp.com/attachments/996503150439706796/1153494493736214568/Optimizacion-de-rendimiento-web-featured.png" alt="optimización de paginas webs" class="responsiveimg">
          </div>
    </div>

    <div class="section">
        <h3>Virtualización de Funciones de Red (NFV)</h3>
        <div class="content">
            <p>La Virtualización de Funciones de Red (NFV) es una tecnología que permite ejecutar funciones de red en software en lugar de hardware dedicado. Esto hace que la red sea más flexible y escalable al permitir la implementación de funciones de red virtualizadas (como firewalls y enrutadores) en servidores estándar.</p>
        </div>
    </div>




    <div class="section">
        <h1 style="text-align: center;">Cisco</h1>
        <div class="content">
            <p>Cisco Packet Tracer es una poderosa herramienta de simulación de redes desarrollada por Cisco Systems, una de las empresas líderes en tecnología de redes a nivel mundial.</p>
        </div>
    </div>

    <div class="content">
      <p>Cisco Packet Tracer es una herramienta esencial para la educación y la prueba de redes. En el mundo de las redes informáticas, la capacidad de diseñar, configurar y solucionar problemas en entornos de red es fundamental para el éxito en la industria.</p>

      <p>Esta herramienta fue desarrollada por Cisco Systems, una de las principales empresas en tecnología de redes a nivel mundial. Inicialmente, Cisco Packet Tracer se diseñó con un enfoque educativo, y se ha convertido en una solución de simulación de redes ampliamente utilizada en escuelas secundarias, instituciones de educación superior y programas de certificación de Cisco.</p>

      <p>La característica más destacada de Cisco Packet Tracer es su capacidad para permitir a los usuarios crear redes virtuales y experimentar con dispositivos de red simulados sin necesidad de hardware físico. Esto es especialmente valioso para estudiantes y profesionales que desean adquirir experiencia práctica en la creación y administración de redes antes de enfrentarse a entornos de producción en el mundo real.</p>
  </div>
  
<iframe  width="560" height="315" src="https://www.youtube.com/embed/vwtl7pZ2iIQ?si=ElRjTa_zeb8hSM_a" title="YouTube video player" frameborder="0" class="responsiveimg" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <div class="section">
        <h3>Funcionalidades de Cisco Packet Tracer:</h3>
        <div class="content">
            <ul>
                <li><strong>Simulación de Dispositivos:</strong> Packet Tracer incluye una amplia variedad de dispositivos de red, como routers, switches, firewalls, servidores, PCs y más.</li>
                <li><strong>Topologías Personalizadas:</strong> Permite a los usuarios diseñar topologías de red personalizadas para simular escenarios específicos.</li>
                <li><strong>Protocolos de Red:</strong> Ofrece soporte para una variedad de protocolos de red, incluyendo TCP/IP, IPv6, RIP, OSPF, BGP y muchos más.</li>
                <li><strong>Packet Capture (Captura de Paquetes):</strong> Permite a los usuarios capturar y analizar paquetes de datos en la red simulada.</li>
                <li><strong>Escenarios Interactivos:</strong> Ofrece escenarios de laboratorio interactivos para guiar a los usuarios a través de actividades específicas.</li>
                <li><strong>Evaluación y Pruebas:</strong> Es utilizado por instructores y estudiantes para evaluar y realizar pruebas en laboratorios de redes.</li>
                <li><strong>Simulación de Dispositivos IoT:</strong> Incluye soporte para dispositivos de Internet de las cosas (IoT).</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h3>¿Para qué nos puede servir Cisco Packet Tracer?</h3>
        <div class="content">
            <p>Cisco Packet Tracer se utiliza en educación, desarrollo de habilidades, diseño de redes, experimentación, desarrollo de prototipos, investigación y desarrollo.</p>
        </div>
    </div>

    <div class="section">
        <h3>Cableado:</h3>
        <div class="content">
            <p>La realización de cableado de redes suele seguir normativas y estándares para garantizar la calidad, la seguridad y el rendimiento de las conexiones.</p>
        </div>
    </div>

    <div class="section">
        <h3>Normativas para Realizar un Cableado</h3>
        <div class="content">
            <ul>
                <li><strong>TIA/EIA 568:</strong> Este es un conjunto de estándares ampliamente utilizado en América del Norte para cableado estructurado.</li>
                <li><strong>ISO/IEC 11801:</strong> Este estándar internacional proporciona las especificaciones para sistemas de cableado de telecomunicaciones y redes de datos.</li>
                <li><strong>ANSI/TIA-942:</strong> Especifica los requisitos para el diseño y la implementación de centros de datos, incluyendo el cableado.</li>
                <li><strong>IEEE 802.3:</strong> Define los estándares Ethernet para redes de área local (LAN).</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h3>Tipos de Conexiones de Cables:</h3>
        <div class="content">
            <p>Los tipos de conexiones de cables incluyen Ethernet (RJ-45), fibra óptica y coaxial.</p>
        </div>
    </div>

    <div class="section">
        <h3>Cómo Realizar una Conexión de Cable Ethernet (RJ-45):</h3>
        <div class="content">
            <ol>
                <p><strong>Preparación de Materiales:</strong> Cable Ethernet, conectores RJ-45, pelacables y herramientas de crimpado.</p>
                <p><strong>Pelar el Cable:</strong> Utiliza una herramienta de pelado para quitar aproximadamente 1-1.5 cm del revestimiento exterior del cable Ethernet, exponiendo los hilos internos.</p>
                <p><strong>Orden de los Hilos:</strong> Organiza los hilos internos siguiendo el estándar de cableado.</p>
                <p><strong>Corte los Hilos Excedentes:</strong> Asegúrate de que los hilos estén cortados y alineados de manera uniforme.</p>
                <p><strong>Inserta los Hilos en el Conector RJ-45:</strong> Inserta los hilos en el conector RJ-45 siguiendo el orden correspondiente.</p>
                <p><strong>Crimpa el Conector:</strong> Utiliza una herramienta de crimpado para fijar el conector a los hilos.</p>
                <p><strong>Verificación:</strong> Verifica que la conexión esté bien hecha.</p>
                <p><strong>Repite para el Otro Extremo:</strong> Repite estos pasos en el otro extremo del cable.</p>
            </ol>
        </div>
    </div>

    <div class="section">
      <h3>Topologías de Red:</h3>
      <div class="content">
          <p>Las topologías de red se refieren a la disposición física o lógica de los dispositivos y cables en una red de computadoras. Cada topología tiene sus propias ventajas y desventajas en términos de rendimiento, confiabilidad y escalabilidad. Además de comprender las características de estas topologías, es interesante conocer su historia y los motivos por los que se crearon:</p>
          <p><strong>1. Topología de Bus:</strong> La topología de bus fue una de las primeras topologías utilizadas en redes de computadoras. Se desarrolló en los primeros días de las redes para simplificar las conexiones entre dispositivos. Sin embargo, su principal desventaja es su vulnerabilidad a fallas, ya que si un cable se rompe, toda la red puede quedar inoperable.</p>
          <p><strong>2. Topología de Estrella:</strong> La topología de estrella se desarrolló para abordar los problemas de confiabilidad de la topología de bus. En una topología de estrella, todos los dispositivos están conectados a un concentrador central, lo que permite un mejor control y aislamiento de problemas.</p>
          <p><strong>3. Topología de Anillo:</strong> La topología de anillo se inspiró en la topología de bus pero buscaba eliminar su vulnerabilidad a fallas. Los datos se transmiten en un circuito cerrado, lo que reduce la posibilidad de interrupciones debido a fallas de cableado.</p>
          <p><strong>4. Topología de Malla:</strong> La topología de malla se desarrolló con el objetivo de crear redes altamente redundantes y resistentes a fallas. Cada dispositivo se conecta a todos los demás, lo que garantiza múltiples rutas de comunicación.</p>
          <p><strong>5. Topología de Árbol:</strong> La topología de árbol se utilizó para redes de área amplia (WAN) y se basa en una estructura jerárquica. Esto facilita la administración y escalabilidad en redes grandes y complejas.</p>
          <p><strong>6. Topología de Híbrida:</strong> La topología de híbrida surgió para combinar las ventajas de varias topologías en una sola red. Esto permite adaptarse a diversas necesidades y desafíos de la red.</p>
          <p><strong>7. Topología de Rueda (Star of Stars):</strong> Esta variante de la topología de estrella se creó para mejorar la escalabilidad en redes grandes mediante la conexión de múltiples concentradores.</p>
          <p>La evolución de las topologías de red ha estado impulsada por la necesidad de mejorar la confiabilidad, el rendimiento y la administración de las redes. A medida que las tecnologías de red han avanzado, también lo han hecho las topologías para adaptarse a los requisitos cambiantes de las organizaciones.</p>
      </div>
  </div>
      </section>
  
  </section>


  <script src="js/darkmode.js"></script>
  <script src="js/configuser.js"></script>
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
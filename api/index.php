<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Jaime Crespo | Personal Web</title>

    <!-- Font-Awesome CSS -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/all.min.css" />
    
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.css" />

    <!-- Magnific-Popup CSS -->
    <link rel="stylesheet" href="assets/vendors/magnific-popup/magnific-popup.css" />

    <!-- Custom Stylesheets -->
    <link rel="stylesheet"  href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
   
    
        
</head>
<body>


    <!-------------------- Scroll-Top Area (Start) -------------------->
    <a href="#home" class="scroll-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-------------------- Scroll-Top Area (End) -------------------->

        

    <!-------------------- encavezado(Start) -------------------->
    <header class="header">

        <!-- Logo -->
        <a class="logo" href="#home">
            <h2> Jaime Crespo </h2> 
          <!--<img src="assets/images/img/logo01.jpg" alt="logo" /> -->
        </a>
        <!-- Logo End -->

        <!-- Navbar -->
        <nav class="navbar">
            <a href="#home">Inicio</a>
            <a href="#about">Sobre mi</a>
            <a href="#portfolio">Trabajos y proyectos</a>
            <a href="#service">Servicios</a>
            <a href="#contact">Contacto</a>
        </nav>

        <!-- Menubar -->
        <div class="fas fa-bars" id="menu-btn"></div>
        
    </header>
    <!-------------------- Header Area (End) -------------------->
 


    <!-------------------- Home Area (Start) -------------------->
    <section class="home" id="home">

        <div class="box-container">

            <div class="content">
                <div class="text">
                    <h2>Hola mundo!</h2>
                    <h1> <span class="typing-text"></span></h1>
                    <p>Desarrollador web. especializado en ofrecer soluciones 
                         efectivas para diversas organizaciones. Con sólidos conocimientos en programación y bases de datos, enfocado en crear plataformas funcionales y optimizadas.</p>
                    <a href="#about" class="btn">Sobre mi<i class="fas fa-user"></i></a>
                    <a 
                     class="btn" id="copy-email" onclick="copyEmail(event)">
                        jaimecrespoprogramacion@gmail.com <i class="fas fa-copy"></i>
                    </a>
                    
                    
                 
                 
                </div>
            </div>
    
            <div class="image">
                <img id="main-image" src="assets/images/Home/01.png" alt="Home-Image">
            </div>

            

        </div>

    </section>

    <!-------------------- Home Area (End) -------------------->


    
    <!-------------------- About Area (End) -------------------->


    <!-------------------- Trabajos y proyectos destacados -------------------->
    <section class="portfolio" id="portfolio">
        <div class="heading">
            <h2>Trabajos y <span>proyectos</span></h2>
        </div>
    
        <div class="gallery">
            <ul class="controls">
                <li class="button btn active" data-filter="destacados">Destacados</li>
                <li class="button btn" data-filter="webs">Webs</li>
                <li class="button btn" data-filter="python">Python</li>
                <li class="button btn" data-filter="bd">Base de datos</li>
                <li class="button btn" data-filter="all">Todos</li>
            </ul>
    
            <div class="box-container">
                
                
                <?php
            
                $enlace = mysqli_connect("localhost", "jcm1984", "Gwbmz42_42", "webjaimecm");
                $resultado = mysqli_query($enlace,"SELECT * FROM proyectos");
                   
                   while ($fila = $resultado->fetch_assoc()) {
                        echo '
                        
                        <div class="portfolio-item image '.$fila['clase'].'">
                            <img src="assets/images/Portfolio/'.$fila['img'].'" alt="Portfolio-Image" />
                            <div class="content">
                                
                                <h4>'.$fila['nomdes'].'</h4>
                             
                                <!-- Enlace al repositorio de GitHub con logo -->
                                <a href="'.$fila['github'].'" target="_blank" class="view-btn no-popup" rel="noopener noreferrer">
                                    <img src="assets/icons/gitm.png" alt="GitHub" style="width: 30px; height: 30px;">
                                </a>
                                <!-- Enlace al video de YouTube con logo  -->
                                
                                <a href="'.$fila['youtube'].'" target="_blank" class="view-btn no-popup" rel="noopener noreferrer">
                                    <img src="assets/icons/youtube.png" alt="YouTube" style="width: 30px; height: 30px;">
                                </a>  
                                
                                <!-- Enlace a la web con ícono en lugar de texto -->
                                <a href="'.$fila['web'].'" target="_blank" class="view-btn no-popup" rel="noopener noreferrer">
                                    <img src="assets/icons/enlace.png" style="width: 30px; height: 30px;">
                                </a>
                            </div>
                        </div>
                                ';
                    }
                                
                    ?>
        
                
                                
                
                
                
                
    
           
                                
        </div>
    </section>
    
    
    <!-------------------- Mis habilidades menu slide
     -------------------->
    
    <section class="about" id="about">
    

        <div class="skill-container">

            <div class="heading">
                <h2>Mis <span>habilidades</span></h2>
            </div>
    
            <div class="brands-list">
    <div class="wrapper">
        <!-- Lista de íconos (primera copia) -->
        <img src="assets/images/habilidades/git.png" alt="Icono 6">
        <img src="assets/images/habilidades/html.png" alt="Icono 8">
        <img src="assets/images/habilidades/mongo.png" alt="Icono 9">
        <img src="assets/images/habilidades/css.png" alt="Icono 1">
        <img src="assets/images/habilidades/basedatos.png" alt="Icono 2">
        <img src="assets/images/habilidades/php.png" alt="Icono 3">
        <img src="assets/images/habilidades/javasc.png" alt="Icono 4">
        <img src="assets/images/habilidades/oracle1.png" alt="Icono 5">
    
       
        <!-- Lista de íconos (segunda copia, duplicado para el efecto infinito) -->
        <img src="assets/images/img/habilidades/git.png" alt="Icono 6">
        <img src="assets/images/img/habilidades/html.png" alt="Icono 8">
        <img src="assets/images/img/habilidades/mongo.png" alt="Icono 9">
        <img src="assets/images/img/habilidades/css.png" alt="Icono 1">
        <img src="assets/images/img/habilidades/basedatos.png" alt="Icono 2">
        <img src="assets/images/img/habilidades/php.png" alt="Icono 3">
        <img src="assets/images/img/habilidades/javasc.png" alt="Icono 4">
        <img src="assets/images/img/habilidades/oracle1.png" alt="Icono 5">
        
    </div>
</div>
           


    </section>
 
    
     <!-------------------- About Area (Start) -------------------->
     <section class="about" id="about">

        <div class="box-container">

          
    
            <div class="content">

                <h2>Jaime Crespo</h2>
                <p> Con formación en Desarrollo de Aplicaciones Multiplataforma, filosofía, administración y finanzas, me apasiona crear soluciones tecnológicas 
                    que generen un impacto positivo y real. Mi enfoque combina el pensamiento crítico y principios empresariales, desarrollando aplicaciones que reflejan 
                    tanto mis valores como mi compromiso profesional. Soy un eterno aprendiz, siempre explorando nuevas ideas para aprovechar el potencial del mundo digital.</p>
   
                <div class="about-info">

                    <div class="info">
                    
                        
                        <h4>Idiomas: <span>Español, inglés, valenciano.</span></h4>
                        <h4>Trabajo: <span>Full-stack developer</span></h4>
                        <h4>Situación: <span>Disponible</span></h4>
                        <a href="assets/files/mi_cv.pdf.pdf" class="btn">Descargar CV <i class="fas fa-download"></i></a>
                    </div>

                    <div class="counting">

                        <div class="box">
                            <h1 class="count" data-count="2">0+</h1>
                            <h3>Experienza</h3>
                        </div>
                        
                        <div class="box">
                            <h1 class="count" data-count="20">1+</h1>
                            <h3>Proyectos</h3>
                        </div>
            
                     
                        
                                    
                     
                    
                    </div>

                </div>
                
            </div>
            
        </div>
    </section>
<!-------------------- Mis servicios inicio -------------------->
<section class="service" id="service">

    <div class="heading">
        <h2>Mis <span>servicios</span></h2>
    </div>

    <div class="box-container">

        <div class="service-item">
            <i class="fas fa-laptop-code"></i>
            <h3>Diseñador Web</h3>
            <p> Desarrollo de soluciones personalizadas para diversas plataformas, desde aplicaciones web hasta software especializado. 
                Nos enfocamos en optimizar procesos, mejorar la funcionalidad y garantizar un código limpio y escalable para cualquier tipo de proyecto.</p>
        </div>

        <div class="service-item">
            <i class="fas fa-code"></i>
            <h3>Programación</h3>
            <p>Soluciones personalizadas para diversas plataformas, 
            desde aplicaciones web hasta software especializado. Nos enfocamos en optimizar procesos, 
            mejorar la funcionalidad y garantizar un código limpio y escalable para cualquier tipo de proyecto.</p>
        </div>

        <div class="service-item">
            <i class="fas fa-database"></i>
            <h3>Base de datos</h3>
            <p>Planificación, diseño y gestión de bases de datos eficientes. Garantizamos un almacenamiento 
                seguro, accesible y bien estructurado de la información,
                 mejorando la capacidad de respuesta y la integridad de los datos para aplicaciones de cualquier tamaño.</p>
        </div>
    </div>

</section>


    <!-------------------- Contacto -------------------->
    <section class="contact" id="contact">

        <div class="heading">
            <h2>Contac <span>to</span></h2>
        </div>

        <div class="box-container">

            <div class="contact-info">

               
    
                <div class="info-item">
                  
                    
                 
                    
                </div>
    
                <div class="info-item">
                    
                    
                    <h4>Correo:</h4>
                    <a class="btn" id="copy-email-contacto" onclick="copyEmail(event)">
                    jaimecrespoprogramacion@gmail.com <i class="fas fa-copy"></i>
                    </a>
                    
                    
                </div>
                
                <div class="info-item">
                    <h4>LinkedIn:</h4>
                    <a href="https://www.linkedin.com/in/jaume-crespo-2973172a3/" class="btn" target="_blank">
                        Linkedin<i class="fab fa-linkedin"></i>
                    </a>  
                </div>

                <div class="info-item">
                    <h4>GitHub:</h4>
                    <a href="https://github.com/Jaumecmprogramacion?tab=repositories" class="btn" target="_blank">
                        Github <i class="fab fa-github"></i>
                    </a>
                </div>
                
            </div>
    
            <form action="submit.php" method="post" class="contact-form" id="contactUs-Form">
                <input type="text" name="name" class="box" id="name" placeholder="Nombre" required maxlength="30" />
                <input type="email" name="email" class="box" id="email" placeholder="Email" required maxlength="50" />
                <input type="text" name="subject" class="box" id="subject" placeholder="Asunto" required maxlength="50" />
                <textarea cols="30" rows="10" name="comment" id="comment" class="box" placeholder="Mensaje" required maxlength="400"></textarea>
                <button type="submit" class="btn" name="submit" id="submit">Enviar</button>
    
    <span class="alert" id="msg"></span>
</form>
            
        </div>

    </section>
    <!-------------------- Contact Area (End) -------------------->



    <!-------------------- Footer (Start) -------------------->
    <footer>
       
        

        <div class="content">
            <p>Creado por <span>Jaime Crespo</span> | 
        </p>
        </div>
    </footer>
    <!-------------------- Footer  (End) -------------------->

<!---------------- Script ---------------->

    <!-- JQuery -->
    <script src="assets/vendors/jquery/jquery-3.6.0.js"></script>

    <!-- SWIPER JS -->
    <script src="assets/vendors/swiper/swiper.js"></script>

    <!-- Magnific-Popup JS -->
    <script src="assets/vendors/magnific-popup/jquery.magnific-popup.js"></script>

    <!-- Typed JS -->
    <script src="assets/vendors/typed/typed.js"></script>

    <!-- Custom Script File -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/scroll-spy.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/portfolio.js"></script>
    <script src="assets/js/testi-slider.js"></script>
    <script src="assets/js/blog-slider.js"></script>

    <!---------------- Custom Script ---------------->

    <!--  Script palabras que se tipesn -->
    <script>
        var typed = new Typed('.typing-text', {

            strings: ['Desarrollador web', 'Programador', 'Analista de datos'],
            typeSpeed: 120,
            loop: true
        });
    </script>

    <!-- Contact-Form Script -->
    <script>
        jQuery('#contactUs-Form').on('submit',function(e){
          jQuery('#msg').html('');
          jQuery('#submit').html('Enviando...');
          jQuery('#submit').attr('disabled',true);
          jQuery.ajax({
              url:'assets/php/submit.php',
              type:'post',
              data:jQuery('#contactUs-Form').serialize(),
              success:function(result){
                  jQuery('#msg').html(result);
                  jQuery('#submit').html('Submit');
                  jQuery('#submit').attr('disabled',false);
                  jQuery('#contactUs-Form')[0].reset();
              }
          });
          e.preventDefault();
        });
    </script>
     <!--cambia la imagen cuando paso el ratón -->            
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const mainImage = document.getElementById('main-image');
        const originalSrc = mainImage.src; // Guarda la URL original
        const hoverSrc = 'assets/images/Home/03.jpg'; // Cambia a la nueva imagen

        mainImage.addEventListener('mouseenter', () => {
            mainImage.src = hoverSrc; // Cambia a la imagen de hover
        });

        mainImage.addEventListener('mouseleave', () => {
            mainImage.src = originalSrc; // Vuelve a la imagen original
        });
    });
</script>


</body>
</html>
  <!-- Trabajos y proyectos Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Función para mostrar solo los elementos destacados al cargar la página
        function showDestacados() {
            const items = document.querySelectorAll('.portfolio-item');
            items.forEach(item => {
                if (item.classList.contains('destacados')) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    
        // Filtrar los elementos al hacer clic en los botones
        document.querySelectorAll('.button').forEach(button => {
            button.addEventListener('click', () => {
                // Eliminar la clase active de todos los botones
                document.querySelectorAll('.button').forEach(btn => {
                    btn.classList.remove('active');
                });
    
                // Añadir la clase active al botón seleccionado
                button.classList.add('active');
    
                const filterValue = button.getAttribute('data-filter').toLowerCase();
    
                // Filtrar los elementos
                const items = document.querySelectorAll('.portfolio-item');
                items.forEach(item => {
                    // Si el filtro es 'todos', mostramos todos
                    if (filterValue === 'todos') {
                        item.style.display = 'block';
                    } 
                    // Si el filtro es 'destacados', mostramos solo los elementos destacados
                    else if (filterValue === 'destacados' && item.classList.contains('destacados')) {
                        item.style.display = 'block';
                    } 
                    // Para otros filtros, mostramos solo los elementos que coincidan
                    else if (item.classList.contains(filterValue)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    
        // Llama a la función para mostrar solo los destacados al cargar la página
        showDestacados();
    });
    </script> 
    <!-- Script para copiar el correo -->
      <script>
    function copyEmail(event) {
    event.preventDefault(); // Evita que el enlace haga su acción por defecto

    const email = event.target.closest('a').textContent.trim(); // Obtener el correo del botón clicado
    const copyButton = event.target.closest('a');

    // Copia el correo al portapapeles
    navigator.clipboard.writeText(email).then(() => {
        // Cambiar el texto del botón a "Correo copiado"
        copyButton.innerHTML = 'Correo copiado <i class="fas fa-check"></i>';
        
        // Opcional: Vuelve al texto original después de 3 segundos
        setTimeout(() => {
            copyButton.innerHTML = `${email} <i class="fas fa-copy"></i>`;
        }, 3000); // Regresa el texto original después de 3 segundos
    }).catch(err => {
        console.error('Error al copiar: ', err);
        alert("No se pudo copiar el correo.");
    });
}


    </script>
   
   


   



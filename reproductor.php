<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproductor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/reproductor.css">
</head>
<body>
                    <div class="barra-de-navegacion"> <!--Div con clase "barra-de-navegacion"-->

 <nav> <!-- Barra de navegación -->
    <ul class="logo-menu">
        <li>
            <img src="imagenes/bloomlogo.png" alt="BLOOM"> <!-- Imagen del logo de BLOOM -->
        </li>
    </ul>

    <ul class="menu"> <!-- Lista desordenada con clase "menu" -->
      <li><a href="subircancion.php">+ Subir</a></li>    
      <li><a href="index.php">Principal</a></li>    </ul>
    <ul class="menu-iconos"> <!-- Lista desordenada con clase "menu-iconos" -->
        <li>
            <a href="perfil.php">
                <img src="imagenes/perfil.png" alt="Perfil del usuario">
            </a>
        </li>

    </ul>
</nav>
                </div>

    <div class="contenedor">
        <img src="imagenes/artista3.png" alt="Portada del tema" class="portada">

        <div class="reproductor">
            <div class="corazon-titulo">
                <h2>Neon Sunrise</h2>
                <div class="corazon">
                    <i class="fa-regular fa-heart heart-icon"></i>
                    <span class="heart-count">77</span>
                </div>
            </div>
   


        <div class="info-artista">
            <p class="artista">Kairos Bloom</p>
            <p class="descripcion">
            <strong>Fecha:</strong> 09 de Diciembre, 2025<br>
            <strong>Descripción:</strong> Representa el caos y la pasión de vivir intensamente en una gran ciudad que nunca duerme y brilla.

        </div>


            <div class="guardar">
                <i class="fa-regular fa-bookmark"></i>
                <span>Guardar</span>
            </div>

            <div class="timeline-container">
                <div class="timeline" id="timeline">
                    <div class="timeline-progress" id="progress"></div>
                </div>
                <div class="tiempo">
                    <span id="tiempoActual">0:00</span>
                    <span id="tiempoTotal">3:55</span>
                </div>
            </div>

            <div class="acciones">
                <i class="fa-solid fa-backward"></i>
                <i class="fa-solid fa-pause"></i>
                <i class="fa-solid fa-forward"></i>
            </div>
        </div>
    </div>
</body>
</html>
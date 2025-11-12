<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pop</title>
  <link rel="stylesheet" href="css/pop.css">
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
        <li><a href="index.php">Principal</a></li>
        <li><a href="subircancion.php">+ Subir</a></li>
    </ul>
    <ul class="menu-iconos"> <!-- Lista desordenada con clase "menu-iconos" -->
        <li>
            <a href="perfil.php">
                <img src="imagenes/perfil.png" alt="Perfil del usuario">
            </a>
        </li>

    </ul>
</nav>
        </div>

  <div class="container">
    <h1>Pop</h1>
    <img src="imagenes/pop.png" alt="Pop Imagen 1">
  </div>

  <h2 class="subtitulo">Disfruta de la música que te rodea</h2>
  <br><br><br>

  <div class="container-cancion">
    <img src="imagenes/artista1.png" alt="Banda" class="foto-cancion">
    <div class="info-cancion">
      <h3 class="titulo-cancion">Electric Heart</h3>
      <p class="descripcion-cancion">
        Descripción: Un himno pop lleno de sintetizadores y energía eléctrica sobre enamorarse en una era digital.
        <br><br>
        Fecha: 14 de Marzo, 2024    
        <br><br>
        Autor: 
        <a href="perfil.php" class="link-autor">Lara Ray</a>
      </p>
    </div>
        <button class="btn-like">❤️</button>

  </div>

  <div class="container-cancion">
    <img src="imagenes/artista2.png" alt="Banda" class="foto-cancion">
    <div class="info-cancion">
      <h3 class="titulo-cancion">Midnight Confetti</h3>
      <p class="descripcion-cancion">
        Descripción: Pop-dance brillante, inspirado en la euforia de una fiesta que nunca termina y la magia de una noche brillante.
        <br><br>
        Fecha: 9 de Agosto, 2025
        <br><br>
        Autor:
        <a href="perfil2.php" class="link-autor">Alex Nova</a>
      </p>
    </div>
    <button class="btn-like">❤️</button>
  </div>

  <div class="container-cancion">
    <img src="imagenes/artista3.png" alt="Banda" class="foto-cancion">
    <div class="info-cancion">
      <h3 class="titulo-cancion">Neon Sunrise</h3>
      <p class="descripcion-cancion">
        Descripción: Representa el caos y la pasión de vivir intensamente en una gran ciudad que nunca duerme y brilla.
        <br><br>
        Fecha: 09 de Diciembre, 2025    
        <br><br>
        Autor: 
        <a href="perfil_KairosBloom.html" class="link-autor">Kairos Bloom</a>
      </p>
    </div>
    <button class="btn-like">❤️</button>
  </div>

</body>
</html>

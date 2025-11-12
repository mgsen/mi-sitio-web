<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Perfil del Oyente">
    <meta name="keywords" content="perfil, principal, oyente, musica, escuchar, público">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/perfilvisual.css">
</head>

<body>
    <!-- Barra de navegación -->
    <div class="barra-de-navegacion">
        <nav>
            <ul class="logo-menu">
                <img src="imagenes/bloomlogo.png" alt="BLOOM">
            </ul>

            <ul class="menu">
                <li><a href="index.php">Principal</a></li>
                <li><a href="subircancion.php">+ Subir</a></li>
            </ul>

        </nav>
    </div>

    <!-- Contenido del perfil -->
    <div class="perfil-oyente-contenido">
        <div class="perfil">
            <img src="imagenes/artista2-perfil.png" alt="Perfil del Oyente" class="foto-perfil">
            
            <div class="info-perfil">
                <h1>Alex Nova</h1>

                <div class="estadisticas">
                    <div>
                        <h2>2</h2>
                        <p>Canciones</p>
                    </div>
                    <div>
                        <h2>756</h2>
                        <p>Seguidores</p>
                    </div>
                    <div>
                        <h2>10</h2>
                        <p>Seguidos</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Descripción centrada debajo del perfil -->
        <div class="descripcion">
            <p>Soy Alex Nova, un cantante de pop que vive y respira música. <br>
            La música es mi forma de conectar con el mundo y, a través de ella, <br>
            espero dejar una pequeña huella en quienes me escuchan.</p>
        </div>

        <!-- Botón Seguir -->
        <div class="subir">
            <a href="#">Seguir</a>
        </div>
    </div>

    <!-- Sección "Mis canciones" -->
    <div class="explorador">
        <div class="invitacion-explorar">
            <p>Mis canciones</p>
        </div>
    </div>

    <div class="container-cancion">
        <img src="imagenes/artista2.png" alt="Banda" class="foto-cancion">
        <div class="info-cancion">
            <a href="pop.php">
            <h3 class="titulo-cancion">Midnight Confetti</h3>
            </a>
            <p class="descripcion-cancion">
            Descripción: Pop-dance brillante, inspirado en la euforia de una fiesta que nunca termina y la magia de una noche brillante.             </p>
        </div>
    </div>
        <div class="container-cancion">
            <img src="imagenes/chic.png" alt="Banda" class="foto-cancion">
              <div class="info-cancion">
            <h3 class="titulo-cancion">Luz</h3>
            <p class="descripcion-cancion">
            Descripción: Se refleja la confusión de crecer, perder y volver a empezar. Con un sonido pop moderno y letras honestas, transforma sus propias dudas en melodías luminosas.     </p>
        </div>
            </div>
            
            <script>
    // Espera a que la página cargue completamente
    document.addEventListener("DOMContentLoaded", function() {
        const boton = document.getElementById("botonSeguir");

        boton.addEventListener("click", function(event) {
            event.preventDefault(); // evita que el enlace recargue la página

            // Cambia el texto y el color dependiendo del estado actual
            if (boton.textContent === "Seguir") {
                boton.textContent = "Siguiendo";
                boton.style.backgroundColor = "#c874ffb6"; // más claro
            } else {
                boton.textContent = "Seguir";
                boton.style.backgroundColor = "#a929ff71"; // color original
            }
        });
    });
</script>

</body>
</html>

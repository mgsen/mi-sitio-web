<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Editar perfil</title>
  <link rel="stylesheet" href="css/editarperfil.css" />
</head>
<body>

  <!-- Barra de navegación -->
  
  <div class="barra-de-navegacion">
    <nav>
      <ul class="logo-menu">
        <li>
          <a href="principal.php" aria-label="Ir a inicio">
            <img src="imagenes/bloomlogo.png" alt="BLOOM" />
          </a>
        </li>
      </ul>

      <ul class="menu">
        <li><a href="index.php">Principal</a></li>
        <li><a href="perfil_artista.php">+ Subir</a></li>
      </ul>

      <ul class="menu-iconos">
        <li>
          <a href="perfil.php">
            <img src="imagenes/perfil.png" alt="Perfil del usuario" />
          </a>
        </li>

      </ul>
    </nav>
            </div>
 

  <!-- Contenido de la página de configuración -->
  <main class="contenido-configuracion">
    <h1>Editar Perfil</h1>

    <div class="perfil-img">
      <img src="imagenes/perfil.png" alt="Foto de perfil" />
    </div>

    <!-- FORM: aca van los inputs -->
    <form class="bloque-contenido" action="perfil_update.php" method="post">
      


    
<!-- FORMULARIO COMPLETO -->
    <form class="bloque-contenido" action="perfil_update.php" method="post">
      
      <!-- CAMBIAR FOTO -->
      <section class="seccion">
        <label for="foto">Cambiar foto de perfil</label>
        <div class="opcion">
          <input type="text" id="foto" name="foto_url" placeholder="Pega la URL de tu nueva imagen" />
        </div>
      </section>
      
          <!-- NOMBRE -->
      <section class="seccion">
        <label for="nombre">Nombre</label>
        <div class="opcion">
          <input type="text" id="nombre" name="fullname" placeholder="Nombre y apellido" />
        </div>
      </section>


      <section class="seccion">
        <label for="password">Contraseña</label>
        <div class="opcion">
          <input type="password" id="password" name="password" placeholder="********" />
        </div>
      </section>

    
      <!-- BOTÓN -->
      <div class="seccion">
        <button class="btn-guardar" type="submit">Guardar cambios</button>
      </div>

    </form>
  </main>
  <img src="imagenes/chico2.png" alt="chico escuchando música" class="foto-chico">

</body>
</html>

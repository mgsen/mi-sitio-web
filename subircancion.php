<!DOCTYPE html> 

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="música, artistas, cantantes emergentes, bloom, arte, cultura">
    <meta name="description" content="BLOOM: donde los artistas florecen. Descubrí y conectá con talentos emergentes del mundo de la música y el arte.">
    <!-- Descripción corta del sitio para buscadores o al compartir el enlace -->

    <title>Subir canción</title>
    <link rel="stylesheet" href="css/subircancion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">  <!-- Enlace a la librería de íconos Font Awesome -->

</head>

<body>

  <!-- Barra de navegación -->
  <header class="barra-de-navegacion">
    <nav>
      <ul class="logo-menu">
        <li>
            <img src="imagenes/bloomlogo.png" alt="BLOOM" />
          </a>
        </li>
      </ul>

      <ul class="menu">
        <li><a href="index.php">Principal</a></li>
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
  </header>
    

    <div class="contenedor">
        <p class="titulo">Subir nueva canción</p>
        <!-- Título principal de la página -->

        <form class="formulario">
            <!-- Formulario donde el usuario completa los datos para crear su playlist -->

            <label for="nombre">Nombre de la canción</label>
            <input type="text" id="nombre" placeholder="Ej: noche estrellada" class="nombreplaylist">

            <label for="descripcion">Descripción</label>
            
            <textarea id="descripcion" placeholder="Agregá una breve descripción" class="descripcion"></textarea>
            <!-- Campo más grande (textarea) para que el usuario escriba una descripción -->

      <section class="seccion">
        <label for="foto">Subir foto de portada</label>
        <div class="opcion">
          <input type="text" id="foto" name="foto_url" placeholder="URL de la imagen" />
          <!-- Opción alternativa: subir archivo
          <input type="file" id="foto_file" name="foto_file" accept="image/*" />
          -->
        </div>
      </section>
            
      <section class="seccion">
            <label for="canciones">Género</label>

        <div class="opcion">
          <select id="genero" name="genero">
            <option value="">Seleccionar Género</option>
            <option value="">Rock</option>
           <option value="cordoba">Pop</option>
            <option value="buenos_aires">Cumbia</option>
            <option value="caba">Reggaeton</option>
            <option value="catamarca">RKT</option>
            <option value="chaco">Jazz</option>
  
          </select>
        </div>
      </section>

            <label for="canciones">URL de la canción</label>
            <input type="text" id="canciones" placeholder="+ Añadir URL" class="añadircanciones">

            <button type="submit">Subir Canción</button>
            <!-- Botón para enviar el formulario (por ahora solo visual, sin funcionalidad JS) -->
       
          </form>
    </div>  

</body>
</html>
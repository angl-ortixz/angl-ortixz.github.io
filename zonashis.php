<?php
// index.php - Página de Lugares Históricos de TURIPAZ
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TURIPAZ</title>
  <link rel="stylesheet" href="estilos.css" />
</head>
<body>
  <header>
    <div class="header__superior">
      <div class="logo">
        <img src="ora.jpg" alt="Logo TURIPAZ" />
      </div>
      <h1 class="titulo">ZONAS HISTÓRICAS</h1>
      <div class="search">
        <form action="buscar.php" method="GET">
          <input type="search" name="q" placeholder="¿Qué deseas buscar?" />
          <button type="submit" class="btn-buscar">Buscar</button>
        </form>
      </div>
    </div>

    <div class="container__menu">
      <div class="menu">
        <nav>
          <ul>
            <li><a href="inicio.php">Presentación</a></li>
            <li><a href="zonascul.php">Lugares Culturales</a></li>
            <li><a href="zonasdepor.php">Lugares Deportivos</a></li>
            <li><a href="zonasturi.php">Lugares Turísticos</a></li>
            <li><a href="index.php" id="selected">Lugares Históricos</a></li>
            <li><a href="zonasar.php">Lugares Arqueológicos</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main class="contenido">
    <h1>Lugares Históricos - Los Reyes La Paz</h1>

    <section>
      <p>El Museo Comunitario San Miguel Teotongo se ubica en la colonia San Miguel Teotongo, en la Alcaldía Iztapalapa, Ciudad de México.</p>

      <h4>El Museo Comunitario San Miguel Teotongo</h4>
      <p>Se relaciona con los periodos Posclásico Temprano, Medio y Tardío. La ciudad surgió bajo la influencia de Tula alrededor del año 800 e.c.</p>

      <h4>Horario y ubicación:</h4>
      <p><strong>Horario:</strong> Abre a las 10 a.m. de martes a domingo. El horario puede variar en días festivos como el Natalicio de Benito Juárez.</p>
      <p><strong>Inauguración:</strong> 1994</p>
      <p><strong>Costo:</strong> Gratuito</p>

      <img src="images.jpg" alt="Museo Los Reyes La Paz" />
    </section>
  </main>
</body>
</html>

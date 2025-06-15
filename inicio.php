<!-- inicio.php -->
<?php
// Puedes agregar aquí lógica PHP si fuera necesario, por ejemplo, sesiones, conexión a BD, etc.
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio</title>
  <link rel="stylesheet" href="estilos.css" />
</head>
<body>
  <header>
    <div class="header__superior">
      <div class="logo">
        <img src="ora.jpg" alt="Logo TURIPAZ" />
      </div>
      <h1 class="titulo">TURIPAZ</h1>
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
            <li><a href="index.php" id="selected">Inicio</a></li>
            <li><a href="zonascul.php">Lugares Culturales</a></li>
            <li><a href="zonasdepor.php">Lugares Deportivos</a></li>
            <li><a href="zonasturi.php">Lugares Turísticos</a></li>
            <li><a href="zonashis.php">Lugares Históricos</a></li>
            <li><a href="zonasar.php">Lugares Arqueológicos</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main class="contenido">
    <h1>Bienvenido a TURIPAZ</h1>
    <p>Explora lugares culturales, históricos y turísticos en tu comunidad.</p>

    <h2>Introducción</h2>
    <p>El proyecto de una página web destinada a resaltar los lugares turísticos del municipio de La Paz tiene como objetivo principal ser una ventana al mundo que permita exponer y promover la riqueza cultural, histórica y natural de esta región...</p>

    <h2>Propósitos</h2>
    <p><strong>Propósito general:</strong> Desarrollar un sitio web para dar a conocer los lugares culturales, deportivos, turísticos, históricos y arqueológicos del municipio Los Reyes La Paz.</p>
    <ul>
      <li>Proporcionar información sobre dichos lugares.</li>
      <li>Ofrecer una alternativa de consulta y seguimiento.</li>
      <li>Fomentar habilidades blandas como la colaboración, la empatía y el trabajo en equipo.</li>
    </ul>
  </main>
</body>
</html>

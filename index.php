<!-- index.php -->
<?php
// Aquí puedes incluir lógica como sesiones o inicializaciones si las necesitas en el futuro.
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
            <li><a href="inicio.php">Presentación</a></li>
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
    <img src="Captura de pantalla 2025-05-10 162119.png" alt="Captura de pantalla del contenido principal" class="centered" />
  </main>
</body>
</html>

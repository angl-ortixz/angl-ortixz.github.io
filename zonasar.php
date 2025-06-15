<!-- zonasar.php -->
<?php
// Puedes agregar lógica PHP aquí si es necesario
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zonas Arqueológicas</title>
  <link rel="stylesheet" href="estilos.css" />
</head>
<body>
  <header>
    <div class="header__superior">
      <div class="logo">
        <img src="ora.jpg" alt="Logo TURIPAZ" />
      </div>
      <h1 class="titulo">ZONAS ARQUEOLÓGICAS</h1>
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
            <li><a href="index.htlm">Inicio</a></li>
            <li><a href="zonascul.php">Lugares Culturales</a></li>
            <li><a href="zonasdepor.php">Lugares Deportivos</a></li>
            <li><a href="zonasturi.php">Lugares Turísticos</a></li>
            <li><a href="zonashis.php">Lugares Históricos</a></li>
            <li><a href="zonasar.php" id="selected">Lugares Arqueológicos</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main class="contenido">
    <h1>Zona arqueológica de Los Reyes La Paz</h1>
    <p>Es un importante yacimiento piramidal situado en el extremo oriental de Ciudad de México. Está a unos 20 minutos a pie de la estación de metro Los Reyes...</p>

    <h2>Historia</h2>
    <p>Tres etapas constructivas corresponden a los periodos Posclásico Temprano, Medio y Tardío...</p>

    <h2>Actualidad</h2>
    <p>El sitio fue abandonado casi por completo con la invasión española. Los visitantes ven hoy en día la gran base con una pirámide de tres cuerpos escalonados...</p>

    <h2>Información útil</h2>
    <ul>
      <li><strong>Horario:</strong> Martes a domingo, de 10:00 a 17:00 horas.</li>
      <li><strong>Ubicación:</strong> C. Benito Juárez S/N, Ampliación, 56400 Emiliano Zapata, Méx.</li>
      <li><strong>Costo:</strong> Gratuito.</li>
    </ul>

    <img src="Captura de pantalla 2025-05-10 164236.png" alt="Zona arqueológica de Los Reyes La Paz" class="centered" />
  </main>
</body>
</html>

<?php
// Aquí podrías agregar funciones PHP más adelante si deseas.
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TURIPAZ - Zonas Culturales</title>
  <link rel="stylesheet" href="estilos.css" />
  <style>
    body {
      font-family: sans-serif;
    }

    h1.titulo-principal {
      background-color: #FFB6C1;
      padding: 10px;
      text-align: center;
    }

    .tourist-spot {
      border: 1px solid #ccc;
      padding: 20px;
      margin-bottom: 20px;
      overflow: hidden;
      background-color: white;
      border-radius: 8px;
    }

    .tourist-spot img {
      max-width: 300px;
      height: auto;
      float: left;
      margin-right: 20px;
      border-radius: 6px;
    }

    .contenido {
      padding: 150px 20px 20px 20px;
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <header>
    <div class="header__superior">
      <div class="logo">
        <img src="ora.jpg" alt="Logo TURIPAZ" />
      </div>
      <h1 class="titulo">ZONAS CULTURALES</h1>
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
            <li><a href="#" id="selected">Lugares Culturales</a></li>
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
    <h1>Zonas Culturales - Los Reyes La Paz</h1>

    <section>
      <h4>Casa de la Cultura La Paz</h4>
      <p>Ubicada en el corazón de La Paz, esta casa de cultura ofrece múltiples servicios culturales para la comunidad.</p>
      <p><strong>Dirección:</strong> Independencia 807, esquina con Valentín Gómez Farías y Ignacio Manuel Altamirano, Col. Zona Central, C.P. 23000, La Paz, Baja California Sur</p>
      <p><strong>Horario:</strong> De lunes a viernes, 08:00 - 20:00 hrs.</p>
      <p><strong>Precios:</strong> Entrada libre.</p>
      <p><strong>Servicios:</strong> Talleres, espacios para eventos culturales, cursos de verano, cursos, conferencias, concursos, conciertos, coloquios.</p>
      <img src="image4.jpg" alt="Casa de la Cultura La Paz">
    </section>
  </main>
</body>
</html>

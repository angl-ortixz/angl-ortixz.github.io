<?php
// Puedes insertar lógica PHP aquí si es necesario.
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TURIPAZ - Lugares Deportivos</title>
  <link rel="stylesheet" href="estilos.css" />
  <style>
    body {
      background-color: #33ffc7;
      font-family: sans-serif;
    }

    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      padding: 20px;
    }

    .card {
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.2s ease;
    }

    .card:hover {
      transform: scale(1.02);
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-content {
      padding: 15px;
    }

    .card-content h2 {
      margin: 0 0 10px;
      color: #34495e;
    }

    .card-content p {
      margin: 5px 0;
      color: #555;
    }

    .contenido {
      padding: 150px 20px 20px 20px;
    }
  </style>
</head>
<body>
  <header>
    <div class="header__superior">
      <div class="logo">
        <img src="ora.jpg" alt="Logo TURIPAZ" />
      </div>
      <h1 class="titulo">ZONAS DEPORTIVAS</h1>
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
            <li><a href="#" id="selected">Lugares Deportivos</a></li>
            <li><a href="zonasturi.php">Lugares Turísticos</a></li>
            <li><a href="zonashis.php">Lugares Históricos</a></li>
            <li><a href="zonasar.php">Lugares Arqueológicos</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main class="contenido">
    <h1>Lugares Deportivos</h1>
    <div class="card-container">
      <div class="card">
        <img src="Captura de pantalla 2025-05-11 160117.png" alt="Deportivo Ancon" />
        <div class="card-content">
          <h2>Deportivo Ancon</h2>
          <p><strong>Dirección:</strong> 56410, Ferrocarril México-Acapulco 21, Ancon de los Reyes, Los Reyes Acaquilpan, Méx.</p>
          <p><strong>Horarios:</strong> Lunes a Domingo, Abierto las 24 horas</p>
        </div>
      </div>

      <div class="card">
        <img src="Captura de pantalla 2025-05-11 155733.png" alt="Unidad Deportiva Soraya Jimenez" />
        <div class="card-content">
          <h2>Unidad Deportiva Soraya Jiménez</h2>
          <p><strong>Dirección:</strong> Manzana 048, 56508 Los Reyes Acaquilpan, Méx.</p>
          <p><strong>Horarios:</strong> Lunes a Domingo, 7:00 am - 6:00 pm</p>
        </div>
      </div>
    </div>
  </main>
</body>
</html>

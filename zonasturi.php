<?php
$touristSpots = [
  [
    "name" => "Zona Arqueológica de Los Reyes La Paz",
    "image" => "image1.jpg",
    "description" => "Es un importante yacimiento piramidal que se encuentra a 20 min del metro de Los Reyes.",
    "address" => "C. Benito Juárez S/N, Ampliación 56400 Emiliano Zapata, Mex",
    "hours" => "Martes a Domingo, de 10:00 a 17:00 hrs.",
    "cost" => "Gratuito."
  ],
  [
    "name" => "Unidad Deportiva Soraya Jiménez",
    "image" => "image2.jpg",
    "description" => "Espacio dedicado al deporte y la recreación, ideal para turistas interesados en actividades físicas y familiares.",
    "address" => "Circuito Jiménez, Colonia Ejidal El Pino, Los Reyes Acaquilpan, Estado de México.",
    "hours" => "De martes a domingo, de 7:00 a 17:30 hrs.",
    "cost" => "Entrada gratuita, aunque algunas albercas tienen costo."
  ],
  [
    "name" => "Parque de la Ciencia La Paz",
    "image" => "image3.jpg",
    "description" => "Cuenta con mirador, juegos infantiles, fuente danzante, tirolesa, espacio para eventos, etc.",
    "address" => "Cam. al Cerro El Pino, Lomas de San Isidro, 56508 Los Reyes Acaquilpan, Mex",
    "hours" => "De lunes a sábado, de 9:00 a 17:00 hrs.",
    "cost" => "Gratuito"
  ],
  [
    "name" => "Casa de la Cultura",
    "image" => "image4.jpg",
    "description" => "Talleres, eventos culturales, conferencias, conciertos, coloquios, cursos de verano.",
    "address" => "Independencia 807, Zona Central, C.P. 23000",
    "hours" => "De lunes a viernes, de 8:00 a 20:00 hrs.",
    "cost" => "Entrada libre."
  ],
  [
    "name" => "Parque de los Reyes",
    "image" => "image5.jpg",
    "description" => "Lugar público con algunos juegos para niños.",
    "address" => "Av. de las Torres, Los Reyes, 56400 Los Reyes Acaquilpan, Méx.",
    "hours" => "Abierto las 24 hrs.",
    "cost" => "Gratuito."
  ],
  [
    "name" => "Deportivo Ancón",
    "image" => "image6.jpg",
    "description" => "Espacio público para actividades deportivas.",
    "address" => "56410, Ferrocarril 21, Ancón de los Reyes, Los Reyes Acaquilpan, Méx.",
    "hours" => "Abierto las 24 hrs.",
    "cost" => "Gratuito."
  ],
  [
    "name" => "Museo Comunitario San Miguel Teotongo",
    "image" => "image7.jpg",
    "description" => "Museo comunitario ubicado en Iztapalapa, CDMX.",
    "address" => "Capilla, Armita S/N entre calle Américas y Curro Rivera, San Miguel Teotongo, Iztapalapa, 09630 CDMX.",
    "hours" => "Abre a las 7:00",
    "cost" => "Gratuito."
  ],
  [
    "name" => "Ciudad Retoño",
    "image" => "image8.jpg",
    "description" => "Centro comunitario sin descripción disponible.",
    "address" => "Presa del Sordo 5, Valle de los Pinos, 56420 Los Reyes Acaquilpan, Méx.",
    "hours" => "Martes a viernes de 7:00 a 19:00 hrs; sábados y domingos de 10:00 a 15:00 hrs.",
    "cost" => "Gratuito."
  ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lugares Turísticos - TURIPAZ</title>
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
      padding: 150px 20px 20px 20px; /* espacio para que no lo tape el header */
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
      <h1 class="titulo">ZONAS TURÍSTICAS</h1>
      <div class="search">
        <input type="search" placeholder="¿Qué deseas buscar?" />
        <button class="btn-buscar">Buscar</button>
      </div>
    </div>
    <div class="container__menu">
      <div class="menu">
        <nav>
          <ul>
            <li><a href="inicio.php">Presentación</a></li>
            <li><a href="zonascul.php">Lugares Culturales</a></li>
            <li><a href="zonasdepor.php">Lugares Deportivos</a></li>
            <li><a href="#" id="selected">Lugares Turísticos</a></li>
            <li><a href="zonashis.php">Lugares Históricos</a></li>
            <li><a href="zonasar.php">Lugares Arqueológicos</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main class="contenido">
    <h1 class="titulo-principal">Lugares Turísticos</h1>

    <?php foreach ($touristSpots as $spot): ?>
      <div class="tourist-spot">
        <h2><?= htmlspecialchars($spot['name']) ?></h2>
        <img src="<?= htmlspecialchars($spot['image']) ?>" alt="<?= htmlspecialchars($spot['name']) ?>">
        <p><strong>Descripción:</strong> <?= htmlspecialchars($spot['description']) ?></p>
        <p><strong>Dirección:</strong> <?= htmlspecialchars($spot['address']) ?></p>
        <p><strong>Horario:</strong> <?= htmlspecialchars($spot['hours']) ?></p>
        <p><strong>Costo:</strong> <?= htmlspecialchars($spot['cost']) ?></p>
      </div>
    <?php endforeach; ?>

  </main>
</body>
</html>


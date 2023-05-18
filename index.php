<?php

include 'data.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <title>Document</title>
</head>
<body>

  <!-- <ul>
    <?php foreach ($hotels as $hotel) : ?>
      <li>
        <ul>
        <?php foreach ($hotel as $pino => $franco) : ?>
          <li><?php echo $pino . ': ' . $franco; ?></li>
        <?php endforeach ?>
        </ul>
      </li>
    <?php endforeach ?>
  </ul> -->

  <div class="container py-5">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Parcheggio</th>
          <th scope="col">Voto</th>
          <th scope="col">Distanza dal centro</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($hotels as $hotel) : ?>
        <tr>
          <th scope="row"><?php echo $hotel['name'] ?></th>
          <td><?php echo $hotel['description'] ?></td>
          <td><?php echo ($hotel['parking']) ? 'Si' : 'No' ?></td>
          <td><?php echo $hotel['vote'] ?></td>
          <td><?php echo $hotel['distance_to_center'] ?> km</td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  
</body>
</html>

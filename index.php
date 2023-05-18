<?php

include 'data.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <ul>
    <?php foreach ($hotels as $hotel) : ?>
      <li>
        <ul>
        <?php foreach ($hotel as $pino => $franco) : ?>
          <li><?php echo $pino . ': ' . $franco; ?></li>
        <?php endforeach ?>
        </ul>
      </li>
    <?php endforeach ?>
  </ul>
  
</body>
</html>

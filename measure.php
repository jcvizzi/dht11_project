<?php


$config = include 'inc/config.inc.php';

if (!empty($_POST)) {

    $temperature = $_POST["temperature"];
    $humidity = $_POST["humidity"];

    $measure = new Measure($temperature, $humidity);

    if (empty($validationErrors)) {

    }
}
?>
<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
    <head>
      <meta charset="utf-8">
      <title>Create User</title>
      <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>

    	<h1>Test relevé de mesures</h1>

        <?php echo "Température : " .$measure[temperature]?></br/>
        <?php echo "Humidité : " .$measure[humitity]?>
    </body>
</html>

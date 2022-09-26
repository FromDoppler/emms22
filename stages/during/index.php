<?php
require_once('././config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index <?= ($simulated) ? "SIMULADO" : "" ?></title>
</head>

<body>
    <h1>Index DURING</h1>
    <h2>Dia <?= $dayDuring ?></h2>
    <h3>LIVE <?= $liveDayDuring ?></h3>
    <p>Titulo = <?= $duringDaysArray['d' . $dayDuring]['title'] ?></p>
    <p>Video = <?= $duringDaysArray['d' . $dayDuring]['video'] ?></p>

</body>

</html>

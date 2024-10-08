<?php

    function test_input($data) { // Comprobación de entrada de datos 
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

        $valorPregunta1 = test_input($_POST["Pregunta1"]);
        $valorPregunta2 = test_input($_POST["Pregunta2"]);
        $valorPregunta3 = test_input($_POST["Pregunta3"]);
        $valorPregunta4 = test_input($_POST["Pregunta4"]);
        $sumaTotal = $valorPregunta1 + $valorPregunta2 + $valorPregunta3 + $valorPregunta4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleResultado.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <div id="result">
        <?php
            if ($sumaTotal > 0 && $sumaTotal <= 5){
                echo "<h3>Eres una persona reservada, exigente y honesta</h3>";
            } else if ($sumaTotal > 5 && $sumaTotal <= 10){
                echo "<h3>Eres una persona interesante, calculadora y observadora</h3>";
            } else if ($sumaTotal > 10 && $sumaTotal <= 15){
                echo "<h3>Eres una persona extrovertida, amigable y animada</h3>";
            } else if ($sumaTotal > 15 && $sumaTotal <= 20){
                echo "<h3>Eres una persona que se preocupa en los demás, sociable y sentimental</h3>";
            }
        ?>
    </div>
    <div id="links">
        <a href="https://www.16personalities.com/es">Enlace1</a>
        <a href="https://www.arealme.com/es">Enlace2</a>
        <a href="https://www.idrlabs.com/tests.php">Enlace3</a>
    </div>
</body>
</html>
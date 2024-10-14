<?php

    // Data input check for invalid characters
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

        // Initialize variables with the result from the previous form
        $valorPregunta1 = test_input($_POST["Pregunta1"]);
        $valorPregunta2 = test_input($_POST["Pregunta2"]);
        $valorPregunta3 = test_input($_POST["Pregunta3"]);
        $valorPregunta4 = test_input($_POST["Pregunta4"]);
        $valorPregunta4 = test_input($_POST["Pregunta5"]);
        // Sum of the answers to the final result
        $sumaTotal = $valorPregunta1 + $valorPregunta2 + $valorPregunta3 + $valorPregunta4 + $valorPregunta5;
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
            // Sintax to check the total sum of the answers and display the result
            if ($sumaTotal > 0 && $sumaTotal <= 5){
                echo "<h3>Eres una persona reservada, exigente y honesta</h3>";
            } else if ($sumaTotal > 5 && $sumaTotal <= 10){
                echo "<h3>Eres una persona interesante, calculadora y observadora</h3>";
            } else if ($sumaTotal > 10 && $sumaTotal <= 15){
                echo "<h3>Eres una persona extrovertida, amigable y animada</h3>";
            } else if ($sumaTotal > 15 && $sumaTotal <= 20){
                echo "<h3>Eres una persona que se preocupa en los demás, sociable y sentimental</h3>";
            } else if ($sumaTotal > 20 && $sumaTotal <= 25){
                echo "<h3>Eres una persona segura de ti misma, sociable... </h3>";
            }
        ?>
    </div>
    <div id="enlaces">
        <p class="destacado">¡Enlaces!</p>
        <p class="destacado">⬋   ⬇   ⬊</p>
    </div>
    <div id="links">
        <!-- Links to other tests of interest -->
        <div class="card"><p>16Personalities</p><a href="https://www.16personalities.com/es"></a></div>
        <div class="card"><p>ARealMe</p><a href="https://www.arealme.com/es"></a></div>
        <div class="card"><p>IDRLabs</p><a href="https://www.idrlabs.com/tests.php"></a></div>
    </div>
</body>
</html>
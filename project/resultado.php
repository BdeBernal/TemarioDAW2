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
    
    if ($sumaTotal > 0 && $sumaTotal <= 5){
        echo "Eres una persona solitaria, exigente y honesta";
    } else if ($sumaTotal > 5 && $sumaTotal <= 10){
        echo "Eres una persona compleja, reservada y observadora";
    } else if ($sumaTotal > 10 && $sumaTotal <= 15){
        echo "Eres una persona extrovertida, amigable y animada";
    } else if ($sumaTotal > 15 && $sumaTotal <= 20){
        echo "Eres una persona que piensa en los demás, sociable y sentimental";
    }
?>
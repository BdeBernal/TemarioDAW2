<?php

    function calcularPotencias($numero,  $potencia = 2) : int{

        if (is_int($numero)){
            $total = 1;
            for($potencia; $potencia > 0; $potencia--){
                $total *= $numero;
            }
            return $total;
        } elseif(!is_int($numero)) {
            throw new Exception("Los datos tienen que ser números");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
</head>
<body>
    <?php
        try{
            echo "<h3> 5 elevado al cuadrado es = " . calcularPotencias(5) . "</h3>";
            echo "<h3> 3 Elevado al cubo es = " . calcularPotencias(3, 3) . "</h3>";  
            echo "<h3> 2 Elevado al cubo es = " . calcularPotencias("pacos") . "</h3>";  
        } catch(Exception $e){
            echo "<h3>" . $e->getMessage() . "</h3>";
        }
    ?>
</body>
</html>
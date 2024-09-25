<?php declare(strict_types=1);
                
    function calcularFactorial(int $numero) : int{

        if ($numero < 0){
            throw new Exception("No se puede hacer el factorial de un número negativo");
        } else {
            $total = 1;
        
            for($numero; $numero > 0; $numero--){
                $total *= $numero;
            }
            return $total;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FactorialConFuncion</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            define("num", 5);
            define("num2", 0);
            define("num3", -1);

            echo "<h3> The factorial of " . num . " is = " . calcularFactorial(num) . "<h3>";
            echo "<h3> The factorial of " .num2 . " is = " . calcularFactorial(num2) . "<h3>";
            try{
                echo "<h3> The factorial of " .num3 . " is = " . calcularFactorial(num3) . "<h3>";
            } catch (Exception $e){
                echo "<p>" . $e->getMessage() . "</p>";
            }
            

        ?>
    </div>
</body>
</html>
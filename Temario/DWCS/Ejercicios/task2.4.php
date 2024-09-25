<?php declare(strict_types=1);
    function pedirPersona(?string $name, int $age, string $surname = "Apellido") : void{
        echo "<p>" . $name . " " . $surname . " is " . $age . " years old </p>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phrase</title>
</head>
<body>
    <?php
        pedirPersona("Paco", 20, "Suarez");
        pedirPersona(null, 21);
    ?>
</body>
</html>
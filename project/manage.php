<?php

    function test_input($data) { // Comprobación de entrada de datos 
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $userName = $passWord = "";
    $userNameErr = $passWordErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["Username"]) || $_POST["Username"] == ""){
            $userNameErr = "Nombre introducido incorrecto";
        } else {
            $userName = test_input($_POST["Username"]);
        }
        if(empty($_POST["Password"]) || $_POST["Password"] == ""){
            $passWordErr = "Contraseña introducida incorrecto";
        } else {
            $passWord = test_input($_POST["Password"]);
        }
    }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylemanage.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <header>
        <h2>Test de la personalidad</h2>
        <h4>¡Bienvenido <?php echo $userName ?>!</h4>
        <p>Responda a estas preguntas del 1-5 siendo 1 muy en desacuerdo y 5 muy de acuerdo:</p>
    </header>
    <div id="form">
        <?php include 'form.php' ?>
    </div>
</body>
</html>
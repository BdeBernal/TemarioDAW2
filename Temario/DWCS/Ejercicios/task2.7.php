<?php
     $bebidas = array(
        "CocaCola" => array("text"=>"Coca Cola", "precio"=>2.1), 
        "PepsiCola" => array("text"=>"Pepsi Cola", "precio"=>2), 
        "FantaNaranja" => array("text"=>"Fanta Naranja", "precio"=>2.5), 
        "TrinaManzana" => array("text"=>"Trina Manzana", "precio"=>2.3)
    );

    function misBebidas(array $bebidas){
        echo "<select name='opcion'>";
        foreach ($bebidas as $marca => $descripcion){
            echo ("<option value =' " . $marca ." '>" . $descripcion["text"] . " (" . $descripcion["precio"] . ")</option>");
    }
        echo "</select>";
    }

    function test_input($data) { // Comprobación de entrada de datos 
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      $numeroErr="";
    $numero = 0; // Inicializar variables
  if (isset($_GET["enviar"])){ // Comprobar si pincho en submit

    if (empty($_GET["cantidad"]) || $_GET["cantidad" ] <= 0){  // Comprobar nombre vacio
      $numeroErr = "Introduce un valor mayor a 0";
    } else{
      $numero = test_input($_GET["cantidad"]);
    }

    if ($numero > 0){ // Si no hay ningun error sucede esto
      echo "You have asked for $numero bottles of  <br>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Dinámico</title>
</head>
<body>
    <?php
        misBebidas($bebidas);
    ?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
    Cantidad: <input type="number" name="cantidad">
    <span class="error"><?php echo $numeroErr ?></span>   
    <br>
    <input type="submit" name="enviar">
  </form>

</body>
</html>
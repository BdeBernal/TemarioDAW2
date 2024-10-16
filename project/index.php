<?php
//Check the user input so that it is safe
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
/*Login form
If the user and password are correct it stores the user name and redirects to manage.php 
if the user and password are not correct it shows an error message */
function comprobar_usuario($nombre, $clave){
	if($nombre === "usuario" and $clave === "1234"){
		$usu['nombre'] = "usuario";
		$usu['rol'] = 0;
		return $usu;
	}elseif($nombre === "admin" and $clave === "1234"){
		 $usu['nombre'] = "admin";
		 $usu['rol'] = 1;
		 return $usu;
	}else return false;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {  	
	$usuario = test_input($_POST['usuario']);
	$clave = test_input($_POST['clave']);
	$usu = comprobar_usuario($usuario, $clave);
    if($usu==false){
		$err = true;
		$usuario = $_POST['usuario'];
	}else{	
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: manage.php");	
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleIndex.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div id="loginBasico">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <strong>Username: </strong><input id = "usuario" name = "usuario" type = "text" value ="<?php if(isset($usuario)) echo $usuario?>"><br><br>
            <strong>Password: </strong><input id = "clave" name = "clave" type = "password"><br><br>
            <input type="submit" value="Enviar" value="Send Request">
            <?php 
                if(isset($_GET["redirigido"])){
                    echo "<p>Please introduce login to continue </p>";
                }
                if(isset($err) and $err == true){
                    echo "<p> Please check user and password </p>";
                }
            ?>
        </form>
    </div>
</body>
</html>
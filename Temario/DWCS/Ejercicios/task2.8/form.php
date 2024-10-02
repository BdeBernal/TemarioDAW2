<?php
$Username = $Password = $City = $UsernameErr = $PasswordErr = $CityErr = $Servers = $ServersErr = "";
$Role = $RoleErr = $Mail = $Payroll = $SelfService = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["Username"]) || $_POST["Username"] == ""){
        $UsernameErr = "Escribe un nombre válido";
    } else {
        $Username = test_input($_POST["Username"]);
    } 
    
    if(empty($_POST["Password"]) || $_POST["Password"] == ""){
        $PasswordErr = "Escribe una contraseña válida";
    } else {
        $Password = test_input($_POST["Password"]);
    }
    
    if(empty($_POST["City"]) || $_POST["City"] == ""){
        $CityErr = "Escribe una ciudad válida";
    } else {
        $City = test_input($_POST["City"]);
    }

    if(empty($_POST["Servers"]) || $_POST["Servers"] == ""){
        $ServersErr = "Selecciona un servidor válido";
    } else {
        $Servers = test_input($_POST["Servers"]);
    }

    if(empty($_POST["Role"]) || $_POST["Role"] == ""){
        $RoleErr = "Selecciona un rol válido";
    } else {
        $Role = test_input($_POST["Role"]);
    }

    if(empty($_POST["Mail"]) || $_POST["Mail"] == ""){
        $MailErr = "Escribe una ciudad válida";
    } else {
        $Mail = test_input($_POST["Mail"]);
    }

    if(empty($_POST["Payroll"]) || $_POST["Payroll"] == ""){
        $PayrollErr = "Escribe una ciudad válida";
    } else {
        $Payroll = test_input($_POST["Payroll"]);
    }

    if(empty($_POST["SelfSerice"]) || $_POST["SelfSerice"] == ""){
        $SelfServiceErr = "Escribe una ciudad válida";
    } else {
        $SelfService = test_input($_POST["SelfService"]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormII</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Username:  <input value="<?php echo test_input($_POST["Username"])?>" type="text" name="Username" id="Username"><span><?php echo $UsernameErr?></span><br>

        Password: <input value="<?php echo test_input($_POST["Password"])?>" type="password" name="Password" id="Password"><span><?php echo $PasswordErr?></span><br>

        City Of Employment: <input value="<?php echo test_input($_POST["City"])?>" type="text" name="City" id="City"><span><?php echo $CityErr?></span><br>

        Web server: <select name="Servers" id="Servers">
            <option value="Server1" <?php if (isset($Servers) && $Servers == "Server1"){ echo "selected";} ?>>Server1</option>
            <option value="Server2" <?php if (isset($Servers) && $Servers == "Server2"){ echo "selected";} ?>>Server2</option>
        </select><br>

        Please specify your role: 
        <input type="radio" name="Role" value="Admin" <?php if (isset($Role) && test_input($_POST["Role"]) == "Admin"){ echo "checked";} ?>>Admin
        <input type="radio" name="Role" value="Engineer" <?php if (isset($Role) && test_input($_POST["Role"]) == "Engineer"){ echo "checked";} ?>>Engineer
        <input type="radio" name="Role" value="Manager" <?php if (isset($Role) && test_input($_POST["Role"]) == "Manager"){ echo "checked";} ?>>Manager
        <input type="radio" name="Role" value="Guest" <?php if (isset($Role) && test_input($_POST["Role"]) == "Guest"){ echo "checked";} ?>>Guest<br>

        Single Sign-on to the following:
        <input type="checkbox" name="Mail" value="Mail" <?php if (isset($Mail) && test_input($_POST["Mail"]) == "Mail"){ echo "checked";} ?>>Mail
        <input type="checkbox" name="Payroll" value="Payroll" <?php if (isset($Payroll) && test_input($_POST["Payroll"]) == "Payroll"){ echo "checked";} ?>>Payroll
        <input type="checkbox" name="SelfService" value="SelfService" <?php if (isset($SelfService) && test_input($_POST["SelfService"]) == "SelfService"){ echo "checked";} ?>>Self-Service<br>

    </form>
</body>

<?php // Arreglar par que no de error feo si no se selecciona checkbox o rol
 function test_input($data) { // Comprobación de entrada de datos 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<style>
    span{
        color: red;
    }
</style>
</html>
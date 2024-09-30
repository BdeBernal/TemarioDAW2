<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormII</title>
</head>
<body>
    <form action="#" method="post">
        Username:  <strong><?php echo test_input($_POST["Username"])?></strong><br>

        Password: <strong><?php echo test_input($_POST["Password"])?></strong><br>

        City Of Employment: <strong><?php echo test_input($_POST["City"])?></strong><br>

        Web server: <strong><?php echo test_input($_POST ["Servers"])?></strong><br>

        Please specify your role: 
        <input type="radio" name="Role" id="Admin">Admin
        <input type="radio" name="Role" id="Engineer">Engineer
        <input type="radio" name="Role" id="Manager">Manager
        <input type="radio" name="Role" id="Guest">Guest<br>

        Single Sign-on to the following:
        <input type="checkbox" name="Mail" id="Mail">Mail
        <input type="checkbox" name="Payroll" id="Payroll">Payroll
        <input type="checkbox" name="Self-Service" id="Self-Service">Self-Service<br>

    </form>
</body>

<?php
 function test_input($data) { // Comprobación de entrada de datos 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
</html>
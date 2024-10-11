<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario2</title>
</head>
<body>
    <form action="manage.php" method="get">
        <h2>More Information: </h2><br>
        <?php echo $_COOKIE["fullName"] . " wants to enroll in the following subject " . $_COOKIE["subject"]; ?><br><br>
        In-Person Classes <input type="radio" name="Module" value="InPerson"><br>
        Distance Classes <input type="radio" name="Module" value="Distance"> <br>
        <input type="submit" value="Send data">
    </form>
</body>
</html>
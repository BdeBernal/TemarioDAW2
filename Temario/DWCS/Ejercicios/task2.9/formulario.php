<?php
    $subjects = array(
        "Java Programming" => "value = 0",
        "Web Design" => "value = 1",
        "Dockers Administration" => "value = 2",
        "Django Framework" => "value = 3",
        "Mongo Database" => "value = 4"
    )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>First Practice using forms.</h1>

    <form action="manage.php" method="post">

        Name and surnames: <input type="text" name="fullName" id="fullName" required><br>

        Subject to enroll:  
            <select name="subject" id="subject">
                <?php
                    foreach ($subjects as $choice){
                        echo "<option " . array_search($choice, $subjects) . " >" . array_search($choice, $subjects) . "</option>";
                    }
                ?>
            </select><br>

        <input type="submit" value="Send data">

    </form>
</body>
</html>
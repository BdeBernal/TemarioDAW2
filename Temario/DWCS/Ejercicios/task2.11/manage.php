<?php function test_input($data) { // Comprobación de entrada de datos 
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $subject = $fullName = "";
    $subjectErr = $fullNameErr = "";
    $module = $moduleErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){ //Confirmar que subject y fullName no estén vacíos
        if(empty($_POST["subject"]) || $_POST["subject"] == ""){
            $subjectErr = "Selecciona una asignatura válida";
        } else {
            $subject = test_input($_POST["subject"]);
        }
        if (empty($_POST["fullName"]) || $_POST["fullName"] == ""){
            $fullNameErr = "Escribe un nombre válido";
        } else {
            $fullName = test_input($_POST["fullName"]);
        }

    echo $fullName . " wants to enroll in the following subject " . $subject;

    ?> 

    <br><a href="manage2.php?fullName=<?php echo $_POST["fullName"]?>&subject=<?php echo $_POST["subject"]?>">Next Page</a>
    
    <?php
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET"){
        if(empty($_GET["fullName"]) || $_GET["fullName"] == ""){
            $fullNameErr = "Error al obtener el nombre";
        } else {
            $fullName = test_input($_GET["fullName"]);
            setcookie('fullName', $fullName, time() + (86400 * 30), "/");
        }

        if(empty($_GET["subject"]) || $_GET["subject"] == ""){
            $subjectErr = "Error al obtener la asignatura";
        } else {
            $subject = test_input($_GET["subject"]);
            setcookie('subject', $subject, time() + (86400 * 30), "/");
        }

        if(empty($_GET["Module"]) || $_GET["Module"] == ""){
            $moduleErr = "Error al seleccionar modulo";
        } else {
            $module = test_input($_GET["Module"]);
            setcookie('module', $module, time() + (86400 * 30), "/");
        }
        
        echo $_COOKIE['fullName'] . " wants to enroll in the following subject " . $_COOKIE['subject'] . "<br>";
        echo $_COOKIE['module'] . " is the selected option";
    }
?>

<html>
    <head>
        <title>Factorial</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php

                    $numero = 5;
                    $total = 1;
                    
                    for($numero; $numero > 0; $numero--){
                        $total *= $numero;
                    }

                echo "<h3> The result is = " . $total . "<h3>";

            ?>
        </div>
    </body>
</html>
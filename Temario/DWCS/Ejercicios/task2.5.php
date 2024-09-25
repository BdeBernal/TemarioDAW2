<?php
    function tripleCheck($numbers){
        $count = 0;
        $anterior = "";

        foreach($numbers as $num){
            if ($num == $anterior){
                $count++;
            } else {
                $count = 0;
            }
            if ($count == 2){
                return true;
            }
            $anterior = $num;
        }
        return false;
    }
    
    function countries($array){
        foreach($array as $country => $capital){
            echo "The capital of $country is $capital <br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        echo "<h3>Triple Check</h3>";
        echo var_dump(tripleCheck($numeros = [2, 3, 4, 1, 1, 1]));

        echo "<h3>Countries</h3>";
        countries($ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"));
    ?>
</body>
</html>
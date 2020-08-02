<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Associative arrays in PHP</h1>
    <?php 
        // Associative arrays
        
        // $num1 = array("firstname" => "kartik" , "secondname" => "saxena" , "age" => 19);      OR
        $num1 = ["firstname" => "kartik" , "secondname" => "saxena" , "age" => 19];


        // Excessing Array element using keys
        
        echo $num1["firstname"];
        echo "<br>";
        echo $num1["age"];
        echo "<br>";

        // Printinf full array using "print_r()" function

        print_r ($num1);
    ?>
</body>
</html>

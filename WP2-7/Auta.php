

<?php


$cars[0]['brand'] = "Mazda";
$cars[0]['model'] = "MX-5 Miata";
$cars[0]['color'] = "Red";
$cars[0]['type'] = "-Sport";

$cars[1]['brand'] = "Sissan";
$cars[1]['model'] = "Maxima";
$cars[1]['color'] = "Orange";
$cars[1]['type'] = "-Sedan";

$cars[2]['brand'] = "Toyota";
$cars[2]['model'] = "Venza";
$cars[2]['color'] = "Grey";
$cars[2]['type'] = "-SUV";

$cars[3]['brand'] = "BMW";
$cars[3]['model'] = "i3";
$cars[3]['color'] = "Dark Blue";
$cars[3]['type'] = "-Hybrid/Ev";

$cars[4]['brand'] = "Audi";
$cars[4]['model'] = "Allroad";
$cars[4]['color'] = "White";
$cars[4]['type'] = "-Wagon";

$cars[5]['brand'] = "Kia";
$cars[5]['model'] = "Sedan";
$cars[5]['color'] = "Brown";
$cars[5]['type'] = "-Minivan";





$person[0]['firstname'] = "Dominik";
$person[0]['lastname'] = "Armitage";
$person[0]['age'] = 32;
$person[0]['weight'] = 50;
$person[0]['height'] = 180;
$person[0]['cars'] = $cars[0];

$person[1]['firstname'] = "Arnav";
$person[1]['lastname'] = "Flower";
$person[1]['age'] = 46;
$person[1]['weight'] = 40;
$person[1]['height'] = 164;
$person[1]['cars'] = $cars[2];

$person[2]['firstname'] = "Milly";
$person[2]['lastname'] = "Ferguson";
$person[2]['age'] = 25;
$person[2]['weight'] = 41;
$person[2]['height'] = 179;
$person[2]['cars'] = $cars[5];

$person[3]['firstname'] = "Amal";
$person[3]['lastname'] = "Rojas";
$person[3]['age'] = 20;
$person[3]['weight'] = 54;
$person[3]['height'] = 186;
$person[3]['cars'] = $cars[4];

$person[4]['firstname'] = "Brad";
$person[4]['lastname'] = "Gilmore";
$person[4]['age'] = 98;
$person[4]['weight'] = 90;
$person[4]['height'] = 198;
$person[4]['cars'] = $cars[1];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?php
for ($i=0; $i < 5; $i++) { 
    echo $person[$i]['firstname'] . " " . $person[$i]['cars']['brand'] . " " . $person[$i]['cars']['model'] . " " . $person[$i]['cars']['color'] . " " . $person[$i]['cars']['type'];
    ?> <br>
    <?php
}
?>


</body>
</html>
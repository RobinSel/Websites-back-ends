<?php

$dieren = array('olifant', 'leeuw', 'zebra', 'pinguïn', 'giraf', 'gorilla', 'dolfijn', 'rat', 'hond', 'hamster');
$dieren2 [] = 'olifant';
$dieren2 [] = 'leeuw';
$dieren2 [] = 'zebra';
$dieren2 [] = 'pinguïn';
$dieren2 [] = 'giraf';
$dieren2 [] = 'gorilla';
$dieren2 [] = 'dolfijn';
$dieren2 [] = 'rat';
$dieren2 [] = 'hond';
$dieren2 [] = 'hamster';

$voertuigen = array('landvoertuigen' => array('vespa', 'fiets'),
                    'watervoertuigen' => array('surfplank', 'vlot', 'schoener', 'driemaster'),
                    'luchtvoertuigen' => array('luchtballon', 'helicopter', 'B52'));


$getallen1 = array(1,2,3,4,5);
$getallen2 = array(5,4,3,2,1);
$getallen1_oneven = "";

$vermenigvuldiging = $getallen1[0] * $getallen1[1] * $getallen1[2] * $getallen1[3] * $getallen1[4];

$getallen_optellen = array ($getallen1[0] + $getallen2[0], $getallen1[1] + $getallen2[1], $getallen1[2] + $getallen2[2], $getallen1[3] + $getallen2[3], $getallen1[4] + $getallen2[4]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Deel 1:</h1>
    <p><?php var_dump($dieren)?></p>
    <p><?php print_r($dieren2)?></p>
    
    <p><?php var_dump($voertuigen)?></p>
    <p><?php print_r($voertuigen)?></p>
    
    <h1>Deel 2:</h1>
    <p><?php echo "vermenigvuldiging: " . $vermenigvuldiging?></p>
    <p><?php print_r($getallen_optellen)?></p>
    
</body>
</html>
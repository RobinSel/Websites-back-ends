<?php
$getal = 1;

if ($getal == 1) {$dag = "maandag";}
if ($getal == 2) {$dag = "dinsdag";}
if ($getal == 3) {$dag = "woensdag";}
if ($getal == 4) {$dag = "donderdag";}
if ($getal == 5) {$dag = "vrijdag";}
if ($getal == 6) {$dag = "zaterdag";}
if ($getal == 7) {$dag = "zondag";}

$dag_uppercase = strtoupper($dag);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Deel 1:</h1>
    <p><?php echo $getal . " " . $dag?></p>
    
    <h1>Deel 2:</h1>
    <p><?php echo $dag_uppercase?></p>
    
</body>
</html>
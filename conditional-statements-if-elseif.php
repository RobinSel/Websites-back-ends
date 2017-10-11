<?php
$getal = 77;

if ($getal < 10) {
    $antwoord = "Het getal ligt tussen 0 en 10";
}
elseif ($getal >10 && $getal < 20) {
    $antwoord = "Het getal ligt tussen 10 en 20";
}
elseif ($getal >20 && $getal < 30) {
    $antwoord = "Het getal ligt tussen 20 en 30";
}
elseif ($getal >30 && $getal < 40) {
    $antwoord = "Het getal ligt tussen 30 en 40";
}
elseif ($getal >50 && $getal < 60) {
    $antwoord = "Het getal ligt tussen 50 en 60";
}
elseif ($getal >60 && $getal < 70) {
    $antwoord = "Het getal ligt tussen 60 en 70";
}
elseif ($getal >70 && $getal < 80) {
    $antwoord = "Het getal ligt tussen 70 en 80";
}
elseif ($getal >80 && $getal < 90) {
    $antwoord = "Het getal ligt tussen 80 en 90";
}
elseif ($getal >90 && $getal < 100) {
    $antwoord = "Het getal ligt tussen 90 en 100";
}
elseif ($getal <0 || $getal > 100) {
    $antwoord = "Het getal ligt niet tussen 0 en 100";
}
else {
    $antwoord = "het getal is een tiental: " . $getal;
}

$anwtoord_reverse = strrev($antwoord);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Deel 1:</h1>
    <p><?php echo $antwoord?></p>
    <p><?php echo $anwtoord_reverse?></p>
    
</body>
</html>
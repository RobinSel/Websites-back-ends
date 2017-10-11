<?php
function berekenSom ($getal1, $getal2)
{
    $som = $getal1 + $getal2;
    return $som;
}
function berekenVermenigvuldiging ($getal1, $getal2)
{
    $vermenigvuldiging = $getal1 * $getal2;
    return $vermenigvuldiging;
}
function isEven ($getal)
{
    $even = false;
    if ($getal%2 == 0) {
        $even = true;
    }
    return $even;
}
function stringtoupper ($text) {
    $lengte = strlen($text);
    $uppercase = strtoupper($text);
    $resultaat = array($lengte, $uppercase);
    
    return $resultaat;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Deel 1:</h1>
    <p><?php echo berekenSom(7, 2)?></p>
    <p><?php echo berekenVermenigvuldiging(7, 2)?></p>
    <p><?php echo isEven(7)?></p>
    <p><?php echo stringtoupper("test dit")?></p>
    
    <h1>Deel 2:</h1>
    
    
</body>
</html>
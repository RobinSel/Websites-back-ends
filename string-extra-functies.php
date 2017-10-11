<?php
$fruit = "kokosnoot";
$fruit2= "ananas";

$fruitstringlengt = strlen($fruit);
$letter_o_position = strpos($fruit, 'o');

$letter2_a_position = strrpos($fruit2, 'a');
$fruit2_uppercase = strtoupper($fruit2);

$lettertje = 'e';
$cijfertje = 3;
$langstewoord = "zandzeepsodemineralenwatersteenstralen";
$langstewoordveranderd = str_replace($lettertje, $cijfertje, $langstewoord);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Deel 1:</h1>
    <p><?php echo "woord: " . $fruit ?></p>
    <p><?php echo "lengte: " . $fruitstringlengt ?></p>
    <p><?php echo "positie van eerste 'o': " . ($letter_o_position + 1) ?></p>
    
    <h1>Deel 2:</h1>
    <p><?php echo "woord: " . $fruit2?></p>
    <p><?php echo "positie van laatste 'a' : " . ($letter2_a_position + 1)?></p>
    <p><?php echo "woord in hoofdletters: " . $fruit2_uppercase?></p>
    
    <h1>Deel 3:</h1>
    <p><?php echo "woord: " . $langstewoord?></p>
    <p><?php echo "veranderd woord: " . $langstewoordveranderd?></p>
    
</body>
</html>
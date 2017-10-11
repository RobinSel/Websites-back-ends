<?php
$voornaam = "Robin";
$familienaam = "Sel";

$volledige_naam = "";
$volledige_naam = $voornaam . " " .  $familienaam;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <p><?php echo $volledige_naam?></p>
    <p><?php echo strlen($volledige_naam)?></p>
    
    
</body>
</html>
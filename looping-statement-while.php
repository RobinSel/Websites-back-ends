<?php
$getallen = array();
$getallen2 =array();
$getal =0;

while($getal<=100) {
    $getallen[] = $getal;
    if($getal>40 && $getal<80 && $getal%3==0){
        $getallen2[] = $getal;
    }
    
    $getal++;
}

$boodschappenlijstje = array('Pasta', 'appels', 'tandpasta', 'wasmiddel', 'wc-papier', 'cornflakes', 'snickers');




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Deel 1:</h1>
    <p><?php print_r($getallen)?></p>
    <p><?php print_r($getallen2)?></p>
    
    <h1>Deel 2:</h1>
    <ul>
        <li><?php echo $boodschappenlijstje[0]?></li>
        <li><?php echo $boodschappenlijstje[1]?></li>
        <li><?php echo $boodschappenlijstje[2]?></li>
        <li><?php echo $boodschappenlijstje[3]?></li>
        <li><?php echo $boodschappenlijstje[4]?></li>
        <li><?php echo $boodschappenlijstje[5]?></li>
        <li><?php echo $boodschappenlijstje[6]?></li>
    </ul>
    
</body>
</html>
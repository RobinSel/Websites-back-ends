<?php
$aantalJaarOpbank =1;
function rentevoet ($getal, $aantalJaarOpbank) {
    $getal *= 1.08;
    if ($aantalJaarOpbank < 10) {
        echo "het geld staat " . $aantalJaarOpbank . " jaar op de bank en is " . $getal;
        $aantalJaarOpbank++;
        rentevoet($getal, $aantalJaarOpbank);
    }
    else {
        echo "Je geld staat 10 jaar op de bank en is nu " . $getal;
    }
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
    <p><?php echo rentevoet(100000, $aantalJaarOpbank) ?></p>
    
    <h1>Deel 2:</h1>
    
    
</body>
</html>
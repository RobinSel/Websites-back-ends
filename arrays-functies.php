<?php
$dieren = array('olifant', 'leeuw', 'tijger', 'giraf', 'neushoorn', 'dolfijn', 'goudvis');

$aantal_dieren = count($dieren);
$teZoekenDier = 'neushoorn';
if(in_array($teZoekenDier, $dieren)) {
    $gevonden = "Het dier " . $teZoekenDier ." zit in de array 'dieren'";
}
else {
    $gevonden = "Helaas, het dier " . $teZoekenDier . " zit niet in de array 'dieren'";
}

$dieren2 = array();
$dieren2 = $dieren;
sort($dieren2);
$zoogdieren = array('olifant', 'leeuw', 'giraf');
$lijstDieren = array('dieren' => array($dieren), 'zoogdieren' => array($zoogdieren));

$getallen =array(8,7,8,7,3,2,1,2,4);

$getallen_unique = array_unique($getallen);

$gesorteerde_array = $getallen_unique;
sort($gesorteerde_array);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Deel 1:</h1>
    <p><?php print_r($dieren)?></p>
    <p><?php echo $aantal_dieren?></p>
    <p><?php echo $gevonden?></p>
        
    <h1>Deel 2:</h1>
    <p><?php print_r($dieren2)?></p>
    <p><?php print_r($lijstDieren)?></p>
    
    <h1>Deel 3:</h1>
    <p><?php print_r($getallen)?></p>
    <p><?php print_r($getallen_unique)?></p>
    <p><?php print_r($gesorteerde_array)?></p>
    
    
</body>
</html>
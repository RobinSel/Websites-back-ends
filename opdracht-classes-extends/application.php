<?php
require_once 'classes/Animals.php';
require_once 'classes/Lion.php';
require_once 'classes/Zebra.php';

$kermit = new Animal('Kermit', 'male', 100);
$dikkie = new Animal('Dikkie', 'male', 90);
$flipper = new Animal('Flipper', 'female', 80);

$simba = new Lion('Simba', 'male', 85, 'Congo lion');
$scar = new Lion('Scar', 'male', 70, 'Kenia lion');

$zeke = new Zebra('Zeke', 'male', 45, 'Quagga');
$zana = new Zebra('Zana', 'female', 75, 'Selous');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Dieren</h1>
    <h2>Instanties van de Animal class</h2>
    <p>
    <?php echo $kermit->getName() ?> is van het geslacht <?php echo $kermit->getGender() ?> en heeft momenteel <?php echo $kermit->getHealth() ?> levenspunten
    (special move: <?php echo $kermit->doSpecialMove() ?> )
    </p>
    
    <p>
    <?php echo $dikkie->getName() ?> is van het geslacht <?php echo $dikkie->getGender() ?> en heeft momenteel <?php echo $dikkie->getHealth() ?> levenspunten
    (special move: <?php echo $dikkie->doSpecialMove() ?> )
    </p>
    
    <p>
    <?php echo $flipper->getName() ?> is van het geslacht <?php echo $flipper->getGender() ?> en heeft momenteel <?php echo $flipper->getHealth() ?> levenspunten
    (special move: <?php echo $flipper->doSpecialMove() ?> )
    </p>
    
    <h2>Instanties van de Lion class</h2>
    <p>
    De speciale move van <?php echo $simba->getName() ?> (soort: <?php echo $simba->getSpecies() ?>): <?php echo $simba->doSpecialMove() ?>
    </p>
    <p>
    De speciale move van <?php echo $scar->getName() ?> (soort: <?php echo $scar->getSpecies() ?>): <?php echo $scar->doSpecialMove() ?>
    </p>
    
    <h2>Instanties van de Zebra class</h2>
    <p>
    De speciale move van <?php echo $zeke->getName() ?> (soort: <?php echo $zeke->getSpecies() ?>): <?php echo $zeke->doSpecialMove() ?>
    </p>
    <p>
    De speciale move van <?php echo $zana->getName() ?> (soort: <?php echo $zana->getSpecies() ?>): <?php echo $zana->doSpecialMove() ?>
    </p>
    
</body>
</html>
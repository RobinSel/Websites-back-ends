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
    <?php $kermit->getName() ?> is van het geslacht <?php $kermit->getGender() ?> en heeft momenteel <?php $kermit->getHealth() ?> levenspunten
    (special move: <?php $kermit->doSpecialMove() ?> )
    </p>
    
    <p>
    <?php $dikkie->getName() ?> is van het geslacht <?php $dikkie->getGender() ?> en heeft momenteel <?php $dikkie->getHealth() ?> levenspunten
    (special move: <?php $dikkie->doSpecialMove() ?> )
    </p>
    
    <p>
    <?php $flipper->getName() ?> is van het geslacht <?php $flipper->getGender() ?> en heeft momenteel <?php $flipper->getHealth() ?> levenspunten
    (special move: <?php $flipper->doSpecialMove() ?> )
    </p>
    
    <h2>Instanties van de Lion class</h2>
    <p>
    De speciale move van <?php $simba->getName() ?> (soort: <?php $simba->getSpecies() ?>): <?php $simba->doSpecialMove() ?>
    </p>
    <p>
    De speciale move van <?php $scar->getName() ?> (soort: <?php $scar->getSpecies() ?>): <?php $scar->doSpecialMove() ?>
    </p>
    
    <h2>Instanties van de Zebra class</h2>
    <p>
    De speciale move van <?php $zeke->getName() ?> (soort: <?php $zeke->getSpecies() ?>): <?php $zeke->doSpecialMove() ?>
    </p>
    <p>
    De speciale move van <?php $zana->getName() ?> (soort: <?php $zana->getSpecies() ?>): <?php $zana->doSpecialMove() ?>
    </p>
    
</body>
</html>
<?php
$getal =7;

switch ($getal) {
    case 1:
        $antwoord = "maandag";
        break;
    case 2:
        $antwoord = "dinsdag";
        break;
    case 3:
        $antwoord = "woensdag";
        break;
    case 4:
        $antwoord = "donderdag";
        break;
    case 5:
        $antwoord = "vrijdag";
        break;
    case 6:
        $antwoord = "zaterdag";
        break;
    case 7:
        $antwoord = "zondag";
        break;
    default:
        $antwoord = $getal . " is geen nummer van 1 tot 7";
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
    <p><?php echo $antwoord?></p>
    
</body>
</html>
<?php
$jaartal = 2100;
$antwoord;

if ($jaartal % 4 == 0) {
    if ($jaartal % 100 == 0) {
        if ($jaartal % 400 == 0) {
            $antwoord = "Het jaar " . $jaartal . " is een schrikkeljaar";
        }
        else {
            $antwoord = "Het jaar " . $jaartal . " is geen schrikkeljaar";
        }
    }
    else {
        $antwoord = "Het jaar " . $jaartal . " is een schrikkeljaar";
    }
}
else {
    $antwoord = "Het jaar " . $jaartal . " is geen schrikkeljaar";
}

$aantal_seconden = 221108521;

$aantal_minuten = round(($aantal_seconden / 60), 2);
$aantal_uren = round(($aantal_minuten / 60), 2);
$aantal_dagen = round(($aantal_uren / 24),2);
$aantal_weken = round(($aantal_dagen / 7),2);
$aantal_maanden = round(($aantal_dagen / 31),2);
$aantal_jaren = round(($aantal_dagen / 365),2);


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
    
    <h1>Deel 2:</h1>
    <p><?php echo "# seconden: " . $aantal_seconden?></p>
    <p><?php echo "# minuten: " . $aantal_minuten?></p>
    <p><?php echo "# uren: " . $aantal_uren?></p>
    <p><?php echo "# dagen: " . $aantal_dagen?></p>
    <p><?php echo "# weken: " . $aantal_weken?></p>
    <p><?php echo "# maanden: " . $aantal_maanden?></p>
    <p><?php echo "# jaren: " . $aantal_jaren?></p>
    
</body>
</html>
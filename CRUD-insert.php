<?php

$message = '';
$insertMessage = '';

try{
    $db = new mysqli('localhost', 'root', '', 'bieren');
    
    if (isset($_GET['submit'])) {
        if ($_GET['brnaam'] != null &&
            $_GET['adres'] != null &&
            $_GET['postcode'] != null &&
            $_GET['gemeente'] != null &&
            $_GET['omzet'] != null) {
            
            $brnaam = $_GET['brnaam'];
            $adres = $_GET['adres'];
            $postcode = $_GET['postcode'];
            $gemeente = $_GET['gemeente'];
            $omzet = $_GET['omzet'];
            
            $result = $db->query('INSERT INTO brouwers (brnaam, adres, postcode, gemeente, omzet) VALUES (\'' . $brnaam . '\', \'' . $adres . '\', ' . $postcode . ', \'' . $gemeente . '\', ' . $omzet . ')');
            
            if ($result) {
                $insertMessage = 'Brouwer goed toegevoegd!';
            }
            else {$insertMessage = 'Brouwer niet toegevoegd, probeer opnieuw';}
                
        }
        else {$insertMessage = 'Please, fill in all fields!';}
    }
    
}
catch (exception $e){
    $message = 'Er ging iets mis: ' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Voeg een brouwer toe</h1>
    
    <form action="CRUD-insert.php" method="get">
        <ul>
            <li>
                <label for="brnaam">Brouwernaam: </label>
                <input type="text" name="brnaam">
            </li>
            <li>
                <label for="adres">adres: </label>
                <input type="text" name="adres">
            </li>
            <li>
                <label for="postcode">Postcode: </label>
                <input type="text" name="postcode">
            </li>
            <li>
                <label for="gemeente">Gemeente: </label>
                <input type="text" name="gemeente">
            </li>
            <li>
                <label for="omzet">Omzet: </label>
                <input type="text" name="omzet">
            </li>
        </ul>
        <input type="submit" name="submit" value="Toevoegen">
    </form>
    <?php  echo $insertMessage ?>
    
</body>
</html>
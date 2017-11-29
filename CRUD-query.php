<?php

$message = '';

try
	{
    $db = new mysqli('localhost', 'root', '', 'bieren');
    //$message = 'Connectie met databank geslaagd.';    
    
    $result1 = $db->query('SELECT * FROM bieren JOIN brouwers ON (bieren.brouwernr = brouwers.brouwernr) WHERE bieren.naam LIKE \'du%\'');
    $result2 = $db->query('SELECT * FROM brouwers');
    
    $fetchAssoc1 = array();
    $fetchAssoc2 = array();
    
    while ( $row1 = $result1->fetch_assoc()) {
		$fetchAssoc1[] = $row1;  
	}
    while ( $row2= $result2->fetch_assoc()) {
		$fetchAssoc2[] = $row2;  
	}
    
        if (isset ($_GET["submit"])) {
            $gezochteBrouwer = $_GET['brouwerKeuze'];
            if ($_GET['brouwerKeuze'] != null && $_GET['brouwerKeuze'] != 'noChoise') {
                $result3 =$db->query('SELECT * FROM brouwers JOIN bieren ON (brouwers.brouwernr = bieren.brouwernr) WHERE brouwers.brouwernr =' . $gezochteBrouwer);
                $fetchAssoc3 = array();
                while ( $row3= $result3->fetch_assoc()) {
                $fetchAssoc3[] = $row3;
                }
           }
        }
    }
	catch ( Exception $e )
	{
		$message = 'Er ging iets mis: ' . $e->getMessage();
	}

    echo $message;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="styleOpdrachten.css">
    
</head>
<body>
       <h1>Overzicht bieren (beginnend met 'du')</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>biernr(PK)</th>
                    <th>naam</th>
                    <th>brouwernr</th>
                    <th>soortnr</th>
                    <th>alcohol</th>
                    <th>brnaam</th>
                    <th>adres</th>
                    <th>postcode</th>
                    <th>gemeente</th>
                    <th>omzet</th>
                </tr>
            </thead>
            <tfoot></tfoot>
            <tbody>
                <?php foreach ($fetchAssoc1 as $key=>$row1) { ?>
                <tr <?php if($key%2 == 0) { ?> class = onevenRijen <?php } ?>>
                    <td><?php echo $key +1 ?></td>
                    <td><?php echo $row1['biernr'] ?></td>
                    <td><?php echo $row1['naam'] ?></td>
                    <td><?php echo $row1['brouwernr'] ?></td>
                    <td><?php echo $row1['soortnr'] ?></td>
                    <td><?php echo $row1['alcohol'] ?></td>
                    <td><?php echo $row1['brnaam'] ?></td>
                    <td><?php echo $row1['adres'] ?></td>
                    <td><?php echo $row1['postcode'] ?></td>
                    <td><?php echo $row1['gemeente'] ?></td>
                    <td><?php echo $row1['omzet'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table> 
    
    <h1>Overzicht per brouwer</h1>
    
    <form action="CRUD-query.php" method="get">
        <select name="brouwerKeuze" id="brouwerKeuze">
           <option value="noChoise">Kies een brouwerij</option>
           <?php foreach ($fetchAssoc2 as $key=>$row2) { ?>
            <option value=<?php echo $row2['brouwernr'] ?>> <?php echo $row2['brnaam'] ?> </option>
            <?php } ?>
        </select>
        <input type="submit" name="submit" value="Geef mij alle bieren van deze brouwerij">
    </form>
    
    <table>
        <thead>
            <th>Aantal</th>
            <th>Naam</th>
        </thead>
        <tfoot></tfoot>
        <tbody>
            <?php if ($gezochteBrouwer != null) {
                foreach($fetchAssoc3 as $key=>$row3) { ?>
                <tr <?php if($key%2 == 0) { ?> class = onevenRijen <?php } ?>>
                    <td><?php echo $key +1 ?></td>
                    <td><?php echo $row3['naam'] ?></td>
                </tr>
            <?php }} ?>
        </tbody>
    </table>
    
    
</body>
</html>
<?php 

$message = '';
$deleteMessage = '';
$showEditForm = false;

try
	{
    $db = new mysqli('localhost', 'root', '', 'bieren');
    //$message = 'Connectie met databank geslaagd.';    
    //---------------------------------------------------------------------------------------------------------------------
    //SELECT
    $result = $db->query('SELECT * FROM brouwers');
    
    $fetchAssoc = array();
    
    while ($row = $result->fetch_assoc()) {
        $fetchAssoc[] = $row;
    }
    //---------------------------------------------------------------------------------------------------------------------
    //DELETE
    if (isset($_GET["delete"])){
        $brouwernummerD = $_GET["delete"];
        $resultDeleteBier = $db->query('UPDATE bieren SET brouwernr = null WHERE brouwernr = ' . $brouwernummerD);     
        $resultDelete = $db->query('DELETE FROM brouwers WHERE brouwernr = ' . $brouwernummerD);
        
        if ($resultDelete) {$deleteMessage = 'De datarij werd goed verwijderd';}
        else {$deleteMessage = 'De datarij kon niet verwijderd worden';}
    }
    //---------------------------------------------------------------------------------------------------------------------
    //UPDATE
    //Zoek brouwer om te updaten
    if (isset($_GET["edit"])){
        $brouwernummerE = $_GET["edit"];
        $resultEdit = $db->query('SELECT * FROM brouwers WHERE brouwers.brouwernr = ' . $brouwernummerE);
        $fetchAssocEdit = array();
        while ($rowEdit = $resultEdit->fetch_assoc()) {
            $fetchAssocEdit[] = $rowEdit;
        }
        $showEditForm = true;
    }
    
    //Update de brouwer
    if (isset($_POST["editComplete"])){
        $brouwerindex = $_POST['brouwerindex'];
        $brnaamE = $_POST['Brouwernaam'];
        $adresE = $_POST['Adres'];
        $postcodeE = $_POST['Postcode'];
        $gemeenteE = $_POST['Gemeente'];
        $omzetE = $_POST['Omzet'];
        
        
        $resultEditB = $db->query('UPDATE brouwers SET brnaam = \'' . $brnaamE . '\', adres = \'' . $adresE . '\', postcode = \'' . $postcodeE . '\', gemeente = \'' . $gemeenteE . '\',  omzet = \'' . $omzetE . '\' WHERE brouwernr = ' . $brouwerindex);
        
        $showEditForm = false;
    }
    //---------------------------------------------------------------------------------------------------------------------
    //SELECT AGAIN
    $result = $db->query('SELECT * FROM brouwers');
    
    $fetchAssoc = array();
    
    while ($row = $result->fetch_assoc()) {
        $fetchAssoc[] = $row;
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
   
   <?php if ($showEditForm) { ?>
   
   <h1><?php echo "Brouwerij " . $fetchAssocEdit[0]['brnaam'] . " (#" . $fetchAssocEdit[0]['brouwernr'] . ") wijzigen" ?></h1>
   <form action="CRUD-delete-update.php" method="post">
    <ul>
       <li>
           <label>Brouwernaam</label>
           <input type="text" name="Brouwernaam" value="<?php echo $fetchAssocEdit[0]['brnaam'] ?>">
       </li>
       <li>
           <label>Adres</label>
           <input type="text" name="Adres" value="<?php echo $fetchAssocEdit[0]['adres'] ?>">
       </li>
       <li>
           <label>Postcode</label>
           <input type="text" name="Postcode" value="<?php echo $fetchAssocEdit[0]['postcode'] ?>">
       </li>
       <li>
           <label>Gemeente</label>
           <input type="text" name="Gemeente" value="<?php echo $fetchAssocEdit[0]['gemeente'] ?>">
       </li>
       <li>
           <label>Omzet</label>
           <input type="text" name="Omzet" value="<?php echo $fetchAssocEdit[0]['omzet'] ?>">
       </li>
   </ul>
   <input type="hidden" name="brouwerindex" value="<?php echo $fetchAssocEdit[0]['brouwernr'] ?>">
   <input type="submit" name="editComplete" value="Aanpassen">
   </form>
   <br><br><br>
   
   <?php } ?>
   
   <?php echo $deleteMessage ?>
   
    <table>
        <thead>
            <th>#</th>
            <th>brouwernr</th>
            <th>brnaam</th>
            <th>adres</th>
            <th>postcode</th>
            <th>gemeente</th>
            <th>omzet</th>
            <th colspan="2"></th>
        </thead>
        <tfoot></tfoot>
        <tbody>
            <?php foreach ($fetchAssoc as $key=>$row) { ?>
                <tr <?php if ($key%2 == 0) { ?> class="onevenRijen" <?php } ?>>
                    <td><?php echo $key +1 ?></td>
                    <td><?php echo $row['brouwernr'] ?></td>
                    <td><?php echo $row['brnaam'] ?></td>
                    <td><?php echo $row['adres'] ?></td>
                    <td><?php echo $row['postcode'] ?></td>
                    <td><?php echo $row['gemeente'] ?></td>
                    <td><?php echo $row['omzet'] ?></td>
                    <form action="CRUD-delete-update.php" method="get">
                    <td><button type="submit" name="delete" value="<?php echo $row['brouwernr'] ?>"><img src="/SamSerrien/web-backend/public/img/icon-delete.png"></button></td>
                    <td><button type="submit" name="edit" value="<?php echo $row['brouwernr'] ?>"><img src="/SamSerrien/web-backend/public/img/icon-edit.png"></button></td>
                    </form>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>
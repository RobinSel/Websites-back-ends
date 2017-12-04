<?php

$message	=	'';

	$db = new mysqli('localhost', 'root', '', 'bieren');

	if ( $db->connect_errno > 0 )
	{
	    $message = 'Kan geen connectie maken: ' . $db->connect_error;
	}
	else
	{         
        if (isset($_GET['order_by'])) {
            $orderSettings = explode("-", $_GET['order_by']);
            $result = $db->query('SELECT * FROM bieren JOIN brouwers ON (bieren.brouwernr = brouwers.brouwernr) JOIN soorten ON (bieren.soortnr = soorten.soortnr) ORDER BY ' . $orderSettings[0] . ' ' . $orderSettings[1]);
        }
        else {
            $orderSettings = array('', 'NoOrder');
            $result = $db->query('SELECT * FROM bieren JOIN brouwers ON (bieren.brouwernr = brouwers.brouwernr) JOIN soorten ON (bieren.soortnr = soorten.soortnr)');
        }
        
		$fetchAssoc = array(); 
		while ($row = $result->fetch_assoc())
		{
			$fetchAssoc[] = $row;
		}
        
	}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="styleOpdrachten.css">
    
</head>
<body>
    
    <h1>Overzicht van bieren</h1>
    <table>
        <thead>
            <th class="<?php if ($orderSettings[0] == "biernr") {if($orderSettings[1] == "asc") {echo "order ascending";} else {echo "order descending";}} ?>"><a href="CRUD-order-by.php?order_by=biernr-<?php if(($orderSettings[0] == "biernr" && $orderSettings[1] == "desc") ||$orderSettings[1] == "NoOrder") {echo "asc";} else{echo "desc";} ?>">Biernummer(PK)</a></th>
            <th class="<?php if ($orderSettings[0] == "naam") {if($orderSettings[1] == "asc") {echo "order ascending";} else {echo "order descending";}} ?>"><a href="CRUD-order-by.php?order_by=naam-<?php if(($orderSettings[0] == "naam" && $orderSettings[1] == "desc") ||$orderSettings[1] == "NoOrder") {echo "asc";} else{echo "desc";} ?>">Bier</a></th>
            <th class="<?php if ($orderSettings[0] == "brnaam") {if($orderSettings[1] == "asc") {echo "order ascending";} else {echo "order descending";}} ?>"><a href="CRUD-order-by.php?order_by=brnaam-<?php if(($orderSettings[0] == "brnaam" && $orderSettings[1] == "desc") ||$orderSettings[1] == "NoOrder") {echo "asc";} else{echo "desc";} ?>">Brouwer</a></th>
            <th class="<?php if ($orderSettings[0] == "soort") {if($orderSettings[1] == "asc") {echo "order ascending";} else {echo "order descending";}} ?>"><a href="CRUD-order-by.php?order_by=soort-<?php if(($orderSettings[0] == "soort" && $orderSettings[1] == "desc") ||$orderSettings[1] == "NoOrder") {echo "asc";} else{echo "desc";} ?>">Soort</a></th>
            <th class="<?php if ($orderSettings[0] == "alcohol") {if($orderSettings[1] == "asc") {echo "order ascending";} else {echo "order descending";}} ?>"><a href="CRUD-order-by.php?order_by=alcohol-<?php if(($orderSettings[0] == "alcohol" && $orderSettings[1] == "desc") ||$orderSettings[1] == "NoOrder") {echo "asc";} else{echo "desc";} ?>">Alcoholpercentage</a></th>
        </thead>
        <tbody>
            <?php foreach ($fetchAssoc as $key=>$row) { ?>
            <tr <?php if ($key%2 == 0) { ?> class = "onevenRijen" <?php } ?>>
                <td><?php echo $row['biernr'] ?></td>
                <td><?php echo $row['naam'] ?></td>
                <td><?php echo $row['brnaam'] ?></td>
                <td><?php echo $row['soort'] ?></td>
                <td><?php echo $row['alcohol'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>
<?php

session_start();

	// Sessie verwijderen
	if (isset($_GET['session']))
	{
		if($_GET['session'] === 'destroy')
		{
			session_destroy();
			header('Location: session3.php'); // staat in voor refresh
		}
	}

$_SESSION['gegevens']['straat'] = $_POST['straat'];
$_SESSION['gegevens']['number'] = $_POST['number'];
$_SESSION['gegevens']['gemeente'] = $_POST['gemeente'];
$_SESSION['gegevens']['postcode'] = $_POST['postcode'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Overzichtspagina</h1>
    
    
    
    <h1>Registratiegegevens</h1>
    <?php
    echo "e-mail: ";
    if (isset($_SESSION['gegevens']['email'])){echo $_SESSION['gegevens']['email'];} echo " | <a href=\"session2.php?focus=email\">Wijzig</a> <br>";
    echo "nickname: ";
    if (isset($_SESSION['gegevens']['nickname'])){echo $_SESSION['gegevens']['nickname'];} echo " | <a href=\"session2.php?focus=nickname\">Wijzig</a> <br>";
    echo "straat: ";
    if (isset($_SESSION['gegevens']['straat'])){echo $_SESSION['gegevens']['straat'];} echo " | <a href=\"session2.php?focus=straat\">Wijzig</a> <br>";
    echo "number: ";
    if (isset($_SESSION['gegevens']['number'])){echo $_SESSION['gegevens']['number'];} echo " | <a href=\"session2.php?focus=number\">Wijzig</a> <br>";
    echo "gemeente: ";
    if (isset($_SESSION['gegevens']['gemeente'])){echo $_SESSION['gegevens']['gemeente'];} echo " | <a href=\"session2.php?focus=gemeente\">Wijzig</a> <br>";
    echo "postcode: ";
    if (isset($_SESSION['gegevens']['postcode'])){echo $_SESSION['gegevens']['postcode'];} echo " | <a href=\"session2.php?focus=postcode\">Wijzig</a> <br>";
    ?>
    
    <a href="session.php?session=destroy">Reset gegevens</a>
    <p></p>
    <?php var_dump($_SESSION) ?> <br>
    <?php var_dump($_POST) ?>
    
</body>
</html>
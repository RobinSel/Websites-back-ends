<?php

session_start();

	// Sessie verwijderen
	if (isset($_GET['session']))
	{
		if($_GET['session'] === 'destroy')
		{
			session_destroy();
			header('Location: session.php'); // staat in voor refresh
		}
	}
    
if (isset($_POST['email']) &&
    isset($_POST['nickname'])) {
    $_SESSION['gegevens']['email'] = $_POST['email'];
    $_SESSION['gegevens']['nickname'] = $_POST['nickname'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body> 

    <h1>registratie</h1>
    
    <form action="session2.php" method="post">
        <ul>
            <li>
                <label for="email">e-mail</label>
                <input type="text" name="email" id="email" value="<?php if(isset($_SESSION['gegevens']['email'])){echo $_SESSION['gegevens']['email'];}?>">
            </li>
            <li>
                <label for="nickname">nickname</label>
                <input type="text" name="nickname" id="nickname" value="<?php if(isset($_SESSION['gegevens']['nickname'])){echo $_SESSION['gegevens']['nickname'];}?>">
            </li>
            <input type="submit" name="submit" value="Volgende">
        </ul>
    </form>
    
    <h1>Registratiegegevens</h1>
    <?php
    echo "e-mail: ";
    if (isset($_SESSION['gegevens']['email'])){echo $_SESSION['gegevens']['email'];} echo "<br>";
    echo "nickname: ";
    if (isset($_SESSION['gegevens']['nickname'])){echo $_SESSION['gegevens']['nickname'];} echo "<br>";

    ?>
    
    <a href="session.php?session=destroy">Reset gegevens</a>
    <p></p>
    <?php var_dump($_SESSION) ?> <br>
    <?php var_dump($_POST) ?>
    
</body>
</html>
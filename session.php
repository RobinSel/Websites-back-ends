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

if (isset ($_POST["submit"])) {
    if ($_POST["email"] != null &&
        $_POST["nickname"] != null) {
        $_SESSION['gegevens']['email'] = $_POST['email'];
        $_SESSION['gegevens']['nickname'] = $_POST['nickname'];
    }
}

if (isset ($_POST["submit"])) {
    if ($_POST["straat"] != null &&
        $_POST["nummer"] != null &&
        $_POST["gemeente"] != null &&
        $_POST["postocode"] != null) {
        $_SESSION['gegevens']['straat'] = $_POST['straat'];
        $_SESSION['gegevens']['nummer'] = $_POST['nummer'];
        $_SESSION['gegevens']['gemeente'] = $_POST['gemeente'];
        $_SESSION['gegevens']['postcode'] = $_POST['postcode'];
    }
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
    
    <?php if ($_SESSION['gegevens']['email'] == null ||
              $_SESSION['gegevens']['nickname'] == null) { ?>
    
    <form action="session.php" method="post">
        <ul>
            <li>
                <label for="email">e-mail</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="nickname">nickname</label>
                <input type="text" name="nickname" id="nickname">
            </li>
            <input type="submit" name="submit" value="Volgende">
        </ul>
    </form>
    
    <?php } 
    else { ?>
    
    <form action="session.php" method="post">
        <ul>
            <li>
                <label for="straat">straat</label>
                <input type="text" name="straat" id="straat">
            </li>
            <li>
                <label for="nummer">nummer</label>
                <input type="number" name="nummer" id="nummer">
            </li>
            <li>
                <label for="gemeente">gemeente</label>
                <input type="text" name="gemeente" id="gemeente">
            </li>
            <li>
                <label for="postcode">postcode</label>
                <input type="text" name="postcode" id="postcode">
            </li>
                <input type="submit" name="submit" value="Volgende">
        </ul>
    </form>
    
    <?php } ?>
    <h1>Registratiegegevens</h1>
    <?php
    echo "e-mail: " . $_SESSION['gegevens']['email'] . "<br>";
    echo "nickname: " . $_SESSION['gegevens']['nickname'] . "<br>";
    echo "straat: " . $_SESSION['gegevens']['straat'] . "<br>";
    echo "nummer: " . $_SESSION['gegevens']['nummer'] . "<br>";
    echo "gemeente: " . $_SESSION['gegevens']['gemeente'] . "<br>";
    echo "postcode: " . $_SESSION['gegevens']['postcode'] . "<br>";
    ?>
    
    <a href="session.php?session=destroy">Reset gegevens</a>
    <p></p>
    <?php var_dump($_SESSION) ?>
    
</body>
</html>
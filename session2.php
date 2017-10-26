<?php

session_start();

	// Sessie verwijderen
	if (isset($_GET['session']))
	{
		if($_GET['session'] === 'destroy')
		{
			session_destroy();
			header('Location: session2.php'); // staat in voor refresh
		}
	}
    
if (isset($_POST['straat']) &&
    isset($_POST['number']) &&
    isset($_POST['gemeente']) &&
    isset($_POST['postcode'])) {
    $_SESSION['gegevens']['straat'] = $_POST['straat'];
    $_SESSION['gegevens']['number'] = $_POST['number'];
    $_SESSION['gegevens']['gemeente'] = $_POST['gemeente'];
    $_SESSION['gegevens']['postcode'] = $_POST['postcode'];
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
    <form action="session3.php" method="post">
        <ul>
           <li>
                <label for="email">e-mail</label>
                <input type="text" name="email" id="email" value="<?php if(isset($_SESSION['gegevens']['email'])){echo $_SESSION['gegevens']['email'];}  echo"\""; if(isset($_GET['focus'])){if($_GET['focus'] == 'email'){echo "autofocus";}} ?>>
            </li>
            <li>
                <label for="nickname">nickname</label>
                <input type="text" name="nickname" id="nickname" value="<?php if(isset($_SESSION['gegevens']['nickname'])){echo $_SESSION['gegevens']['nickname'];}  echo"\""; if(isset($_GET['focus'])){if($_GET['focus'] == 'nickname'){echo "autofocus";}} ?>>
            </li>
            <li>
                <label for="straat">straat</label>
                <input type="text" name="straat" id="straat" value="<?php if(isset($_SESSION['gegevens']['straat'])){echo $_SESSION['gegevens']['straat'];}  echo"\""; if(isset($_GET['focus'])){if($_GET['focus'] == 'straat'){echo "autofocus";}} ?>>
            </li>
            <li>
                <label for="number">nummer</label>
                <input type="number" name="number" id="number" value="<?php if(isset($_SESSION['gegevens']['number'])){echo $_SESSION['gegevens']['number'];}  echo"\""; if(isset($_GET['focus'])){if($_GET['focus'] == 'number'){echo "autofocus";}} ?>>
            </li>
            <li>
                <label for="gemeente">gemeente</label>
                <input type="text" name="gemeente" id="gemeente" value="<?php if(isset($_SESSION['gegevens']['gemeente'])){echo $_SESSION['gegevens']['gemeente'];}  echo"\""; if(isset($_GET['focus'])){if($_GET['focus'] == 'gemeente'){echo "autofocus";}} ?>>
            </li>
            <li>
                <label for="postcode">postcode</label>
                <input type="text" name="postcode" id="postcode" value="<?php if(isset($_SESSION['gegevens']['postcode'])){echo $_SESSION['gegevens']['postcode'];}  echo"\""; if(isset($_GET['focus'])){if($_GET['focus'] == 'postcode'){echo "autofocus";}} ?>>
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
    echo "straat: ";
    if (isset($_SESSION['gegevens']['straat'])){echo $_SESSION['gegevens']['straat'];} echo "<br>";
    echo "number: ";
    if (isset($_SESSION['gegevens']['number'])){echo $_SESSION['gegevens']['number'];} echo "<br>";
    echo "gemeente: ";
    if (isset($_SESSION['gegevens']['gemeente'])){echo $_SESSION['gegevens']['gemeente'];} echo "<br>";
    echo "postcode: ";
    if (isset($_SESSION['gegevens']['postcode'])){echo $_SESSION['gegevens']['postcode'];} echo "<br>";
    ?>
    
    <a href="session.php?session=destroy">Reset gegevens</a>
    <p></p>
    <?php var_dump($_SESSION) ?> <br>
    <?php var_dump($_POST) ?>
</body>
</html>
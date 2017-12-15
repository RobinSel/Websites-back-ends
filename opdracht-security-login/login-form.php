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

$db = new mysqli('localhost', 'root', '', 'opdracht-security-login');
//------check for cookie----------------------------------------------------------------
if(isset($_COOKIE['login'])) {
    header("location: dashboard.php");
}
//--------------------------------------------------------------------------------------
if(isset($_POST['login'])) {
    if(!empty($_POST['email']) && !empty($_POST['paswoord'])) {
        $resultCheck = $db->query("SELECT * FROM users WHERE email LIKE '" . $_POST['email'] . "'");
        if (mysqli_num_rows($resultCheck) == 1) {
            $foundedUser = $resultCheck->fetch_assoc();
            if ($_POST['paswoord'] . $foundedUser['salt'] == $foundedUser['hashed_password']) {
                $cookievalue = $SESSION['registratiegeg']['email'] . "," . $SESSION['registratiegeg']['email'] . $SESSION['registratiegeg']['salt'];
                setcookie("login", $cookievalue , time() + (86400*30));
                header("location: dashboard.php");
            }
            else {
                echo "Paswoord is niet juist";
            } 
        }
        else {
            echo  "gebruiker niet gevonden";
        }
    }
    else {
        echo "Gelieve alle velden in te vullen!";
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
    <h1>Login</h1>
    <form action="login-form.php" method="post">
        <ul>
            <li>
                <label>e-mail </label>
                <input type="text" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email']:'' ?>">
            </li>
            <li>
                <label>paswoord </label>
                <input type="password" name="paswoord" id="paswoord" value="<?php echo isset($_POST['paswoord']) ? $_POST['paswoord']:'' ?>">
            </li>
        </ul>
        <input type="submit" name="login" value="inloggen">
    </form>
    <p>Nog geen account? Maak er dan eentje aan op de <a href="registratie-form.php">registratiepagina</a></p>
</body>
</html>
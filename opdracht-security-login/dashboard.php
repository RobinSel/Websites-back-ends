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
//------Nakijken of cookie is geset-------------------------------------------------------------------------
if(!isset($_COOKIE['login'])) {
    header("location: login-form.php");
}
//else {echo "cookie is set! <br>";}
//------Nakijken of cookie overeen komt met gegevens uit databse---------------------------------------------
$cookieValue = htmlspecialchars($_COOKIE["login"]);
$cookieArray = array();
$cookieArray = explode(",", $cookieValue);

$resultCheck = $db->query("SELECT * FROM users WHERE email LIKE '" . $cookieArray[0] . "'");
$DatabseValues = $resultCheck->fetch_assoc();

if ($DatabseValues['email'] . $DatabseValues['salt'] == $cookieArray[1]) {
    //secho "User OK!";
}
else {
    unset($_COOKIE['login']);
    header("location: login-form.php");
}
//------uitloggen-------------------------------------------------------------------------------------------
if (isset($_GET['logout'])) {
    setcookie("login", "" ,-1);
    header("location: login-form.php");
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
    <h1>Dashboard</h1>
    <a href="dashboard.php?logout=true">Uitloggen</a>
</body>
</html>
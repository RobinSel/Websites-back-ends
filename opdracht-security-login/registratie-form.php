<?php

$randPas = '';
$invalidEmailMessage = '';
$invalidPasswordMessage = '';

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
//------------------------------------------------------------------------------------------------------------------
if (isset($_POST['registreer'])) {
    if (!empty($_POST['email']) && !empty($_POST['paswoord'])){
        $emailValid = false;
        $emailValid = checkEmail($emailValid);
        $resultCheckEmail = $db->query('SELECT * FROM users WHERE email = \'' . $_POST['email'] . '\'');
        if ($emailValid) {
            if (mysqli_num_rows($resultCheckEmail) == 0) {
                //email en paswoord zijn goed en gebruiker kan worden toegevoegd
                $SESSION['registratiegeg']['email'] = $_POST['email'];
                $SESSION['registratiegeg']['paswoord'] = $_POST['paswoord'];
                
                $salt = uniqid(mt_rand(), true);
                $hashed_password = $_POST['paswoord'] . $salt;
                
                $SESSION['registratiegeg']['salt'] = $salt;
                $SESSION['registratiegeg']['hashed_password'] = $hashed_password;
                
                var_dump($SESSION['registratiegeg']);
                
                $resultInsert = $db->query("INSERT INTO users (email, salt, hashed_password, last_login_time) VALUES ('" . $SESSION['registratiegeg']['email'] . "', '" . $SESSION['registratiegeg']['salt'] . "', '" . $SESSION['registratiegeg']['hashed_password'] . "', now())");
                
                $cookievalue = $SESSION['registratiegeg']['email'] . "," . $SESSION['registratiegeg']['email'] . $SESSION['registratiegeg']['salt'];
                setcookie("login", $cookievalue , time() + (86400*30));
                header("location: dashboard.php");
                
            }else {$invalidEmailMessage = 'This email adress is already in use';}
        }else {$invalidEmailMessage = 'Please enter a valid email';}
    }
}
//------------------------------------------------------------------------------------------------------------------
if (isset($_POST['randPas'])) {
    $randPas = randomPassword();
}

function randomPassword() {
    $alfabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    for ($i = 0; $i < 8; $i++) {
        $randomNbr = rand(0, strlen($alfabet)-1);
        $randPassword[$i] = $alfabet[$randomNbr];
    }
    return implode("",$randPassword);
}

function checkEmail($valid) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $valid = true;
    }  
    return $valid;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Registratie</h1>
    <form action="registratie-form.php" method="post">
       <?php echo $invalidEmailMessage; ?>
       <?php echo $invalidPasswordMessage; ?>
        <ul>
            <li>
                <label>e-mail</label>
                <input type="text" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email']:'' ?>">
            </li>
            <li>
                <label>paswoord</label>
                <?php if ($randPas == '') { ?>
                <input type="password" name="paswoord" id="paswoord" value="<?php echo isset($_POST['paswoord']) ? $_POST['paswoord']:'' ?>">
                <?php }else { ?>
                <input type="text" name="paswoord" id="paswoord" value="<?php echo $randPas ?>">
                <?php } ?>
                <input type="submit" name="randPas" value="genereer paswoord">
            </li>
        </ul>
        <input type="submit" name="registreer" value="registreer">
    </form>
    <p>Ik heb al een <a href="login-form.php">account</a>!</p>
</body>
</html>
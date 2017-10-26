<?php

$file = file_get_contents("extra-bestanden/cookies.txt");
$gegevens = explode(",", $file);
$notCorrect = "";

if (isset ($_POST["submit"])) {
    if ($_POST["gebruikersnaam"] == $gegevens[0] &&
        $_POST["paswoord"] == $gegevens[1]) {
        setcookie("gegevens", $file, time() + 360);
        $_COOKIE["gegevens"]["gebruikersnaam"] = $_POST["gebruikersnaam"];
        $_COOKIE["gegevens"]["paswoord"] = $_POST["paswoord"];
    }
    else {
        $notCorrect = "Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw.";
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
    
    <?php if ($_POST["gebruikersnaam"] == null && $_POST["paswoord"] == null) { ?>
    <h1>Inloggen</h1>
    <form action="cookies.php" method="post">
        <ul>
           <?php echo $notCorrect; ?>
            <li>
                <label for="gebruikersnaam">Gebruikersnaam</label>
                <input type="text" name="gebruikersnaam" id="gebruikersnaam">
            </li>
            <li>
                <label for="paswoord">paswoord</label>
                <input type="password" name="paswoord" id="paswoord">
            </li>
            <input type="submit" name="submit" value="Inloggen">
        </ul>
    </form>
    <?php }
    else { ?>
        <h1>Dashboard</h1>
        <p>U bent ingelogd.</p>
        
        <a href="">Uitloggen</a>
        
        
    <?php } ?>
    
    
</body>
</html>
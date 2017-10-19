<?php
$username = "Peter";
$password = "Tak123tak";
$message = "";

if (isset ($_POST["submit"])) {
    if ($_POST["Username"] == $username && $_POST["paswoord"] == $password){
        $message = "Welkom";
    }
    else {
        $message = "inloggen mislukt!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <style>
    
        fieldset {
            font-weight: bold;
        }   
    
    </style>
    
</head>
<body>
    
    <form action="post.php" method="post">
        <h3>Log in</h3><br>
        <label for="name">Gebruikersnaam: </label>
        <input type="text" name="Username" id="Username"> <br>
        <label for="password">Wachtwoord: </label>
        <input type="password" name="paswoord" id="paswoord"><br>
        <input type="submit" name="submit"><br>
        <?php echo $message;?>
        
    </form>
    
    
    
    
    
    
</body>
</html>
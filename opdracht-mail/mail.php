<?php

if(isset($_POST['send'])) {
    if(!empty($_POST['email']) && !empty($_POST['message'])) {
        $from = $_POST['email'];
        $admin = "robin.sel@hotmail.com";
        $subject = "contact message";
        $message = $_POST['message'];
        $header = "from: " . $from;
        
        $sendACopy = false;
        if (isset($_POST['copyMessage'])) {
            $sendACopy = true;
        }
        
        mail($admin, $subject, $message, $header);
        echo "mail is send<br>";
        if ($sendACopy) {
            mail($from, $subject, $message, $header);
            echo "A copy of the mail is send to you<br>";
        }
    }
    else {
        echo "E-mailadres en/of bericht is leeg!";
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
    
    <h1>Mail</h1>
    
    <form action="mail.php" method="post">
        <ul>
            <li>
                <label for="mailAdres">E-mail</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
               <label for="bericht">Boodschap</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </li>
            <li>
               <label for="sendCopy">Verstuur een kopie naar mezelf</label>
                <input type="checkbox" name="copyMessage" id="copyMessage">
            </li>
        </ul>
        <input type="submit" name="send" value="Verzenden">
    </form>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
        
    if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 2000000)) 
    {
        if ($_FILES["file"]["error"] > 0) {
            var_dump ($_FILES["file"]["error"]);
        }
        else {
            define('ROOT', dirname(__FILE__));
				
            move_uploaded_file($_FILES["file"]["tmp_name"], ROOT . "/img/" . $_FILES["file"]["name"]);		
        }
    }
    else {
        echo "Dit bestand is ongeldig";
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
    
    <h1>Dashboard</h1>
    
    <form action="opdracht-file-upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Upload</label>
        <input type="file" name="file" id="file">
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>
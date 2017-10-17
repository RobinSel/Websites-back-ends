<?php
$text = file_get_contents('extra-bestanden/text-file.txt');

$letters = (str_split($text, 1));
sort($letters);
$lettersReverse = array_reverse($letters);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Deel 1:</h1>
    <?php echo $text ?>       
    <?php print_r($letters)?>
    <p></p>
    <?php print_r($lettersReverse)?>
    <p></p>
    <?php echo "<pre>";
    print_r(array_count_values($letters));?>
    
        
            
        
            
    <h1>Deel 2:</h1>
    
    
</body>
</html>
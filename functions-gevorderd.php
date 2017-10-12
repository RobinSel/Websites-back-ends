<?php
$md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';

function check2 ($text) {
    $count =0;
    $array = str_split($text);
    for ($i=0; $i < strlen($text); $i++) {
        if($array[$i]=='2'){
            $count++;
        }
    }
    
    $procent = ($count / strlen($text)) * 100;
    
    return $procent;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
    <h1>Deel 1:</h1> 
    <?php echo check2($md5HashKey)?>
    
    <h1>Deel 2:</h1>
    
    
</body>
</html>
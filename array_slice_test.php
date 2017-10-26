<?php

$input = array("a", "b", "c", "d", "e", "f", "g");

$output1 = array_slice($input, 3);              //d, e, f, g   
$output2 = array_slice($input, 5);              //f, g 
$output3 = array_slice($input, -2, 1);          //f
$output4 = array_slice($input, -2, 2);          //f, g
$output5 = array_slice($input, 0, 3);           //a, b, c
$output6 = array_slice($input, -4, 3);          //d, e, f
$output7 = array_slice($input, -4, 3, true);    //d, e, f    


echo "<pre>";
print_r($output1);
print_r($output2);
print_r($output3);
print_r($output4);
print_r($output5);
print_r($output6);
print_r($output7);

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body> 
    
    
    
    
</body>
</html>
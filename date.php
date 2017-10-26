<?php

$mktime = mktime(22,35,25,01,21,1904);
$date1 = date('d F Y, h:i:s', $mktime);
$date2 = date('d F Y, h:i:s');

setlocale(LC_ALL, 'nl_NL');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Deel 1:</h1>
    <?php echo $mktime ?> <br>
    <?php echo $date1 ?> <br>
    <?php echo $date2 ?>
    
    
    <h1>Deel 2:</h1>
    
    
    
    
</body>
</html>
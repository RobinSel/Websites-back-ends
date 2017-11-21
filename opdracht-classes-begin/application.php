<?php
require_once 'classes/percent.php';

$test = new Percent(150, 100);

$relative = $test->relative;
$hundred = $test->hundred;
$nominal = $test->nominal;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table, td{
            border: 1px solid #000;
        }
        table{
            border-collapse: collapse;
        }
        td{
            padding: 20px;
        }
    </style>
</head>
<body>
    <p>Hoe staat 150 in <br> verhouding tot 100?</p>
    <table>
        <tr>
            <td>Relatief</td>
            <td><?php echo $test->roundNumber($relative) ?></td>
        </tr>
        <tr>
            <td>Procentueel</td>
            <td><?php echo $test->roundNumber($hundred) ?></td>
        </tr>
        <tr>
            <td>Nominaal</td>
            <td><?php echo $nominal ?></td>
        </tr>
        
    </table>
</body>
</html>
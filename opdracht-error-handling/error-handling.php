<?php

$kortingscode =	'';
$message = false;

try
    {
		if ( isset ( $_POST['submit'] ) ) {
            if ($_POST['kortingscode'] == '') {
               throw new Exception ('Geen kortingscode gegeven!');
            }
            if (strlen($_POST['kortingscode']) <8) {
                throw new Exception ('Kortingscode is niet geldig!');
            }
		}
	}
catch (exception $e)
    {
        $message['type'] = 'error';
		$message['text'] = $e->getMessage();

		$date	=	'[' . date( 'H:i:s d/m/Y', time() ).']';
        $ipAdress = $_SERVER['REMOTE_ADDR'];

        // bv: [11:12:53 08/08/2015] - 127.0.0.1 - type:[error] Kortingscode is niet correct
		$errorString	=	$date . ' - ' . $ipAdress . ' - ' . "type:[" . $message['type'] . "] " . $message['text'] . "\n\r";

		file_put_contents( 'error.log', $errorString, FILE_APPEND );
    

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
			
			<ul>
				<li>
					<label for="kortingscode">kortingscode</label>
					<input type="naam" name="kortingscode" id="kortingscode">
				</li>
			</ul>
			<input type="submit" name="submit">

		</form>
    
    
</body>
</html>
<?php

try
    {
		if ( isset ( $_POST['submit'] ) ) {
            if ($_POST['kortingscode'] == null) {
               throw new Exception ();
            }
		}
	}
catch (exception $e)
    {
        
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
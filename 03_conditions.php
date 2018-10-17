<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Aprendiendo PHP</title>
	<link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1>Aprendiendo PHP</h1>
		<div class="codigo">
			<?php
				$numero1 = 22;
				$numero2 = 49;

				if ($numero1 > $numero2) {
					echo "Numero 1 es Mayor";
				} 
				elseif ($numero1 == $numero2) {
					echo "Numero 1 es igual a Numero 2";
				}
				else {
					echo "Numero 2 es Mayor";
				} 
				
			?>
		</div>
	</div>
</body>
</html>
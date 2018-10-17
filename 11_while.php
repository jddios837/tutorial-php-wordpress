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
				$frutas = array('manzana', 'naranja', 'melon', 'platano');

				$i = 0;
				while ($i <= count($frutas)) {
					echo "Una de mis frutas es: ";
					echo $frutas[$i] . "<br/>";
					$i++;
				}
			?>

			
		</div>
	</div>
</body>
</html>
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
				function saludar($nombre){
					echo "Bienvido {$nombre} al sitio <br/>";
				}

				saludar("Juan");
				saludar("Pedro");

				function suma($num1, $num2){
					echo $num1 + $num2 . "<br/>";
				}

				suma(3, 4);
			?>

			
		</div>
	</div>
</body>
</html>
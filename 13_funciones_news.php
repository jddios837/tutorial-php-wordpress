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
				function saludar(){
					echo "Bienvido al sitio <br/>";
				}

				saludar();
				saludar();
				saludar();
				saludar();

				function suma(){
					echo 2 + 2 . "<br/>";
				}

				suma()
			?>

			
		</div>
	</div>
</body>
</html>
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
				function the_title(){
					echo "El titulo de mi blog";
				}

				function the_date(){
					echo date('Y a d');
				}

				function the_author(){
					echo "Juan";
				}
			?>

			<div class="entrada">
				<h2><?php the_title(); ?></h2>
				<p>Publicado el <?php the_date(); ?></p>
				<p>Escrito por: <?php the_author(); ?></p>
			</div>
			
		</div>
	</div>
</body>
</html>
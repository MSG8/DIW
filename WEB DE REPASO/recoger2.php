<!DOCTYPE html>
<!-- Manuel Solís Gómez -->
<HTML>
	<head>
		<meta charset="UTF-8"/>
		<meta type="author" content="Manuel Solis Gomez"/>
		<meta type="description" content="Pagina de inicio de una pagina web de informacion sobre las mujeres en la informatica"/>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title> Las Mujeres en la Histori de la Informatica </title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="estilo1.css">
	</head>
	<body>
    <?php
      //print_r($_GET); simplemente para saber si tengo los datos
      foreach ($_GET as $nombre => $valor)
      {
        echo '<p> El valor del input '.$nombre.' es este valor '.$valor.'</p>';
      }
    ?>
	</body>
</HTML>

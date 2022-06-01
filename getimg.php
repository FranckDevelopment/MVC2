<?php
	// Formato del llamado a este escript: getimg.php?ancho=400&alto=400
	// Este script consume la imagen generada por http://localhost/dwima22/3_mvc2/pmvc2.php?ancho=400&alto=400	
	echo '<p style="text-align:justify"><img src="http://localhost/jue26/pmvc2.php?ancho='
		. $_GET['ancho'] . '&alto=' . $_GET['alto'] . '"></p>';
?>
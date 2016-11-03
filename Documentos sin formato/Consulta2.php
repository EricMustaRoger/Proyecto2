<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recepción de los datos</title>
</head>
<body>

	<?php

	extract($_REQUEST);



foreach ($reservar[] as $id)
   {
  echo "Recurso ID: ----- " . $id . "-----";
   }

	

	?>

	

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Type Casting</title>
</head>
<body>
	<?php
	$x=21.345;
	$int_cast=(int)$x;
	echo $int_cast;
	echo "<br>";
	echo var_dump($int_cast);

	echo "<br>";

	$str="1234.56";
	$int_cast=(int)$str;
	echo $int_cast;
	echo "<br>";
	echo var_dump($int_cast);
	?>

</body>
</html>
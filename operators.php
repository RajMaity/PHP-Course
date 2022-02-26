<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operators</title>
</head>
<body>
	<?php
		//Arithmetic operators
		//Addition
		echo 2+3;
		echo "<br>";
		$x=2;$y=3;
		echo "x+y=";
		echo $x+$y;
		echo "<br>";
		echo "x+y=",$x+$y;
		echo "<br>";

		//Multiplication
		echo $x * $y;
		echo "<br>";

		//Exponential
		echo $x ** $y;
		echo "<br>";

		//Assignment
		$x=$y;
		echo $x;
		echo "<br>";

		//Comparision
		echo($x==$y);
		echo "<br>";
		var_dump($x==$y);
		echo "<br>";
		var_dump($x<>$y);
		echo "<br>";

		//Increment
		$x++;
		echo $x;
	?>

</body>
</html>
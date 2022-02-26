<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Math function</title>
</head>
<body>
	<?php
		//pi function
		echo(pi());
		echo "<br>";

		//min() and max()
		echo(min(1,2,3,-34,-5,0,23));
		echo "<br>";
		echo(max(1,2,3,-34,-5,0,23));

		echo "<br>";
		//abs i.e. absolute or positive value
		echo(abs(-23.5));
		echo "<br>";

		//round()
		echo(round(0.60));

		echo "<br>";

		//random numbers
		echo(rand(10,100));  
	?>

</body>
</html>
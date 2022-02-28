<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Functions</title>
</head>
<body>
	<?php
	function greetings(){
		echo "Hello bhai!!";
	}
	greetings();
	echo "<br>";

	$name="Sam";
	function welcome($name){
		echo "Welcome $name";
	}
	welcome($name);
	echo "<br>";

	$a=12;
	$b=23;
	function sum($x,$y){
		echo $x+$y;
	}
	sum($a,$b);
	?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays</title>
</head>
<body>
	<?php
		echo "<h2>Arrays in php</h2>";
		$numbers=array(1,2,3,4,5);
		echo "First element: ".$numbers[0]."<br>";
		echo "Second element: ".$numbers[1]."<br>";
		echo "Length of the array is: ".count($numbers)."<br>";
		$cars = array("Volvo", "BMW", "Toyota");
		echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
		echo "<h2>Loop through the array:</h2>";
		$cars1=array("Volva","BMW","Toyota");
		$length=count($cars1);
		for($x=0;$x<$length;$x++){
			echo "$cars1[$x]";
			echo "<br>";
		}
		echo "<h2>Associative arrays:</h2>";
		$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
		foreach($age as $x => $x_value) {
  		echo "Key=" . $x . ", Value=" . $x_value;
  		echo "<br>";
  		}
	?>

</body>
</html>
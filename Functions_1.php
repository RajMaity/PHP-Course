<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Functions 1</title>
</head>
<body>
	<?php
		echo "<h2>Simple php function</h2><br>";
		function writeMsg(){
			echo "This is the message<br>";
		}
		writeMsg();

		echo "<h2>Function arguments</h2><br>";
		function familyName($name){
			echo "$name Root<br>";
		}
		familyName("Joe");
		familyName("Natasha");
		familyName("Alex");

		function familyName1($fname, $year) {
  		echo "$fname Refsnes. Born in $year <br>";
		}
		familyName1("Hege", "1975");
		familyName1("Stale", "1978");
		familyName1("Kai Jim", "1983");

		echo "<h2>Function returning values</h2><br>";
		function sum(int $x, int $y) {
  		$z = $x + $y;
  		return $z;
		}
		echo "5 + 10 = " . sum(5, 10) . "<br>";
		echo "7 + 13 = " . sum(7, 13) . "<br>";
		echo "2 + 4 = " . sum(2, 4);
	?>

</body>
</html>
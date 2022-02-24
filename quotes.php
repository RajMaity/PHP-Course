<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Single vs Double Quotes</title>
</head>
<body>
	<?php
	$str="This is a string!";
	echo "<h1>Single Quote:</h1>";
	echo "<br>";
	echo '$str'; //'single quote' only prints what inside it
	echo "<br>";
	echo $str;
	echo "<br>";
	echo "<h1>Double Quote:</h1>";
	echo "<br>";
	echo "$str";
	?>

</body>
</html>
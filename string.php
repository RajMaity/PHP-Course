<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strings in php</title>
</head>
<body>
	<?php
		$str="Hello World!!";
		echo "This is the original string: $str <br>";
		echo strlen($str); //string length;
		echo "<br>";
		echo str_word_count($str);
		echo "<br>";
		echo strrev($str);
		echo "<br>";
		echo str_replace("world", "Rj", "Hello world!");
		echo "<br>";
	?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Control Flow Statement</title>
</head>
<body>
	<?php
	echo "If else:<br>"; 
	$x=10;
	if($x<20)
		echo "True";
	else
		echo "False";
	echo "<br>";

	$str="This is a string";
	echo "$str<br>";
	if($str=="This is a string")
		echo "Yes true";
	echo "<br>";

	$i=1;
	while($i<=4){
		echo "This is a while loop<br>";
		$i++;
	}
	echo "<br>";

	for($i=0;$i<5;$i++){
		echo "This is for loop<br>";
	}
	?>

</body>
</html>

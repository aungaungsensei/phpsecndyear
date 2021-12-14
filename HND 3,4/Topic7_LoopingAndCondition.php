<!DOCTYPE html>
<html>
	<head>
		<title>Looping & Condition</title>
	</head>
	<body>
		<?php
		 for ($i=1; $i <= 10; $i++) 
		 {
			 if ($i % 2 == 0) 
			 {
			 	echo "<p>The number is " . $i . " and it's even.</p>";
			 }
			 else 
			 {
			 	echo "<p>The number is " . $i . " and it's odd.</p>";
			 }
		 }
		 ?>
	</body>
</html>
<html>
	<head>
		<title>Passed It On</title>
	</head>
	<body>
	<?php
		echo "<p>The post text is " . $_POST["mytext"] . "</p>";
		echo "<p>The cookie data is " . $_COOKIE["texttokeep"] . "</p>";
	?>
	</body>
</html>
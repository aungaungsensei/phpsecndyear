<?php
	$thetext = $_POST["mytext"]; // KMD
	setcookie ("texttokeep", $thetext, time() + 10000);
	// Declare Cookie
	// setcookie(name,value,expire)
	// eg; setcookie("texttokeep","KMD",10000)
?>
<html>
	<head>
		<title>Cookie Page1</title>
	</head>
	<body>
		<?php
			echo "<p>The post text is " . $_POST["mytext"] . "</p>";
			echo "<p>The cookie data is " . $_COOKIE["texttokeep"] . "</p>";
		?>
		<a href = "Cookie_Page2.php">Onto the next page</a>
	 </body>
</html>
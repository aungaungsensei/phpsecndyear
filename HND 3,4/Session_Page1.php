<?php
	session_start();
?>
<html>
	<head>
		<title>Session Page</title>
	</head>
		<body>
		<?php
			$mytext = $_POST["mytext"];
			echo "<p>The post text is " . $mytext . " and we'll register that in a session.</p>";

			$_SESSION["mytext"] = $mytext;

			echo "<p>The Session variable data is " . $_SESSION["mytext"] . "<p>";
		?>
		<a href = "Session_Page2.php">Onto the next page</a>
	 </body>
</html>
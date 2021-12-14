<?php 

	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "testdb";
	$connection =mysqli_connect($host, $user, $password,$database); 

	$firstname = $_POST["firstname"];
	$surname = $_POST["surname"];
	$query = "SELECT * from test_table WHERE FirstName" . "= \"$firstname\" OR SurName = \"$surname\"";
	$ret = mysqli_query ($connection,$query);
	$num_results = mysqli_num_rows ($ret);

	echo "<p>Total Record : $num_results </p>";

/*	
	$rows=mysqli_fetch_assoc($ret);
	echo  "First Name : " . $rows["FirstName"] . "<br>";
	echo  "Sur Name : " . $rows["SurName"] . "<br>";
*/

	for ($i = 0; $i< $num_results; $i++) 
		{
			$row = mysqli_fetch_array ($ret);
			
				echo  "First Name : " . $row["FirstName"] . "<br>";
				echo  "Sur Name : " . $row["SurName"] . "<br>";
			
		}
	

?>
	
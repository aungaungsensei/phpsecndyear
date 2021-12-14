<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "testdb";

	$connection =mysqli_connect($host, $user, $password,$database)
		or die ("Couldn't connect to database"); 

	//echo "Connect Successfull";

	//echo mysqli_select_db($connection,$database); 
	//echo "<br>";

/*
	$query = "CREATE TABLE test_table 
	(
		FirstName varchar (15), 
		SurName varchar (15) 
    )";
 	$ret = mysqli_query($connection,$query);
	if ($ret) 
	{
		echo "<p>Table created!</p>";
	}
	else 
	{
		echo "<p>Something went wrong: " . mysqli_error() . "</p>";
	}

*/

/*	
	$query = "INSERT INTO test_table(FirstName,SurName) values
	(\"Ye\",\"Myat Soe\"),(\"Ye\",\"Swan Yi\")";
	$ret = mysqli_query($connection,$query);
	if ($ret) 
	{
		echo "<p>Data Inserted!</p>";
	}
	else 
	{
		echo "<p>Something went wrong: " . mysqli_error() . "</p>";
	}
*/


/*
	$query = "INSERT INTO Student(StudentID,StudentName,NRC,Address,Phone) values(\"S-005\",\"Aung Aung\",\"9/KhaAhZa(N)555888\",\"MDY\",\"09-10101010\")";
	$ret = mysqli_query($connection,$query);
	if ($ret) 
	{
		echo "<p>Data Inserted!</p>";
	}
	else 
	{
		echo "<p>Something went wrong: " . mysqli_error() . "</p>";
	}
*/


/*
	$query = "Update Student Set Phone=\"09-2020202020\" where StudentID=\"S-003\"";
	$ret = mysqli_query($connection,$query);
	if ($ret) 
	{
		echo "<p>Data Updated!</p>";
	}
	else 
	{
		echo "<p>Something went wrong: " . mysqli_error() . "</p>";
	}
*/

/*
	$query = "Delete From Student Where StudentID=\"S-005\"";
	$ret = mysqli_query($connection,$query);
	if ($ret)
	{
		echo "<p>Data Deleted!</p>";
	}
	else 
	{
		echo "<p>Something went wrong: " . mysqli_error() . "</p>";
	}
*/



/*
	$query = "Drop Table Course";
	$ret = mysqli_query($connection,$query);
	if ($ret) 
	{
		echo "<p>Drop Table!</p>";
	}
	else 
	{
		echo "<p>Something went wrong: " . mysqli_error() . "</p>";
	}
*/


	$query = "SELECT * FROM test_table";

	$ret = mysqli_query ($connection,$query);

	$num_results = mysqli_num_rows ($ret);

/*	
	if($num_results>0)
	{
		while($row=mysqli_fetch_assoc($ret))
		{
			echo "Name : " . $row["FirstName"] . " " .  $row["SurName"] . "<br>";
		}
	}
	else
	{
		echo "0 Result!";
	}
*/
	

//	$name = mysqli_result ($ret, 0, "FirstName");
//	echo "<p>There were $num_results results returned from the query</p>"; 
	

	echo "<table width = \"100%\">"; 
		echo "<tr>"; 
			echo "<th align = \"left\">Record</th>"; 
			echo "<th align = \"left\">First Name</th>"; 
			echo "<th align = \"left\">Sur Name</th>"; 
		echo "</tr>"; 
		for ($i = 0; $i< $num_results; $i++) // 0 to 6
		{
			$row = mysqli_fetch_array ($ret);
			$count=$i+1;
			echo "<tr>";
				echo "<td>" . $count . "</td>";
				echo "<td>" . $row["FirstName"] . "</td>";
				echo "<td>" . $row["SurName"] . "</td>";
			echo "</tr>";
		}
	echo "</table>";

?>

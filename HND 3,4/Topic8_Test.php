<?php
if (isset($_POST["btnSubmit"])) 
	{
		$name = $_POST["txtName"];
		echo $name."<br>";

		$address = $_POST["txaAddress"];
		echo $address . "<br>";

		$city = $_POST["cboCity"];
		echo $city . "<br>";

		$gender = $_POST["rdoGender"];
		echo $gender . "<br>";

		$vehicle = $_POST["chkVehicle"];
		$N = count($vehicle);
		for($i=0; $i < $N; $i++)
		{
			echo $vehicle[$i] . "<br>";
		}		

		$image1=$_FILES['file']['name'];
		echo $image1;

		
		$folder="Images/";
		if($image1)
		{
			$filename1=$folder.$image1;
			$copied=copy($_FILES['file']['tmp_name'], $filename1);
			if(!$copied)
			{
				exit("Problem Occured. Cannot upload image.");
			}
		}

		echo "<br><br>File Name : " . $_FILES['file']['name']."<br>";
		echo "Type : " . $_FILES['file']['type']."<br>";
		echo "Size : " . $_FILES['file']['size']."<br>";
		echo "Temp Name : " . $_FILES['file']['tmp_name']."<br>";
		echo "Error : " . $_FILES['file']['error']."<br>";

	}
?>
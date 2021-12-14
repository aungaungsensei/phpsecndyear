<?php 
if(isset($_POST["btnSubmit"]))
{
	$name=$_POST["txtName"];
	echo $name . "<br>";

	$address=$_POST["txaAddress"];
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

	$image1=$_FILES['KMD']['name'];
	echo $image1;

	$folder="Images/";

	if($image1)
	{
		// Images/img1.jpg
		$filename1=$folder.$image1;
		$copied=copy($_FILES['KMD']['tmp_name'], $filename1);
		if(!$copied)
		{
			exit("Problem Occured. Cannot upload image.");
		}
	}

	echo "<br><br>File Name : " . $_FILES['KMD']['name']."<br>";
	echo "Type : " . $_FILES['KMD']['type']."<br>";
	echo "Size : " . $_FILES['KMD']['size']."<br>";
	echo "Temp Name : " . $_FILES['KMD']['tmp_name']."<br>";
	echo "Error : " . $_FILES['KMD']['error']."<br>";
}
	
 ?>
<?php 

	require('ConnectDB.php');

	$user="Drop Table User";
	$retuser = mysqli_query($connection,$user);

	$user = "CREATE TABLE User 
	(
		UserID int AUTO_INCREMENT NOT NULL PRIMARY KEY,
		FirstName varchar (30) NOT NUll,
		LastName varchar (30) NOT NUll,
		Phone varchar (30) NOT NUll,
		UserEmail varchar (30) NOT NUll,
		Password varchar (30) NOT NUll,
		Address varchar (30) NOT NUll,
		DOB date NOT NUll,
		Gender varchar (30) NOT NUll
    )";
 	$retuser = mysqli_query($connection,$user);

	if ($retuser) 
	{
		echo "<p>User Table Created!</p>";
	}
	else 
	{
		echo "<p>Something went wrong: " . mysqli_error($connection) . "</p>";
	}

	// Brand

	$brand="Drop Table Brand";
	$retbrand = mysqli_query($connection,$brand);
	
	$brand = "CREATE TABLE Brand 
	(
		BrandID int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
		BrandName varchar (30) NOT NUll
		
    )";
 	$retbrand = mysqli_query($connection,$brand);
	if ($retbrand) 
	{
		echo "<p>Brand Table Created!</p>";
	}
	else 
	{
		echo "<p>Something went wrong: " . mysqli_error($connection) . "</p>";
	}

	// Category

	$category="Drop Table Category";
	$retcategory = mysqli_query($connection,$category);
	
	$category = "CREATE TABLE Category 
	(
		CategoryID int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
		CategoryName varchar (30) NOT NUll
		
    )";
 	$retcategory = mysqli_query($connection,$category);
	if ($retcategory) 
	{
		echo "<p>Category Table Created!</p>";
	}
	else 
	{
		echo "<p>Something went wrong: " . mysqli_error($connection) . "</p>";
	}


	// Customer 

	$customer="Drop Table Customer";
	$retcustomer = mysqli_query($connection,$customer);
	
	$customer = "CREATE TABLE Customer 
	(
		CustomerID int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
		CustomerName varchar (30) NOT NUll
		
    )";
 	$retcustomer = mysqli_query($connection,$customer);
	if ($retcustomer) 
	{
		echo "<p>Customer Table Created!</p>";
	}
	else 
	{
		echo "<p>Something went wrong: " . mysqli_error($connection) . "</p>";
	}

	
	// Product

	$product="Drop Table Product";
	$retproduct = mysqli_query($connection,$product);

	$product = "CREATE TABLE Product 
	(
		ProductID varchar(15) NOT NULL PRIMARY KEY,
		Description varchar(255) NOT NUll,
		Price int(11) NOT NUll,
		Color varchar(15) NOT NUll,
		Size varchar(15) NOT NUll,
		Path varchar(255) NOT NUll,
		Quantity int(11) NOT NUll,
		Brand varchar(30) NOT NUll,
		Category varchar(30) NOT NUll
    )";
 	$retproduct = mysqli_query($connection,$product);
	if ($retproduct) 
	{
		echo "<p>Product Table Created!</p>";
	}
	else 
	{
		echo "<p>Something went wrong: " . mysqli_error($connection) . "</p>";
	}

 ?>
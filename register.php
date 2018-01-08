<?php

var_dump($_POST);

$severname="localhost";
$username="root";
$password="ushan";
$database="lms";

$conn=new mysqli($severname,$username,$password,$database);

if($conn->connect_error)
{
	die("connection failed :".$conn->connect_error);
}

$fname =$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST["password"];

	$sql="INSERT INTO student_details(f_name,l_name,email,password) VALUES ('$fname','$lname','$email','$password')";
	
	if(mysqli_query($conn,$sql))
	{
		//echo "New record created successfully";
		header("Location:index.php");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			} 
			mysqli_close($conn);

			
			?>

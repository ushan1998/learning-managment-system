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

$email =$_POST["email"];
$mobileno=$_POST["mobileno"];
$msg=$_POST["msg"];


	$sql="INSERT INTO enquries(email,mobileno,msg) VALUES ('$email','$mobileno','$msg')";
	
	if(mysqli_query($conn,$sql))
	{
		//echo "New record created successfully";
		header("Location:index.php");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			} 
			mysqli_close($conn);

			
			?>

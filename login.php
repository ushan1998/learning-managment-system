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
 
$email=$_POST["email"];
$password=$_POST["password"];

	$sql="select * From student_details where email='$email' AND password='$password'";
	
$result = mysqli_query($conn, $sql);
	 session_start();
	if (mysqli_num_rows($result) > 0)
	{
	 $_SESSION['id']=$row['id'];
	 	
	  header("Location:index.php");
	}else

	{
		echo "<h1>Ops! Sorry we can't find this user account</h1><br><h3>please check your email or password and please try again!!</h3>";

	}
			
			?>

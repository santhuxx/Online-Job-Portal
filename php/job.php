<?php

$conn=mysqli_connect("localhost","root","","iwt");

if(!$conn)
{
	die("connection Failed:".mysqli_connect_error());	
}
if(isset($_POST['job']))
{
	$Job_title=$_POST['Job_title'];
	$category=$_POST['category'];
	$company=$_POST['company'];
	$contact=$_POST['contact'];
	$e_mail=$_POST['e_mail'];
	$address=$_POST['address'];
    $description=$_POST['description'];


	$sql_query="INSERT INTO addjob(job_title,category,company,contact,e_mail,address,description)
	VALUES('$Job_title','$category','$company','$contact','$e_mail','$address','$description')";

	if(mysqli_query($conn,$sql_query))
	{
		echo"New Details Entry Inserted successfully!";
	}
	else
	{
		echo"error:".$sql."".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>

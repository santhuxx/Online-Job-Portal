<?php


if(isset($_post['submit']))

{
	 
	$firstname = $_post['firstname'];
	$lastname = $_post['lastname'];
	$mobileno = $_post['mobileno'];
	$email = $_post['email'];
	$address=$_post['address'];
	$p_password=$_post['p_password'];
	$js_id=$_post['js_id'];
	
	$host= 'localhost';
	$user= 'root';
	$pass= '';
	$dbname= 'iwt';


	$conn =mysqli_connect($host,$user,$pass,$dbname);
	
	$sql= "INSERT INTO jobseeker(firstname,lastname,mobileno,email,address,password,js_id) values ('$firstname','$lastname','$mobileno','$email','$address','$p_password','$js_id')";
	mysqli_query($conn,$sql);

}

?>
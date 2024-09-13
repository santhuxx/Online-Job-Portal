<?php
 $p_title=$_POST['p_title']
 $p_type=$_POST['p_type']
 $p_company=$_POST['p_company']
 $p_mobile=$_POST['p_mobile']
 $p_email=$_POST['p_email']
 $p_address=$_POST['p_address']
 $p_desc=$_POST['p_desc']


 //database connection
 $conn=new mysqli('localhost','root','','iwt');
 if($conn->connect_error){
     die('connection Failed :'.$conn->connect_error);
 }else{
     $stmt=$conn->prepare("insert in to postjob(p_title,p_type,p_company,p_mobile,p_email,p_address,p_desc)
     values("?,?,?,?,?,?,?")");
     $stmt->bind_param("sssssi",$p_title,$p_type,$p_company,$p_mobile,$p_email,$p_address,$p_desc)
     $stmt->execute();
     echo"job posted successfully....";
     $stmt->close();
     $conn->close();
 }
?>
       
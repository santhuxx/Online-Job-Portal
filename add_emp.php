<?php

include 'dbcon.php';
    if(isset($_POST['add_emp'])){
        // echo 'Ebuwa II';

        $Job_title = $_POST['Job_title'];
        $Company = $_POST['Company'];
        $Mobile = $_POST['Mobile'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        $query = "insert into `employer` (Job_title,Company,Mobile,email,address,password) values ('$Job_title' , '$Company', '$Mobile','$email','$address','$password')";

        $result = mysqli_query($connection,$query);


        if(!$result){
            die("Query Failed".mysqli_error());
        }else{
            echo 'data is inserted';
        }
    }

?>
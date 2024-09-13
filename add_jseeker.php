<?php

include 'dbcon.php';
    if(isset($_POST['add_jseeker'])){
        // echo 'Ebuwa II';

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        $query = "insert into `jobseeker` (firstname,lastname,mobileno,email,address,password) values ('$firstname' , '$lastname', '$mobile','$email','$address','$password')";

        $result = mysqli_query($connection,$query);


        if(!$result){
            die("Query Failed".mysqli_error());
        }else{
            echo 'data is inserted';
        }
    }

?>
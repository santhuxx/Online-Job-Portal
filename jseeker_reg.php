<!DOCTYPE html>
<html>
    <head>
        <title> jobseeker </title>
        <link rel="stylesheet" href="css/reg.css">
        <script src="js/emp.js"></script>
		
		

              
    </head>
    <body>
        
    
    <div class="btn-group">
        <button class="button" type="button"><a href="emp_reg.php">For Employers</a></button>
        <button class="button" type="button"><a href="#">For Job Seekers</a></button>       
    </div>
<!------------------------------------------------------------------------------------------------------------>
    <center><form action="add_jseeker.php" method="post">
        <center>
        <h1 style="color:white;">Register now for Job Seeker </h1>

        </center>


        
       
        
            <label>First name</label>
            <input type="text"name="firstname" class="form-control" id="p_title" placeholder="Enter your name" required><br/><br/>
        
            
            <label>Last name</lable>
            <input type="text"name="lastname" class="form-control" id="p_company" placeholder="Enter your name" required><br/><br/>
        
            Mobile Number
            <input type="phone"name="mobile" class="form-control" id="p_mobile" placeholder="0777777777" pattern="[0-9]{10}" required><br/><br/>
        
            e-mail
            <input type="email"name="email" class="form-control" id="p_email" placeholder="abc@gmail.com" 
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}"required> <br/><br/>
        
            Address<br/>
            <textarea name="address" class="form-control" id="p_address" required></textarea><br/><br/>
            
            <label>Password</lable>
                <input type="password"name="password" class="form-control" id="p_password" placeholder="Enter your password" required><br/><br/>
                
        

            <label>Confirm Password</lable>
                <input type="password"name="cpassword" class="form-control" id="p_cspassword" placeholder="Re-enter the password" required><br/><br/>
                
        
                <button onclick="myFunction()" class="submit" name='add_jseeker'>
                    <span class="btnText">Submit</span>
                    <i class="uil uil-navigator"></i>

                </button>


                
     </form>
        
            </body>   
        
        
</html>        

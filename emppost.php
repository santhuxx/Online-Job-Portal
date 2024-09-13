<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/employer.css">
    <title>POST A JOB</title>
</head>


<body>
    
<div class="nav-logo">
    <div class="logo">
        <img src="../images/J (4).png" alt="Logo">
    </div>

    <div class="navbar">
        <ul>
            <li><a href = "/Users/a.ssaneef/Desktop/IWT homepage/first.html">HOME</a></li>
            <li><a href = "../html/jobcategories.html">JOBS</a></li>
            <li><a href = "#">LOGIN</a></li>
            <li><a href = "#">CONTACT US</a></li>
            <li><a href = "#">HELP & SUPPORT</a></li>
            <li><a href = "#">ABOUT US</a></li>
        </ul>
    </div>
    <div class="search-bar">
        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
        </form>
    </div>


    <div class="user">
        <a href="#"><img src="../images/user.jpg" alt="Avatar" ></a>
    </div>
</div>


</div>
<div class="btn-style">
    <button class="button" type="button"><a href="../html/jobcategories.html">For Jobseekers</a></button>
    <button class="button" type="button"><a href="../html/employer.html">For Employers</a></button>       
</div>


<div class="title">
    <h1>Post a Job</h1>
</div>
<br><br>


<div class="form-style">
<form action="job_post.php" method="post">
    
        <br><br>
        <label>Job Title</label>
        <input type="text"name="Job_title" class="form-control" id="E_title" placeholder="Accountant" required><br><br>
    
        
        <label>Company Name</label>
        <input type="text"name="company" class="form-control" id="E_company" placeholder="JobMart(Pvt)Ltd" required><br><br>
    
        <label>Contact Number</label> 
        <input type="phone"name="contact" class="form-control" id="E_mobile" placeholder="0777123456" pattern="[0-9]{10}" required><br><br>
    
        <label>E-mail</label> 
        <input type="email"name="e_mail" class="form-control" id="E_email" placeholder="jobmart@gmail.com" 
        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}"required> <br/><br/>
    
        <lable>Address</lable><br><br>
        <textarea name="address" class="form-control" id="E_address" placeholder="Enter your Address in here...." required></textarea><br><br>
    
        <lable>Job Description</lable><br><br>
        <textarea name="description" class="form-control" id="E_desc" placeholder="Enter your job Description in here...." required></textarea>
        
        <br><br>
        
    <input type="submit" name="job_post" value="Submit">
    <br><br>
</form><br><br><br><br>


<div class="footer">
    <span>Developed By <a href="">Job Mart</a> | <span class="fa fa-copyright"></span> 2023 All rights reserved.</span>
</div>

   
</body>
</html>
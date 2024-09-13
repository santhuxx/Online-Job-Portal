<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$database = "job_post";

// Create connection
$dbconn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$dbconn) {
    die("Connection failed: " . $dbconn->connect_error);
}
$query = "select id,name,(select name from gender where id = gender_id) as gender,school,university,degreeProgram,mobile,address,location,email from job_seeker   where id=1";


$result = $dbconn->query($query);
$name = '';
if ($result) {
    $data = $result->fetch_assoc();
    $id = $data['id'];
    $name = $data['name'];
    $gender = $data['gender'];
    $school = $data['school'];
    $university = $data['university'];
    $degreeProgram = $data['degreeProgram'];
    $mobile = $data['mobile'];
    $address = $data['address'];
    $location = $data['location'];
    $email = $data['email'];


}
?>
<html>

<head>
    <title>Profile</title>

    <link rel="stylesheet" href="../CSS/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header>
    <div class="nav-logo">
        <div class="logo">
            <img src="../Images/J%20(4).png" alt="Logo">
        </div>
        <div class="navbar">
            <ul>
                <li><a href="/Users/a.ssaneef/Desktop/IWT homepage/first.html">HOME</a></li>
                <li><a href="#">JOBS</a></li>
                <li><a href="#">LOGIN</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">HELP & SUPPORT</a></li>
                <li><a href="#">ABOUT US</a></li>
            </ul>
        </div>
        <div class="search-bar">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="user">
            <a href="#"><img src="../Images/user.jpeg" alt="Avatar"></a>
        </div>
    </div>
    <div class="head1"></div>
    <div class="head2"></div>

</header>
<div class="profiledata">
    <div class="profile loading-row">
        <div class="Profileimage">
            <img src="../Images/Profile.png" alt="Profile" height="100%" width="100%">
        </div>
        <div class="profileName">
                <span class="abc">H.P.K.D.Kumara</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
    </div>
    <table class="profile_content" id="myTable">
        <tr class="loading-row">
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr class="loading-row">
            <td>Gender</td>
            <td><?php echo $gender; ?>
            </td>
        </tr>
        <tr class="loading-row">
            <td>School</td>
            <td><?php echo $school; ?></td>
        </tr>
        <tr class="loading-row">
            <td>University</td>
            <td><?php echo $university; ?></td>
        </tr>
        <tr class="loading-row">
            <td>Degree programe</td>
            <td><?php echo $degreeProgram; ?></td>
        </tr>
        <tr class="loading-row">
            <td>Mobile</td>
            <td><?php echo $mobile; ?></td>
        </tr>
        <tr class="loading-row">
            <td>Address</td>
            <td>9<?php echo $address; ?></td>
        </tr>
        <tr class="loading-row">
            <td>Location</td>
            <td><?php echo $location; ?></td>
        </tr>

        <tr class="loading-row">
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>
    </table>

</div>
<footer>
    <div class="footer">
            <span>Developed By <a href="">Job Mart</a> | <span class="fa fa-copyright"></span> 2023 All rights
                reserved.</span>
    </div>
</footer>
</body>

</html>
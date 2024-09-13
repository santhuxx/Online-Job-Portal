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
$query = "Select * from memberapproval";


$result = $dbconn->query($query);

?>

<html>
<head>
    <title>
        Member approval page
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/MemberApproval.css">
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
    <div class="hedder">
        <h4>JOB MART</h4>
        <p>
            Lorem ipusum dolor sit<br>
            amet dolor
        </p>

    </div>
</header>
<article>
    <div class="buttongroup">

        <button class="button1">All Waiting Members</button>
        <button class="button2">All Approval Members</button>

    </div>
    <div class="tb">
        <div class="delete">
            <form action="MemberDelete.php" method="post">
                <input type="text" placeholder="Enter NIC" id="nic" name="nic">
                <br>
                <button class="delete-btn">Delete</button>
            </form>

        </div>
        <table class="table">
            <thead class="thead">
            <tr>
                <th>Name</th>
                <th>Title</th>
                <th>NIC</th>
                <th>Mobile Number</th>
                <th>Attach Document</th>
                <th>Approve</th>
                <th>Reject</th>
            </tr>
            </thead>
            <tbody class="tbody">

            <?php
            if ($result) {

                while ($data = $result->fetch_assoc()) {
                    $id = $data['id'];
                    $name = $data['name'];
                    $title = $data['title'];
                    $nic = $data['nic'];
                    $mobileNumber = $data['mobileNumber'];
                    $attachDocument = $data['attachDocument'];
                    $approve = $data['approve'];
                    $reject = $data['reject'];
                    echo '
                     <tr>
                     <td>' . $name . '</td>
                     <td>' . $title . '</td>
                     <td>' . $nic . '</td>
                     <td>' . $mobileNumber . '</td>
                     <td>' . $attachDocument . '</td>
                     <td>' . $approve . '</td>
                     <td>' . $reject . '</td>
</tr>
                    ';
                }

            }

            ?>
            </tbody>
        </table>

    </div>
</article>
<footer>
    <div class="footer">
            <span>Developed By <a href="">Job Mart</a> | <span class="fa fa-copyright"></span> 2023 All rights
                reserved.</span>
    </div>
</footer>
</body>

</html>

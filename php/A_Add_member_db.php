<!--Session-->
<?php
require("config.php");
session_start();
if (!isset($_SESSION["user_name"])) {
    require("session_alert.php");
    header("Refresh: $sec; url=Admin_Login.php");
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Registration</title>

    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../css/User_regi.css">

    <script src="../js/time.js"></script>
</head>


<body onload="display_ct()" class="body">
    <div id="ct"></div>

    <div class="contain" style="background-color: rgba(255, 0, 0, 0.548); width: 100%; margin-left: 0;">
        <div class="navbar">
            <a href="Admin_Home.php"> <button class="btn-outline-info">Admin Home</button></a>
            <a href="A_Member_List.php"> <button class="btn-outline-danger active"> Members</button></a>
             
            <a href="A_Search.php"> <button class="btn-outline-info">Search</button></a>
            <a href="A_Update.php"><button class="btn-outline-dark">Update</button></a>
            <a href="A_Delete.php"><button class="btn-outline-primary">Delete</button></a>
            <a href="Admin_logout.php"><button class="btn-danger">Log Out</button></a>
        </div>
    </div>

    <!--Database connection-->
    <div style="text-align: center; color: aqua; background-color: black; width:fit-content;padding: 0 1% 0 1%; margin:1% auto -2% auto; border: solid gray 5px; border-radius: 25px; margin: 3% auto;">
        <hr>
        <?php
        //connect with database configuration
        require("config.php");
        $sql = mysqli_connect($host, $user, $pass, $db) or die("Cannot connect server." . mysqli_error($sql));

        //variable Declaration 
        $ID = $_POST["idno"];
        $Name = $_POST["name"];
        $contact = $_POST["contact"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "select * from registration where id = '$ID'";
        $query_run = mysqli_query($sql, $query);

        //same id check 
        if (mysqli_num_rows($query_run) == 1) {
            echo "<h2><b>Member ID already exist. <br/>Please check the member list.<br/> Do you want to add another new member?</b></h2>";
        } else {
            $registration = "INSERT INTO registration values('$ID','$Name','$contact','$email','$password')";
            $result = mysqli_query($sql, $registration) or die("Error in inserting Data");

            if ($result) {
                echo "<h2><b>Successfully Member is added <br/> Do you want to add another new member?</b>  </h2>";
            } else {
                echo "<h2><b>Error in Registration process...</b></h2>";
            }
        }
        ?>
        <a href="A_add_member.php"><button class="btn btn-danger" style="width: 35%; padding: 2%; margin: 1.5% auto;"><b>Add New Member</b></button></a>
        <hr>
    </div>

    <!--Footer-->
    <div class="full-footer" style="position: absolute;">
        <div class="foot">
            &copyDIU-Voluntary Club. All Rights are reserved 2022
        </div>
        <div class="info">
        Designed By <a href="https://www.facebook.com/jr.369" target="_blank">JR Jahir Rayh</a> & <a href="https://www.facebook.com/sabbir10r" target="_blank">Sabbir Ahamed</a>
        </div>
    </div>
</body>

</html>
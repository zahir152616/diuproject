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
    <title>Add Events</title>

    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/center.css">

    <script src="../js/time.js"></script>
</head>


<body onload="display_ct()" class="body">
    <div id="ct"></div>

    <div class="contain" style="background-color: rgba(255, 0, 0, 0.548);  width: 100%; margin-left: 0;">
        <div class="navbar">
            <a href="Admin_Home.php"> <button class="btn-outline-info">Admin Home</button></a>
            <a href="A_Member_List.php"> <button class="btn-outline-danger "> Members</button></a>

            <a href="A_Search.php"> <button class="btn-outline-info">Search</button></a>
            <a href="A_Update.php"><button class="btn-outline-dark">Update</button></a>
            <a href="A_Delete.php"><button class="btn-outline-primary">Delete</button></a>
            <a href="Admin_logout.php"><button class="btn-danger">Log Out</button></a>
        </div>
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
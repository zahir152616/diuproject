<!--Database Connection-->
<?php
require("config.php");
session_start();
if (!isset($_SESSION["id"])) {
    require("session_alert.php");
    header("Refresh: $sec; url=User_Login.php");
    die;
}

$searchID = $_SESSION["id"];
$sql = mysqli_connect($host, $user, $pass, $db) or die("Cannot connect server.");

$query = "select * from registration where id = '$searchID'";
$result = mysqli_query($sql, $query);

$row = mysqli_fetch_array($result, MYSQLI_NUM);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/User_Home.css">
    <script src="../js/time.js"></script>

</head>

<body onload="display_ct()" class="body">
    <div id="ct"></div>
    <video src="../video/ac_v1.mp4" autoplay loop playsinline muted></video>

    <div class="contains">
        <div class="welcome">
            <a href="#main">
                <h2><img src="../video/down_arrow.gif" alt=""><b> Welcome to Our Official Website </b><img src="../video/down_arrow.gif" alt=""></h2>
            </a>
        </div>

        <div id="main">
            <button class="btn btn-dark" style="width: max-content; float: right; border-radius: 0;"><?php echo "{$row[1]}" ?> </button>
            <main>
                <a href="#">
                    <div class="logo">
                        <img src="../image/club_logo.png" alt="">
                    </div>
                </a>

                <div class="options">
                    <a href="U_member.php"> <button class="btn-danger">Member</button></a>
                    <a href="U_event.php"><button class="btn-success">Events</button></a>
                    <a href="U_activity.php"> <button class="btn-info">Our Activities</button></a>
                    <br>
                    <a href="U_about.php"><button class="btn-dark">About Us</button></a>
                    <a href="U_update.php"><button class="btn-light">Update Profile</button></a>
                    <br>
                    <a href="User_logout.php"><button class="btn-danger" style="width: 50%; padding: 3px;">Log
                            Out</button></a>
                </div>
            </main>
        </div>
    </div>

    <!--Footer-->
    <div class="full-footer">
        <div class="foot">
            &copyDIU-Voluntary Club. All Rights are reserved 2022
        </div>
        <div class="info">
        Designed By <a href="https://www.facebook.com/jr.369" target="_blank">JR Jahir Rayh</a> & <a href="https://www.facebook.com/sabbir10r" target="_blank">Sabbir Ahamed</a>
        </div>
    </div>
</body>

</html>
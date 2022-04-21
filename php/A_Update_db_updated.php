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
    <title>Member Updated</title>

    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../css/User_regi.css">

    <script src="../js/time.js"></script>
</head>


<body onload="display_ct()" class="body">
    <div id="ct"></div>

    <div class="contain" style="background-color:  rgba(255, 0, 0, 0.548); width: 100%; margin-left: 0;">
        <div class="navbar">
            <a href="Admin_Home.php"> <button class="btn-outline-info">Admin Home</button></a>
            <a href="A_Member_List.php"> <button class="btn-outline-danger"> Members</button></a>
             
            <a href="A_Search.php"> <button class="btn-outline-info">Search</button></a>
            <a href="A_Update.php"><button class="btn-outline-dark  active">Update</button></a>
            <a href="A_Delete.php"><button class="btn-outline-primary">Delete</button></a>
         <a href="Admin_logout.php"><button class="btn-danger">Log Out</button></a>
        </div>
    </div>

    <!--database updated-->
    <div style="width: 50vw; text-align: center; color: aqua; background-color: black; padding: 0 1% 0 1%; margin:1% auto; border: solid gray 5px; border-radius: 25px;">
        <?php
        require("config.php");

        $idno = $_POST["idno"];
        $name = $_POST["name"];
        $contact = $_POST["contact"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = mysqli_connect($host, $user, $pass, $db) or die("Cannot connect server.");

        $update_db = "UPDATE registration SET id = '$idno', name = '$name', contact = '$contact', email = '$email', password = '$password' WHERE id = '$idno'";
        $result = mysqli_query($sql, $update_db);

        if ($result) {
            echo "<h3>WoW..! <br/> Member information successfully updated.</h3>";
        } else {
            echo "<h3>Oops..! <br/> Error in updating member information.</h3>";
        }
        ?>
    </div>

    <div style="width: 100%;float: left;">
        <div class="Member_login" style="width: 40%; float:left; margin: 10% 5% 1.0% 10%;">
            <form name="search_for_update" action="A_Update_db.php" method="POST">
                <br>
                <input type="text" placeholder="Search By Student ID" name="searchID" required>
                <input type="submit" class="btn btn-info" value="Search">
            </form>
        </div>

        <div class="Member_login" style="width: 30%; float: left; margin:  2% 10% 2% 5%;">
            <h3 style="text-decoration: underline;"><b>Member information</b></h3>
            <form name="search_result" action="A_Update_db.php" method="POST">
                <label for="id"><b>Member ID</b></label><br>
                <input type="text" placeholder="Student ID" name="idno" required><br />

                <label for="name"><b>Full Name</b></label><br>
                <input type="text" placeholder="Your Full name" name="name" required><br />

                <label for="contact"><b>Contact Number</b></label><br>
                <input type="text" placeholder="Contact Number" name="contact" required><br />

                <label for="Email"><b>Email Address</b></label><br>
                <input type="email" placeholder="Email Address" name="email" required><br />

                <label for="password"><b>Password</b></label><br>
                <input type="password" placeholder="Password" name="password" required><br />

                <input type="submit" class="btn btn-danger" value="Update">

            </form>
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
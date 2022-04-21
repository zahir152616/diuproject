<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Login</title>

    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../css/User_Login.css">

    <script src="../js/time.js"></script>
    <script src="../js/all_alerts.js"></script>
</head>


<body onload="display_ct()" class="body">
    <div id="ct"></div>

    <!--Database connection-->
    <div
        style="text-align: center; color: aqua; background-color: black; width:fit-content;padding: 0 1% 0 1%; margin:1% auto -2% auto; border: solid gray 5px; border-radius: 25px;">
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
            echo "<h2><b>Member ID already exist. <br/>You can log in using your previous Member ID and Password.</b></h2>";
        } else {
            $registration = "INSERT INTO registration values('$ID','$Name','$contact','$email','$password')";
            $result = mysqli_query($sql, $registration) or die("Error in inserting Data");

            if ($result) {
                echo "<h2><b>Successfully Registration. <br/> Now you can log in using your ID and Password.</b> </h2>";
            } else {
                echo "<h2><b>Error in Registration process...</b></h2>";
            }
        }
        ?>
        <hr>
    </div>

    <!--Login Form-->
    <div class="Member_login">
        <img src="../image/Member_login.jpg" alt="member-login" width="70%">
        <form action="User_Login_db.php" method="POST">
            <br>
            <input type="text" name="id" id="Member_name" placeholder="Enter Member ID" required>
            <br>
            <input type="password" name="password" id="Member_pass" placeholder="Enter Your Password" required>
            <br>
            <small onclick="Contact_With_Committee()"><a href="P_member.php" class="forget_password">Forgot
                    Password?</a></small>
            <br>

            <input type="submit" name="Member_submit" id="Member_submit" value="Login" class="btn-danger">

            <a href="U_Reg_member.php"><input type="button" value="Register as a New Member" class="btn-success"
                    id="regi_new_member"></a>
            <br>
            <a href="P_Home.php"><input type="button" value="Enter as a guest" class="btn-info" id="guest_mode"></a>
        </form>
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
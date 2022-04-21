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

    <div style="text-align: center; color: aqua; background-color: black; width:50vw;padding: 0 1% 0 1%; margin:1% auto -2% auto; border: solid gray 5px; border-radius: 25px;">
        <hr>
        <!--Database check-->
        <?php
        require("config.php");
        $ID = $_POST["id"];
        $password = $_POST["password"];

        $sql = mysqli_connect($host, $user, $pass, $db) or die("Cannot connect server.");

        $query = "select * from registration where id = '$ID'";
        $result = mysqli_query($sql, $query);

        if (mysqli_num_rows($result) == 0) {
            echo "<h2><b>Member is not registered . <br/> Please complete your member registration first.<br/>Thank You..</b></h2>";
        } else {
            $row = mysqli_fetch_array($result, MYSQLI_BOTH);

            if ($row["password"] == $password) {
                session_start();
                $_SESSION["id"] = $ID;
                header("Location: User_Home.php");
            } else {
                echo "<h2> Password is wrong.<br/> Please recheck your password. </h2>";
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
            <small onclick="Contact_With_Committee()"><a href="P_member.php" class="forget_password">Forgot Password?</a></small>
            <br>

            <input type="submit" name="Member_submit" id="Member_submit" value="Login" class="btn-danger">
            
            <a href="U_Reg_member.php"><input type="button" value="Register as a New Member" class="btn-success" id="regi_new_member"></a>
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
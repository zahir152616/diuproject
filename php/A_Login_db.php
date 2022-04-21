<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../css/Admin_Login.css">

    <script src="../js/time.js"></script>
</head>


<body onload="display_ct()" class="body">
    <div id="ct"></div>

    <!--Database connection-->
    <div style="text-align: center; color: aqua; background-color: black; width:fit-content;padding: 0 1% 0 1%; margin:1% auto -2% auto; border: solid gray 5px; border-radius: 25px;">
        <hr>
        <!--Database check-->
        <?php
        require("config.php");
        $Name = $_POST["name"];
        $password = $_POST["password"];

        $sql = mysqli_connect($host, $user, $pass, $db) or die("Cannot connect server.");

        $query = "select * from admin where user_name = '$Name'";
        $result = mysqli_query($sql, $query);

        if (mysqli_num_rows($result) == 0) {
            echo "<h2><b>Ooops..! Wrong Admin information. <br/> Please Try Again. <br/>Thank You..</b></h2>";
        } else {
            $row = mysqli_fetch_array($result, MYSQLI_BOTH);

            if ($row["password"] == $password) {
                session_start();
                $_SESSION["user_name"] = $Name;
                header("Location: Admin_Home.php");
            } else {
                echo "<h2> Password is wrong.<br/> Please recheck your password. </h2>";
            }
        }
        ?>
        <hr>
    </div>


    <div class="admin_login">
        <img src="../image/admin_login.gif" alt="">
        <form name="admin_login" action="A_Login_db.php" method="POST">
            <br>
            <input type="text" name="name" id="admin_name" placeholder="Enter Admin User Name" required>
            <br>
            <input type="password" name="password" id="admin_pass" placeholder="Enter Admin Password" required>
            <br>
            <input type="submit" name="admin_submit" id="admin_submit" value="Login" class="btn-danger">
            <a href="User_Login.php"><input type="button" value="Login as a Member" class="btn-success"></a>
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
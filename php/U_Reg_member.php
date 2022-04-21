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

    <div class="Member_login">
        <img src="../image/register-login-add-on.png" alt="member-login" width="30%">
        <form name="registration" action="U_Regi_db.php" method="POST">
            <br>
            <input type="text" placeholder="Student ID/Employee ID" name="idno" required><br />
            <small><b>*Student ID/Employee ID will be your Member ID*</b></small><br><br>

            <input type="text" placeholder="Your Full name" name="name" required><br />

            <input type="text" placeholder="Contact Number" name="contact" required><br />

            <input type="email" placeholder="Email Address" name="email" required><br />

            <input type="password" placeholder="Password" name="password" id="password" required><br />

            <input type="submit" name="Member_submit" id="Member_submit" value="Register" class="btn-danger"><br>

            If you are already a member, Please Login Here.
            <br>
            <a href="User_Login.php"><input type="button" value="Login as a Member" class="btn-success" id="login_back"></a>
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
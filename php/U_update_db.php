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
      <title>Update Profile</title>

      <link rel="shortcut icon" href="../image/club_logo.png">
      <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
      <link rel="stylesheet" href="../css/User_regi.css">
      <link rel="stylesheet" href="../css/center.css">

      <script src="../js/time.js"></script>
  </head>


  <body onload="display_ct()" class="body">
      <div id="ct"></div>

      <button class="btn btn-dark" style="width: max-content; float: right; border-radius: 0;"><?php echo "{$row[1]}" ?> </button>

      <div class="contain">
          <div class="navbar">
              <a href="User_Home.php"> <button class="btn-outline-info">Home</button></a>
              <a href="U_member.php"> <button class="btn-outline-danger">Members</button></a>
              <a href="U_event.php"><button class="btn-outline-success">Events</button></a>
              <a href="U_activity.php"> <button class="btn-outline-info">Our
                      Activities</button></a>
              <a href="U_about.php"><button class="btn-outline-dark">About Us</button></a>
              <a href="U_update.php"><button class="btn-outline-primary
                        active">Update Profile</button></a>
              <a href="User_logout.php"><button class="btn-danger">Log Out</button></a>
          </div>
      </div>
      <hr>

      <!--database updated-->
      <div style="width: max-content; text-align: center; color: aqua; background-color: black; padding:1.5%; margin:1% auto; border: solid gray 5px; border-radius: 25px;">
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
                echo "<h3> Your Profile is successfully updated.</h3>";
            } else {
                echo "<h3>Oops..! <br/> Error in updating your information.</h3>";
            }
            ?>
      </div>

      <!--Updated-->
      <?php
        require("config.php");
        $searchID = $_SESSION["id"];
        $sql = mysqli_connect($host, $user, $pass, $db) or die("Cannot connect server.");

        $query = "select * from registration where id = '$searchID'";
        $result = mysqli_query($sql, $query);

        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        ?>

      <!--Updated profile-->
      <div class="Member_login">
          <form name="user_profile" action="U_update_db.php" method="POST">
              <?php
                echo "<h3><b>Profile of '{$row[1]}'</b></h3>";
                ?>
              <br>
              <label for="id"><b>Member ID</b></label><br>
              <input type="text" placeholder="Student ID" name="idno" value="<?php echo "$row[0]"; ?>" readonly><br />

              <label for="name"><b>Full Name</b></label><br>
              <input type="text" placeholder="Your Full name" name="name" value="<?php echo "$row[1]"; ?>" required><br />

              <label for="contact"><b>Contact Number</b></label><br>
              <input type="text" placeholder="Contact Number" name="contact" value="<?php echo "$row[2]"; ?>" required><br />

              <label for="Email"><b>Email Address</b></label><br>
              <input type="email" placeholder="Email Address" name="email" value="<?php echo "$row[3]"; ?>" required><br />

              <label for="password"><b>Password</b></label><br>
              <input type="password" placeholder="Password" name="password" value="<?php echo "$row[4]"; ?>" required><br />

              <input type="submit" name="Member_submit" id="Member_submit" value="Update" class="btn-danger"><br>
              <small>**If you want to change your ID, you have to contact with committee members.**</small><br>
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
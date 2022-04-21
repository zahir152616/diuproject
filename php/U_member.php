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
    <title>Members</title>

    <!--Stylesheet Connection-->
    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../css/member.css">

    <script src="../js/time.js"></script>
</head>


<body onload="display_ct()" class="body">
    <!--Time-->
    <div id="ct"></div>

    <button class="btn btn-dark" style="width: max-content; float: right; border-radius: 0;"><?php echo "{$row[1]}" ?> </button>

    <!--Menubar-->
    <div class="contain">
        <div class="navbar">
            <a href="User_Home.php"> <button class="btn-outline-info">Home</button></a>
            <a href="U_member.php"> <button class="btn-outline-danger active">Members</button></a>
            <a href="U_event.php"><button class="btn-outline-success">Events</button></a>
            <a href="U_activity.php"> <button class="btn-outline-info">Our Activities</button></a>
            <a href="U_about.php"><button class="btn-outline-dark">About Us</button></a>
            <a href="U_update.php"><button class="btn-outline-primary">Update Profile</button></a>
            <a href="User_logout.php"><button class="btn-danger">Log Out</button></a>
        </div>
    </div>
    <hr>

    <!--Member Page contains-->
    <div class="member_body">

        <!--Sub menubar for member page-->
        <div class="sub_menu" id="sub_menu">
            <a href="#recruitment" class="btn sub_menu_button">Member's
                Rules</a>
            <a href="#benefits" class="btn sub_menu_button">Club Benefits</a>
            <a href="#Committee_Member_list" class="btn sub_menu_button">Committee
                Members</a>
            <a href="#Member_list" class="btn sub_menu_button">Club Members</a>
        </div>
        <hr>

        <!--Recruitment-->
        <div id="recruitment">
            <a href="#sub_menu">
                <h2 class="topic">Member's Rules</h2>
            </a>
            <br>
            <div class="description">
                <h4>There are some rules. We must have to follow all the
                    rules to join this club. Otherwise you can't join this
                    club. </h4>
                <br>
                <!--Rules are here-->
                <div class="point-out">
                    <b>Rule-1: </b>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Unde a asperiores suscipit
                        similique blanditiis labore eveniet quos quidem
                        quam! Esse ea quia et. Voluptate voluptas ipsa est,
                        maiores expedita nostrum!</p>

                    <b>Rule-2: </b>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Vel eligendi iusto aspernatur
                        explicabo nemo dolore magni. Quidem quis, deleniti
                        dolores corrupti harum quasi aperiam maxime
                        obcaecati cumque iure qui sequi?</p>

                    <b>Rule-3: </b>
                    <p>Lorem ipsum, dolor sit amet
                        consectetur adipisicing elit. Sequi eaque voluptas
                        aperiam, officia fugiat ut quia mollitia unde omnis
                        natus veritatis dolores suscipit nobis, modi harum
                        deleniti, eveniet nihil autem.</p>

                    <b>Rule-4: </b>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Voluptatibus sequi, perferendis
                        aliquam quam tenetur neque autem omnis laudantium
                        eum dolor voluptate commodi? Illo velit saepe
                        doloremque magni reiciendis aliquid consectetur.</p>
                    <b>Rule-5: </b>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Error amet, ea placeat, soluta aut
                        quas perferendis vitae in facilis aperiam quod saepe
                        eaque cum obcaecati! Voluptates facilis deserunt sed
                        iste?</p>

                    <b>Rule-6: </b>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Explicabo, non. Velit nihil
                        ducimus eum rem, quis quo reiciendis consequatur
                        mollitia, doloribus voluptatum eveniet. Reiciendis
                        cum commodi sit hic atque eveniet.</p>

                    <b>Rule-7: </b>
                    <p>Lorem ipsum dolor sit amet
                        consectetur, adipisicing elit. Explicabo molestias,
                        alias libero nisi numquam repellendus quae nemo
                        dolorum? Itaque, fugit. Dolorem, exercitationem
                        dolorum rerum neque veritatis blanditiis porro
                        ducimus? Quasi.</p>
                </div>
            </div>
        </div>
        <hr>

        <!--Benefits-->
        <div id="benefits">
            <a href="#sub_menu">
                <h2 class="topic">Club Benefits</h2>
            </a>
            <br>
            <div class="description">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Reiciendis explicabo molestias omnis tempora facere eum
                    accusantium dignissimos ipsam debitis minima!</h4>

                <div class="point-out">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Doloremque sapiente consequuntur illo, dolorum ipsam
                        placeat itaque, rem obcaecati ipsa nemo illum
                        perferendis excepturi, saepe quod? Tempora, veniam?
                        Aspernatur, voluptatem minus?</p>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Natus voluptatum cum eligendi nemo error quos
                        laborum
                        distinctio quas, odio, deleniti explicabo labore
                        praesentium. Adipisci iste id repudiandae veritatis
                        optio tenetur.</p>

                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit.
                        A non consectetur architecto sit nostrum est,
                        aspernatur
                        molestias nobis animi, eveniet molestiae vero
                        nesciunt
                        optio eum deserunt magni praesentium. Unde,
                        architecto.</p>
                </div>
            </div>

        </div>
        <hr>

        <!--Committee Member List-->
        <a href="#sub_menu" id="Committee_Member_list">
            <h2 class="topic">Committee Members</h2>
        </a>
        <br>
        <div id="Committee_Member">
            <!--Advisor Panel-->
            <div class="advisor">
                <h3>Advisor Panel of this Club</h3>

                <div style="margin: 1.5% 2.5% 1.5% 2.5%; overflow: hidden;">
                    <div style="width: 40%; float: left;">
                        <img src="../image/ishak.jpg" alt="advisor">
                    </div>
                    <div style="width: 40%; float: left;">
                        <h1 style="margin-top:20%">Md. Ishak Miazi</h1>
                        <caption>
                            Deputy Registrar, <br> 
                            Daffodil International Unversity, <br>
                            Ashulia Campus </caption>
                    </div>
                </div>

                <div style="margin: 1.5% 2.5% 1.5% 2.5%; overflow: hidden;">
                    <div style="width: 40%; float: left;">
                        <h1 style="margin-top:20%">Mr. Kazi Md. Diljeb Kabir</h1>
                        <caption>
                            Senior Assistant Director, <br>
                            Daffodil International Unversity, <br>
                            Ashulia Campus<br>
                            Cell: 01713493104 <br>
                            Email: diljeb@daffodilvarsity.edu.bd <br>
                        </caption>
                    </div>
                    <div style="width: 40%; float: left;">
                        <img src="../image/diljeb.jpg" alt="advisor" width="100%">
                    </div>
                </div>

                <div style="margin: 1.5% 2.5% 1.5% 2.5%; overflow: hidden;">

                    <div style="width: 40%; float: left;">
                        <img src="../image/motiur.jpg" alt="advisor" width="100%">
                    </div>
                    <div style="width: 40%; float: left;">
                        <h1 style="margin-top:20%">Mr. S A M Matiur Rahman</h1>
                        <caption>
                            Associate Professor and Associate Head, <br>
                            Department of Software Engineering <br>
                            Daffodil International Unversity, <br>
                            Ashulia Campus<br>
                            Cell: +8801764619998 <br>
                            Email: matiur.swe@diu.edu.bd <br>
                        </caption>
                    </div>
                </div>
            </div>


            <!--Conevener-->
            <div class="convener">
                <h3>Convener of this Club</h3>

                <div style="margin: 1.5% 2.5% 1.5% 2.5%; overflow: hidden;">
                    <div style="width: 40%; float: left;">
                        <h1 style="margin-top:20%">Md. Manik Parvez</h1>
                        <caption>
                            Lecturer , <br>
                            Department of Textile Engineering <br>
                            Daffodil International Unversity, <br>
                            Ashulia Campus<br>
                            Cell: +8801753967316 <br>
                            Email: parvez.te@diu.edu.bd <br>
                        </caption>
                    </div>
                    <div style="width: 40%; float: left;">
                        <img src="../image/manik.jpg" alt="advisor" width="100%">
                    </div>
                </div>
            </div>

            <div class="Member_list">
                <h3>Other Committee Members List</h3>
                <table border="1">
                    <tr>
                        <td><b>Name</b></td>
                        <td><b>Position</b></td>
                        <td><b>Email</b></td>
                        <td><b>Contact</b></td>
                    </tr>
                    <tr>
                        <td>Mahfuzur Rahman Mehedi</td>
                        <td>Founder President</td>
                        <td>---</td>
                        <td>---</td>
                    </tr>
                    <tr>
                        <td>Abu Kawser Tony</td>
                        <td>Founder General Secretary</td>
                        <td>---</td>
                        <td>---</td>
                    </tr>
                    <tr>
                        <td>Md Amzad Hossen</td>
                        <td>President</td>
                        <td>---</td>
                        <td>---</td>
                    </tr>
                    <tr>
                        <td>Monalisa</td>
                        <td>General Secretary</td>
                        <td>---</td>
                        <td>---</td>
                    </tr>
                </table>
            </div>
        </div>
        <hr>

        <!--Member List and student ID-->
        <div id="Member_list">
            <a href="#sub_menu">
                <h2 class="topic">Club Members</h2>
            </a>
            <br>
            <div class="Member_list table">
                <table border="1">
                    <tr>
                        <th><b>Name</b></th>
                        <th><b>Student ID</b></th>
                    </tr>

                    <!--Database connection-->
                    <?php
                    require("config.php");

                    $sql = mysqli_connect($host, $user, $pass, $db);

                    $query = "select name, id from registration";
                    $result = mysqli_query($sql, $query);
                    $x = 1;

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>" .

                                "<td>$row[0]</td>" .
                                "<td>$row[1]</td>" .

                                "</tr>";
                            $x++;
                        }
                    } else
                        echo "<font color=white size=5  align=left><br>Oops!! There is no member at this time Thanks!<br></font>";
                    ?>
                </table>
            </div>

        </div>

    </div>
    <hr>

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
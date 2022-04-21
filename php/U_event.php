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
    <title>Events</title>

    <!--stylesheet link up-->
    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../css/events.css">

    <!--for time-->
    <script src="../js/time.js"></script>

    <!--jquery for tabs-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!--others-->
    <script src="../js/events.js"></script>

</head>

<body onload="display_ct()" class="body">
    <div id="ct"></div>

    <button class="btn btn-dark" style="width: max-content; float: right; border-radius: 0;"><?php echo "{$row[1]}" ?> </button>

    <div class="contain">
        <div class="navbar">
            <a href="User_Home.php"> <button class="btn-outline-info">Home</button></a>
            <a href="U_member.php"> <button class="btn-outline-danger">Members</button></a>
            <a href="U_event.php"><button class="btn-outline-success
                        active">Events</button></a>
            <a href="U_activity.php"> <button class="btn-outline-info">Our
                    Activities</button></a>
            <a href="U_about.php"><button class="btn-outline-dark">About Us</button></a>
            <a href="U_update.php"><button class="btn-outline-primary">Update
                    Profile</button></a>
            <a href="User_logout.php"><button class="btn-danger">Log Out</button></a>
        </div>
    </div>
    <hr>

    <!--Some events is here-->
    <div class="events" id="tabs">

        <ul>
            <li><a href="#tabs-1">Upcoming Events</a></li>
            <li><a href="#tabs-2">Current Events</a></li>
            <li><a href="#tabs-3">Facebook Events</a></li>
        </ul>

        <!--upcoming events count down-->
        <div class="upcoming" id="tabs-1">
            <div>
                <div class="timer">
                    <script src="https://cdn.logwork.com/widget/countdown.js"></script>
                    <a href="https://logwork.com/countdown-2ewk" class="countdown-timer" data-style="columns" data-timezone="Europe/London" data-date="2020-12-20 08:53">শীত বস্ত্র বিতরণ কর্মসুচি</a>
                </div>
                <div class="details">
                    <p>
                        করোণার এই মহামারী সময়ে,আমাদের আশেপাশে অনেকে শীতের কাপড়ের অভাবে অনেক কষ্টে আছেন।
                        <br>
                        তবে চলুন নাহ,আমরা সবাই তাদের দিকে একটু সাহায্যের হাত বাড়িয়ে দিই ।
                        <br>
                        আমরা ক্লাবের পক্ষ থেকে শীতার্ত
                        <br>
                        যারা আমাদের কাজে শরীক হতে চাচ্ছেন তারা নিজের ফর্ম টি পূরণ করতে পারেন এবং আমাদের ক্লাবের অফিসে
                        আপনার পোশাক পাঠিয়ে দিতে পারেন।
                        <br>
                        সাবমিশন লিংক : <a href="https://forms.gle/WA8haqWMQyYjUVig7">https://forms.gle/WA8haqWMQyYjUVig7</a>
                        <br>
                        সময় : 20/12/2020
                    </p>
                </div>
            </div>

        </div>

        <!--Running Events-->
        <div class="current" id="tabs-2">
            <h1 style="text-align: center;text-decoration: underline;">আঁকবে তুমি , লিখবে বেশ! সচেতন হবে বাংলাদেশ</h1>
            <br>
            <div class="details">
                <p>
                    করোণার এই মহামারী সময়ে,আমরা বাসায় সৃজনশীল অনেক কাজ করছি যার মাধ্যমে নিজের সুপ্ত প্রতিভার বিকাশ
                    ঘটতেছে।
                    <br>
                    তবে চলুন নাহ,নিজের সৃজনশীল প্রতিভাগুলোকে ,একটা প্রতিযোগিতার মাধ্যমে সকলের সামনে তুলে ধরি।
                    <br>
                    হ্যাঁ!
                    <br>
                    আপনাদের এই সৃষ্টিশীল প্রতিভার যথার্থ মূল্যায়ন করতে,ভলান্টারী সার্ভিস ক্লাব পার্মানেন্ট ক্যাম্পাস
                    আয়োজন করতে যাচ্ছে সুন্দর একটি ইভেন্ট।
                    <br>
                    যার নাম :
                    <br>
                    " আঁকবে তুমি, লিখবে বেশ!! সচেতন হবে বাংলাদেশ "
                    <br>
                    বিষয় বস্তু : মহামারি করোণা এবং সমসাময়িক অবস্থা।
                    <br>
                    প্রতিযোগিতা তিনটি ধাপে ভাগ করা হয়েছে :
                    <br>
                    ১. Graphic Design.
                    <br>
                    ২. Hand Drawing/Craft Design.
                    <br>
                    ৩. Content Creator/Poem.
                    <br>
                    জুড়িবোড কর্তৃক বাছাইকৃত তিন ক্যাটাগরিতে প্রথম ৩জনকে বিজয়ী হিসেব ঘোষণা করা হবে এবং ভাসির্টি
                    খোলার পর আনুষ্ঠানীকতার মাধ্যমে বিজয়ীদের হাতে ক্লাবের পক্ষ থেকে উপহার তুলে দেওয়া হবে।
                    <br>
                    তবে আর দেরি কেন!
                    <br>
                    এখনি লেগে পড়ুন নিজের সৃষ্টিশীল প্রতিভা গুলোকে সবার সামনে উন্মোচন করতে এবং যথার্থ তথ্য দিয়ে
                    সাবমিট করুন নিচের লিংকে।
                    <br>
                    সাবমিশন লিংক : <a href="#">https://forms.gle/WA8haqWMQyYjUVig7</a>
                    <br>
                    সাবমিশনের শেষ সময় : 8/12/2020
                </p>
            </div>
        </div>

        <!--Facebook events link-->
        <div class="facebook" id="tabs-3">
            <h2>ছবি গল্প বলে</h2><br>
            <img src="../image/fb-events-1.jpg" alt="ছবি গল্প বলে"><br>
            <a href="https://www.facebook.com/events/297473984759993/" target="_blank"><button class="btn btn-info">Details</button></a>
            <hr>

            <h2> DIU Vsc চড়ুইভাতি</h2><br>
            <img src="../image/fb-event-2.jpg" alt="DIU Vsc চড়ুইভাতি"><br>
            <a href="https://www.facebook.com/events/496109607873127/" target="_blank"><button class="btn btn-info">Details</button></a>
            <hr>

            <h2>নববর্ষের আনন্দে,নতুন দিনের প্রত্যয়ে</h2><br>
            <img src="../image/fb-event-3.jpg" alt="নববর্ষের আনন্দে,নতুন দিনের প্রত্যয়ে"><br>
            <a href="https://www.facebook.com/events/1996494200659966/" target="_blank"><button class="btn btn-info">Details</button></a>
            <hr>
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
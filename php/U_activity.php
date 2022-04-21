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
    <title>Club Activities</title>

    <!--Title logo-->
    <link rel="shortcut icon" href="../image/club_logo.png" type="image/x-icon">
    <!--Stylesheet connection-->
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../css/activity.css">

    <!--Time -->
    <script src="../js/time.js"></script>

    <!--Slider style-->
    <link rel="stylesheet" href="../css/slider.css">

</head>

<body onload="display_ct()" class="body">
    <div id="ct"></div>

    <div class="contain">
        <div class="navbar">
            <a href="User_Home.php"> <button class="btn-outline-info">Home</button></a>
            <a href="U_member.php"> <button class="btn-outline-danger">Members</button></a>
            <a href="U_event.php"><button class="btn-outline-success">Events</button></a>
            <a href="U_activity.php"> <button class="btn-outline-info  active">Our Activities</button></a>
            <a href="U_about.php"><button class="btn-outline-dark">About Us</button></a>
            <a href="U_update.php"><button class="btn-outline-primary">Update Profile</button></a>
            <a href="User_logout.php"><button class="btn-danger">Log Out</button></a>
        </div>
    </div>
    <hr>

    <!--Some work flow in this club-->
    <div class="activity">
        <section>

            <div class="video">
                <video width="500vw" height="286vh" controls autoplay muted loop>
                    <source src="../video/ac_v1.mp4">
                </video>
            </div>
            <br>

            <details class="photos">
                <summary>Our Photo Gallery</summary>
                <div>
                    <br>
                    <img src="../image/ac1.jpg" alt="">
                    <img src="../image/ac2.jpg" alt="">
                    <img src="../image/ac3.jpg" alt="">
                    <img src="../image/ac4.jpg" alt="">
                    <img src="../image/ac8.jpg" alt="">
                    <img src="../image/ac9.jpg" alt="">
                    <img src="../image/ac10.jpg" alt="">
                    <img src="../image/ac11.jpg" alt="">
                </div>
            </details>

            <details>
                <summary>Free blood Group Checking Campaign</summary>
                <div>
                    <img src="../image/ac0.jpg" />
                    <p><br>
                        <b>This event is organized by VOLUNTARY SERVICE CLUB (DIU-PC)</b>
                        <br>
                        In overall cooperation : Office Of The Director Of Students' Affairs
                        <br>
                        Event Time : 9.30-2.00 ( 26/03/19)
                        <br>
                        Venue - In front of (AB-01)
                        <br>
                        *Only DIU students can participate in this event *
                        <br>
                        আলহামদুলিল্লাহ্!!
                        ভলেন্টিয়ার সার্ভিস ক্লাবের উদ্যোগে, স্বাধীনতা দিবস উপলক্ষ্যে আগামী ২৬-০৩-১৯ রোজ মঙ্গলবার
                        বিনামূল্যে রক্ত পরীক্ষার মহৎ কর্মসূচী গ্রহণ করা হয়েছে।
                        <br>
                        রক্ত পরীক্ষা শুধুই অপরের জন্য তা নয়। এটা প্রথমে নিজের জন্য পরে অপরের জন্য।
                        <br>
                        রক্তের গ্রুপ জানা প্রথমত নিজের জন্য আবশ্যক এবং নিজের রক্তের গ্রুপ সম্পর্কে অবহিত থাকার কারণে
                        আপনি যে কোন সময় জরুরী প্রয়োজনে অন্যের জীবন বাচাঁতে মুখ্য ভূমিকা পালন করার মত মহৎ কাজে সামিল হতে
                        পারবেন |
                        <br>
                        আপনার রক্ত হোক মানবতার হাতিয়ার।
                        রক্তে গড়ে উঠুক অলিখিত সম্পর্ক।
                        আপনি হোন মানবতার উদাহরণ।
                        সবার উপরে মানুষ সত্য কথাটার যথার্থতা দেখাতে এগিয়ে আসুন মানবতার কল্যাণে। রক্তে বয়ে যাক ভালোবাসার
                        স্রোত।
                        <br>
                        ইভেন্টটি সুন্দর ও সাফল্যমন্ডিত করার জন্য সকলের অংশগ্রহণ ও সার্বিক সহযোগিতা কামনা করছি।
                        <br>
                        ধন্যবাদ<br></p>
                </div>
            </details>

            <details>
                <summary>Ribbon Cleaning Festival</summary>
                <div>
                    <img src="../image/ac01.jpg" />
                    <p>
                        <b>Booths</b><br>
                        1. In Front Of Main Gate <br>
                        2. In Front Of AB-04 <br>
                        3. In Front Of AB-01 <br>
                        Time : 11.30 - 2.00
                        <br>
                        *During this Event, All the members of DIU will be requested
                        to clean their ID Ribbons*
                        <br>
                        "cleanliness is next to godliness" এই স্লোগানের প্রতি শ্রদ্ধা প্রদর্শন করে DIUVSC-PC তার বিভিন্ন
                        উন্নয়নমূলক ও সচেতনতামূলক কার্মকান্ডের ধারা অব্যাহত রেখে আগামী মঙ্গলবার(০২-০৪-১৯) আইডি কার্ডের
                        রিবন পরিষ্কার ও পরিচ্ছন্ন রাখার প্রতি সচেতনতা বৃদ্ধি করার লক্ষ্যে "Ribbon Cleaning Festival"
                        নামক একটি বিশেষ ইভেন্টের আয়োজন করতে যাচ্ছে।
                        অবহেলা/অযত্নের কারণে প্রায়ই আমাদের আইডি কার্ডের রিবন অপরিচ্ছন্ন/নোংরা হয়ে যায়,যা আমাদের প্রতি
                        নেগেটিভ দৃষ্টিভঙ্গি সৃষ্টি করে।
                        একটি আইডি কার্ড ও রিবন শুধু নিজের পরিচয়কে বহন করে না,এর মাধ্যমে একটি ভার্সিটির বাহ্যিক বৈশিষ্ট্য
                        ও সৌন্দর্য প্রকাশ পায়।
                        তাই ভার্সিটির শিক্ষার্থী এবং ভার্সিটির সাথে সম্পৃক্ত সকল সদস্যের মধ্যে রিবন পরিস্কার পরিচ্ছন্ন
                        রাখার অভ্যাস ও সচেতনতা বৃদ্ধির উদ্দ্যেশে আমাদের এই বিশেষ উদ্দ্যোগ।
                        আমরা আশা করি, আমাদের এই বিশেষ উদ্দ্যোগ ভবিষ্যতে আইডি কার্ডের রিবন পরিস্কার-পরিচ্ছন্ন রাখার জন্য
                        সূদুর প্রসারী ভূমিকা পালন করবে।
                        ইভেন্টটি সুন্দর ও সাফল্যমন্ডিত করার জন্য সকলের অংশগ্রহণ ও সার্বিক সহযোগিতা কামনা করছি।
                        <br>
                        ধন্যবাদ।
                    </p>
                </div>
            </details>

            <details>
                <summary>আগামীর পথে,পরিচ্ছন্নতার সাথে</summary>
                <div>
                    <img src="../image/ac02.jpg" />
                    <p>
                        <br><br>
                        Place : Younus Khan Scholar's Garden To Khagan Bazar
                        <br>
                        Time : 9.00 - 12.00
                        <br>
                        *Only Diu Students Can Participate This Event *
                        <br>
                        ভলেন্টিয়ার সার্ভিস ক্লাবের( DIU VSC-pc) পক্ষ হতে, ক্যাম্পাসের চারপাশকে পরিস্কার-পরিচ্ছন্ন করার
                        উদ্যেশে একটি বিশেষ কর্মসূচি গ্রহণ করা হয়েছে।
                        সকলকে স্ব স্ব অবস্থান থেকে নিজ দ্বায়িত্বে অংশগ্রহণ করে, ইভেন্টি সুন্দর ও সাফল্যমন্ডিত করার জন্য
                        আহব্বান করা হচ্ছে।
                        সকলের একান্ত সহযোগিতা ও স্বতস্ফূর্ত অংশগ্রহণ কামনা করি
                        <br>
                        ধন্যবাদ</p>
                </div>
            </details>
        </section>
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
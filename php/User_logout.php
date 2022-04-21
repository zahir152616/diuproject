<?php
    session_start();
    unset($_SESSION["id"]);
    header("location: User_Login.php");
?>
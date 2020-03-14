<?php
// include_once "./functions.php";
ob_start();        // output buffer start
session_start();  //session start

date_default_timezone_set('Asia/Kolkata');
$profilerootpath = '../include/profile/';
$con = mysqli_connect("localhost", "root", "Admin@876", "bsh");
//$con = mysqli_connect("localhost", "root", "","bahekar");
// dd($con);

if (mysqli_connect_errno()) {
    echo "failed to connect" . mysqli_connect_errno();
}
?>

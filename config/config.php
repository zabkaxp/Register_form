<?php
ob_start();//for hosting online

$timezone = date_default_timezone_set("Europe/London");

session_start();

$con = mysqli_connect("localhost", "root", "", "social"); //connection variable

if(mysqli_connect_errno()){
    echo "failed to connect:" . mysqli_connect_errno();
}?>
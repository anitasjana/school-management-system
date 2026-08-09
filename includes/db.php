<?php
$con=mysqli_connect("localhost","root","","employee_managment");
if(!$con){
    die("databash connection failed :" . mysqli_connect_error());
}
?>
<?php
$con=mysqli_connect("localhost","root","","employee_managment");
$a=$_POST["name"];
$b=$_POST["s_date"];
$c=$_POST["e_date"];
$d=$_POST["sub"];
$e=$_POST["reason"];
$data="insert into leave_approve(name,start_date,last_date,subject,reason,status) values('$a','$b','$c','$d','$e','0')";
mysqli_query($con,$data);
header("location:leave_table.php");
?>

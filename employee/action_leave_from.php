<?php
$con=mysqli_connect("localhost","root","","employee_managment");
$name=$_POST["name"];
$s_date=$_POST["s_date"];
$e_date=$_POST["e_date"];
$sub=$_POST["sub"];
$reason=$_POST["reason"];
$data="insert into leave_approve(name,start_date,last_date,subject,reason,status) values('$name','$s_date','$e_date','$sub','$reason','0')";
mysqli_query($con,$data);
header("location:leave_table.php");
?>

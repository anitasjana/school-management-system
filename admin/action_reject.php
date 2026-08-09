<?php
include("../includes/db.php");
$a=$_GET["id"];
$sql="update leave_approve set status='2' where id='$a'";
mysqli_query($con ,$sql);
header("location:leave_table.php");
?>
<?php
include("../includes/db.php");

$a=$_GET["id"];

$sql="UPDATE leave_approve SET status='1' WHERE id='$a'";
mysqli_query($con,$sql);

header("location:approve.php");
exit();
?>
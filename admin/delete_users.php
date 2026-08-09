<?php
include("../includes/db.php");
$id=$_GET["id"];
$sql="delete from users where id='$id' ";
mysqli_query($con,$sql);
header("location:users.php");
?>
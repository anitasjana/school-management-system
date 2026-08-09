<?php
include("../includes/db.php");
$n=$_POST["name"];
$e=$_POST["email"];
$p=$_POST["password"];
$q=$_FILES["img"]["name"];
move_uploaded_file($_FILES["img"]["tmp_name"],"../uploads/".$q);
 $sql="INSERT INTO users (name,email,password,image,type) VALUES ('$n','$e','$p','$q','2')";
 mysqli_query($con,$sql);
 header("location:users.php");
?>
<?php
include("../includes/db.php");
$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['email'];
$d=$_POST['password'];
$e=$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],"/employee_managment/uploads/".$e);
$sql="update users set id='$a',name='$b' ,email='$c',password='$d',image='$e' where id='$a'";
mysqli_query($con,$sql);
header("location:users.php");
?>
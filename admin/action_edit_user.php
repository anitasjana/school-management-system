<?php
include("../includes/db.php");

$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['email'];
$d=$_POST['password'];

if($_FILES['img']['error']==0){
    $e=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../uploads/".$e);

    $sql="UPDATE users SET name='$b',email='$c',password='$d',image='$e' WHERE id='$a'";
}else{
    $sql="UPDATE users SET name='$b',email='$c',password='$d' WHERE id='$a'";
}

mysqli_query($con,$sql);
header("location:users.php");
exit();
?>
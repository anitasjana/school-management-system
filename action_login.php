<?php
include("includes/db.php");
session_start();

$e=$_POST["email"];
$p=$_POST["password"];
$sql="select * from users where email= '$e' AND password= '$p'";
$r=mysqli_query($con,$sql);
$c=mysqli_num_rows($r);
// $p=$_POST["password"];
// $sql1="select * from users where password= '$p' ";
// $rp=mysqli_query($con,$sql1);
// $cp=mysqli_num_rows($rp);
$v=mysqli_fetch_assoc($r);
if($c>0){
     if($v['type']==1){

$_SESSION["user_id"] = $v["id"];
$_SESSION["name"] = $v["name"];
$_SESSION["image"] = $v["image"];
$_SESSION["type"] = $v["type"];

        header("location:/employee_managment/admin/dashboard.php");   
    }
    else{
        $_SESSION["name"]=$v["name"];
        $_SESSION["image"]=$v["image"];
        header("location:/employee_managment/employee/dashboard.php");
    }
    }
else { 
    echo "incorect email";
     
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/admin/chat_view.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
    session_start();
$con=mysqli_connect("localhost","root","","employee_managment");
$conect="SELECT COUNT(id)FROM users";
$data=mysqli_query($con,$conect);
$row=mysqli_fetch_assoc($data);
?>
    <div class="leftslide" id="leftslide">
        <div class="leftslidetop">
        <div class="leftslidimg">
        <img src="/employee_managment/uploads/admmin.png" ></div>
        <h2 class="leftslideadmin" id="leftslideadmin">Admin</h2>
        </div>
        <div class="leftslidebutton">
              <ul class="leftslidediv">
        <i class="fa-solid fa-table-columns"></i></li>
        <li class="leftslide_div_text">Dashboard</li>
            </ul>
           <ul class="leftslidediv"> <a href="users.php">
        <i class="fa-solid fa-users"></i></li>
        <a href="leave_table.php"><li class="leftslide_div_text">leave Request</li></a>
            </ul>
              <ul class="leftslidediv">
        <i class="fa-solid fa-table-columns"></i></li>
        <li class="leftslide_div_text">Chat</li>
            </ul>
        </div>
    </div>
    <div class="topslide" id="topslide">
        <div class="topslide_search">
            <div class="topslideicon" onclick="fun()">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>Search
            </div>
        </div>
        <div class="topslide_dis">
            <div class="topslide_dis_icon">
                <i class="fa-solid fa-bell"></i>
            </div>
            <div class="topslide_dis_image">
                <img src="/employee_managment/uploads/<?php echo $_SESSION["image"]; ?>">
            </div>
            <div class="topslide_dis_text"><?php echo $_SESSION["name"]; ?></div>
        </div>
    </div>
<div class="bodyslide">
    <div class="chat_veiw_main">

 <div class="chat_display_first">
     <div class="chat_veiw_display">
        <div class="chat_veiw_name">
            <div class="chat_veiw_name_image">
                        <?php
    $con=mysqli_connect("localhost","root","","employee_managment");
    $id=$_GET["idd"];
    $sql="select * from users where id='$id'";
    $data=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($data);
        ?>
                <img src="/employee_managment/uploads/<?php echo $row["image"];?>">
            </div>
            <div class="chat_veiw_name_name"><?php echo $row["name"];?></div>  
        </div>
        
        <div class="chat_veiw_icon">
            <i class="fa-solid fa-video"></i>
            <i class="fa-solid fa-phone"></i>
            <i class="fa-solid fa-ellipsis-vertical"></i>
        </div>    
        </div>
           <div class="chat_veiw_down_display">
            <div class="chat_veiw_sharch"><input type="text" id="input_js" placeholder="Message">
            <i class="fa-solid fa-file"></i>
            <i class="fa-solid fa-indian-rupee-sign"></i>
            <i class="fa-solid fa-camera"></i></div>
            <div class="chat_veiw_down_color" onclick="funn()">
                <i class="fa-solid fa-microphone"></i>
            </div>
            </div>
     </div>
    </div>
    <?php
    $con=mysqli_connect("localhost","root","","employee_managment");
    $sql="select * from users where type='2'";
    $data=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($data)){
        ?>
    <div class="chat_box">
        <div class="chat_box_box">
           <a href="chat_veiw.php ? idd=<?php echo $row["id"];?>"><div class="chat_box_user">
                <div class="char_box_user_image">
                    <img src="/employee_managment/uploads/<?php echo $row["image"];?>">
                </div>
                <div class="char_box_user_name"><?php echo $row["name"];?></div>
            </div>
    </a>
        </div>
    </div>
     <?php
     }
     ?>
     </div>
</body>
    <script>
        var c=2;
    function fun(){
        if(c%2==0){
document.getElementById("leftslide").style.width="5%";
document.getElementById("leftslideadmin").style.display="none";
document.getElementById("topslide").style.width="93.1%";
document.getElementById("bodyslide").style.width="94%";
document.getElementById("leftslide").style.transition="0.5s";
document.getElementById("bodyslide").style.transition="0.5s";
document.getElementById("topslide").style.transition="0.5s";
c++;
}
  else{
document.getElementById("leftslide").style.width="19%";
document.getElementById("leftslideadmin").style.display="block";
document.getElementById("topslide").style.width="79.1%";
document.getElementById("bodyslide").style.width="80%";
c++
 }
}
function funn(){
    b=document.getElementById("input_js").style.;
}
    </script>
</html>
</body>
</html>
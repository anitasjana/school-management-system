<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/employee/dashboard.css">
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
        <img src="../../assets/images/employee/thr-removebg-preview(1).png" alt=""></div>
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
        <i class="fa-solid fa-users"></i>
        <a href="/employee_managment/admin/chat/chat.php"><li class="leftslide_div_text">ChatBox </li></a>
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
     <div class="bodyslide" id="bodyslide">
        <div class="box" id="">
            <div class="boxup">
               <div class="boxup_text">TODAY ORDERS</div>
               <div class="boxup_bold">
                <?php echo $row['COUNT(id)']; ?>
               </div>
               <div class="boxup_stext">compared to last week</div></div>
               <div class="div_display">
                <div class="div_display_icon"><i class="fa-solid fa-arrow-down"></i>
               </div>+427</div>
        </div>
        <div class="box box_green" id=""><div class="boxup">
               <div class="boxup_text">TODAY EARNINGS</div>
               <div class="boxup_bold">$9,45.66</div>
               <div class="boxup_stext">compared to last week</div></div>
               <div class="div_display">
                <div class="div_display_icon"><i class="fa-solid fa-arrow-down"></i>
               </div>+427</div>
            </div>
        <div class="box box_red" id=""><div class="boxup">
               <div class="boxup_text">TODAY EARNINGES</div>
               <div class="boxup_bold">$7,84.7</div>
               <div class="boxup_stext">compared to last week</div></div>
               <div class="div_display">
                <div class="div_display_icon"><i class="fa-solid fa-arrow-down"></i>
               </div>+427</div>
            </div>
        <div class="box box_orange" id=""><div class="boxup">
               <div class="boxup_text">PRODUCT SOLD</div>
               <div class="boxup_bold">$4,85.20</div>
               <div class="boxup_stext">compared to last week</div></div>
               <div class="div_display">
                <div class="div_display_icon"><i class="fa-solid fa-arrow-down"></i>
               </div>+427</div>
            </div>

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
    </script>
</html>
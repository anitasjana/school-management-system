<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/employee/leave_from.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="leftslide" id="leftslide">
        <div class="leftslidetop">
        <div class="leftslidimg">
        <img src="../../assets/images/employee/thr-removebg-preview(1).png" alt=""></div>
        <h2 class="leftslideadmin" id="leftslideadmin">Employee</h2>
        </div>
        <div class="leftslidebutton">
              <ul class="leftslidediv">
        <i class="fa-solid fa-table-columns"></i></li>
        <li class="leftslide_div_text">Dashboard</li>
            </ul>
         <ul class="leftslidediv">
            <li class="leftslid_div_icon">
        <i class="fa-solid fa-bars-progress"></i></li>
        <li class="leftslide_div_text">leave Application</li>
        </ul>
         <ul class="leftslidediv">
            <li class="leftslid_div_icon">
        <i class="fa-solid fa-user"></i></i></li>
        <li class="leftslide_div_text">User</li>
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
                <img src="girl.jpg" alt="">
            </div>
            <div class="topslide_dis_text">Anita Jana</div>
        </div>
    </div>
    <div class="bodyslide" id="bodyslide">
        <form action="action_leave_from.php" method="POST">
        <div class="main">
            <h3 class="fillup_from">Fill-Up Your From</h3>
            <div class="fillup_input">
                <span class="fillup_input_name">Name :</span>
                <input type="text" placeholder="Enter Your Name" name="name">
            </div>
            <div class="fillup_input">
                <span class="fillup_input_name">Start Date :</span>
                <input type="date" placeholder="Start date" name="s_date">
            </div>
             <div class="fillup_input">
                <span class="fillup_input_name">End Date :</span>
                <input type="date" placeholder="End date" name="e_date">
            </div>
             <div class="fillup_input">
                <span class="fillup_input_name">subject :</span>
                <input type="text" placeholder="total day" name="sub">
            </div>
             <div class="fillup_input">
                <span class="fillup_input_name">reason :</span>
                <textarea placeholder="reason" name="reason"></textarea>
                <!-- <textarea="text" placeholder="reason" name="reason"> -->
            </div>

            <a href="leave_table.php">
        <button type="submit" class="button_submit">Submit</button></a>
</form>
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
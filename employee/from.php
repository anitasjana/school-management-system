<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/employee/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="leftslide" id="leftslide">
        <div class="leftslidetop">
        <div class="leftslidimg">
        <img src="/employee_managment/uploads/thr-removebg-preview (1).png" alt=""></div>
        <h2 class="leftslideadmin" id="leftslideadmin">Employee</h2>
        </div>
        <div class="leftslidebutton">
              <ul class="leftslidediv">
        <i class="fa-solid fa-table-columns"></i></li>
        <li class="leftslide_div_text">Dashboard</li>
            </ul>
            <a href="from.php">
           <ul class="leftslidediv"> <a href="leave_from.php">
        <i class="fa-solid fa-users"></i></li>
        <li class="leftslide_div_text">Leave Application</li></a>
            </ul></a>
              <!-- <ul class="leftslidediv">
        <i class="fa-solid fa-table-columns"></i></li>
        <li class="leftslide_div_text">Dashboard</li>
            </ul>
         <ul class="leftslidediv">
            <li class="leftslid_div_icon">
        <i class="fa-solid fa-bars-progress"></i></li>
        <li class="leftslide_div_text">Task</li>
        </ul>
        <ul class="leftslidediv">
            <li class="leftslid_div_icon">
        <i class="fa-solid fa-user"></i></i></li>
        <li class="leftslide_div_text">User</li>
        </ul> -->
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
                <img src="/employee_managment/uploads/girl.jpg" alt="">
            </div>
            <div class="topslide_dis_text">Anita Jana</div>
        </div>
    </div>
    <div class="bodyslide" id="bodyslide">
        <div class="bodyslide_student">Student Management</div>
        <ul class="bodyul">
            <li class="bodyli">Activity
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Gender
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Age
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Region
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Session
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Category
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Class
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Section
            <i class="fa-solid fa-caret-down"></i></li>
            <li class="bodyli_search">Search</li>
            <li class="bodyli_clear">CLEAR ALL</li>
        </ul>
    <div class="body_search_display">
        <div class="body_search">
            <i class="fa-solid fa-magnifying-glass"></i>Search
        </div>
        <div class="body_search_add">
            <div class="body_search_student">Promote Student</div>
            <div class="body_search_student">Download Report</div>
            <a href="addusers.php"><div class="body_search_student_color"><i class="fa-solid fa-plus"></i>
                Add Student</div></a>
        </div>
    </div>
    <table class="maintable">
        <tr class="tabletr1">
            <th class="tableth1">id</th>
            <th class="tableth1">Name</th>
            <th class="tableth1">email</th>
            <th class="tableth1">password</th>
            <th class="tableth1">image</th>
            <th class="tableth1">Edit</th>
            <th class="tableth1">delete</th>
        </tr>
        <?php
        $a=mysqli_connect("localhost","root","","employee_managment");
        $b="select * from users";

        $c=mysqli_query($a,$b);
        $v=1;
        while($row=mysqli_fetch_assoc($c)){
            if($v%2==0){
            ?>
            <tr style="background: #e4ebedb8; box-shadow: 0px 0px 5px 0px rgb(197, 197, 197);">
                <td><?php echo $v;?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["password"];?></td>
                <td><img height="80" width="80" src="../uploads/<?php echo $row["image"];?>"></td>
                <td> <a href="edit_users.php ? id=<?php echo $row["id"];?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td> <a href="delete_users.php ? id=<?php echo $row["id"];?>"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php
                   $v++;   
            }
            else{
                ?>
                <tr style="background-color:rgba(252, 252, 252, 0.72); box-shadow: 0px 0px 5px 0px rgb(197, 197, 197);">
                <td><?php echo $v;?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["password"];?></td>
                <td><img height="80" width="80" src="../uploads/<?php echo $row["image"];?>"></td>
                <td> <a href="edit_users.php ? id=<?php echo $row["id"];?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td> <a href="delete_users.php ? id=<?php echo $row["id"];?>"><i class="fa-solid fa-trash"></i></a></td>
             </tr>
             <?php
             $v++;
            }
            }
            ?>
    </table>
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
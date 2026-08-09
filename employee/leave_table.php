<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/employee/leave_table.css">
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
               <ul class="leftslidediv">
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
                <img src="/employee_managment/uploads/girl.jpg" alt="">
            </div>
            <div class="topslide_dis_text">Anita Jana</div>
        </div>
    </div>
    <div class="bodyslide" id="bodyslide">
        <div class="bodyslide_student">List of Employee</div>
    <div class="body_search_display">
        <div class="body_search">
            <i class="fa-solid fa-magnifying-glass"></i>Search
        </div>
        <!-- <div class="body_search_add">
            <div class="body_search_student pending">Pending Leave</div>
            <div class="body_search_student approve">Approved Leave</div>
            <a href="addusers.php"><div class="body_search_student_color rejected"><i class="fa-solid fa-plus"></i>
                Rejected Leave</div></a>
        </div> -->
    </div>
    <table class="maintable">
        <tr class="tabletr1">
            <th class="tableth1">id</th>
            <th class="tableth1">Name</th>
            <th class="tableth1">Start Date</th>
            <th class="tableth1">End Date</th>
            <th class="tableth1">subject</th>
            <th class="tableth1">Reason</th>
            <th class="tableth1">Status</th>
        </tr>
        <?php
        $a=mysqli_connect("localhost","root","","employee_managment");
        $b="select * from leave_approve";

        $c=mysqli_query($a,$b);
        $v=1;
        while($row=mysqli_fetch_assoc($c)){
            if($v%2==0){
            ?>
            <tr style="background: #e4ebedb8; box-shadow: 0px 0px 5px 0px rgb(197, 197, 197);">
                <td><?php echo $v;?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["start_date"];?></td>
                <td><?php echo $row["last_date"];?></td>
                <td><?php echo $row["subject"];?></td>
                <td><?php echo $row["reason"];?></td>
                <td><?php if($row["status"]==0){
                    echo "pendding";
                                }
                        else if($row["status"]==1){
                                    echo "approved";
                        }
                        else if($row["status"]==2){
                            echo "rejected";
                        }
                        else{
                            echo "";
                        }
                            ?></td> 
            </tr>
            <?php
                   $v++;   
            }
            else{
                ?>
                <tr style="background-color:rgba(252, 252, 252, 0.72); box-shadow: 0px 0px 5px 0px rgb(197, 197, 197);">
                <td><?php echo $v;?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["start_date"];?></td>
                <td><?php echo $row["last_date"];?></td>
                <td><?php echo $row["subject"];?></td>
                <td><?php echo $row["reason"];?></td>
                <td><?php if($row["status"]==0){
                    echo "pendding";
                                }
                        else if($row["status"]==1){
                                    echo "approved";
                        }
                        else if($row["status"]==2){
                            echo "rejected";
                        }
                        else{
                            echo "";
                        }
                            ?>
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
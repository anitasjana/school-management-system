<?php
include("../includes/auth.php");
include("../includes/db.php");
include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/topbar.php");
?>
    <div class="bodyslide" id="bodyslide">
        <div class="bodyslide_table">
        <div class="bodyslide_student">List of Employee</div>
    <div class="body_search_display">
        <div class="body_search">
            <i class="fa-solid fa-magnifying-glass"></i>Search
        </div>
        <div class="body_search_add">
            <!-- <a href="pending.php"><div class="body_search_student pending">Pending Leave <i class="fa-solid fa-spinner"></i></div></a> -->
            <a href="approve.php"><div class="body_search_student approve">Approved Leave <i class="fa-solid fa-thumbs-up"></i></div></a>
            <a href="reject.php"><div class="body_search_student_color rejected">Rejected Leave
                  <i class="fa-solid fa-circle-xmark"></i></div></a>
        </div>
    </div>
    <div class="table">
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
        $b="select * from leave_approve where status='0'";

        $c=mysqli_query($a,$b);
        $v=1;
        while($row=mysqli_fetch_assoc($c)){
          
            if($v%2==0){
            ?>
            <tr style="background: #e4ebedb8; box-shadow: 0px 0px 5px 0px rgb(197, 197, 197);height:36px;font-size: 20px;">
                <td><?php echo $v;?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["start_date"];?></td>
                <td><?php echo $row["last_date"];?></td>
                <td><?php echo $row["subject"];?></td>
                <td><?php echo $row["reason"];?></td>
                <td>
                <a href="action_approve.php ? id=<?php echo $row['id'];?>?"><button class="ss">approve</button> </a>
                <a href="action_reject.php ? id=<?php echo $row['id'];?>?"><button class="ss2">reject</button> </a>
            </td>
            </tr>
            <?php
                   $v++;   
            }
            else{
                ?>
                <tr style="background-color:rgba(252, 252, 252, 0.72); box-shadow: 0px 0px 5px 0px rgb(197, 197, 197);height:36px;font-size: 20px;">
                <td><?php echo $v;?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["start_date"];?></td>
                <td><?php echo $row["last_date"];?></td>
                <td><?php echo $row["subject"];?></td>
                <td><?php echo $row["reason"];?></td>
                 <td>
                <a href="action_approve.php ? id=<?php echo $row['id'];?>?"><button class="ss">approve</button> </a>
                <a href="action_reject.php ? id=<?php echo $row['id'];?>?"><button class="ss2">reject</button> </a>
            </td>
             </tr>
             <?php
             $v++;
            }
            }
            ?>
    </table> 
    </div>
    </div>
    </div>
<script src="../../assets/js/admin/style.js"></script>
<?php
include("../includes/footer.php");
?>
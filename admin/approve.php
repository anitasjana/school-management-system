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
             <a href="pending.php"><div class="body_search_student pending">Pending Leave  <i class="fa-solid fa-spinner"></i></div></a>
           <!-- <a href="approve.php"><div class="body_search_student approve">Approved Leave</div></a> -->
            <a href="reject.php"><div class="body_search_student_color rejected"><i class="fa-solid fa-circle-xmark"></i>
                Rejected Leave</div></a>
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
        $b="select * from leave_approve where status='1'";

        $c=mysqli_query($con,$b);
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
                <td>
                <button class="ss">approve</button> 
            </td>
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
                 <td>
                <button class="ss">approve</button>
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
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../includes/auth.php");
include("../includes/db.php");

$conect="SELECT COUNT(id)FROM users";
$data = mysqli_query($con, $conect);
$row = mysqli_fetch_assoc($data);

include("../includes/header.php");
include("../includes/admin_sidebar.php");
include("../includes/admin_topbar.php")
?>
     <div class="bodyslide" id="bodyslide">
      <div class="dashbord_body">
        <div class="box" id="">
            <div class="boxup">
               <div class="boxup_text">Total Students</div>
               <div class="boxup_bold">
                <?php echo $row['COUNT(id)']; ?>
               </div>
               <div class="boxup_stext">compared to last week</div></div>
               <div class="div_display">
                <div class="div_display_icon"><i class="fa-solid fa-arrow-down"></i>
               </div>+427</div>
        </div>
        <div class="box box_green" id=""><div class="boxup">
               <div class="boxup_text">Total Teachers</div>
               <div class="boxup_bold">$9,45.66</div>
               <div class="boxup_stext">compared to last week</div></div>
               <div class="div_display">
                <div class="div_display_icon"><i class="fa-solid fa-arrow-down"></i>
               </div>+427</div>
            </div>
        <div class="box box_red" id=""><div class="boxup">
               <div class="boxup_text">Total Classes</div>
               <div class="boxup_bold">$7,84.7</div>
               <div class="boxup_stext">compared to last week</div></div>
               <div class="div_display">
                <div class="div_display_icon"><i class="fa-solid fa-arrow-down"></i>
               </div>+427</div>
            </div>
        <div class="box box_orange" id=""><div class="boxup">
               <div class="boxup_text">Today's Attendance</div>
               <div class="boxup_bold">$4,85.20</div>
               <div class="boxup_stext">compared to last week</div></div>
               <div class="div_display">
                <div class="div_display_icon"><i class="fa-solid fa-arrow-down"></i>
               </div>+427</div>
            </div>
      </div>
     </div>
<script src="../assets/js/admin/dashboard.js"></script>
<?php
include("../includes/footer.php");
?>
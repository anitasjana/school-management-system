<?php
include("../includes/auth.php");
include("../includes/db.php");
include("../includes/header.php");
include("../includes/admin_sidebar.php");
include("../includes/admin_topbar.php");
?>
    <div class="bodyslide" id="bodyslide">
        <div class="main">
            <h3 class="fillup_from">Fill-Up Your From</h3>
            <?php 
           $id=$_GET["id"];
           $idd="select * from users where id='$id'";
           $q=mysqli_query($con,$idd);
           $row=mysqli_fetch_assoc($q);
            ?>
            <form action="action_edit_users.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
            <div class="fillup_input">
                <span class="fillup_input_name">Name :</span>
                <input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $row["name"];?>">
            </div>
            <div class="fillup_input">
                <span class="fillup_input_name"> Email Address :</span>
                <input type="email" name="email" placeholder="Email Address" value="<?php echo $row["email"];?>">
            </div>
            <div class="fillup_input">
                <span class="fillup_input_name">Password :</span>
                <input type="password" name="password"  placeholder="Enter Your Gurdian Name" value="<?php echo $row["password"];?>">
            </div>
            <div class="fillup_input">
                <span class="fillup_input_name">image :</span>
                <input type="file"  name="img" value="/employee_managment/uploads/<?php echo $row=["image"]?>">
            </div>
        <button type="submit" class="button_submit">Submit</button>
    </form>
</div>
</div>
<script src="../../assets/js/admin/style.js"></script>
<?php
include("../includes/footer.php");
?>
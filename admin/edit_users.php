<?php
include("../includes/auth.php");
include("../includes/db.php");
include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/topbar.php");
?> 
<div class="bodyslide" id="bodyslide">
    <div class="main">
        <h3 class="fillup_from"><i class="fas fa-pen-fancy"></i> Edit User</h3>
        <!-- dummy data for demo -->
         <?php 
           $id=$_GET["id"];
           $idd="select * from users where id='$id'";
           $q=mysqli_query($con,$idd);
           $row=mysqli_fetch_assoc($q);
            ?>
        <form action="action_edit_users.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="1">
            <div class="fillup_input">
                <span class="fillup_input_name">Name :</span>
                <input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $row["name"];?>">
            </div>
            
            <div class="fillup_input">
                <span class="fillup_input_name">Email :</span>
                <input type="email" name="email" placeholder="Email Address" value="<?php echo $row["email"];?>">
            </div>

            <div class="fillup_input">
                <span class="fillup_input_name">Password :</span>
                <div class="password-wrapper">
                    <input type="password" name="password" id="passwordField" placeholder="Enter password" value="<?php echo $row["password"];?>" >
                    <button type="button" class="toggle-password" onclick="togglePassword()">
                        <i class="fas fa-eye" id="eyeIcon"></i>
                    </button>
                </div>
            </div>

            <div class="fillup_input">
                <span class="fillup_input_name">image :</span>
                <input type="file" name="file" placeholder="Email Address" value="/employee_managment/uploads/<?php echo $row=["image"];?>">
            </div>

            <button type="submit" class="button_submit"><i class="fas fa-save"></i> Update</button>
        </form>
    </div>
</div>
</div>
<script>
        function togglePassword() {
            var field = document.getElementById('passwordField');
            var icon = document.getElementById('eyeIcon');
            
            if (field.type === 'password') {
                field.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                field.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
</script>
<!-- <script src="../../assets/js/admin/style.js"></script> -->
<?php
include("../includes/footer.php");
?>
<?php
include("../includes/auth.php");
include("../includes/db.php");
include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/topbar.php");
?>
    <div class="bodyslide" id="bodyslide">
        <div class="bodyslide_form">
        <div class="main">
            <h3 class="fillup_from">Fill-Up Your From</h3>
            <form action="action_addusers.php" method="POST" enctype="multipart/form-data">
            <div class="fillup_input">
                <span class="fillup_input_name">Name :</span>
                <input type="text" name="name" placeholder="Enter Your Name">
            </div>
            <div class="fillup_input">
                <span class="fillup_input_name"> Email Address :</span>
                <input type="email" name="email" placeholder="Email Address" >
            </div>
            <div class="fillup_input">
                <span class="fillup_input_name">Password :</span>
                <input type="password" name="password"  placeholder="Enter Your Gurdian Name" >
            </div>
            <div class="fillup_input">
                <span class="fillup_input_name">image :</span>
                <input type="file"  name="img">
            </div>
        <button type="submit" class="button_submit">Submit</button>
    </form>
    </div>
</div>
</div>

<?php
include("../includes/footer.php");
?>
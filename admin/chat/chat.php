<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../../includes/auth.php");
include("../../includes/db.php");

$conect="SELECT COUNT(id)FROM users";
$data = mysqli_query($con, $conect);
$row = mysqli_fetch_assoc($data);

include("../../includes/header.php");
include("../../includes/sidebar.php");
include("../../includes/topbar.php")
?>
<div class="bodyslide">
    <div class="chat_main">
        <div class="chat_box">
            <div class="chat_box_search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search employee...">
            </div>
            <div class="chat_box_list">
            <?php
            $con=mysqli_connect("localhost","root","","employee_managment");
            $sql="select * from users where type='2'";
            $data=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($data)){
            ?>
                <a href="chat_veiw.php?idd=<?php echo $row['id'];?>" class="chat_box_box">
                    <div class="chat_box_quser">
                        <div class="char_box_user_image">
                            <img src="/employee_managment/uploads/<?php echo $row['image'];?>">
                        </div>
                        <div class="char_box_user_name"><?php echo $row['name'];?></div>
                    </div>
                </a>
            <?php
            }
            ?>
            </div>
        </div>
    </div>
</div>

<?php include("../../includes/footer.php"); ?>
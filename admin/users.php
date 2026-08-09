<?php
include("../includes/auth.php");
include("../includes/db.php");
include("../includes/header.php");
include("../includes/admin_sidebar.php");
include("../includes/admin_topbar.php");
?>
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
            <th class="tableth1">type</th>
            <th class="tableth1">Edit</th>
            <th class="tableth1">delete</th>
        </tr>
        <?php
        $connection=mysqli_connect("localhost","root","","employee_managment");
        $b="select * from users where type='2'";
        $data=mysqli_query($connection,$b);
        $v=1;
        while($row=mysqli_fetch_assoc($data)){
            if($v%2==0){
            ?>
            <tr style="background: #e4ebedb8; box-shadow: 0px 0px 5px 0px rgb(197, 197, 197);">
                <td><?php echo $v;?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["password"];?></td>
                <td><img height="80" width="80" src="/employee_managment/uploads/<?php echo $row["image"];?>"></td>
                <td><?php echo $row["type"];?></td>
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
                <td><img height="80" width="80" src="/employee_managment/uploads/<?php echo $row["image"];?>"></td>
                <td><?php echo $row["type"];?></td>
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
<?php
include("../includes/footer.php");
?>
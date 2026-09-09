 <?php

include("../includes/config.php");
// include("../includes/db.php");
?>
 
 <div class="leftslide" id="leftslide">
    <div class="leftslidetop">
      <div class="leftslidimg">
        <img src="<?=BASE_URL?>/assets/images/admin/thr-removebg-preview(1).png" alt="admin" onerror="this.style.display='none'">
      </div>
      <h2 class="leftslideadmin"><?= ($_SESSION['role'] ?? '') === 'admin' ? 'Admin' : 'Employee' ?></h2>
    </div>

    <div class="leftslidebutton">
      <!-- Dashboard -->
      <ul class="nav-list">
        <li><a href="<?= BASE_URL ?>/admin/dashboard.php" class="active"><i class="fas fa-table-columns"></i><span>Dashboard</span></a></li>
      </ul>
    
      <!-- Employee -->
      <div class="nav-category"><span class="line"></span><span>Employee</span><span class="line"></span></div>
      <ul class="nav-list">
        <li><a href="<?= BASE_URL ?>/admin/users.php"><i class="fas fa-users"></i><span>All Employees</span></a></li>
        <li><a href="<?= BASE_URL ?>/admin/addusers.php"><i class="fas fa-user-plus"></i><span>Add Employee</span></a></li>
      </ul>

      <!-- Leave -->
      <div class="nav-category"><span class="line"></span><span>Leave</span><span class="line"></span></div>
      <ul class="nav-list">
        <li><a href="<?= BASE_URL ?>/admin/pending.php"><i class="fas fa-clock"></i><span>Pending</span></a></li>
        <li><a href="<?= BASE_URL ?>/admin/approve.php"><i class="fas fa-check-circle"></i><span>Approved</span></a></li>
        <li><a href="<?= BASE_URL ?>/admin/reject.php"><i class="fas fa-times-circle"></i><span>Rejected</span></a></li>
      </ul>

      <!-- Communication -->
      <div class="nav-category"><span class="line"></span><span>Communication</span><span class="line"></span></div>
      <ul class="nav-list">
        <li><a href="#"><i class="fas fa-comment-dots"></i><span>Chat</span></a></li>
      </ul>

      <!-- Account -->
      <div class="nav-category"><span class="line"></span><span>Account</span><span class="line"></span></div>
      <ul class="nav-list">
        <li><a href="#"><i class="fas fa-user-circle"></i><span>Profile</span></a></li>
        <li><a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a></li>
      </ul>

      <!-- Logout -->
      <div class="logout-wrap">
        <ul class="nav-list">
          <li><a href="#"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
        </ul>
      </div>
      <div style="height:6px;"></div>
    </div>
  </div>

  <!-- ========== MAIN WRAPPER ========== -->
  <div style="display:flex; flex-direction:column; width:100%;">

      <script>
        const links = document.querySelectorAll('.nav-list li a');
        function removeActive(){
            const activeLine = document.querySelector('.nav-list li a.active');
            if(activeLine)
                activeLine.classList.remove('active');
        };
        (function(){
            links.forEach(function(link){
                link.addEventListener('click',function(el){
                    // el.preventDefault();
                    removeActive();
                    link.classList.add('active');
                });
            });
        })();
    </script>
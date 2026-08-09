
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



  
    // (function() {
    //   // ---------- SIDEBAR COLLAPSE ----------
    //   const sidebar = document.getElementById('leftslide');
    //   const topbar = document.getElementById('topslide');
    //   const toggleBtn = document.getElementById('toggleSidebar');

    //   toggleBtn.addEventListener('click', function(e) {
    //     e.stopPropagation();
    //     sidebar.classList.toggle('collapsed');
    //     topbar.classList.toggle('expanded');
    //   });

    //   // ---------- DROPDOWN (profile) ----------
    //   const profileWrap = document.getElementById('profileDropdown');
    //   const dropdownMenu = document.getElementById('dropdownMenu');
    //   const arrow = document.getElementById('dropdownArrow');

    //   profileWrap.addEventListener('click', function(e) {
    //     e.stopPropagation();
    //     dropdownMenu.classList.toggle('show');
    //     arrow.classList.toggle('fa-chevron-down');
    //     arrow.classList.toggle('fa-chevron-up');
    //   });

    //   // close dropdown when clicking outside
    //   document.addEventListener('click', function() {
    //     dropdownMenu.classList.remove('show');
    //     arrow.classList.add('fa-chevron-down');
    //     arrow.classList.remove('fa-chevron-up');
    //   });

    //   // ---------- ACTIVE LINK (demo) ----------
    //   const links = document.querySelectorAll('.nav-list li a');
    //   links.forEach(function(link) {
    //     link.addEventListener('click', function(e) {
    //       // only if not the active one
    //       if (this.classList.contains('active')) return;
    //       document.querySelectorAll('.nav-list li a.active').forEach(function(el) {
    //         el.classList.remove('active');
    //       });
    //       this.classList.add('active');
    //       // prevent hash scroll
    //       if (this.getAttribute('href') === '#') e.preventDefault();
    //     });
    //   });

    // })();
  
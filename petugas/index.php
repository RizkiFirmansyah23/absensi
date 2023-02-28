<?php
include "../config/koneksi.php";
include "../config/header.php";

session_start();
if ($_SESSION['level']= "") {
    header("location:index.php");
    # code...
 }
 if ($_SESSION['level']== "petugas") {
    header("location:petugas.php");
    # code...
 }
 echo $_SESSION['level'];

?>
<!-- -------------- SIDEBAR -------------- -->
<link rel="stylesheet" href="../style/style.css">
    

    <section id="sidebar">
    <a href="#" class="brand mt-2"><img class="img-fluid" src="../image/admin-logo.png" width="60px" height="60px"><p>Hello Officer</p></a>
       <ul class="side-menu">
           
           <li><a href="index.php?page=home" class="active"><i class='bx bxs-dashboard icon fs-5'></i></i>Dashboard</a></li>
           <li class="divider" data-text="interface">Interface</li>
               
               
               <li><a href="index.php?page=add-absen"><i class="bi bi-table icon"></i>Absensi</a></li>
               
               <li><a href="index.php?page=rekap-absen"><i class='bx bxs-receipt icon fs-5'></i>Rekap Absensi</a></li>
               <li class="divider" data-text="settings">settings</li>
               <li>
               <a href="../logout.php"><i class='bx bx-log-out-circle icon fs-5'></i>LogOut</a>
               </li>
           </ul>
       </section>
       <!-- ------------ END SIDEBAR ------------- -->
   
       <!-- --- NAVBAR --- -->
       <section id="content">
           <nav>
               <i class='bx bx-menu toggle-sidebar'></i>
           <div class="text-white">
           <span id="dayname">Day</span>,
           <span id="month">Month</span>
           <span id="daynum">00</span>,
           <span id="year">Year</span>|
           <span id="hour">00</span>:
           <span id="minutes">00</span>:
           <span id="seconds">00</span>
           <span id="period">AM</span>
       </div>
          </nav>
          
           <!-- END NAVBAR -->
           <!-- <main>
           <div class="data">
                   <div class="content-data">
                       <div class="head">
                           <h3>Grafik Product</h3>
                           <div class="menu">
                               <i class='bx bx-dots-horizontal-rounded icon'></i>
                               <ul class="menu-link">
                                   <li><a href="#">Edit</a></li>
                                   <li><a href="#">Save</a></li>
                                   <li><a href="#">Remove</a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="chart">
                           <div id="chart"></div>
                       </div>
                   </div>
           </div>
   </main> -->
   
          <!-- INCLUDE HALAMAN WEB DINAMIS -->
       <main>
        <?php
           if(isset($_GET['page'])){
               $page = $_GET['page'];
   
            switch ($page) {
               case 'first':
                   include "home.php";
                   break;
               case 'add-absen':
                   include "absensi.php";
                   break;
               case 'rekap-absen':
                   include "rekap_absensi.php";
                   break;
               
               default:
                   echo "<center><h3>Page not found</h3></center>";
                   break;
            }
   
           }else{
               include "home.php";
           }
   
           ?>
       </main>
   </section>
<?php
include "../config/footer.php";
?>
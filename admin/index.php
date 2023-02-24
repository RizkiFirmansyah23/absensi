<!-- MEMANGGIL/INCLUDE KONEKSI DAN HEADER -->
<?php
 include "../config/header.php";
 include "../config/koneksi.php";
 session_start();

 if ($_SESSION['level']= "") {
    header("location:../index.php?");
    # code...
 }
 if ($_SESSION['level']== "admin") {
    header("location:admin/index.php");
    # code...
 }
 echo $_SESSION['level'];

?>
 <!-- -------------- SIDEBAR -------------- -->
 <link rel="stylesheet" href="../style/style.css">
    

 <section id="sidebar">
 <a href="#" class="brand mt-2"><img class="img-fluid" src="../image/admin-logo.png" width="60px" height="60px"><p>Hello Admin</p></a>
    <ul class="side-menu">
        
        <li><a href="index.php?page=home" class="active"><i class='bx bxs-dashboard icon fs-5'></i></i>Dashboard</a></li>
        <li class="divider" data-text="interface">Interface</li>
            <li>
                <a><i class='bx bxs-data icon fs-5'></i>Master Data <i class='bx bxs-chevron-right icon-right' ></i></a>
                <ul class="side-dropdown">
                <li><a href="index.php?page=data-karyawan"></i>Data Karyawan</a></li>
                <li><a href="index.php?page=data-jabatan"></i>Data Jabatan</a></li>
                <li><a href="index.php?page=data-shift"></i>Data Shift</a></li>
                </ul>
            </li>
            <?php if ($_SESSION["level"] != "admin") : ?>
            <li><a href="index.php?page=absensi"><i class="bi bi-table icon"></i>Absensi</a></li>
            <?php else : ?>
                <li><a href="index.php?page=absensi"><i class="bi bi-table icon"></i>Absen</a></li>
                <?php endif ?>
            <li><a href="index.php?page=recap"><i class='bx bxs-receipt icon fs-5'></i>Rekap Absensi</a></li>
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
            case 'home':
                include "home.php";
                break;
            case 'data-karyawan':
                include "list_karyawan.php";
                break;
            case 'data-jabatan':
                include "list_jabatan.php";
                break;
            case 'data-shift':
                include "list_shift.php";
                break;
            case 'absensi':
                include "absen.php";
                break;
            case 'recap':
                include "recap_absensi.php";
                break;
            case 'add-karyawan':
                include "add_karyawan.php";
                break;
            case 'add-jabatan':
                include "add_jabatan.php";
                break;
            // case 'add-absen':
            //     include "add_absen.php";
            //     break;
            case 'add-shift':
                include "add_shift.php";
                break;
            case 'delete-karyawan':
                include "delete_karyawan.php";
                break;
            case 'delete-jabatan':
                include "delete_jabatan.php";
                break;
            case 'delete-shift':
                include "delete_shift.php";
                break;
            case 'update-karyawan':
                include "update_karyawan.php";
                break;
            case 'update-jabatan':
                include "update_jabatan.php";
                break;
            case 'update-shift':
                include "update_shift.php";
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
    
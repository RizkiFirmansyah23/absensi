<?php
include "config/koneksi.php";
include "config/header.php";

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
<h2 class="text-center">
   WELCOME TO PAGE
</h2>
<?php
include "config/footer.php";
?>
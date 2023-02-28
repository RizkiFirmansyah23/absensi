<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config/koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$sql = "SELECT * FROM user where username='$username' and password=md5('$password')";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if ($row ['Role'] == "admin") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:admin/index.php");
        }
        elseif($row['Role'] == "petugas"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "petugas";
            header("location:petugas/index.php"); 
        } 
  }
} else {
	header("location:form_login.php?pesan=gagal");
}
$connect->close();
?>













<!-- $data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
 

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:home.php");
}else{
	header("location:index.php?pesan=gagal");
}
?> -->



<!-- <?php
    session_start();

    include "koneksi.php";
 
    $username = $_POST['Username'];
    $password = $_POST['Password'];

   $sql = "SELECT username and md5=('password') FROM user";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result-> fetch_assoc()) {
    if ($row ['role' == "admin"]) {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:admin.php");
        }
        elseif($row['role'] == "petugas"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            header("location:petugas.php"); 
        }
    }
        
        
    }

    else{
        header("location:index.php?pesan=gagal");
    }
    $connect-> close();
    
?> -->
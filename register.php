<?php
include "config/header.php";
include "config/koneksi.php";
  if(isset($_POST['register'])){
    $full_name = $_POST['Full_Name'];
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password= $_POST['Password'];

    //PERINTAH SQL UNTUK MENAMBAHKAN DATA KEDALAM TABEL TB_KARYAWAN
    $register = $connect->query("INSERT INTO user VALUE ('', '$full_name', '$username', '$email', '$password')");

     if($register){
       header("location:form_login.php");
     }
  }
?>
<link rel="stylesheet" href="style/style.css">
   <body style="background-color: #002939;" >
   
    <div class="row py-5">
    <div class="col-lg-4 offset-lg-4 col-sm-5 py-3 offset-sm-2">
    <div class="background ">
    <div class="text-center py-3">
    <h2 class="name-logo py-2">REGISTER</h2>
  </div>
    
<div class="container ">
  <form action= "proses-login.php" method="post" class="mx-3">
  <div class="mb-3">
    <label for="exampleInput1" class="form-label"><b>Nama Lengkap</b> </label>
    <input type="text" name="Full_Name" class="form-control" id="exampleInput1" aria-describedby="inputHelp" placeholder="full name" required>
  </div>
  <div class="mb-3">
    <label for="exampleInput1" class="form-label"><b>Username</b> </label>
    <input type="text" name="Username" class="form-control" id="exampleInput1" aria-describedby="inputHelp" placeholder="username" required>
  </div>
  <div class="mb-3">
    <label for="exampleInput1" class="form-label"><b>Emali</b> </label>
    <input type="email" name="Email" class="form-control" id="exampleInput1" aria-describedby="inputHelp" placeholder="email" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><b>Password</b> </label>
    <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="********" required>
  </div>
  <div class="mb-3">
    <label for="exampleInput1" class="form-label"><b>Confirm Password</b> </label>
    <input type="password" name="Password" class="form-control" id="exampleInput1" aria-describedby="inputHelp" placeholder="********" required>
  </div>
  <div style="float:right;">
    <button type="submit" name="register" class="btn btn-primary">Create</button> 
  </div>
  
</form>
</div> 
</div>
</div>
</div>
</body>

<?php
include "config/footer.php";
?>



  

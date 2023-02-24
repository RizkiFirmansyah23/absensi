<?php
include "config/header.php";
  session_start();
  if(!empty($_SESSION['username'])){
    if($_SESSION['level'] = "admin"){
      header("location:admin/index.php");
    }else{
      echo "heloo petugas";
    }
  }
?>
<link rel="stylesheet" href="style/style.css">
   <body style="background-color: #002939;" >
   
    <div class="row py-5">
    <div class="col-lg-4 offset-lg-4 col-sm-5 py-3 offset-sm-2">
    <div class="background ">
    <div class="text-center py-3">
    <img src="image/logo.png" width="70px">
    <h2 class="name-logo py-2">LOGIN</h2>
  </div>
  
<div class="container ">
  <form action= "proses-login.php" method="post" class="mx-3">
  <div class="mb-3">
    <label for="exampleInput1" class="form-label"><b>Username</b> </label>
    <input type="text" name="username" class="form-control" id="exampleInput1" aria-describedby="inputHelp" placeholder="username" required>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert text-danger'>Username tidak sesuai !</div>";
		}
	}
	?>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><b>Password</b> </label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="********" required>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert text-danger'> Password tidak sesuai !</div>";
		}
	}
	?>
  </div>
  <div style="float:right;">
    <button type="submit" name="login" class="btn btn-primary">LogIn</button> 
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



  

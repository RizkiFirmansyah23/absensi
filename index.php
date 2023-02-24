<?php
  include "config/header.php";
?>
<link rel="stylesheet" href="style/style.css">
<body class="bg-light">

<nav class="navbar navbar-expand-lg bg-light shadow ">
  <div class="container">
    <a class="navbar-brand" href="#"><span class="name-logo"><img src="image/logo.png" style="margin-top:-5px;" width="40px"> Absen Employee</span> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       
      </ul>
      <a href="form_login.php"><button type="button" class="btn btn-primary">LogIn</button></a>
    </div>
  </div>
</nav>

<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-4 offset-1">
        <h3>Aplikasi <b>Absensi</b> online<br> sederhana</h3>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
        mempermudah dalam mengabsen
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
        mengurangi resiko kesalahan dalam input absen manual
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
        kelola absensi karyawan lebih cepat
    </div>
    <div class="py-2">
       <a href="#demo"><button type="button" class="btn btn-outline-success">Selengkapnya ></button></a>
    </div>
      </div>
      <div class="col-5 offset-2">
        <img src="image/section1.png" width="100%">
      </div>
    </div>
  </div>
</section>
<br>
<section class="mt-5 py-5" id="demo">
  <div class="container">
    <div class="text-center">
      <h3>Demo aplikasi absensi karyawan sederhana</h3>
    </div>
  </div>
</section>
<section class="col-8 offset-2 py-4">
<div id="carouselExampleAutoplaying" class="carousel slide shadow" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/baner1.png" class="d-block w-100" height="450px">
    </div>
    <div class="carousel-item">
      <img src="image/baner5.png" class="d-block w-100" height="450px">
    </div>
    <div class="carousel-item">
      <img src="image/baner4.png" class="d-block w-100" height="450px">
    </div>
    <div class="carousel-item">
      <img src="image/baner3.png" class="d-block w-100" height="450px">
    </div>
    <div class="carousel-item">
      <img src="image/baner6.png" class="d-block w-100" height="450px">
    </div>
    <div class="carousel-item">
      <img src="image/baner7.png" class="d-block w-100" height="450px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<footer>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="1" d="M0,256L60,266.7C120,277,240,299,360,266.7C480,235,600,149,720,144C840,139,960,213,1080,240C1200,267,1320,245,1380,234.7L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
</footer>
</body>

<?php
  include "config/footer.php";
?>
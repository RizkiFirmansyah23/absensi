<?php
  if(isset($_POST['create'])){
    $date = $_POST['date'];
    $Name_Position = $_POST['position'];
    //PERINTAH SQL UNTUK MENAMBAHKAN DATA KEDALAM TABEL TB_JABATAN
    $create = $connect->query("INSERT INTO tb_jabatan VALUE ('', '$Name_Position', '$date')");

    if($create){
      header("location:index.php?page=data-jabatan");
    }
  }
?>



<link rel="stylesheet" href="../style/style.css">

<!-- FORM TAMBAH DATA JABATAN -->
<main> 
    <div class="container ">
    <div class="text-center">
      <h3>Tambah Data Jabatan</h3>
    </div>
   <div class="row ">
    <div class="col-8 offset-2"> 
    <form method="POST" action="" class="py-4">
      <div class="mb-3">
        <label for="" class="form-label">Nama Jabatan</label>
        <input type="text" class="form-control" placeholder="masukkan jabatan" name="position" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tanggal</label>
        <input type="date" class="form-control" placeholder="masukkan jabatan" name="date" required>
    </div>
        <button type="submit" name="create" class="btn btn-primary" data-toggle="tambah" data-placement="right" title="tambah">Tambah</button>
  </form>
      <div class="back mx-5">
        <a href="index.php?page=data-jabatan" data-toggle="kembali" data-placement="right" title="kembali">
          <button type="submit" name="add" class="btn btn-danger">
          <i class='bx bx-undo icon-back '></i></button></a>
      </div>
    </div>
  </div> 
</div>
</main>
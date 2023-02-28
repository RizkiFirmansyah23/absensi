<?php
  if(isset($_POST['create'])){
    $date = $_POST['date'];
    $Name_Shift = $_POST['shift'];
    //PERINTAH SQL UNTUK MENAMBAHKAN DATA KEDALAM TABEL TB_SHIFT
    $create = $connect->query("INSERT INTO tb_shift VALUE ('', '$Name_Shift', '$date')");

    if($create){
      header("location:index.php?page=data-shift");
    }
  }
?>

<link rel="stylesheet" href="../style/style.css">

<!-- FORM TAMBAH DATA SHIFT KARYAWAN -->
  <main> 
    <div class="container ">
    <div class="text-center">
      <h3>Tambah Data Shift</h3>
   </div>
  <div class="row ">
    <div class="col-8 offset-2"> 
    <form method="POST" action="" class="py-4">
    <div class="mb-3">
        <label for="" class="form-label">Nama Shift</label>
        <input type="text" class="form-control" placeholder="masukkan shift" name="shift" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tanggal</label>
        <input type="date" class="form-control" placeholder="masukkan shift" name="date" required>
    </div>
        <button type="submit" name="create" class="btn btn-primary" data-toggle="tambah" data-placement="right" title="tambah">Tambah</button>
  </form>
      <div class="back mx-5">
        <a href="index.php?page=data-shift" data-toggle="kembali" data-placement="right" title="kembali">
          <button type="submit" name="add" class="btn btn-danger">
          <i class='bx bx-undo icon-back '></i></button></a>
      </div>
    </div>
  </div> 
</div>
</main>
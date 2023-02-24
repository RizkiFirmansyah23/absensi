<?php

  if(isset($_POST['add'])){
    $nama = $_POST['Name'];
    $tanggal_lahir = $_POST['Date_of_Birth'];
    $alamat = $_POST['Address'];
    $email = $_POST['Email'];
    $position = $_POST['position'];
    $shift = $_POST['shift'];

    //PERINTAH SQL UNTUK MENAMBAHKAN DATA KEDALAM TABEL TB_KARYAWAN
    $add = $connect->query("INSERT INTO tb_karyawan VALUE ('', '$nama', '$tanggal_lahir', '$alamat', '$email', '$position', '$shift')");

    if($add){
      header("location:index.php?page=data-karyawan");
    }
  }
?>

<link rel="stylesheet" href="../style/style.css">


<!-- FORM TAMBAH DATA KARYAWAN -->
<main >
      <div class="container ">
        <div class="text-center">
            <h3>Tambah Data Karyawan</h3>
          </div>
          <div class="row ">
        <div class="col-8 offset-2"> 
        <form method="POST" action="" class="py-4">           
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Karyawan</label>
              <input type="text" class="form-control" name="Name" placeholder="masukkan nama" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control" placeholder="masukkan tanggal lahir" name="Date_of_Birth" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                <input type="text" class="form-control" placeholder="masukkan alamat" name="Address" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="masukkan email" name="Email" required>
              </div>
              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Jabatan</label>
            <select class="form-select" name="position" aria-label="Default select example">
              <?php
                
                //PERINTAH SQL UNTUK MENAMPILKAN SEMUA DATA DARI TABEL TB_KARYAWAN
                  $sql="SELECT * from tb_jabatan";

                  $hasil=mysqli_query($connect,$sql);
                  print_r($hasil);
                  while ($data = mysqli_fetch_array($hasil)) {
                ?>
                  <option value="<?php echo $data['id'];?>">
                  <?php echo $data['position'];?>
                  </option>
                <?php 
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Shift</label>
            <select class="form-select" name="shift" aria-label="Default select example">
              <?php
                
                //PERINTAH SQL UNTUK MENAMPILKAN SEMUA DATA DARI TABEL TB_KARYAWAN
                  $sql="SELECT * from tb_shift";

                  $hasil=mysqli_query($connect,$sql);
                  print_r($hasil);
                  while ($data = mysqli_fetch_array($hasil)) {
                ?>
                  <option value="<?php echo $data['id'];?>">
                  <?php echo $data['shift'];?>
                  </option>
                <?php 
                }
                ?>
            </select>
        </div>
            <button type="submit" name="add" class="btn btn-primary" data-toggle="tambah" data-placement="right" title="tambah">Tambah</button>
          </form>
          <div class="back mx-5">
          <a href="index.php?page=data-karyawan" data-toggle="batal" data-placement="right" title="batal">
            <button type="submit" name="add" class="btn btn-outline-danger">
              <i class='bx bx-arrow-back icon-back '></i> Batal</button></a>
          </div>
        </div>  
        </div>  
    </div>
    </div>
</main>
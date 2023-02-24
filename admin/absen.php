<?php
  if(isset($_POST['add'])){
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time_in = $_POST['time_in'];
    $time_out = $_POST['time_out'];
    $information = $_POST['information'];
    //PERINTAH SQL UNTUK MENAMBAHKAN DATA KEDALAM TABEL TB_KARYAWAN
    $add = $connect->query("INSERT INTO tb_absen VALUE ('', '$name', '$date', '$time_in', '$time_out', '$information')");

    if($add){
      header("location:index.php?page=recap");
    }
  }
?>

<link rel="stylesheet" href="../style/style.css">
  <main> 
    <div class="container ">
      <div class="row">
        <div class="col-8 offset-2">
        <div class="text-center">
          <h3>Tambah Data Absen</h3>
      </div>
    <form method="POST" action="" class="py-4">
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Karyawan</label>
        <select class="form-select" name="name" type="text" aria-label="Default select example">
        <?php
          include "../config/koneksi.php";
          
          //PERINTAH SQL UNTUK MENAMPILKAN SEMUA DATA DARI TABEL TB_KARYAWAN
            $sql="SELECT * from tb_karyawan";

            $hasil=mysqli_query($connect,$sql);
            print_r($hasil);
            while ($data = mysqli_fetch_array($hasil)) {
          ?>
            <option value="<?php echo $data['name'];?>">
            <?php echo $data['name'];?>
            </option>
          <?php 
          }
          ?>
      </select>
    </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
        <input type="date" class="form-control" placeholder="masukkan tanggal" name="date" required>
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Jam Masuk</label>
          <input type="time" class="form-control" placeholder="masukkan jam" name="time_in" required>
        </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jam Pulang </label>
        <input type="time" class="form-control" placeholder="masukkan jam" name="time_out" required>
      </div>
      <div class="mb-3">
      <label for="information" class="form-label">Keterangan </label>
        <select class="form-select" name="information" type="text" aria-label="Default select example">
        <option selected value="hadir">Hadir</option>
        <option value="sakit">Sakit</option>
        <option value="izin">Izin</option>
        <option value="alpa">Alpa</option>
    </select>
  </div>      
      <button type="submit" name="add" class="btn btn-primary">Tambah</button>
  </form>
  </div>   
</div> 
</div>
</main>
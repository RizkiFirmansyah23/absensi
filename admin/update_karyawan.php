<?php
ob_start();
include "../config/koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tb_karyawan WHERE id='$id'";
$edit = $connect->query($sql);
while ($row=$edit->fetch_assoc()) {
?>

      <div class="col-12">
      <div class="text-center">
          <h3>Edit Data Karyawan</h3>
      </div>
      </div>
      <div class="row">
        <div class="col-8 offset-2">
          <form method="POST" action="" class="py-4">        
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Karyawan</label>
          <input type="text" class="form-control" name="name" placeholder="nama" aria-describedby="emailHelp" value="<?php echo $row['name'];?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
          <input type="text" class="form-control" placeholder="tanggal lahir" name="date_of_birth" value="<?php echo $row['date_of_birth'];?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat</label>
            <input type="text" class="form-control" placeholder="alamat" name="address" value="<?php echo $row['address'];?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="email" name="email" value="<?php echo $row['email'];?>">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Jabatan</label>
            <select class="form-select" name="position" aria-label="Default select example" >
              <?php
                
                //PERINTAH SQL UNTUK MENAMPILKAN SEMUA DATA DARI TABEL TB_JABATAN
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
                
                //PERINTAH SQL UNTUK MENAMPILKAN SEMUA DATA DARI TABEL TB_SHIFT
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
        <button type="submit" name="edit" class="btn btn-success" data-toggle="update" data-placement="right" title="update">Update</button>
  </form>
    <div class="back mx-5">
    <a href="index.php?page=data-karyawan" >
      <button type="submit" name="add" class="btn btn-danger" data-toggle="kembali" data-placement="right" title="kembali">
      <i class='bx bx-undo icon-back '></i></button></a>
    </div>
  </div>
</div>
    

<?php
      }
      if(isset($_POST['edit'])){
        $name = $_POST['name'];
        $date = $_POST['date_of_birth'];
        $address = $_POST['address'];
        $email = $_POST['email'];

        $update = $connect->query("UPDATE tb_karyawan SET  name='$name', date_of_birth='$date', address='$address', email='$email' WHERE id='$id'");
        if($update){
          header("location:index.php?page=data-karyawan");
          ob_end_flush();
        }
      }
?>

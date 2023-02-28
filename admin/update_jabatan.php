<?php
ob_start();
include "../config/koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tb_jabatan WHERE id='$id'";
$edit = $connect->query($sql);
while ($row=$edit->fetch_assoc()) {
?>

    <div class="col-12 ">
      <div class="text-center">
          <h3>Edit Data Jabatan</h3>
      </div>
    </div>
    <div class="row ">
      <div class="col-8 offset-2">
        <form method="POST" action="" class="py-4 " >        
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nama Jabatan</label>
          <input type="text" class="form-control" placeholder="nama jabatan" name="position" value="<?php echo $row['position'];?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Tanggal</label>
          <input type="date" class="form-control" placeholder="tanggal" name="date" value="<?php echo $row['date'];?>">
        </div>
        <button type="submit" name="edit" class="btn btn-success" data-toggle="update" data-placement="right" title="update">Update</button>
        </form>
        <div class="back mx-5">
    <a href="index.php?page=data-jabatan" >
      <button type="submit" name="add" class="btn btn-danger" data-toggle="kembali" data-placement="right" title="kembali">
      <i class='bx bx-undo icon-back '></i></button></a>
    </div>
      </div>
  </div>



    
 

<?php
      }
      if(isset($_POST['edit'])){
        $name = $_POST['date'];
        $position = $_POST['position'];

        $update = $connect->query("UPDATE tb_jabatan SET name='$name'  position='$position' WHERE id='$id'");
        if($update){
          header("location:index.php?page=data-jabatan");
          ob_end_flush();
        }
      }
?>



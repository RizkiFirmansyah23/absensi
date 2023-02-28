<?php
  ob_start();
  include "../config/koneksi.php";
  $id = $_GET['id'];
  $sql = "SELECT * FROM tb_shift WHERE id='$id'";
  $edit = $connect->query($sql);
  while ($row=$edit->fetch_assoc()) {
?>

      <div class="col-12">
      <div class="text-center">
          <h3>Edit Data Shift</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-8 offset-2">
      <form method="POST" action="" class="py-4">        
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Shift</label>
                <input type="text" class="form-control" name="shift" placeholder="Thomash" value="<?php echo $row['shift'];?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                <input type="date" class="form-control" placeholder="nama shift" name="date" value="<?php echo $row['date'];?>">
              </div>
              <button type="submit" name="edit" class="btn btn-success" data-toggle="update" data-placement="right" title="update">Update</button>
      </form>
      <div class="back mx-5">
          <a href="index.php?page=data-shift" >
            <button type="submit" name="add" class="btn btn-danger" data-toggle="kembali" data-placement="right" title="kembali">
            <i class='bx bx-undo icon-back '></i></button></a>
          </div>
      </div>
    </div>
    

<?php
      }
      if(isset($_POST['edit'])){
        $name = $_POST['shift'];
        $date = $_POST['date'];

        $update = $connect->query("UPDATE tb_shift SET  name='$name', shift='$date' WHERE id='$id'");
        if($update){
          header("location:index.php?page=data-shift");
          ob_end_flush();
        }
      }
?>

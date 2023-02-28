<?php
    include "../config/koneksi.php";

?>
  <link rel="stylesheet" href="../style/style.css">

  <!-- SECTION LIST JABATAN -->
    <h3 class="text-uppercase">list data shift</h3>
  <main >
    <div class="row">
    <div class="col-5">
    <form action="" method="get">
    <div class="input-group ">
      <input type="text" name="page" value="data-shift" hidden >
      <input type="text" name="nama" class="form-control" placeholder="Search " aria-label="Recipient's username" aria-describedby="button-addon2" >
      <button class="btn btn-outline-secondary" type="submit" name="submit" name="cari" id="button-addon2" data-toggle="search" data-placement="right" title="search"><i class='bx bx-search'></i></button>
    </form>
  </div>
    </div>
    <div class="col-3 offset-4">
     <div>
      <a href="index.php?page=add-shift" data-toggle="tambah" data-placement="right" title="tambah data"><button type="submit" class="btn btn-outline-success float-end ">
        + Tambah Data
      </button></a>
     </div>
    </div>
  </div>
</main>

<br>
  <main class="shadow bg-light">
      <table class=" list table table-hover">
        <tr>
          <td width="250px">No</td>
          <td width="350px">Nama Shift</td>
          <td width="330px">Tanggal</td>
          <td>Aksi</td>
      </tr>
           
  <?php
    if(isset($_GET['nama'])){
      $nama = $_GET['nama'];
      $data = "SELECT * FROM tb_shift WHERE shift LIKE '%$nama%'"; 
      $result = $connect->query($data); 
      }else{
      $data = " SELECT * FROM tb_shift ";
      $result = $connect->query($data);  
      }
      $no = 1;
      while($row=$result->fetch_assoc()){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['shift']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td>
        <a href="index.php?id=<?php echo $row['id']?>&page=update-shift"><button type="button" class="btn btn-warning" data-toggle="update" data-placement="right" title="update data"><i class='bx bx-edit'></i></button></a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['id']?>" data-toggle="Delete" data-placement="right" title="delete data">
        <i class='bx bx-trash'></i></button>
        <div class="modal fade" id="exampleModal<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body text-center">
              <i class='bx bx-info-circle text-warning' style="font-size: 100px;"></i>
              <h1 class="modal-title fs-3 py-3" id="exampleModalLabel">Yakin Hapus Data Ini?</h1>
              </div>
              <div class="modal-footer">
              <a href="index.php?id=<?php echo $row['id']?>&page=delete-shift"><button type="button" class="btn btn-outline-danger">Oke</button></a>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>
        </td>
</tr>
<?php }
?>
</table>
</main>       
 
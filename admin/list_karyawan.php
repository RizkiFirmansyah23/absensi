<?php
    include "../config/koneksi.php";
  
    if(isset($_GET['cari'])){
      $cari = $_GET['cari'];
      echo "<b>Hasil pencarian : ".$cari."</b>";
     }
  
?>
<!-- section data list karyawan -->
<link rel="stylesheet" href="../style/style.css">
<h3 class="text-uppercase">list Data karyawan</h3>
  <main >
    <div class="row">
    <div class="col-5">
    <form action="" method="get">
    <div class="input-group ">
      <input type="text" name="page" value="data-karyawan" hidden >
      <input type="text" name="nama" class="form-control" placeholder="Search " aria-label="Recipient's username" aria-describedby="button-addon2">
      <button class="btn btn-outline-secondary" type="submit" name="submit" name="cari" id="button-addon2" data-toggle="search" data-placement="right" title="search"><i class='bx bx-search'></i></button>
    </form>
  </div> 
</div>
    <div class="col-3 offset-4">
      <div>
      <a href="index.php?page=add-karyawan" data-toggle="tambah" data-placement="right" title="tambah data"><button type="submit" class="btn btn-outline-success float-end ">
        + Tambah Data
      </button></a>
    </div>
  </div>
</div>
</main>

<br>
  <main class="shadow bg-light">
    <table class=" list table " style="overflow-x:auto ;">
      <tr>
        <td>No</td>
        <td width="100px">Nama</td>
        <td>Tanggal lahir</td>
        <td>Alamat</td>
        <td>Email</td>
        <td>Position</td>
        <td width="80px">Shift</td>
        <td>Aksi</td>
      </tr>
           
  <?php
    if(isset($_GET['nama'])){
      $nama = $_GET['nama'];
      $data = mysqli_query($connect," SELECT k.id,k.name,k.date_of_birth,k.address,k.email,j.position , s.shift FROM (`tb_karyawan` k left join tb_jabatan j on k.id_position=j.id) left join tb_shift s on k.id_shift=s.id WHERE name LIKE '%$nama%'");  
     }else{
      $data = mysqli_query($connect," SELECT k.id,k.name,k.date_of_birth,k.address,k.email,j.position , s.shift FROM (`tb_karyawan` k left join tb_jabatan j on k.id_position=j.id) left join tb_shift s on k.id_shift=s.id");  
     }
     $no = 1;
     while($d = mysqli_fetch_array($data)){
     ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d['name']; ?></td>
      <td><?php echo $d['date_of_birth']; ?></td>
      <td><?php echo $d['address']; ?></td>
      <td><?php echo $d['email']; ?></td>
      <td><?php echo $d['position']; ?></td>
      <td><?php echo $d['shift']; ?></td>
      <td>
        <a href="index.php?id=<?php echo $d['id']?>&page=update-karyawan"><button type="button" class="btn btn-warning" data-toggle="update" data-placement="right" title="update data"><i class='bx bx-edit'></i></button></a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $d['id']?>" data-toggle="Delete" data-placement="right" title="delete data">
        <i class='bx bx-trash'></i></button>
        <div class="modal fade" id="exampleModal<?php echo $d['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body text-center">
              <i class='bx bx-info-circle text-warning' style="font-size: 100px;"></i>
              <h1 class="modal-title fs-3 py-3" id="exampleModalLabel">Yakin Hapus Data Ini?</h1>
              </div>
              <div class="modal-footer">
              <a href="index.php?id=<?php echo $d['id']?>&page=delete-karyawan"><button type="button" class="btn btn-outline-danger">Oke</button></a>
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

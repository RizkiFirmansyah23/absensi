<?php 
include '../config/koneksi.php';
?>
 
<h3>Form Pencarian</h3>
 
<form action="" method="get">
 <label>Cari :</label>
 <input type="text" name="search" value="search" hidden>
 <input type="text" name="cari">
 <button type="submit" name="submit" value="Cari"></button>
</form>
 
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
 <tr>
  <th>No</th>
  <th>Nama</th>
  <th>Asal</th>
  <th>Tujuan</th>
  <th>Maskapai</th>
 </tr>
 <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($connect,"select * from tb_karyawan where name like '%".$cari."%'");    
 }else{
  $data = mysqli_query($connect,"select * from tb_karyawan");  
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
  
 </tr>
 <?php } ?>
</table>

<!--PERINTAH SQL UNTUK MENAMPILKAN SEMUA DATA DARI TABEL TB_KARYAWAN-->
<?php
          $sql = "SELECT k.id,k.name,k.date_of_birth,k.address,k.email,j.position , s.shift FROM (`tb_karyawan` k left join tb_jabatan j on k.id_position=j.id) left join tb_shift s on k.id_shift=s.id";
          $result = $connect->query($sql);
          $no = 1;
          while ($row=$result->fetch_assoc()){
            ?>

              <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $row["name"]?></td>
                <td><?php echo $row["date_of_birth"]?></td>
                <td><?php echo $row["address"]?></td>
                <td><?php echo $row["email"]?></td>
                <td><?php echo $row["position"]?></td>
                <td><?php echo $row["shift"]?></td>
                <td>
                  <a href="index.php?id=<?php echo $row['id']?>&page=update-karyawan">
                  <button type="submit" class="btn btn-warning">
                    <i class='bx bx-edit'></i></button></a>
                  <a href="index.php?id=<?php echo $row['id']?>&page=delete-karyawan" onclick="return confirm('Anda Yakin Ingin Mengapus Data Ini?')">
                  <button type="submit" class="btn btn-danger">
                    <i class='bx bx-trash'></i></button></a>
                </td>
              </tr>

            <?php
          }
          ?>
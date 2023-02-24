<?php 
include 'config/koneksi.php';
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
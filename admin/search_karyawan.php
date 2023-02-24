<?php
include "../config/koneksi.php";
    if(isset($_GET['cari'])){
      $cari = $_GET['cari'];
      $data = mysqli_query($connect,"SELECT k.id,k.name,k.date_of_birth,k.address,k.email,j.position , s.shift FROM (`tb_karyawan` k left join tb_jabatan j on k.id_position=j.id) left join tb_shift s on k.id_shift=s.id where name like '%".$cari."%'");    
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

      
     </tr>
     <?php }
      ?>
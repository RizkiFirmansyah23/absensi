<?php
include "config/koneksi.php";
if(isset($_POST['request'])){
    $request = $_POST['request'];

    $request = "SELECT * FROM tb_absen WHERE information = '$request'";
    $result = mysqli_query($connect, $query);
    $count = mysqli_num_rows($result);

?>
    <table class=" list table ">

    <?php 
    if($count){

  
    ?>
	<thead>
      <tr>
        <td >No</td>
        <td width="100px">Nama</td>
        <td>Tanggal </td>
        <td>jam</td>
        <td width="80px">jam</td>
		<td>keterangan</td>
      </tr>
<?php
    }else{
        echo "sory no record";
    }
    ?>
	  </thead>
      <tbody>
        <?php 
        while($row = mysqli_fetch_assoc($result)){

        
        ?>
        <tr>
	   <td><?php echo $no;?></td>
	   <td><?php echo $a['name']?></td>
	   <td><?php echo $a['date']?></td>              
	   <td><?php echo $a['time_in']?></td>
	   <td><?php echo $a['time_out']?></td>
	   <td><?php echo $a['information']?></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <?php }?>
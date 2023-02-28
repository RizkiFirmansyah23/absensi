<?php 
include "config/header.php";
include "config/koneksi.php";
?>

<div id="filters">
	<span>fetch result by &nbsp;</span>
	<select name="fetchval" id="fetchval">
		<option value="select" disabled="" selected="">select</option>
		<option value="hadir">Hadir</option>
		<option value="sakit">sakit</option>
		<option value="ijin">ijin</option>
		<option value="alpa">alpa</option>
	</select>
</div>

<div class="container">
<table class=" list table ">
	<thead>
      <tr>
        <td >No</td>
        <td width="100px">Nama</td>
        <td>Tanggal </td>
        <td>jam</td>
        <td width="80px">jam</td>
		<td>keterangan</td>
      </tr>
	  </thead>
	  <tbody>

	  <?php 
	 $tampil = $connect->query("SELECT * FROM tb_absen");
	 while ($a=$tampil->fetch_array()){
	   @$no++;
	   ?>
	   <tr>
	   <td><?php echo $no;?></td>
	   <td><?php echo $a['name']?></td>
	   <td><?php echo $a['date']?></td>              
	   <td><?php echo $a['time_in']?></td>
	   <td><?php echo $a['time_out']?></td>
	   <td><?php echo $a['information']?></td>

	   <?php
	 }
	 
	 ?>
	  </tbody>
</table>
</div>
	 <script type="text/javascript">
		$(document).ready(function(){
			$("#fetchval").on('change' ,function(){
				var value = $(this).val();
				// alert(value);

				$.ajax({
					url:"fetch.php",
					type:"post",
					data:'request=' + value;
					beforeSend:function(){
						$(".container").html("<span>working...</span>");
					},
					success:function(data){
						$(".container").html(data);
					}
				});
			});
		});
	 </script>

<?php
include "config/footer.php";
?>
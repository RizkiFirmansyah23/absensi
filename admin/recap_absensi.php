<?php
    include "../config/koneksi.php";
  
?>
<!-- SECTION LIST DATA KARYAWAN -->
  <h3 class="text-uppercase">Recap Absensi Karyawan</h3>
  <main >
    <div class="row">
    <div class="col-12">
      <form action="index.php?page=recap" target="_parent" method="get">
      <div class="input-group ">
      <input type="text" name="page" value="recap" hidden>
      <input type="date" class="form-control" placeholder="Search" aria-label="Recipient's username" name="awal">
      <input type="date" class="form-control" placeholder="Search" aria-label="Recipient's username" name="akhir">
      <span class="input-group-text" ><button type="submit" class="btn btn-warning" data-toggle="search" data-placement="right" title="search"><i class='bx bx-search'></i></button></span>
      <button class="btn btn-success mx-2" onclick="printDiv('print')" type="submit" data-toggle="print" data-placement="right" title="print"><i class='bx bx-printer'></i></button>
    </div>
    </form>
  </div>
</main>
<br>
<fieldset id="print">
    <main class="shadow bg-light">
      <table class=" list table ">
          <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Tanggal</td>
            <td>Jam Masuk</td>
            <td>jam Pulang</td>
            <td>Keterangan</td>
          </tr>

           

          <?php
          @$search = $_GET['awal'];
          if($search==""){
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
            
          }else
          {
            $tampil = $connect->query("SELECT * FROM tb_absen WHERE date between'$_GET[awal]' and '$_GET[akhir]'");
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
          }
          ?>

              </tr>
        </table>
        </fieldset>
      </main>  
      </body>     
<script type="text/javascript">
  function printDiv (el) {
    var a= document.body.innerHTML;
    var b= document.getElementById(el).innerHTML;

    document.body.innerHTML=b;
    window.print();
    dokument.body.innerHTML=a;
  }
</script>
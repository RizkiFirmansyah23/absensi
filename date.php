<?php
include "config/koneksi.php";
include "config/header.php";

if(isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = 1;
  }

  $num_per_page = 05;
  $start_from = ($page-1)*05;

?>

<h3 class="text-uppercase">Rekap Absensi Karyawan</h3>
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
            <td width="100px">No</td>
            <td width="250px">Nama</td>
            <td width="300px">Tanggal</td>
            <td width="300px">Jam Masuk</td>
            <td width="300px">jam Pulang</td>
            <td>Keterangan</td>
          </tr>

          <?php
          @$search = $_GET['awal'];
          if($search==""){
            $tampil = $connect->query("SELECT * FROM tb_absen limit $start_from,$num_per_page");
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
          
            $tampil = $connect->query("SELECT * FROM tb_absen WHERE date between'$_GET[awal]' and '$_GET[akhir]'  ");
            $no= 1 +$start_from;
            while ($a=$tampil->fetch_array()){
              
              ?>
              <tr>
              <td>$no</td>
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
        <?php
            $query = "SELECT * FROM tb_absen";
            $result = mysqli_query($connect, $query);
            $record = mysqli_num_rows($result);

            $page_total = ceil($record/$num_per_page);

            if($page>1){
                echo "<a href='date.php?page=".($page>1)."' class='btn btn-primary'>prevous</a>";
            }

            for($i=1;$i<$page_total;$i++){
                echo "<a href='date.php?page=".$i."' class='btn btn-primary'>$i</a>"; 
            }
            if($i>$page){
                echo "<a href='date.php?page=".($page+1)."' class='btn btn-primary'>next</a>";
            }
        ?>
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
<?php
    include "config/footer.php";
?>


<!-- <?php
    include "../config/koneksi.php";
    
  
    ?>
    <!-- SECTION LIST DATA KARYAWAN -->
      <h3 class="text-uppercase">Rekap Absensi Karyawan</h3>
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
                <td width="100px">No</td>
                <td width="250px">Nama</td>
                <td width="300px">Tanggal</td>
                <td width="300px">Jam Masuk</td>
                <td width="300px">jam Pulang</td>
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
              
                $tampil = $connect->query("SELECT * FROM tb_absen WHERE date between'$_GET[awal]' and '$_GET[akhir]' ");
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
    </script> -->
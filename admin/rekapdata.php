<?php
include "boot.php";

?>
<body style="background-size:cover" background="bg-recap.jpg">
<div class="py-1 mx-1 ">
<a href="navbar.php"><button class="btn btn-outline-danger"><i class='bx bx-arrow-back'></i></button></a>
</div>
<form action=""method="get" >
<div class="input-group shadow" target="sisil" >
  <input type="date" aria-label="First name" name="awal" class="form-control">
  <input type="date" aria-label="Last name" name="akhir" class="form-control">
  <span class="input-group-text"><button class="btn btn-success " type="submit"><i class='bx bx-search'></i></button>
  <button class="btn btn-primary mx-2" onclick="printDiv('print')" type="submit"><i class='bx bx-printer'></i></button>
</span>
</div>
</form>

<fieldset id="print"> 
  <table class="table class text-center bg-light mt-2 mt-2">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Umur</th>
        <th scope="col">No KTP</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Waktu</th>
        <th scope="col">Keperluan</th>        
        
    </tr>
    </thead>
    <?php include "koneksi.php";
    @$cari=$_GET['awal'];
    if($cari==""){
      $tampil=$connect->query("select * from isidata");
      while ($a=$tampil->fetch_array()){
      @$no++;
      ?>
      <tbody class="table">
<tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $a['nama'] ?></td>
            <td><?php echo $a['hari_tanggal'] ?></td>
            <td><?php echo $a['umur'] ?></td>
            <td><?php echo $a['no_ktp'] ?></td>
            <td><?php echo $a['jenis_kelamin'] ?></td>
            <td><?php echo $a['waktu'] ?></td>
            <td><?php echo $a['keperluan'] ?></td>
            

        <?php
    }
  }else{

    $tampil=$connect->query("select * from isidata where hari_tanggal between'$_GET[awal]' and '$_GET[akhir]'");
    while ($a=$tampil->fetch_array()){
      @$no++;
      ?>
      <tbody class="table">
<tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $a['nama'] ?></td>
            <td><?php echo $a['hari_tanggal'] ?></td>
            <td><?php echo $a['umur'] ?></td>
            <td><?php echo $a['no_ktp'] ?></td>
            <td><?php echo $a['jenis_kelamin'] ?></td>
            <td><?php echo $a['waktu'] ?></td>
            <td><?php echo $a['keperluan'] ?></td>

        <?php
    }
  }
    ?>
</tr>
  </table>
</fieldset>
<script type="text/javascript">
  function printDiv (el) {
    var a= document.body.innerHTML;
    var b= document.getElementById(el).innerHTML;

    document.body.innerHTML=b;
    window.print();
    dokument.body.innerHTML=a;
  }
</script>
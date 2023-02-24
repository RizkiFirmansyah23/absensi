<!-- SECTION/PAGE PERTAMA PADA HALAMAN SIDEBAR -->

<main> 
      <div class="text-start">
         <h3>Dashboard</h3>
        </div>
      <div class="info-data">
        <div class="card ">
            <div class="head">
              <div>
              <?php
                $sql = "SELECT COUNT(*) as jumlah FROM  tb_karyawan";
                $result = $connect->query($sql);
              
                $count=$result->fetch_assoc();
                  ?>
                 <h2 ><?php echo $count['jumlah'];?><br>
                 <span class="fs-6">karyawan</span></h2>
                 <i class='bx bxs-user icon' ></i>
                </div>
            </div>
            </div>
            <div class="card bg-warning">
            <div class="head">
                <div>
                <?php
                $sql = "SELECT COUNT(*) as jumlah FROM  tb_jabatan";
                $result = $connect->query($sql);
              
                $count=$result->fetch_assoc();
                  ?>
                 <h2 ><?php echo $count['jumlah'];?><br>
                 <span class="fs-6">Jabatan</span></h2>
                 <i class='bx bxs-data icon' ></i>
            </div>
            </div>
            </div>
            <div class="card bg-danger">
            <div class="head">
                <div >
                <?php
                $sql = "SELECT COUNT(*) as jumlah FROM  tb_shift  ";
                $result = $connect->query($sql);
              
                $count=$result->fetch_assoc();
                  ?>
                 <h2 ><?php echo $count['jumlah'];?><br>
                 <span class="fs-6">shift</span></h2>
                 <i class='bx bx-rotate-right icon' ></i>
            </div>
          </div>
        </div>
      </div>           
  </main>

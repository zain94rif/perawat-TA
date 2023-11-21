<?php

$judul = "Pesan"; 
  if(!isset($_SESSION['SES_LOGIN'])){
    echo"<meta http-equiv='refresh' content='0; url=login.php'>";
    exit;
  }

  if($_SESSION['SES_LEVEL'] == "Admin"){ //mengecek level user, halaman ini hanya dapat diakses oleh admin
  
 ?>
<h1 class="h3 mb-2 text-gray-800">Pesan Dari Perawat</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Isi Pesan</h6>   
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>                    
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Perihal</th>
                  <th>Pesan</th>
                  <th>Respon</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID</th>                    
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Perihal</th>
                  <th>Pesan</th>
                  <th>Respon</th>
                </tr>
              </tfoot>
              <tbody>
                <?php

                  	  $pesankah = "SELECT * FROM pesan ";
                      $myQry = mysqli_query($koneksi, $pesankah) or die ("Query Salah : ".mysqli_error($koneksi));
                      while($myData = mysqli_fetch_array($myQry)){
                        $id = $myData['id_pesan'];
                        $nama = $myData['nama'];
                        $perihal = $myData['perihal'];
                        $pesannya = $myData['pesannya'];
                        $tanggalan = $myData['tanggal_p'];
                        $respon = $myData['respon'];
                        if ($perihal == 1) $perihal = "Ubah Password";
                        if ($perihal == 2) $perihal = "Buatkan Akun";
                        if ($perihal == 3) $perihal = "Ganti Jadwal";
                ?>
                    <tr>
                      <td><?= $id ?></td>
                      <td><?= $nama ?></td>
                      <td><?= $tanggalan ?></td>
                      <td><?= $perihal ?></td>
                      <td><?= $pesannya ?></td>
                      <td align="center">
                        <?php if ($respon == 1) {?>
                          <h6 style="color:blue"> Telah direspon </h5>
                        <?php } else {?>
                          <a class="btn btn-primary btn-sm" href="?Open=Pes&id=<?= $id ?>"><i class="fas fa-check"></i></a>
                        <?php } ?>
                      </td>
                    </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

<?php } else {?>

  <!-- <h1 class="h3 mb-2 text-gray-800">Pesan Milik Anda</h1> -->
  <h1 class="h3 mb-2 text-gray-800">Pesan Ubah Password</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Isi Pesan <?= $nima ?></h6>   
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>                    
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Perihal</th>
                  <th>Pesan</th>
                  <th>Respon</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID</th>                    
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Perihal</th>
                  <th>Pesan</th>
                  <th>Respon</th>
                </tr>
              </tfoot>
              <tbody>
                <?php

                      $pesankah = "SELECT * FROM pesan WHERE nama = '$nima' ";
                      $myQry = mysqli_query($koneksi, $pesankah) or die ("Query Salah : ".mysqli_error($koneksi));
                      while($myData = mysqli_fetch_array($myQry)){
                        $id = $myData['id_pesan'];
                        $nama = $myData['nama'];
                        $perihal = $myData['perihal'];
                        $pesannya = $myData['pesannya'];
                        $tanggalan = $myData['tanggal_p'];
                        $respon = $myData['respon'];
                        if ($perihal == 1) $perihal = "Ubah Password";
                        if ($perihal == 2) $perihal = "Buatkan Akun";
                        if ($perihal == 3) $perihal = "Ganti Jadwal";
                ?>
                    <tr>
                      <td><?= $id ?></td>
                      <td><?= $nama ?></td>
                      <td><?= $tanggalan ?></td>
                      <td><?= $perihal ?></td>
                      <td><?= $pesannya ?></td>
                      <td align="center">
                        <?php if ($respon == 1) {?>
                          <h6 style="color:green"> Telah direspon </h5>
                        <?php } else {?>
                          <h6 style="color:red"> Belum direspon </h5>
                        <?php } ?>
                      </td>
                    </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

  <?php } ?>
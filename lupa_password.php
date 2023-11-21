<?php 
  ob_start();
  session_start();
  if(isset($_SESSION['SES_LOGIN'])){
    echo"<meta http-equiv='refresh' content='0; url=index.php'>";
    exit;
  }
    $judul="Halaman Lupa Password";
    include "tool/depan.php";

    date_default_timezone_set("Asia/Jakarta"); 
    $tangleng = date("Y-m-d"); 
?>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="img/RS_Syamrabu.jpg" alt="Image" height="400" width="460">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Mengirim Pesan pada Admin</h1>
            
                  </div>
                  <form class="pesanan" method="post">
                    <div class="form-group">
                      <select class="form-control" id="nama" name="nama" class="form-control" placeholder="Pilih User" required>
                            <option value="" selected>Pilih User</option>
                            <?php $dataper = "SELECT nama FROM perawat";
                                  $myQry2 = mysqli_query($koneksi, $dataper) or die ("Query Salah : ".mysqli_error($koneksi));
                                  while($myData2 = mysqli_fetch_array($myQry2)){
                                    $nama = $myData2['nama'];
                            ?>
                            <option value="<?= $nama; ?>"><?= $nama; ?></option>
                          <?php } ?>
                          </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control" id="perihal" name="perihal" class="form-control" placeholder="Perihal" required>
                            <option value="1" selected>Ubah Password</option>
                            <!-- <option value="2">Buatkan Akun</option>
                            <option value="3">Ganti Jadwal</option> -->
                          </select>
                    </div>
                    <div class="form-group">
                      <textarea type="text" name="pesannya" id="pesannya" class="form-control" placeholder="Pesan Untuk Admin" required></textarea>
                    </div>
                    <button type="submit" name="pesan" id="pesan" class="btn btn-primary btn-user btn-block">
                      Masuk
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="login.php">Anda Telah Memiliki Akun!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

<?php bawah(); ?>

</body>
<?php 
      if(isset($_POST['pesan'])){
          if(isset($_POST['nama'])){
            $nama=$_POST['nama'];
          }
          if(isset($_POST['perihal'])){
            $perihal=$_POST['perihal'];
          }
          if(isset($_POST['pesannya'])){
            $pesannya=$_POST['pesannya'];
          }
            $pesan = stripslashes($pesannya);
            $mysql = "INSERT INTO pesan VALUES ('',
                                                '$nama',
                                                '$perihal',
                                                '$pesan',
                                                '$tangleng',
                                                '0'
                       )";
            $myQry = mysqli_query($koneksi,$mysql) or die ("Gagal Query1" .mysqli_error($koneksi));
            
            if($myQry){
              echo"<meta http-equiv='refresh' content='0; url=lupa_password.php'>";            
            }
      }




 ?>

</html>

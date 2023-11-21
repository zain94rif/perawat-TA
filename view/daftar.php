<?php
$judul = "Data User";


  $maxsize=1100000;
  $allowed = array('png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG');

  if(!isset($_SESSION['SES_LOGIN'])){
    echo"<meta http-equiv='refresh' content='0; url=login.php'>";
    exit;
  }
  
  if($_SESSION['SES_LEVEL'] != "Admin"){ //mengecek level user, halaman ini hanya dapat diakses oleh admin
    echo"<meta http-equiv='refresh' content='0; url=index.php'>";
    exit;
  }

  ?>
		<h1 class="h3 mb-2 text-gray-800">Data User</h1>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <p class="mb-4">Berikut adalah data user yang terdaftar di </p>
      <div>
      <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahPerawat">
        <i class="fa fa-user"></i> Tambah Perawat 
      </a>
      <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahAdmin">
        <i class="fa fa-user"></i> Tambah User 
      </a>
    </div>
    </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>                    
                      <th>Nama</th>
                      <th>User Name</th>
                      <th>Jenis Kelamin</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>                    
                      <th>Nama</th>
                      <th>User Name</th>
                      <th>Jenis Kelamin</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      $datauser = "SELECT * FROM perawat";
                      $myQry = mysqli_query($koneksi, $datauser) or die ("Query Salah : ".mysqli_error($koneksi));
                      while($myData = mysqli_fetch_array($myQry)){
                        $id = $myData['id'];
                        $nama = $myData['nama'];
                        $user_name = $myData['user_name'];
                        $jenis_kelamin = $myData['jenis_kelamin'];
                        $alamat = $myData['alamat'];
                        $foto = $myData['foto'];
                        if ($user_name != NULL) {
                          $dataes= "SELECT user_name FROM user WHERE '$user_name' ";
                          $myQry1 = mysqli_query($koneksi, $dataes) or die ("Query Salah : ".mysqli_error($koneksi)); 
                          while($myData1 = mysqli_fetch_array($myQry1))
                          $user_name = $myData1['user_name'];
                        }
                        else $user_name = " ";
        
                    ?>
                        <tr>
                          <td><?= $id; ?></td>
                          <td>
                            <a href="#" data-toggle="modal" data-target="#diri_<?= $id ?>">
                              <?= $nama; ?></td>
                            </a>
                          <td><?= $user_name; ?></td>
                          <td><?= $jenis_kelamin; ?></td>
                          <td align="center">
                            <?php
                              $targetLihat = "ModalLihatSiswa".$id;
                              $targetDel = "ModalDeleteSiswa".$id;

                              $datcek = "SELECT * FROM perawat, user WHERE perawat.user_name = user.user_name AND perawat.id = '$id' ";
                              $myQry2 = mysqli_query($koneksi, $datcek) or die ("Query Salah : ".mysqli_error($koneksi));
                              if(mysqli_fetch_array($myQry2)){
                            ?>
                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#<?php echo $targetLihat?>">
                              <i class="fa fa-key"></i> ubah password
                            </a>
                              <?php } ?>
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#<?php echo $targetDel?>">
                                  <i class="fa fa-trash"></i> Hapus Perawat
                                </a>

                                <!-- Data Diri Perawat-->
                              <div class="modal fade" id="diri_<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Data Diri <?= $nama ?></h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                    <form id="Form" method="post" enctype="multipart/form-data">
                                    <div class="modal-body" id="modal-edit"  style="text-align: left;">
                                      <center>
                                          <img src="<?= $foto ?>" style="height: 160px;">
                                          <hr>                                          
                                        </center>            
                                      <div class="form-row">
                                        <div class="col-md-12">
                                          <label class="control-label" for="pass"><?= $alamat ?></label>
                                        </div>
                                      </div>
                                    </div>                                      
                                      <div class="modal-footer">                          
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                          <!-- End of Data Diri Perawat-->

                                <!-- Delete User Modal-->
                                  <div class="modal hide fade" id="<?php echo $targetDel?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Hapus?</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                          </button>
                                        </div>
                                        <div class="modal-body" style="text-align: left;">Klik "Hapus" dibawah jika anda ingin menghapus data ini.</div>
                                      <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                        <a class="btn btn-primary" href="?Open=Hapus-Perawat&id=<?= $id; ?>">Hapus</a>
                                      </div>
                                      </div>
                                    </div>
                                  </div>
                                <!-- End of Delete User Modal-->

                            <!-- Lihat User Modal-->
                              <div class="modal fade" id="<?php echo $targetLihat?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Ubah Password <?= $user_name ?></h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                    <form id="Form" method="post" enctype="multipart/form-data">
                                    <div class="modal-body" id="modal-edit"  style="text-align: left;">            
                                      <div class="form-row">
                                        <div class="col-md-12">
                                          <label class="control-label" for="pass">Password :</label>
                                          <input name="pass" class="form-control" id="pass" type="password" placeholder="Password" required>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-body" id="modal-edit"  style="text-align: left;">            
                                      <div class="form-row">
                                        <div class="col-md-12">
                                          <label class="control-label" for="pass2">Password :</label>
                                          <input name="pass2" class="form-control" id="pass2" type="password" placeholder="Password Ulang" required>
                                        </div>
                                      </div>
                                    </div>                                       
                                      <div class="modal-footer">
                                        <button type="submit" name="buttonsubmit" id="buttonsubmit" value="<?= $user_name ?>" class="btn btn-primary btn-user">Simpan Perubahan</button>                           
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                          <!-- End of Edit User Modal-->
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

          <div class="modal fade" id="tambahPerawat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Perawat</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form id="Form" method="post" enctype="multipart/form-data">
                <div class="modal-body" id="modal-edit"  style="text-align: left;">            
                      <div class="form-row">
                        <div class="col-md-12">
                          <label class="control-label" for="nama">Nama Perawat :</label>
                          <input name="nama" class="form-control" id="nama" type="text" placeholder="Nama Perawat" onkeypress="return (event.charCode > 47 && event.charCode < 58) || (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                        </div>
                      </div>
                    </div>
                    <div class="modal-body" id="modal-edit"  style="text-align: left;">            
                      <div class="form-row">
                        <div class="col-md-12">
                          <label class="control-label" for="jk">Jenis Kelamin :</label>
                          <select class="form-control" id="jk" name="jk" placeholder="Jenis Kelamin" required>
                            <option value="" selected>Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  <div class="modal-body" id="modal-edit"  style="text-align: left;">            
                      <div class="form-row">
                        <div class="col-md-12">
                          <label class="control-label" for="alamat">Alamat Perawat:</label>
                          <input name="alamat" class="form-control" id="alamat" type="textarea" placeholder="Alamat Perawat" required>
                        </div>
                      </div>
                    </div>
                  <div class="modal-body" id="modal-edit"  style="text-align: left;">            
                      <div class="form-row">
                        <div class="col-md-12">
                          <label class="control-label" for="foto">Foto Perawat:</label>
                          <input type="file" class="form-control" id="foto" name="foto" required>
                        </div>
                      </div>
                    </div>                                                                                
                  <div class="modal-footer">
                    <input type="submit" name="buttonPerawat" id="buttonPerawat" value="Tambah Perawat" class="btn btn-primary btn-user">                              
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form id="Form" method="post" enctype="multipart/form-data">
                <div class="modal-body" id="modal-edit"  style="text-align: left;">            
                      <div class="form-row">
                        <div class="col-md-12">
                          <label class="control-label" for="id">Id :</label>
                          <input name="id" class="form-control" id="id" type="text" placeholder="Id User" onkeypress="return (event.charCode > 47 && event.charCode < 58) || (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                        </div>
                      </div>
                    </div>
                  <div class="modal-body" id="modal-edit"  style="text-align: left;">            
                      <div class="form-row">
                        <div class="col-md-12">
                          <label class="control-label" for="user">User :</label>
                          <select class="form-control" id="user" name="user" placeholder="Pilih User" required>
                            <option value="" selected>Pilih User</option>
                            <?php $dataper = "SELECT * FROM perawat WHERE user_name = ''";
                                  $myQry2 = mysqli_query($koneksi, $dataper) or die ("Query Salah : ".mysqli_error($koneksi));
                                  while($myData2 = mysqli_fetch_array($myQry2)){
                                    $id1 = $myData2['id'];
                                    $id2 = $myData2['nama'];
                            ?>
                            <option value="<?= $id1; ?>"><?= $id2; ?></option>
                          <?php }?>
                          </select>
                        </div>
                      </div>
                    </div>   
                  <div class="modal-body" id="modal-edit"  style="text-align: left;">            
                      <div class="form-row">
                        <div class="col-md-12">
                          <label class="control-label" for="pass">Password :</label>
                          <input name="pass" class="form-control" id="pass" type="password" placeholder="Password" required>
                        </div>
                      </div>
                    </div>
                    <div class="modal-body" id="modal-edit"  style="text-align: left;">            
                      <div class="form-row">
                        <div class="col-md-12">
                          <label class="control-label" for="pass2">Password :</label>
                          <input name="pass2" class="form-control" id="pass2" type="password" placeholder="Password Ulang" required>
                        </div>
                      </div>
                    </div>
                    <div class="modal-body" id="modal-edit"  style="text-align: left;">            
                      <div class="form-row">
                        <div class="col-md-12">
                          <label class="control-label" for="status">Status :</label>
                          <select class="form-control" id="status" name="status" placeholder="Status">
                            <option value="0" selected>Status</option>
                            <option value="1">Admin</option>
                            <option value="0">Perawat</option>
                          </select>
                        </div>
                      </div>
                    </div>                                                                                
                  <div class="modal-footer">
                    <input type="submit" name="buttonTambah" id="buttonTambah" value="Tambah Admin" class="btn btn-primary btn-user">                              
                  </div>
                </form>
              </div>
            </div>
          </div>
<?php 

        if(isset($_POST['buttonTambah'])){
          if(isset($_POST['id'])){
            $id=$_POST['id'];
          }
          if(isset($_POST['pass'])){
            $pass=$_POST['pass'];
          }
          if(isset($_POST['pass2'])){
            $pass2=$_POST['pass2'];
          }
          if(isset($_POST['user'])){
            $nama=$_POST['user'];
          }
          if(isset($_POST['status'])){
            $status=$_POST['status'];
          }

            $username = strtolower(stripslashes($id));
            $password = mysqli_real_escape_string($koneksi, $pass);
            $passwordr = mysqli_real_escape_string($koneksi, $pass2);

            if ($password != $passwordr){
              echo "<script type='text/javascript'>
                  alert('Semua data harus terisi. Silahkan login ulang');
                  </script>
                  <meta http-equiv='refresh' content='0; url=?Open=Data-User'>";
                  exit;  
            }

          $password = password_hash($password, PASSWORD_DEFAULT);

          $mysql = "INSERT INTO user VALUES ('$username',
                                             '$password',
                                             '$status'
                       )";
          $mysql1 = "UPDATE perawat SET user_name = '$username' WHERE id = '$nama';";

          $myQry = mysqli_query($koneksi,$mysql) or die ("Gagal Query1" .mysqli_error($koneksi));
          $myQr1 = mysqli_query($koneksi,$mysql1) or die ("Gagal Query1" .mysqli_error($koneksi));
          if($myQry && $myQr1){
            echo"<meta http-equiv='refresh' content='0; url=?Open=Data-User'>";            
          }

        }

        if(isset($_POST['buttonPerawat'])){
          if(isset($_POST['nama'])){
            $nama=$_POST['nama'];
          }
          if(isset($_POST['jk'])){
            $jk=$_POST['jk'];
          }
          if(isset($_POST['alamat'])){
            $alamat=$_POST['alamat'];
          }

          $nama = strtolower(stripslashes($nama));
          if ($jk == "L") $jk = "laki-laki";
          if ($jk == "P") $jk = "perempuan";

          if (file_exists("img/perawat/foto_" . $nama . ".png")) {
            unlink("img/perawat/foto_" . $nama . ".png");
          }
          if (file_exists("img/perawat/foto_" . $nama . ".jpg")) {
            unlink("img/perawat/foto_" . $nama . ".jpg");
          }
          if (file_exists("img/perawat/foto_" . $nama . ".jpeg")) {
            unlink("img/perawat/foto_" . $nama . ".jpeg");
          }

          $foto_perawat = $_FILES['foto'];
          $foto_perawatname = $_FILES['foto']['name'];
          $foto_perawattype = $_FILES['foto']['type'];
          $foto_perawattmp = $_FILES['foto']['tmp_name'];
          $foto_perawatsize = $_FILES['foto']['size'];
          $foto_perawaterror = $_FILES['foto']['error'];

          $foto_perawatext = explode('.', $foto_perawatname);
          $foto_perawatactualext = strtolower(end($foto_perawatext));
          $foto_perawatnamenew="foto_".$foto_perawatactualext;
          $foto_perawatdestination = 'img/perawat/'.$foto_perawatnamenew;

          if (in_array($foto_perawatactualext, $allowed)) {
            if ($foto_perawatsize<=$maxsize) {
              move_uploaded_file($foto_perawattmp, $foto_perawatdestination);
              if (file_exists($foto_perawatdestination)) {
                  $mysql = "INSERT INTO perawat VALUES ('',
                                                        '$nama',
                                                        '',
                                                        '$jk',
                                                        '$alamat',
                                                        '$foto_perawatdestination'
                               )";
                  $myQry = mysqli_query($koneksi,$mysql) or die ("Gagal Query1" .mysqli_error($koneksi));
                  echo $mysql;
                  if($myQry){
                    echo"<meta http-equiv='refresh' content='0; url=?Open=Data-User'>";            
                  }
                ?>
                <script type="text/javascript">
                  alert("Data Berhasil Ditambahkan");
                </script>
                <?php
              }
            } else {
              ?>
              <script type="text/javascript">
                alert("Ukuran file terlalu besar. Upload file dengan ukuran tidak lebih dari 1MB.");
              </script>
              <?php
            }
          } else {
            ?>
            <script type="text/javascript">
              alert("Ekstensi file tidak diijinkan. Upload file berekstensi PNG, atau JPG.");
            </script>
            <?php
          }         

        }

        if(isset($_POST['buttonsubmit'])){
          $kata=$_POST['buttonsubmit'];

          if(isset($_POST['pass'])){
            $pass=$_POST['pass'];
          }
          if(isset($_POST['pass2'])){
            $pass2=$_POST['pass2'];
          }

            $username = $kata;
            $password = mysqli_real_escape_string($koneksi, $pass);
            $passwordr = mysqli_real_escape_string($koneksi, $pass2);

            if ($password != $passwordr){
              echo "<script type='text/javascript'>
                  alert('Semua data harus terisi. Silahkan login ulang".$username."');
                  </script>
                  <meta http-equiv='refresh' content='0; url=?Open=Data-User'>";
                  exit;  
            }

          $password = password_hash($password, PASSWORD_DEFAULT);

          $mysql = "UPDATE user SET password = '$password' WHERE user_name = '$username' ;";
          $myQry = mysqli_query($koneksi,$mysql) or die ("Gagal Query1" .mysqli_error($koneksi));
          if($myQry){
            echo"<meta http-equiv='refresh' content='0; url=?Open=Data-User'>";            
          }

        }


?>
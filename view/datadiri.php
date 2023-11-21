<?php
$judul = "Data User"; 
  if(!isset($_SESSION['SES_LOGIN'])){
    echo"<meta http-equiv='refresh' content='0; url=login.php'>";
    exit;
  }
  ?>
		<h1 class="h3 mb-2 text-gray-800">Data User</h1>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <p class="mb-4">Berikut Adalah data anda <?= $nima  ?></p>
      <div>
      <!-- <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahPerawat">
        <i class="fa fa-user"></i> Pesan Untuk Admin 
      </a> -->
    </div>
    </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data <?= $nima ?></h6>
              
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
                      $datauser = "SELECT * FROM perawat WHERE id = '$dat' ";
                      $myQry = mysqli_query($koneksi, $datauser) or die ("Query Salah : ".mysqli_error($koneksi));
                      while($myData = mysqli_fetch_array($myQry)){
                        $id = $myData['id'];
                        $nama = $myData['nama'];
                        $user_name = $myData['user_name'];
                        $jenis_kelamin = $myData['jenis_kelamin'];
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
                          <td><?= $nama; ?></td>
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

          <!-- File Hidden -->
        <div class="modal fade" id="tambahPerawat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Pesan Pada Admin</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form id="Form" method="post" enctype="multipart/form-data">
                    <div class="modal-body" id="modal-edit"  style="text-align: left;">            
                      <div class="form-row">
                        <div class="col-md-12">
                          <label class="control-label" for="jk">Perihal :</label>
                          <select class="form-control" id="perihal" name="perihal" class="form-control" placeholder="Perihal" required>
                            <option value="1">Ubah Password</option>
                            <option value="2">Buatkan Akun</option>
                            <option value="3">Ganti Jadwal</option>
                          </select>
                        </div>
                      </div>
                    </div>                                                                                
                    <div class="modal-body" id="modal-edit"  style="text-align: left;">            
                      <div class="form-row">
                        <div class="col-md-12">
                          <label class="control-label" for="jk">Pesan secara Perinci :</label>
                          <textarea type="text" name="pesannya" id="pesannya" class="form-control" placeholder="Pesan Untuk Admin" required></textarea>
                        </div>
                      </div>
                    </div>                                                                                                    
                  <div class="modal-footer">
                    <input type="submit" name="buttonPerawat" id="buttonPerawat" value="Kirim Pesan" class="btn btn-primary btn-user">                              
                  </div>
                </form>
              </div>
            </div>
          </div>
<?php 

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
            echo"<meta http-equiv='refresh' content='0; url=?Open=Data_Diri'>";            
          }

        }



        if(isset($_POST['buttonPerawat'])){
          if(isset($_POST['perihal'])){
            $perihal=$_POST['perihal'];
          }
          if(isset($_POST['pesannya'])){
            $pesannya=$_POST['pesannya'];
          }
            $nama = $nima;
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
              echo"<meta http-equiv='refresh' content='0; url=?Open=Data_Diri'>";            
            }
      }

?>
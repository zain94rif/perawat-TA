<?php 

  if(!isset($_SESSION['SES_LOGIN'])){
    echo"<meta http-equiv='refresh' content='0; url=login.php'>";
    exit;
  }
function bulanan($a){
    if ($a == 1)     $b = 'Januari';
    elseif ($a == 2) $b = 'Februari';
    elseif ($a == 3) $b = 'Maret';
    elseif ($a == 4) $b = 'April';
    elseif ($a == 5) $b = 'Mei';
    elseif ($a == 6) $b = 'Juni';
    elseif ($a == 7) $b = 'Juli';
    elseif ($a == 8) $b = 'Agustus';
    elseif ($a == 9) $b = 'September';
    elseif ($a == 10) $b = 'Oktober';
    elseif ($a == 11) $b = 'November';
    elseif ($a == 12) $b = 'Desember';
    else $b = 'Bulan Depan';
    return $b;
  }
 ?>
<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="<?= $foto; ?>" style="width: 90%; height: 100%;">
        </div>
        <div class="sidebar-brand-text mx-3"><sup>RS</sup>SYAMRABU</div>
      </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
      <?php
        if($_SESSION['SES_LEVEL']=="Admin"){ //mengecek level user, halaman ini hanya dapat diakses oleh admin
          // Data milik Admin
      ?>
      Dashboard Admin
    </div>

    <li class="nav-item">
      <a class="nav-link" href="?Open=Data-User">
        <i class="fas fa-fw fa-user"></i>
        <span>Data Perawat</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?Open=Pesan-D">
        <i class="fas fa-envelope"></i>
        <span>Perawat Ubah Password</span></a>
    </li>
    
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
      Sistem
    </div>

    <li class="nav-item">
      <a class="nav-link" href="?Open=Penjadwalan">
        <i class="fas fa-calendar-alt"></i>
        <span>Penjadwalan</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?Open=Manual">
        <i class="fas fa-fw fa-clock"></i>
        <span>Jadwal Manual</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-book"></i>
        <span>Jadwal Yang Ada</span>
      </a>
      <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <?php
          for ( $i = 2020; $i <= 2025; $i++){
            $mySql = "SELECT * FROM jadwal WHERE tanggal LIKE '$i%'";
            $myQry = mysqli_query($koneksi, $mySql) or die ("Query Salah : ".mysqli_error($koneksi));
            if (mysqli_num_rows($myQry) > 0){
              echo '<h6 class="collapse-header">  '.$i.' : </h6>';
              for ($j = 1; $j <= 12; $j++){
                if ($j < 10 ) $o = '0'.$j;
                else $o = $j;
                $k = $i.'_'.$o.'_1';
                $mySql2 = "SELECT * FROM jadwal WHERE tanggal LIKe '$k%'";
                $myQry2 = mysqli_query($koneksi, $mySql2) or die ("Query Salah : ".mysqli_error($koneksi));
                if (mysqli_num_rows($myQry2) > 0)
                  { echo '<a class="collapse-item" href="?Open=Terjadwal&tahun='.$i.'&bulan='.$o.'">'.bulanan($j).'</a>';
                }
              }
            }
          }
           ?>
        </div>
      </div>
    </li>
      <?php } 
else // Data yang digunakan Perawat
      {
        $nima = strtoupper($_SESSION['SES_NAME']);
        $mySql = "SELECT * FROM perawat WHERE nama='$nima' ";
        $myQry = mysqli_query($koneksi, $mySql) or die ("Query Salah : ".mysqli_error($koneksi));
        while($myData = mysqli_fetch_array($myQry)){
            $dat = $myData['id'];
        }

        ?>
         Dashboard Perawat
    </div>

    <li class="nav-item">
      <a class="nav-link" href="?Open=Data_Diri">
        <i class="fas fa-fw fa-user"></i>
        <span>Data Perawat</span></a>
    </li>
<!--     <li class="nav-item">
      <a class="nav-link" href="?Open=Pesan-D">
        <i class="fas fa-envelope"></i>
        <span>Pesan Anda</span></a>
    </li> -->

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
      Jadwal yang Ada
    </div>

    <li class="nav-item">
      <a class="nav-link" href="?Open=Terjadwal_User&tahun=<?= $tahun ?>&bulan=<?= $moon ?>">
        <i class="fas fa-fw fa-clock"></i>
        <span>Penjadwalan</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-book"></i>
        <span>Jadwal Yang Ada</span>
      </a>
      <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <?php
          for ( $i = 2020; $i <= 2025; $i++){
            $mySql = "SELECT * FROM jadwal WHERE tanggal LIKE '$i%'";
            $myQry = mysqli_query($koneksi, $mySql) or die ("Query Salah : ".mysqli_error($koneksi));
            if (mysqli_num_rows($myQry) > 0){

              echo '<h6 class="collapse-header">  '.$i.' : </h6>';
              for ($j = 1; $j <= 12; $j++){
                if ($j < 10 ) $o = '0'.$j;
                else $o = $j;
                $k = $i.'_'.$o.'_1';
                $mySql2 = "SELECT * FROM jadwal WHERE tanggal LIKe '$k%'";
                $myQry2 = mysqli_query($koneksi, $mySql2) or die ("Query Salah : ".mysqli_error($koneksi));
                if (mysqli_num_rows($myQry2) > 0){
                  echo '<a class="collapse-item" href="?Open=Indiv&tahun='.$i.'&bulan='.$o.'&user='.$dat.'">'.bulanan($j).'</a>';
                }
              }
              
            }
          }
          echo '</div></div></li>';
           ?>
      <?php } ?>

    </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>

              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?php 
                    if ($_SESSION['SES_LEVEL'] == "Admin") echo "[".$_SESSION['SES_LEVEL']."] ";
                    echo strtoupper($_SESSION['SES_NAME']); ?>
                </span>
                <img class="img-profile rounded-circle" src="<?= $foto; ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="?Open=Logout" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


          
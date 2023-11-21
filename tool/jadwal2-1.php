 <?php 
    include "koneksi.php";
    date_default_timezone_set("Asia/Jakarta"); 
    $tahun = date("Y");
    if(isset($_POST)){
      $bulan = $_POST['bulan'];
      $pagi = $_POST['pagi'];
      $siang = $_POST['siang'];
      $malam = $_POST['malam'];

      $bul = $bulan;
    }
  ?>
 <form action="get">
 <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered align-items-left" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <?php tanggal($bul) ?>
        </thead>
        <tfoot>
          <?php tanggal($bul) ?>
        </tfoot>
        <tbody>
 <?php
    $mySql = "SELECT * FROM perawat";
    $myQry = mysqli_query($koneksi, $mySql) or die ("Query Salah : ".mysqli_error($koneksiDb));
    $b = 1;
    $di = 1;
    $jum = mysqli_num_rows($myQry);
    while($myData = mysqli_fetch_array($myQry)){
        $id = $myData['id'];
        $nama = $myData['nama'];  
    $data = array();
    $shift = array();
    $a = 1;
    $c = 1;
    $y = 1;

    $konp= $pagi; $kons= $siang; $konm= $malam;
    $kon1=$konp+$kons;
    $kon2=$kon1+$konm;
    
    for ($x = 1; $x <= $bul ; $x++){ //Banyaknya hari dalam satu bulan
      for ($z = 1; $z <= $jum; $z++){ // Banyaknya perawat yang ditugaskan dalam ruangan tersebut
        if ($z >= 1 && $z <= $konp) {$data[$x][$y] = "P"; $c++; } // Perwat yang masuk pada Shift Pagi (4)
        else if ($z >= $konp+1 && $z <= $kon1) {$data[$x][$y] = "S"; $c++; }  // Perwat yang masuk pada Shift Siang (3)
        else if ($z >= $kon1+1 && $z <= $kon2) {$data[$x][$y] = "M"; $c++; } // Perwat yang masuk pada Shift Malam (3)
        else $data[$x][$y] = "L";

          $y++;
          if ($y >= $jum+1) $y = 1;
          if ($c >= $jum+1) $c = 1;
      }

      for ($e = 1; $e <= $jum; $e++){
        $shift[$a] = $data[$x][$e];
        $a++;
      }
      $y = $c;
    }   
   ?>
                    <tr>
                      <td><?php echo $di; ?></td>
                      <td><?php echo $nama; ?></td>
                      <?php
                        hasil($shift, $b, $jum, $bul); ?>
                    </tr>
     <?php 
        $b++;
        $di++; 
      } 
// echo "<div id='masuk'>".ulang($bulan, $tahun, $data, $jum)."</div>";
      ?>                    
                  </tbody>
                </table>
              </div>
            </div>
          </form>
        <a type="button" href="tool/jalankan.php?id=<?= ulang($bulan, $tahun, $data, $jum); ?>" name="tambah" id="tambah" class="btn btn-primary btn-user">tambahhhh</a>

    <?php
      // $masuk= $_POST['masuk'];
      //       }
      //   }
       // $datas = $masuk;
       // echo $datas;

    
    // $datas = {
    //   echo "INSERT INTO jadwal VALUES ";
    //   for ($y = 1; $y <= $jum ; $y++){
    //     $tang = $bulan."_".$tahun."_".$y;
    //     echo "('".$tang."','".$y."'";
    //     for ($x = 1; $x <= $bulan ; $x++){
    //             echo ",'".$data[$x][$y]."'";
    //           }
    //     if ($bulan == 28) echo ",NULL, NULL, NULL";
    //     if ($bulan == 29) echo ",NULL, NULL";
    //     if ($bulan == 30) echo ",NULL";
    //     echo ")";
    //     if ($y < $jum) { echo ", "; }
    //     }
    //   echo ";";
    // }
    // echo $datas;
    // $myQry = mysqli_query($koneksi, $datas) or die ("Gagal Query1" .mysqli_error($koneksi));
    //       if($myQry){
    //         echo"<meta http-equiv='refresh' content='0; url=index.php'>"; //merefresh halaman dan kembali ke halaman data-buku           
    //       }

    function tanggal($bul){
    echo "<tr>
      <th>ID</th>
      <th>Nama</th>";
    for ($i = 1; $i <= $bul ; $i++){ 
          echo "<th>". $i ."</th>";
      }
    echo "
    <th>Pagi</th> <th>Siang</th> <th>Malem</th>
    <th>Beban Kerja</th> <th>Libur</th>
    </tr>";
    }

    function hasil($shift, $b, $jum, $bul){
    $i = $b;
    $p = 0; $s=0; $m=0; $l=0;
    for ($j = 1; $j <= $bul ; $j++){
        if  ($shift[$b] == "P") {$f = "bgcolor='red'"; $p++;}
        else if  ($shift[$b] == "S") {$f = "bgcolor='yellow'"; $s++;}
        else if  ($shift[$b] == "M") {$f = "bgcolor='green'"; $m++;}
        else {$f = "bgcolor= 'white'"; $l++;}
        echo "<td id='u-".$j."-".$i."' ".$f.">". $shift[$b] ."</td>";
        $b+=$jum;
      }
    $j=$p+$s+$m;
    echo "<td>". $p ."</td>";
    echo "<td>". $s ."</td>";
    echo "<td>". $m ."</td>";
    echo "<td>". $j ."</td>";
    echo "<td>". $l ."</td>";
    }

    function ulang($bulan, $tahun, $data, $jum){
      $tam = array();
      $a = 1;
      $tam[1] = "INSERT INTO jadwal VALUES ";
      $a++;
      for ($y = 1; $y <= $jum ; $y++){
        $tang = $bulan."_".$tahun."_".$y;
        $tam[$a] = "('".$tang."','".$y."'";
        $a++;
        for ($x = 1; $x <= $bulan ; $x++){
                $tam[$a] = ",'".$data[$x][$y]."'";
                $a++;
              }
        if ($bulan == 28) { $tam[$a] = ",NULL, NULL, NULL"; $a++; }
        if ($bulan == 29) { $tam[$a] = ",NULL, NULL"; $a++; }
        if ($bulan == 30) { $tam[$a] = ",NULL"; $a++; }
        $tam[$a] = ")";
        $a++;
        if ($y < $jum) { $tam[$a] = ", "; $a++; }
        }
      $tam[$a] = ";";
      $tam[0] = "";
      for ($z = 1; $z <=$a ; $z++){
        $myq = $tam[$z-1]."".$tam[$z];
        $tam[$z] = $myq;
      }
    // return $tam[$a+1];
    return $myq;
    
    }

    // if (isset($_GET['tambah'])){
      // echo "berhasil";
      // $datas = ulang($bulan, $tahun, $data, $jum);
      // $myQry = mysqli_query($koneksi, $datas) or die ("Gagal Query1" .mysqli_error($koneksi));
      //     if($myQry){
      //       echo"<meta http-equiv='refresh' content='0; url=index.php'>"; //merefresh halaman dan kembali ke halaman data-buku           
      //     } 

    // }
      // for ($y = 1; $y <= $jum ; $y++){
      //   for ($x = 1; $x <= $bulan ; $x++){
              // if (isset($_POST['masuk']))
              // $masuk= $_POST['masuk'];
      //       }
        // }
    ?>
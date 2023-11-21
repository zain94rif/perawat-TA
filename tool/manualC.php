<!-- <div id="ok"> -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Jadwal Manual</h1>
      <a href="#" class="btn btn-primary btn-user" data-toggle="modal" data-target="#grafik"> Grafik </a>
  </div>
<?php
  // include"tool/penjadwalan.php"; 
  if(!isset($_SESSION['SES_LOGIN'])){
    echo"<meta http-equiv='refresh' content='0; url=login.php'>";
    exit;
  }

  if($_SESSION['SES_LEVEL'] != "Admin"){ //mengecek level user, halaman ini hanya dapat diakses oleh admin
    echo"<meta http-equiv='refresh' content='0; url=index.php'>";
    exit;
  }
  $pag = 0;
  $sia = 0;
  $mal = 0;
  $beker = 0;
  $tolib = 0;

  $samp = array();
  $sams = array();
  $samm = array();
  $samt = array();
  $saml = array();
  $manual = array (   "L","S","P","S","P","L","M","L","S","S","P","P","S","L","P","S","S","P","P","P","M","L","P","S","P","L","M","L","L","S","S"
                      ,"S","S","M","M","L","L","P","M","M","L","L","S","L","P","L","S","P","S","S","M","M","L","L","P","S","S","P","M","M","L","L"
                      ,"L","L","S","S","P","P","S","M","L","S","M","M","L","L","P","P","S","M","M","L","L","P","P","M","M","L","L","P","P","P","M"
                      ,"M","M","L","L","S","P","M","M","L","L","P","P","M","M","L","L","P","P","M","M","L","L","S","S","P","M","M","L","L","P","S"
                      ,"L","L","P","P","M","M","L","P","P","P","S","S","S","M","M","L","L","L","P","L","M","M","L","L","S","P","S","S","M","M","L"
                      ,"P","P","S","M","L","L","S","S","M","M","L","L","P","S","S","M","M","L","L","P","P","S","M","M","L","L","P","P","S","S","P"
                      ,"M","L","P","P","P","S","M","M","L","L","P","S","P","S","M","M","L","L","P","S","S","M","M","L","L","P","S","S","S","P","S"
                      ,"P","P","S","M","M","M","L","L","P","S","S","M","M","L","S","P","M","L","L","P","P","S","S","M","M","L","L","P","S","M","L"
                      ,"S","M","M","L","L","P","P","S","P","M","M","L","L","P","P","S","S","M","M","L","L","P","P","P","S","M","M","L","L","P","P"
                      ,"M","L","L","P","S","P","P","L","M","M","L","L","S","P","L","P","S","S","S","S","L","P","S","S","P","S","M","M","L","L","P"
                      ,"L","P","S","S","M","M","M","L","L","P","S","P","M","M","L","L","P","P","S","S","S","M","M","L","L","P","M","L","P","M","L"
                      ,"S","M","M","L","L","S","S","P","S","P","M","M","L","S","P","S","M","M","L","L","S","S","P","P","M","M","L","L","P","S","M"
                      ,"P","S","L","P","S","S","S","S","S","M","M","L","L","P","S","P","L","S","S","M","M","L","S","P","P","M","L","M","M","L","L"
                      ,"P","S","P","S","P","L","P","L","P","P","S","S","P","S","M","M","L","L","P","P","P","S","L","M","L","P","P","M","L","M","M"
                      ,"L","S","P","S","P","L","M","L","S","S","P","P","S","L","P","S","S","P","P","P","M","L","P","S","P","L","M","L","L","S","S"
                      ,"S","S","M","M","L","L","P","M","M","L","L","S","L","P","L","S","P","S","S","M","M","L","L","P","S","S","P","M","M","L","L"
                      ,"L","L","S","S","P","P","S","M","L","S","M","M","L","L","P","P","S","M","M","L","L","P","P","M","M","L","L","P","P","P","M"
                      ,"M","M","L","L","S","P","M","M","L","L","P","P","M","M","L","L","P","P","M","M","L","L","S","S","P","M","M","L","L","P","S"
                      ,"L","L","P","P","M","M","L","P","P","P","S","S","S","M","M","L","L","L","P","L","M","M","L","L","S","P","S","S","M","M","L"
                      ,"P","P","S","M","L","L","S","S","M","M","L","L","P","S","S","M","M","L","L","P","P","S","M","M","L","L","P","P","S","S","P"
                      ,"M","L","P","P","P","S","M","M","L","L","P","S","P","S","M","M","L","L","P","S","S","M","M","L","L","P","S","S","S","P","S"
                      ,"P","P","S","M","M","M","L","L","P","S","S","M","M","L","S","P","M","L","L","P","P","S","S","M","M","L","L","P","S","M","L"
                      );
  ?>
    </div>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered align-items-left" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <?php tanggal() ?>
      </thead>
      <tfoot>
        <?php tanggal() ?>
      </tfoot>
      <tbody>
 <?php
    $mySql = "SELECT * FROM perawat WHERE id<=22";
    $myQry = mysqli_query($koneksi, $mySql) or die ("Query Salah : ".mysqli_error($koneksi));
    $q = 0;
    $t = 0;
    while($myData = mysqli_fetch_array($myQry)){
        $id = $myData['id'];
        $nama = $myData['nama'];
  ?>
            <tr>
              <td><?php echo $id; ?></td>
              <td><?php echo $nama; ?></td>
              <?php
              // hitung($t); 
    $p = 0; $s=0; $m=0; $l=0;
    for ($j = 1; $j <= 31; $j++){
        if  ($manual[$t] == "P") {$f = "bgcolor='red'"; $p++;}
        else if  ($manual[$t] == "S") {$f = "bgcolor='yellow'"; $s++;}
        else if  ($manual[$t] == "M") {$f = "bgcolor='green'"; $m++;}
        else {$f = "bgcolor= 'silver'"; $l++;}
        echo "<td ".$f.">". $manual[$t] ."</td>";
        $t++;
      }
    $w = "".($q+1);
    $j=$p+$s+$m;
    echo "<th id='p-".$w."'>". $p ."</th>";
    echo "<th id='s-".$w."'>". $s ."</th>";
    echo "<th id='m-".$w."'>". $m ."</th>";
    echo "<th id='j-".$w."'>". $j ."</th>";
    echo "<th id='l-".$w."'>". $l ."</th>";
      $simp[$q] = $p;
      $sims[$q] = $s;
      $simm[$q] = $m;
      $simt[$q] = $j;
      $siml[$q] = $l;
      $pag += $p;
      $sia += $s;
      $mal += $m;
      $beker += $j;
      $tolib += $l;
      // echo $simp[$q].'-'.$sims[$q].'-'.$simm[$q].'-'.$siml[$q].'   ';
              ?>
            </tr> 
            <?php 
              // $t+=31;
              $q++;
              }
          function tas($q, $bekerja){
            $beban = $bekerja/$q;
            $persen = ($beban/31)*100;
            return $persen;
          }
            ?>               
          </tbody>
        </table>
      </div>
    </div>

<div class="modal fade bd-example-modal-lg" id="grafik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Grafik Penjadwalan Perawat (Manual)</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form id="Form" method="post" enctype="multipart/form-data">
        <canvas id="line-chart" width="1600" height="1000"></canvas>
      </form>
    </div>
  </div>
</div>

<?php
    function tanggal(){
    echo "<tr>
      <th>ID</th>
      <th>Nama</th>";
    for ($i = 1; $i <= 31; $i++){ 
          echo "<th>". $i ."</th>";
      }
    echo "
    <th>Pagi</th> <th>Siang</th> <th>Malem</th>
    <th>Beban Kerja</th> <th>Libur</th>
    </tr>";
    }

    function hitung($t){
      
    }

?>
<script src="js/Chart/Chart.js"></script>
<?php
  if ( tas($q, $beker) >= 65 ) $hasil = "TIDAK OPTIMAL";
  else $hasil = "OPTIMAL";
?>
<script>
  new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [<?php 
              for ($i = 0; $i < $q; $i++) { 
                if ($i == ($q-1)) echo $i;
                else echo $i.",";
              }
               ?>
    ],
    datasets: [{
        data: [ <?php 
                for ($i = 0; $i < $q; $i++) { 
                  if ($i == ($q-1)) echo $simp[$i];
                  else echo $simp[$i].",";
                }
                 ?>
        ],
        label: "Pagi <?= substr(tas($q, $pag),0,5) ?>%",
        borderColor: "Red",
        fill: false
      }, { 
        data: [ <?php 
                for ($i = 0; $i < $q; $i++) { 
                  if ($i == ($q-1)) echo $sims[$i];
                  else echo $sims[$i].",";
                }
                 ?>
        ],
        label: "Siang <?= substr(tas($q, $sia),0,5) ?>%",
        borderColor: "Yellow",
        fill: false
      }, { 
        data: [ <?php 
                for ($i = 0; $i < $q; $i++) { 
                  if ($i == ($q-1)) echo $simm[$i];
                  else echo $simm[$i].",";
                }
                 ?>
        ],
        label: "Malam <?= substr(tas($q, $mal),0,5) ?>%",
        borderColor: "Green",
        fill: false
      }, { 
        data: [ <?php 
                for ($i = 0; $i < $q; $i++) { 
                  if ($i == ($q-1)) echo $simt[$i];
                  else echo $simt[$i].",";
                }
                 ?>
        ],
        label: "Beban Kerja",
        borderColor: "Blue",
        fill: false
      }, { 
        data: [ <?php 
                for ($i = 0; $i < $q; $i++) { 
                  if ($i == ($q-1)) echo $siml[$i];
                  else echo $siml[$i].",";
                }
                 ?>
        ],
        label: "Libur",
        borderColor: "Silver",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Dengan Beban Kerja <?= substr(tas($q, $beker),0,5) ?>% dan Libur <?= substr(tas($q, $tolib),0,5) ?>% (<?= $hasil ?>)'
    }
  }
});
</script>

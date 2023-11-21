<div id="ok">
<?php
  $judul = "Terjadwal"; 
  if(!isset($_SESSION['SES_LOGIN'])){
    echo"<meta http-equiv='refresh' content='0; url=login.php'>";
    exit;
  }

  if($_SESSION['SES_LEVEL'] != "Admin"){ //mengecek level user, halaman ini hanya dapat diakses oleh admin
    echo"<meta http-equiv='refresh' content='0; url=index.php'>";
    exit;
  }
  $tahun = $_GET['tahun'];
  $bulan = $_GET['bulan'];

  $proses = $tahun.'_'.$bulan;
  
  $kal = CAL_GREGORIAN;
  $bull = cal_days_in_month($kal, $bulan, $tahun);

  
  $samp = array();
  $sams = array();
  $samm = array();
  $samt = array();
  $saml = array();

  $pag = 0;
  $sia = 0;
  $mal = 0;
  $beker = 0;
  $tolib = 0;

  ?>
    </div>
  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Jadwal Bulan <?= bulanan($bulan).' '.$tahun ?></h1>
        <p id="hidden"><?= $proses?></p>
      <form id="Form" method="post" action="">
      <a href="#" class="btn btn-primary btn-user" data-toggle="modal" data-target="#grafik"> Grafik </a>
    <button type="submit" name="ubah" id="ubah" class="btn btn-success btn-user">Mengubah</button>
    <a href="#" class="btn btn-danger btn-user" data-toggle="modal" data-target="#del<?= $proses ?>"> Hapus </a>
  </div> 
        <!-- Delete User Modal-->
          <div class="modal hide fade" id="del<?= $proses ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Hapus?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body" style="text-align: left;">Klik "Hapus" dibawah jika anda ingin menghapus jadwal berikut.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="?Open=Hapus-Jadwal&id=<?= $proses ?>">Hapus</a>
              </div>
              </div>
            </div>
          </div>
        <!-- End of Delete User Modal-->
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
    $mySql = "SELECT * FROM jadwal, perawat WHERE jadwal.id_perawat = perawat.id AND jadwal.tanggal LIKE '$proses%' ORDER BY perawat.id ASC ";
    $myQry = mysqli_query($koneksi, $mySql) or die ("Query Salah : ".mysqli_error($koneksi));
    $q = 0;
    $re = array();
    $dat = array();
    while($myData = mysqli_fetch_array($myQry)){
        $id = $myData['id_perawat'];
        $tanggal = $myData['tanggal'];
        $nama = $myData['nama'];
        for ($t=1; $t <= 31 ; $t++) { 
          if ($t < 10) $dat[$t] = $myData['0'.$t];
          else $dat[$t] = $myData[$t];
        }
        $re[$q] = $id;
        // echo $re[$q];
  ?>
            <tr>
              <th id="id<?=$id?>"><?php echo $id; ?></th>
              <th><?php echo $nama; ?></th>
              <?php 
              // hitung($dat, $id, $q); 
                    $p = 0; $s=0; $m=0; $l=0;
                    for ($t = 1; $t <= 31; $t++){
                        if  ($dat[$t] == "P") {$f = "bgcolor='red'"; $p++;}
                        else if  ($dat[$t] == "S") {$f = "bgcolor='yellow'"; $s++;}
                        else if  ($dat[$t] == "M") {$f = "bgcolor='green'"; $m++;}
                        else {$f = "bgcolor= 'silver'"; $l++;}
                        if ($t < 10) $v = "0".$t;
                        else if ($t >= 10) $v = "".$t;
                        if ($id < 10) $n = "0".$id;
                        else if ($id >= 10) $n = "".$id;
                        echo "<td id='u-".$v."-".$n."' name='u-".$v."-".$n."' ".$f.">". $dat[$t] ."</td>";
                      }
                    $w = "".($q+1);
                    $j=$p+$s+$m;
                    echo "<th id='p-".$w."'>". $p ."</th>";
                    echo "<th id='s-".$w."'>". $s ."</th>";
                    echo "<th id='m-".$w."'>". $m ."</th>";
                    echo "<th id='j-".$w."'>". $j ."</th>";
                    echo "<th id='l-".$w."'>". $l ."</th>";
              ?>             
            </tr> 
            <?php
            // echo $p;
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
            // echo $simp[$q].'-'.$sims[$q].'-'.$simm[$q].'-'.$siml[$q];
              $q++;
              } 
            ?>               
          </tbody>
        </table>
      </div>
    </div>
    <?php  //echo $dat[2];?>
  </form>
</div>
<?php 
include"tool/chart.php";
function tas($q, $bekerja){
    $beban = $bekerja/$q;
    $persen = ($beban/31)*100;
    return $persen;
  }
 ?>

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
    </tr> ";
    }

    /*function hitung($dat, $id, $q){
    $p = 0; $s=0; $m=0; $l=0;
    for ($t = 1; $t <= 31; $t++){
        if  ($dat[$t] == "P") {$f = "bgcolor='red'"; $p++;}
        else if  ($dat[$t] == "S") {$f = "bgcolor='yellow'"; $s++;}
        else if  ($dat[$t] == "M") {$f = "bgcolor='green'"; $m++;}
        else {$f = "bgcolor= 'white'"; $l++;}
        if ($t < 10) $v = "0".$t;
        else if ($t >= 10) $v = "".$t;
        if ($id < 10) $n = "0".$id;
        else if ($id >= 10) $n = "".$id;
        echo "<td id='u-".$v."-".$n."' name='u-".$v."-".$n."' ".$f.">". $dat[$t] ."</td>";
      }
    $w = "".($q+1);
    $j=$p+$s+$m;
    echo "<th id='p-".$w."'>". $p ."</th>";
    echo "<th id='s-".$w."'>". $s ."</th>";
    echo "<th id='m-".$w."'>". $m ."</th>";
    echo "<th id='j-".$w."'>". $j ."</th>";
    echo "<th id='l-".$w."'>". $l ."</th>";
    $simp[$q] = $p;
    }
    */


?>

<script src="jquery/jquery.min.js"></script>
  <script>
    $(document).ready(function(){

      var pro = $("#hidden").text();
      $("#hidden").hide();

      var id = [];
      id[0] = 'teks';
      var i = 0;
      var x = "";
      var y = "";
      var z = "";
      $("td").click(function(){
        i++;
        id[i] = $(this).attr('id');
        x += id[i].substr(2, 2);
        y += id[i].substr(5, 2);
        if (i%6 == 1) {document.getElementById(id[i]).style.border = "thick solid #0000FF";}
        i++;
        id[i] = $(this).text();
        z += id[i];
        i++;
        id[i] = $(this).attr('bgcolor');
        // alert(' '+x+ ' ' +y+ ' ' +z);

        if (i%6 == 0){
          document.getElementById(id[i-5]).style.border = "";
            ke1 = document.getElementById(id[i-5]);
            ke1.style.backgroundColor = id[i];
            ke1.innerHTML = id[i-1];

            ke2 = document.getElementById(id[i-2]);
            ke2.style.backgroundColor = id[i-3];
            ke2.innerHTML = id[i-4];

          // alert (i);
          ke1 = "";
          ke2 = "";
        }
        return x, y, z;
      });

      $("#ubah").click(function(){
        $.post("view/ubah.php",{
            proses : pro,
            dx : x,
            dy : y,
            dz : z
        }, function(data, status){
          alert("data: "+data);
        }
        );
      });

    });
  </script>
<?php
  if ( tas($q, $beker) >= 65 ) $hasil = "TIDAK MERATA";
  else $hasil = "MERATA";
?>
<script src="js/Chart/Chart.js"></script>
<script>
  new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [<?php 
              for ($i = 0; $i < $q; $i++) { 
                if ($i == ($q-1)) echo $re[$i];
                else echo $re[$i].",";
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
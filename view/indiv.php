<div id="ok">
<?php
  $judul = "Jadwal Oktober"; 
  if(!isset($_SESSION['SES_LOGIN'])){
    echo"<meta http-equiv='refresh' content='0; url=login.php'>";
    exit;
  }

  $tahun = $_GET['tahun'];
  $bulan = $_GET['bulan'];
  $indiv = $_GET['user'];

  // echo $indiv;

  $proses = $tahun.'_'.$bulan.'_'.$indiv;
  ?>
    </div>
  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Jadwal Bulan <?= bulanan($bulan).' '.$tahun ?></h1>
        <p id="hidden"><?= $proses?></p>
      <form id="Form" method="post" action="">
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
    $mySql = "SELECT * FROM jadwal, perawat WHERE jadwal.id_perawat = perawat.id AND jadwal.tanggal = '$proses' ORDER BY perawat.id ASC ";
    $myQry = mysqli_query($koneksi, $mySql) or die ("Query Salah : ".mysqli_error($koneksi));
    $q = 1;
    $dat = array();
    while($myData = mysqli_fetch_array($myQry)){
        $id = $myData['id_perawat'];
        $tanggal = $myData['tanggal'];
        $nama = $myData['nama'];
        for ($t=1; $t <= 31 ; $t++) { 
          if ($t < 10) $dat[$t] = $myData['0'.$t];
          else $dat[$t] = $myData[$t];
        }
  ?>
            <tr>
              <th id="id<?=$id?>"><?php echo $id; ?></th>
              <th><?php echo $nama; ?></th>
              <?php hitung($dat, $id); ?>             
            </tr> 
            <?php 
              $q++;
              } 
            ?>               
          </tbody>
        </table>
      </div>
    </div>
    <?php  //echo $dat[2];?>
  </form>

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

    function hitung($dat, $id){
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
    $j=$p+$s+$m;
    echo "<th>". $p ."</th>";
    echo "<th>". $s ."</th>";
    echo "<th>". $m ."</th>";
    echo "<th>". $j ."</th>";
    echo "<th>". $l ."</th>";
    }


?>

<script src="jquery/jquery.min.js"></script>
  <script>
    $(document).ready(function(){

      var pro = $("#hidden").text();
      $("#hidden").hide();

    });
  </script>

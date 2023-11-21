<div id="ok">
<?php
  if(!isset($_SESSION['SES_LOGIN'])){
    echo"<meta http-equiv='refresh' content='0; url=login.php'>";
    exit;
  }
include "koneksi.php";
include "penjadwalan.php";
$judul = "Hasil Penjadwalan";  
    date_default_timezone_set("Asia/Jakarta"); 
    $tahun = date("Y");
    if(isset($_POST)) {
      $tah = $_POST['tahun'];
      $bula = $_POST['bulan'];
      $pagi = $_POST['pagi'];
      $siang = $_POST['siang'];
      $malam = $_POST['malam'];
    }
    $kal = CAL_GREGORIAN;
    $bulan = cal_days_in_month($kal, $bula, $tah);
    $bul = $bulan;
    ?>
        <div>
       <form id="Form" method="post" enctype="multipart/form-data" action="jalankan0.php"> 
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
    $myQry = mysqli_query($koneksi, $mySql) or die ("Query Salah : ".mysqli_error($koneksi));
    $b = 1;
    $di = 1;
    $bay = array();
    $jum = mysqli_num_rows($myQry);
    while($myData = mysqli_fetch_array($myQry)){
        $id = $myData['id'];
        $nama = $myData['nama'];
        $bay[$b] = $id;
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
      ?>                    
                  </tbody>
                </table>
              </div>
            </div>
          <button type="submit" name="tambah" id="tambah" value="<?= ulang($bulan, $tah, $data, $jum, $bula, $bay); ?> " class="btn btn-primary btn-user">tambahin</button>
        </form>  
      </div>
    </div>

    <?php

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

    function ulang($bulan, $tah, $data, $jum, $bula, $bay){
      $tam = array();
      $a = 1;
      $tam[1] = "INSERT INTO jadwal VALUES ";
      $a++;
      for ($y = 1; $y <= $jum ; $y++){
        $tang = $tah."_".$bula."_".$bay[$y];
        $tam[$a] = "('".$tang."','".$bay[$y]."'";
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


    ?>

  <script src="jquery/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#ubah").click(function(){
        var tah = $("#tahun").val();
        var bul = $("#bulan").val();
        var pag = $("#pagi").val();
        var sia = $("#siang").val();
        var mal = $("#malam").val();
        alert(''+tah);
        $.post("tool/jadwal2.php",{
          tahun: tah,
          bulan: bul,
          pagi: pag,
          siang: sia,
          malam: mal
        },function(data, status){
          $("#ok").html(data);
        });
      });
    });
  </script>
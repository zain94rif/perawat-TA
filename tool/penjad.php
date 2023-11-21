<div id="ok">
<?php
include "koneksi.php";
include "penjadwalan.php";
$judul = "Hasil Penjadwalan";  
    date_default_timezone_set("Asia/Jakarta"); 
    $tahun = date("Y");

      // $tah = $_POST['tahun'];
      // $bula = $_POST['bulan'];
      $pagi = 4;
      $siang = 3;
      $malam = 3;
      $kal = CAL_GREGORIAN;
      // $bulan = cal_days_in_month($kal, $bula, $tah);
      $bul = 31;

    ?>
        <div>
       <form id="Form" method="post" enctype="multipart/form-data" action="tool/jalankan0.php"> 
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
                        hasil($shift, $b, $jum, $bul);
                        
                          // $simp[$q] = $p;
                          // $sims[$q] = $s;
                          // $simm[$q] = $m;
                          // $simt[$q] = $j;
                          // $siml[$q] = $l;
                        ?>
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

<div class="modal fade bd-example-modal-lg" id="grafik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Grafik Penjadwalan </h5>
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
                            else {$f = "bgcolor= 'silver'"; $l++;}
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
        $.post("tool/jadwal3.php",{
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

  <script src="js/Chart/Chart.js"></script>
<script>
  // new Chart(document.getElementById("line-chart"), {
  // type: 'line',
  // data: {
  //   labels: [<?php 
  //             for ($i = 0; $i < $q; $i++) { 
  //               if ($i == ($q-1)) echo $re[$i];
  //               else echo $re[$i].",";
  //             }
  //              ?>
  //   ],
  //   datasets: [{
  //       data: [ <?php 
  //               for ($i = 0; $i < $q; $i++) { 
  //                 if ($i == ($q-1)) echo $simp[$i];
  //                 else echo $simp[$i].",";
  //               }
  //                ?>
  //       ],
  //       label: "Pagi",
  //       borderColor: "Red",
  //       fill: false
  //     }, { 
  //       data: [ <?php 
  //               for ($i = 0; $i < $q; $i++) { 
  //                 if ($i == ($q-1)) echo $sims[$i];
  //                 else echo $sims[$i].",";
  //               }
  //                ?>
  //       ],
  //       label: "Siang",
  //       borderColor: "Yellow",
  //       fill: false
  //     }, { 
  //       data: [ <?php 
  //               for ($i = 0; $i < $q; $i++) { 
  //                 if ($i == ($q-1)) echo $simm[$i];
  //                 else echo $simm[$i].",";
  //               }
  //                ?>
  //       ],
  //       label: "Malam",
  //       borderColor: "Green",
  //       fill: false
  //     }, { 
  //       data: [ <?php 
  //               for ($i = 0; $i < $q; $i++) { 
  //                 if ($i == ($q-1)) echo $simt[$i];
  //                 else echo $simt[$i].",";
  //               }
  //                ?>
  //       ],
  //       label: "Beban Kerja",
  //       borderColor: "Blue",
  //       fill: false
  //     }, { 
  //       data: [ <?php 
  //               for ($i = 0; $i < $q; $i++) { 
  //                 if ($i == ($q-1)) echo $siml[$i];
  //                 else echo $siml[$i].",";
  //               }
  //                ?>
  //       ],
  //       label: "Libur",
  //       borderColor: "Silver",
  //       fill: false
  //     }
  //   ]
  // },
  // options: {
  //   title: {
  //     display: true,
  //     text: 'Grafik Beban Kerja Perawat'
  //   }
  // }
  // });
</script>

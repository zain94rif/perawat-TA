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
    include "koneksi.php";
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

    $konp= 4; $kons=3; $konm=3;
    $kon1=$konp+$kons;
    $kon2=$kon1+$konm;
    
    for ($x = 1; $x <= 31; $x++){ //Banyaknya hari dalam satu bulan
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
                        hasil($shift, $b, $jum); ?>
                    </tr>
     <?php 
        $b++;
        $di++; 
      } ?>                    
                  </tbody>
                </table>
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

    function hasil($shift, $b, $jum){
    $i = $b;
    $p = 0; $s=0; $m=0; $l=0;
    for ($j = 1; $j <= 31; $j++){
        if  ($shift[$b] == "P") {$f = "bgcolor='red'"; $p++;}
        else if  ($shift[$b] == "S") {$f = "bgcolor='yellow'"; $s++;}
        else if  ($shift[$b] == "M") {$f = "bgcolor='green'"; $m++;}
        else {$f = "bgcolor= 'white'"; $l++;}
        echo '<td id="u-'.$j.'-'.$i.'"'.$f.'>'.$shift[$b].'</td>';
        $b+=$jum;
      }
    $j=$p+$s+$m;
    echo "<td>". $p ."</td>";
    echo "<td>". $s ."</td>";
    echo "<td>". $m ."</td>";
    echo "<td>". $j ."</td>";
    echo "<td>". $l ."</td>";
    }

    function rumus(){
      
    }
    ?>
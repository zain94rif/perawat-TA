<?php
include "../tool/koneksi.php";
// var_dump($_POST);
     if(isset($_POST)) {
      $f = $_POST['proses'];
      $g = $_POST['datanya'];
    }
    // echo $f.' '.$g;
    $tahun = substr($f,0,4);
    $bulan = substr($f,5);

    $kal = CAL_GREGORIAN;
    $bulang = cal_days_in_month($kal, $bulan, $tahun);
    $bul = $bulang;

    $mySql = "SELECT * FROM jadwal, perawat WHERE jadwal.id_perawat = perawat.id AND jadwal.tanggal LIKE '$f%' ORDER BY perawat.id ASC ";
    $myQry = mysqli_query($koneksi, $mySql) or die ("Query Salah : ".mysqli_error($koneksi));
    $jum = mysqli_num_rows($myQry);
    // echo $jum;

    $tam = array();
    $j = 0;
    $datas = "";

    for ($i = 1; $i <= $jum; $i++){
	    $bah = "";
	    if ($i >= 10) $k = 2;
	    else $k = 1;

	    for ($h=0; $h <= $bul; $h++) { 
	    	$dat = substr($g,($j+$h+($k-1)),1);
	    	// if ( $dat != 'P' || $dat != 'S' || $dat != 'M' || $dat != 'L' ) $whe = $f.'_'.$dat;
	    	if ($h == 0) $whe = $f.'_'.substr($g,($j+$h),$k);
	    	elseif ($h == $bul) $bah = $bah." `$h` = '$dat' ";
	    	else $bah = $bah." `$h` = '$dat',";
	    }
	    $tam[$i] = "UPDATE jadwal SET ".$bah." WHERE tanggal = '$whe' ;";
    	// echo $tam[$i];
    	$j += $bul+$k;
    	// $datas = $datas." ".$tam[$i];
    	// $datas = $tam[23];
    	$myQry2 = mysqli_query($koneksi, $tam[$i]) or die ("Gagal Query1" .mysqli_error($koneksi));
	}
	// $datas = $tam[1]." ".$tam[24];
	// echo $datas;
	// $myQry2 = mysqli_query($koneksi, $datas) or die ("Gagal Query1" .mysqli_error($koneksi));
          // if($myQry2){
            echo"<meta http-equiv='refresh' content='0; url=?Open=Oktober&tahun=2020&bulan=10'>"; //merefresh halaman dan kembali ke halaman data-buku           
          // }

    /*$h = 0;
    $dat = substr($g,$h,1);
    $h++;
    if ( $dat != 'P' || $dat != 'S' || $dat != 'M' || $dat != 'L' ) $whe = $f.'_'.$dat;
    	$tam = "UPDATE jadwal SET ";
    	$bah += $x." = '$dat', ";
    	$akh = "WHERE jadwal.tanggal = '$whe' ;";
*/
    /*
	$tam = array();
    $tam[1] = "UPDATE jadwal SET";
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
        $tam[$z] = $myq;*/

    //   $datas = ulang($bulan, $tahun, $data, $jum);
      // $myQry = mysqli_query($koneksi, $datas) or die ("Gagal Query1" .mysqli_error($koneksi));
          // if($myQry){
          //   echo"<meta http-equiv='refresh' content='0; url=?Open=Penjadwalan'>"; //merefresh halaman dan kembali ke halaman data-buku           
          // } 

   
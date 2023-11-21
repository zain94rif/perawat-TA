<?php
 // 	$mySql = "SELECT * FROM perawat";
 //    $myQry = mysqli_query($koneksiDb, $mySql) or die ("Query Salah : ".mysqli_error($koneksiDb));
	// while($myData = mysqli_fetch_array($myQry)){
	// 		// $raw = mysqli_num_rows (1);
	// 		// echo $raw."";
	// 		echo $myData['nama'];	
	// }
$data = array();
$shift = array();
$shaft = array();
$a = 1;
$y = array();	
// for ($x = 1; $x <= 30; $x++){
// 	for ($y = 1; $y <= 22; $y++){
// 		for ($z = 1; $z <= 32; $z++){
// 			if ($z >= 1 && $z <= 4) $data[$x][$y] = "P";
// 		   	else if ($z >= 5 && $z <= 7) $data[$x][$y] = "S";
// 		    else if ($z >= 8 && $z <= 10) $data[$x][$y] = "M";
// 		    else $data[$x][$y] = "L";
// 		    $shift[$a] = $data[$x][$y];
// 		    $a++;
// 		}
// 	}
// }
// for ($x = 1; $x <= 30; $x++){
// 	for ($y = 1; $y <= 22; $y++){
// 		$e=0;
// 		for ($z = 1; $z <= 42; $z++){
// 			if ($z >= 1+$e && $z <= 4+$e) $data[$x][$y] = "P";
// 		   	else if ($z >= 5+$e && $z <= 7+$e) $data[$x][$y] = "S";
// 		    else if ($z >= 8+$e && $z <= 10+$e) $data[$x][$y] = "M";
// 		    else $data[$x][$y] = "L";
// 		    $shift[$a] = $data[$x][$y];
// 		    if ($a==32) $e=32;
// 		    $a++;
// 		}
// 	}
// }	
for ($x = 1; $x <= 30; $x++){
	for ($y = 1; $y <= 22; $y++){
		// $e = 0;
		for ($z = 1; $z <= 32; $z++){
			if ($z >= 1 && $z <= 4) $data[$x][$y] = "P";
		   	else if ($z >= 5 && $z <= 7) $data[$x][$y] = "S";
		    else if ($z >= 8 && $z <= 10) $data[$x][$y] = "M";
		    else $data[$x][$y] = "L";
		    $shaft[$a] = $data[$x][$y];
		    // if ($z%32 == 0) $e=$e+32;
		    $a++;
		}
	}
}
	for ($a=1; $a <= 32*22*30 ; $a++) { 
		if ($a > 66 && $a < 132) {
		    	if ($shaft[$a-44] == "L" && $shaft[$a-22] == "L") $shift[$a-22] = $shaft[$a];
		    	else if ($shaft[$a-44] == "L" && $shaft[$a-22] != "L") $shift[$a-22] = $shaft[$a];
		    	else if ($shaft[$a-44] != "L" && $shaft[$a-22] == "L") $shift[$a-22] = $shaft[$a];
		    	else $shift[$a-22] = $shaft[$a-22];
		    }
		if ($a > 132) {
		    	if ($shaft[$a-66] == "L" && $shaft[$a-44] == "L") $shift[$a-44] = $shaft[$a];
		    	else if ($shaft[$a-66] == "L" && $shaft[$a-44] != "L") $shift[$a-44] = $shaft[$a];
		    	else if ($shaft[$a-66] != "L" && $shaft[$a-44] == "L") $shift[$a-44] = $shaft[$a];
		    	else $shift[$a-44] = $shaft[$a-44];
		    }
		else $shift[$a] = $shaft[$a];
	}
		
		    	    
 ?>
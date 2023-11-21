<?php
$data = array();
$shift = array();
$a = 1;
$c = 1;
$y = 1;

for ($x = 1; $x <= 31; $x++){	//Banyaknya hari dalam satu bulan
	for ($z = 1; $z <= 22; $z++){	// Banyaknya perawat yang ditugaskan dalam ruangan tersebut
		if ($z >= 1 && $z <= 4) {$data[$x][$y] = "P"; $c++; }	// Perwat yang masuk pada Shift Pagi (4)
	   	else if ($z >= 5 && $z <= 7) {$data[$x][$y] = "S"; $c++; }	// Perwat yang masuk pada Shift Siang (3)
	    else if ($z >= 8 && $z <= 10) {$data[$x][$y] = "M"; $c++; }	// Perwat yang masuk pada Shift Malam (3)
	    else $data[$x][$y] = "L";

	    $y++;
	    if ($y >= 23) $y = 1;
    	if ($c >= 23) $c = 1;
	}

	for ($e = 1; $e <= 22; $e++){
		$shift[$a] = $data[$x][$e];
		$a++;
	}
	$y = $c;
}
		    	    
 ?>
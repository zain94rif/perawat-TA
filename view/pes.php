<?php 
$id = $_GET['id'];
	if(isset($id)){
		$mySql = "UPDATE pesan SET respon = '1' WHERE id_pesan = '$id'";
		$myQry = mysqli_query($koneksi,$mySql) or die ("Gagal Query1" .mysqli_error($koneksi));
		if($myQry){			
			echo"<meta http-equiv='refresh' content='0; url=?Open=Pesan-D'>";			
		}	
	}else{
		echo "Pesan tidak ada";
	}

 ?>
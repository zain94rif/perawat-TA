<?php 
$id = $_GET['id'];
	if(isset($id)){
		$mySql = "DELETE FROM perawat WHERE id = '$id'";
		$myQry = mysqli_query($koneksi,$mySql) or die ("Gagal Query1" .mysqli_error($koneksi));
		if($myQry){			
			echo"<meta http-equiv='refresh' content='0; url=?Open=Data-User'>";			
		}	
	}else{
		echo "Data yang dihapus tidak ada";
	}

 ?>
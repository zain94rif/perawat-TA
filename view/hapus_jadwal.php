<?php 
$id = $_GET['id'];
	if(isset($id)){
		$id = $id.'_';
		$mySql = "DELETE FROM jadwal WHERE tanggal LIKE '$id%'";
		echo $mySql;
		$myQry = mysqli_query($koneksi,$mySql) or die ("Gagal Query1" .mysqli_error($koneksi));
		if($myQry){			
			echo"<meta http-equiv='refresh' content='0; url=index.php'>";			
		}	
	}else{
		echo "Data yang dihapus tidak ada";
	}

 ?>
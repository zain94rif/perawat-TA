<?php
include "../tool/koneksi.php";
function antiinjection($data){
  $data = str_replace("'","",$data);
  $data = str_replace('"','',$data);
  $data = str_replace("|","",$data);
  return $data;
}

// if(isset($_POST['login'])){
// 	$id= antiinjection($_POST['id']);
// 	$pass= antiinjection($_POST['pass']);
	
// 	if((trim($id)=="")||(trim($pass)=="")){
 	?>
 	<!-- <script type="text/javascript">
      alert("Semua data harus terisi. Silahkan login ulang.");
    </script> -->
     <?php
//     	//echo"<meta http-equiv='refresh' content='0; url=?Open=Login'>";
// 	}
// 	else{
// 		$myQry = mysqli_query($koneksiDb,loginvalidasi($id,$pass)) or die ("Query Salah : ".mysql_error());
// 		$myData = mysqli_fetch_array($myQry);
// 		if(mysqli_num_rows($myQry) >=1){
// 			$_SESSION['SES_LOGIN'] = $myData['id_user'];
// 			$_SESSION['SES_PASSWORD'] = $myData['password'];
// 			$_SESSION['SES_LEVEL'] = $myData['level'];
// 			if ($_SESSION['SES_LEVEL']=="siswa") {
// 				$myQry = mysqli_query($koneksiDb,ceknamasiswa($id)) or die ("Query Salah : ".mysql_error());
// 				$myData = mysqli_fetch_array($myQry);
// 				$_SESSION['SES_NAME'] = $myData['nama_siswa'];
// 				$_SESSION['SES_FOTO'] = $myData['foto_siswa'];
// 				if (($_SESSION['SES_FOTO'] == null) or ($_SESSION['SES_FOTO'] == "")) {
// 					$_SESSION['SES_FOTO'] = 'image/user.png';
// 				}
// 			}
// 			if ($_SESSION['SES_LEVEL'] == "orang tua") {
// 				$myQry = mysqli_query($koneksiDb,ceknamaortu($id)) or die ("Query Salah : ".mysql_error());
// 				$myData = mysqli_fetch_array($myQry);
// 				$_SESSION['SES_NAME'] = $myData['nama_ortu_siswa'];
// 				$_SESSION['SES_FOTO'] = 'image/user.png';
// 			}
// 			if($_SESSION['SES_LEVEL']=="admin") {
// 				$_SESSION['SES_NAME'] = $_SESSION['SES_LOGIN'];
// 				$_SESSION['SES_FOTO'] = 'image/user.png';
// 			}
// 			echo"<meta http-equiv='refresh' content ='0; url=?Open'>";
// 		}else{
 		?>
 		<!-- <script type="text/javascript">
    	  alert("Username dan password tidak valid. Silahkan login ulang.");
    	</script> -->
     	<?php
//     		echo"<meta http-equiv='refresh' content='0; url=?Open=Login'>";
// 		}
// 	}
// }
if (isset($_POST["login"])){
	if(isset($_POST["id"])){
		$id = strtolower(stripslashes($_POST["id"]));
		if(isset($_POST["pass"])){
			$pass = $_POST["pass"];

        if((trim($id)=="")||(trim($pass)=="")){
            echo "<script type='text/javascript'>
                  alert('Semua data harus terisi. Silahkan login ulang');
                  </script>
                  <meta http-equiv='refresh' content='0; url=../login.php'>";
        }

			$myQue = "SELECT * FROM user WHERE user_name = '$id' ";
			$myQry = mysqli_query($koneksi, $myQue) or die ("Query Salah : ".mysqli_error($koneksi));
			$myData = mysqli_fetch_array($myQry);
      if ( password_verify($pass, $myData['password']) ) {
            if(mysqli_num_rows($myQry) >=1){
                 // $status = $myData['status'];
            // echo $username."".$password."".$status."".$pass;
                 session_start();
                 $_SESSION['SES_LOGIN'] = $myData['user_name'];
                 $_SESSION['SES_PASSWORD'] = $myData['password'];
                 // $_SESSION['SES_LEVEL'] = $myData['status'];
                 if ($myData['status'] == 1) $_SESSION['SES_LEVEL'] = "Admin";
                 if ($myData['status'] == 0) $_SESSION['SES_LEVEL'] = "Perawat";
                 // else echo"<meta http-equiv='refresh' content='0; url=logout.php'>";
                  $un = $myData['user_name'];
                  $myQue = "SELECT nama FROM perawat WHERE user_name = '$un' ";
                  $myQry = mysqli_query($koneksi, $myQue) or die ("Query Salah : ".mysqli_error($koneksi));
                  $myData = mysqli_fetch_array($myQry);
                    $_SESSION['SES_NAME'] = $myData['nama'];
                    // echo $_SESSION['SES_NAME'];
                    // echo $_SESSION['SES_LEVEL'];
            	       echo"<meta http-equiv='refresh' content='0; url=../index.php'>"; //merefresh halaman dan kembali ke halaman data-buku
            	 }
            }
            else{ 
              // echo "gagal";
                echo"<meta http-equiv='refresh' content='0; url=../login.php'>"; //merefresh halaman dan kembali ke halaman data-buku          }
		    }
      }
	 }
}
?>
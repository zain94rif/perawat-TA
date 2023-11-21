<?php
include "koneksi.php";
$datas = $_GET['id'];
$myQry = mysqli_query($koneksi, $datas) or die ("Gagal Query1" .mysqli_error($koneksi));
          if($myQry){
            echo"<meta http-equiv='refresh' content='0; url=index.php'>"; //merefresh halaman dan kembali ke halaman data-buku           
          } 
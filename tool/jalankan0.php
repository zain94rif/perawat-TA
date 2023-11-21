<?php
include "koneksi.php";
// var_dump($_POST);
      if (isset($_POST['tambah'])){
          $datas = $_POST['tambah'];
    //   $datas = ulang($bulan, $tahun, $data, $jum);
      $myQry = mysqli_query($koneksi, $datas) or die ("Gagal Query1" .mysqli_error($koneksi));
          if($myQry){
            echo"<meta http-equiv='refresh' content='0; url=../?Open=Penjadwalan'>"; //merefresh halaman dan kembali ke halaman data-buku           
          } 

    }
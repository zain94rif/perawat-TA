<?php

include "../tool/koneksi.php";

if(isset($_POST["regist"])){
    if(isset($_POST['username'])){
      $username=strtolower($_POST['username']);
    }
    if(isset($_POST['password'])){
      $password=mysqli_real_escape_string($koneksi, $_POST['password']);
    }
    if(isset($_POST['password2'])){
      $password2=mysqli_real_escape_string($koneksi, $_POST['password2']);
    }
      $username = strtolower(stripslashes($data["username"]));
      $password = mysqli_real_escape_string($koneksi, $data["password"]);
      $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

          if ($password !== $password2){
            echo "<script type='text/javascript'>
                    alert('Password salah');
                  <script>"; 
          }

      $passwordr = password_hash($password, PASSWORD_DEFAULT);
      
      mysqli_query($koneksi, "INSERT INTO user VALUES('$username','$passwordr','0')");
      return mysqli_affected_rows($koneksi);
      echo "<script type='text/javascript'>
            alert('User baru berhasil ditambahkan');
            <script>";
    } else { 
      echo "<script type='text/javascript'>
              alert('gagal');
            <script>"; 
    }
?>
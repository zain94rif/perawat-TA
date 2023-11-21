<?php
  ob_start();
  session_start();
  if(isset($_SESSION['SES_LOGIN'])){
    echo"<meta http-equiv='refresh' content='0; url=index.php'>";
    exit;
  } 
    $judul="Halaman Awal - Login";
    include "tool/depan.php"; 
?>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="img/RS_Syamrabu.jpg" alt="Image" height="400" width="460">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">SELAMAT DATANG!</h1>
                  </div>
                  <form class="user" action="log/validasi.php" method="post">
                    <div class="form-group">
                      <input type="text" name="id" id="id" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="pass" id="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <button type="submit" name="login" id="login" class="btn btn-primary btn-user btn-block">
                      Masuk
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="lupa_password.php">Lupa Password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

<?php bawah(); ?>

</body>

</html>

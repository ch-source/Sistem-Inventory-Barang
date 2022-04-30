<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Kantor Desa Peninjoan - Register</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                  <?php
            if(isset($_GET['notif'])){
              if($_GET['notif']=="-regis-berhasil"){
                echo "<div class='alert alert-success alert-dismissible'>
                <a style='text-decoration:none;' href='registrasi.php' type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</a><i class='icon icon-check'></i> Proses Registrasi Berhasil, Silahkan Tunggu Beberapa Saat, Sampai Data Anda Divalidasi Oleh Admin. Atau silahkan hubungi Admin melalui Telepon: <b>(0361) 4481380  & email: mitra_sakanabali@gmail.com</b>, untuk mempercepat proses validasi.</b>
                </div>";
                }
              }
              ?>
                  <form action="proses_registrasi.php" method="post" role="form" class="contactForm">
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" name="nama" class="form-control" id="name" placeholder="Masukan Nama Lengkap"/>
                    </div>
                    <div class="form-group">
                      <label>No. Telepon/ HP</label>
                      <input type="text" name="notelp" class="form-control" id="name" placeholder=" Masukan Nomor Telepon/HP"/>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="email" class="form-control" id="name" placeholder=" Masukan Alamat Email"/>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" name="password" class="form-control" id="name" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                  </form>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" href="img/itdel.png" />

    <title>Aplikasi Dashboard Rektor Institut Teknologi Del</title>

  </head>
  <body>


  <div class="d-lg-flex half">

    <div class="bg order-1 order-md-2" class="centered" style="background-image: url('img/background-log.jpeg');" ></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <img src="img/itdel.png" class="rounded mx-auto d-block" width="90px">
            <br><br>
            <h3>Login <strong>Dashboard Rektor IT Del</strong></h3>
            <p class="mb-4">Login menggunakan akun yang sudah terdaftar.</p>
            <p>Untuk menjaga keamanana akun Anda, Silahkan Logout jika sudah selesai menggunakan Aplikasi Dashboard Rektor IT Del</p>
            <p></p>
            <form action="/HalamanBeranda" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control"  id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control"  id="password">
              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Lupa Password ?</a></span>
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
